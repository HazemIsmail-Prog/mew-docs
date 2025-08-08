<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stakeholder;
use App\Http\Resources\StakeholderResource;

class StakeholderController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $stakeholders = Stakeholder::query()
                ->orderBy('id', 'desc')
                ->paginate(1000);
            return StakeholderResource::collection($stakeholders);
        }
        return view('pages.stakeholders-index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $stakeholder = Stakeholder::create($validatedData);
        return new StakeholderResource($stakeholder);
    }

    public function update(Request $request, Stakeholder $stakeholder)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $stakeholder->update($validatedData);
        return new StakeholderResource($stakeholder);
    }

    public function destroy(Stakeholder $stakeholder)
    {
        $stakeholder->delete();
        return response()->noContent();
    }
}
