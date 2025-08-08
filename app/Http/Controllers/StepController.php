<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Step;
use App\Http\Resources\DocumentResource;
use App\Http\Resources\StepResource;

class StepController extends Controller
{
    public function index(Document $document, Request $request)
    {
        $steps = $document->steps()->orderBy('order')->get();
        return StepResource::collection($steps);
    }

    // delete step
    public function destroy(Document $document, Step $step)
    {
        $step->delete();
        return new StepResource($step);
    }

    // toggle step completion
    public function toggleCompletion(Document $document, Step $step, Request $request)
    {
        $step->update(['is_completed' => $request->is_completed]);
        $step->refresh();
        return new StepResource($step);
    }

    // add step
    public function store(Document $document, Request $request)
    {
        $order = $document->steps()->max('order') + 10;
        $step = $document->steps()->create([
            'action' => $request->action,
            'order' => $order,
            'is_completed' => false,
            'created_by' => auth()->user()->id,
        ]);
        $step->refresh();
        return new StepResource($step);
    }

    // update step
    public function update(Step $step, Request $request)
    {
        $request->validate([
            'action' => 'required|string',
        ]);
        $step->update([
            'action' => $request->action,
        ]);
        $step->refresh();
        return new StepResource($step);
    }

    // update step order
    public function updateOrder(Step $step, Request $request)
    {
        $step->update(['order' => $request->order]);
        $step->refresh();
        return new StepResource($step);
    }
}
