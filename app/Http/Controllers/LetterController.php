<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Letter;
use App\Http\Resources\LetterResource;
use function Spatie\LaravelPdf\Support\pdf;
use Illuminate\Support\Facades\Auth;
use Spatie\Browsershot\Browsershot;

class LetterController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $letters = Letter::query()
                ->orderBy('id', 'desc')
                ->with('user')
                ->when($request->filters['scope'] === 'mine', function($query){
                    $query->where('user_id', auth()->user()->id);
                })
                ->when($request->filters['letter_id'], function($query, $letter_id){
                    $query->where('id', $letter_id);
                })
                ->when($request->filters['search'], function($query, $search){
                    $query->whereAny([
                        'subject',
                        'body',
                        'sender',
                        'receiver',
                        'copy_to',
                    ], 'like', '%'.$search.'%');
                })
                ->paginate(30);
            return LetterResource::collection($letters);
        }

        $cover = asset('images/cover.jpeg');
        return view('pages.letters-index', compact('cover'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'nullable|boolean',
            'internal' => 'nullable|boolean',
            'official' => 'nullable|boolean',
            'has_attachments' => 'nullable|boolean',
            'address' => 'nullable|string',
            'prefix' => 'required|string',
            'sender' => 'required|string',
            'receiver' => 'required|string',
            'subject' => 'required|string',
            'copy_to' => 'required|string',
            'body' => 'required|string',
            'line_height' => 'required|numeric|min:1.3|max:2.4',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $letter = Letter::create($validatedData);
        return new LetterResource($letter->load('user'));
    }

    public function update(Request $request, Letter $letter)
    {
        if(Auth::id() !== $letter->user_id){
            return response()->json(['message' => 'You are not allowed to edit this letter'], 403);
        }
        $validatedData = $request->validate([
            'code' => 'nullable|boolean',
            'internal' => 'nullable|boolean',
            'official' => 'nullable|boolean',
            'has_attachments' => 'nullable|boolean',
            'address' => 'nullable|string',
            'prefix' => 'required|string',
            'sender' => 'required|string',
            'receiver' => 'required|string',
            'subject' => 'required|string',
            'copy_to' => 'required|string',
            'body' => 'required|string',
            'line_height' => 'required|numeric|min:1.3|max:2.4',
        ]);
        $letter->update($validatedData);
        return new LetterResource($letter->load('user'));
    }

    public function destroy(Letter $letter)
    {
        if(Auth::id() !== $letter->user_id){
            return response()->json(['message' => 'You are not allowed to delete this letter'], 403);
        }
        $letter->delete();
        return response()->noContent();
    }

    public function pdf(Letter $letter, Request $request)
    {
        if($request->showCover === 'true'){
            $file_name = 'Letter #'.$letter->id.' Cover.pdf';
        }else{
            $file_name = 'Letter #'.$letter->id.' Internal.pdf';
        }
        $pdf = pdf()
        ->view('pdfs.letter', [
            'letter' => $letter,
            'withCover' => $request->showCover === 'true',
            'line_height' => $request->lineHeight ?? 1.9,
            'headerImage' => public_path('images/header.jpeg'),
            'footerImage' => public_path('images/footer.jpeg'),
        ])
        ->withBrowsershot(function (Browsershot $browsershot) {
            $browsershot->noSandbox();
        })
        ->paperSize(210, 297, 'mm')
        ->name($file_name);
        return $pdf;
    }
}
