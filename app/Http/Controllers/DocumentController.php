<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Resources\DocumentResource;
use App\Models\Stakeholder;
use App\Models\Tag;
use App\Models\User;
use App\Models\Contract;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $documents = Document::query()
                ->with('tags')
                ->with('users')
                ->with('contracts')
                ->with('incomplete_steps')
                ->orderBy('id', 'desc')
                ->when($request->filters['search'], function($query, $search){
                    $query->where(function($query) use ($search){
                        $query->whereAny([
                            'title',
                            'content',
                            'notes',
                        ],'like', '%'.$search.'%');
                        $query->orWhereRelation('steps', 'action', 'like', '%'.$search.'%');
                    });
                })
                ->when(isset($request->filters['contract_ids']) && count($request->filters['contract_ids']) > 0 , function($query) use ($request){
                    $query->whereHas('contracts', function($query) use ($request){
                        $query->whereIn('contracts.id', $request->filters['contract_ids']);
                    });
                })
                ->when(isset($request->filters['stakeholder_ids']) && count($request->filters['stakeholder_ids']) > 0, function($query) use ($request){
                    $query->where(function($query) use ($request){
                        $query->whereIn('from_id', $request->filters['stakeholder_ids'])->orWhereIn('to_id', $request->filters['stakeholder_ids']);
                    });
                })
                ->when(isset($request->filters['follow_ids']) && count($request->filters['follow_ids']) > 0, function($query) use ($request){
                    $query->whereHas('users', function($query) use ($request){
                        $query->whereIn('id', $request->filters['follow_ids']);
                    });
                })
                ->when(isset($request->filters['tag_ids']) && count($request->filters['tag_ids']) > 0, function($query) use ($request){
                    $query->whereHas('tags', function($query) use ($request){
                        $query->whereIn('id', $request->filters['tag_ids']);
                    });
                })
                ->when(isset($request->filters['type_ids']) && count($request->filters['type_ids']) == 1, function($query) use ($request){
                    if($request->filters['type_ids'][0] == 'in'){
                        $query->where('to_id', auth()->user()->stakeholder_id);
                    }
                    if($request->filters['type_ids'][0] == 'out'){
                        $query->where('from_id', auth()->user()->stakeholder_id);
                    }
                })
                ->when(isset($request->filters['status_ids']) && count($request->filters['status_ids']) == 1, function($query) use ($request){
                    if($request->filters['status_ids'][0] == 'completed'){
                        $query->whereDoesntHave('incomplete_steps');
                    }
                    if($request->filters['status_ids'][0] == 'pending'){
                        $query->whereHas('incomplete_steps');
                    }
                })

                ->paginate(100);
            return DocumentResource::collection($documents);
        }
        $stakeholders = Stakeholder::query()
            ->where('id', '!=', auth()->user()->stakeholder_id)
            ->selectRaw('stakeholders.*, (SELECT COUNT(*) FROM documents WHERE from_id = stakeholders.id OR to_id = stakeholders.id) as documents_count')
            ->orderByDesc('documents_count')
            ->get();

        $tags = Tag::all();

        $users = User::all();

        $contracts = Contract::query()
            ->selectRaw('contracts.*, (SELECT COUNT(*) FROM contract_document WHERE contract_id = contracts.id) as documents_count')
            ->orderByDesc('documents_count')
            ->get();

        return view('pages.documents-index', compact('stakeholders', 'tags', 'users', 'contracts'));
    }

    public function store(Request $request)
    {
        $validatedAll = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'notes' => 'nullable|string',
            'from_id' => 'required|exists:stakeholders,id',
            'to_id' => 'required|exists:stakeholders,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|exists:tags,id',
            'follow_ids' => 'nullable|array',
            'follow_ids.*' => 'nullable|exists:users,id',
            'contract_ids' => 'required|array',
            'contract_ids.*' => 'required|exists:contracts,id',
        ]);

        $validatedData = [
            'title' => $validatedAll['title'],
            'content' => $validatedAll['content'],
            'notes' => $validatedAll['notes'],
            'from_id' => $validatedAll['from_id'],
            'to_id' => $validatedAll['to_id'],
        ];

        $validatedData['created_by'] = auth()->user()->id;
        if ($request->type === 'out') {
            $validatedData['from_id'] = auth()->user()->stakeholder_id;
        } else {
            $validatedData['to_id'] = auth()->user()->stakeholder_id;
        }

        $validatedTags = $validatedAll['tag_ids'];
        $validatedFollows = $validatedAll['follow_ids'];
        $validatedContracts = $validatedAll['contract_ids'];

        DB::beginTransaction();
        try{
            $document = Document::create($validatedData);
            $document->tags()->sync($validatedTags);
            $document->users()->sync($validatedFollows);
            $document->contracts()->sync($validatedContracts);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

        $document->refresh();
        return new DocumentResource($document->load('tags', 'users', 'contracts', 'incomplete_steps'));
    }

    public function update(Request $request, Document $document)
    {
        $validatedAll = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'notes' => 'nullable|string',
            'from_id' => 'required|exists:stakeholders,id',
            'to_id' => 'required|exists:stakeholders,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|exists:tags,id',
            'follow_ids' => 'nullable|array',
            'follow_ids.*' => 'nullable|exists:users,id',
            'contract_ids' => 'required|array',
            'contract_ids.*' => 'required|exists:contracts,id',
        ]);

        $validatedData = [
            'title' => $validatedAll['title'],
            'content' => $validatedAll['content'],
            'notes' => $validatedAll['notes'],
            'from_id' => $validatedAll['from_id'],
            'to_id' => $validatedAll['to_id'],
        ];

        $validatedTags = $validatedAll['tag_ids'];
        $validatedFollows = $validatedAll['follow_ids'];
        $validatedContracts = $validatedAll['contract_ids'];

        DB::beginTransaction();
        try{
            $document->update($validatedData);
            $document->tags()->sync($validatedTags);
            $document->users()->sync($validatedFollows);
            $document->contracts()->sync($validatedContracts);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

        $document->refresh();   
        return new DocumentResource($document->load('tags', 'users', 'contracts', 'incomplete_steps'));
    }

    public function destroy(Document $document)
    {
        DB::beginTransaction();
        try{
            $document->tags()->detach();
            $document->users()->detach();
            $document->contracts()->detach();
            $document->steps()->get()->each->delete();
            $document->attachments()->get()->each->delete();
            $document->delete();
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->noContent();
    }

    public function show(Document $document)
    {
        return new DocumentResource($document->load('tags', 'users', 'contracts', 'incomplete_steps'));
    }
}
