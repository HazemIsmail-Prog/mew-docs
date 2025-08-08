<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuickText;

class QuickTextController extends Controller
{
    public function index()
    {
        $quickTexts = auth()->user()->quickTexts;
        return response()->json($quickTexts);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'text' => 'required|string|unique:quick_texts,text,user_id,' . auth()->user()->id,
        ]);

        $quickText = auth()->user()->quickTexts()->create($validatedData);
        return response()->json($quickText);
    }

    public function destroy(QuickText $quickText){
        $quickText->delete();
        return response()->json(['message' => 'Quick text deleted successfully']);
    }

    public function update(Request $request, QuickText $quickText){
        $validatedData = $request->validate([
            'text' => 'required|string|unique:quick_texts,text,user_id,' . auth()->user()->id,
        ]);

        $quickText->update($validatedData);
        return response()->json($quickText);
    }
}
