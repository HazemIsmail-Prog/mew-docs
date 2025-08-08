<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $tags = Tag::query()
                ->orderBy('id', 'desc')
                ->paginate(1000);
            return TagResource::collection($tags);
        }
        return view('pages.tags-index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $tag = Tag::create($validatedData);
        return new TagResource($tag);
    }

    public function update(Request $request, Tag $tag)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $tag->update($validatedData);
        return new TagResource($tag);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->noContent();
    }
}
