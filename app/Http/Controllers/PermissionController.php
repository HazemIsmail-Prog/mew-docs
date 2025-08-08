<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Http\Resources\PermissionResource;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $permissions = Permission::query()
                ->orderBy('id', 'desc')
                ->paginate(1000);
            return PermissionResource::collection($permissions);
        }
        return view('pages.permissions-index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        $permission = Permission::create($validatedData);
        return new PermissionResource($permission);
    }

    public function update(Request $request, Permission $permission)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        $permission->update($validatedData);
        return new PermissionResource($permission);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->noContent();
    }

}
