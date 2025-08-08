<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Http\Resources\ContractResource;

class ContractController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $contracts = Contract::query()
                ->orderBy('id', 'desc')
                ->paginate(1000);
            return ContractResource::collection($contracts);
        }
        return view('pages.contracts-index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $contract = Contract::create($validatedData);
        return new ContractResource($contract);
    }

    public function update(Request $request, Contract $contract)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $contract->update($validatedData);
        return new ContractResource($contract);
    }

    public function destroy(Contract $contract)
    {
        $contract->delete();
        return response()->noContent();
    }
}
