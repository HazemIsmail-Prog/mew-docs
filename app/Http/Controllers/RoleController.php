<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Http\Resources\RoleResource;
use App\Http\Resources\PermissionResource;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $roles = Role::query()
                ->with('permissions')
                ->orderBy('id', 'desc')
                ->paginate(1000);
            return RoleResource::collection($roles);
        }
        $permissions = Permission::orderBy('name')->get();
        return view('pages.roles-index', [
            'permissions' => PermissionResource::collection($permissions),
        ]);
    }

    public function store(Request $request)
    {
        $validatedAll = $request->validate([
            'name' => 'required|string|max:255',
            'permission_ids' => 'required|array',
            'permission_ids.*' => 'required|exists:permissions,id',
        ]);
        $validatedData = [
            'name' => $validatedAll['name'],
        ];

        $validatedPermissions = $validatedAll['permission_ids'];

        DB::beginTransaction();
        try{
            $role = Role::create($validatedData);
            $role->permissions()->sync($validatedPermissions);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return new RoleResource($role->load('permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $validatedAll = $request->validate([
            'name' => 'required|string|max:255',
            'permission_ids' => 'required|array',
            'permission_ids.*' => 'required|exists:permissions,id',
        ]);
        $validatedData = [
            'name' => $validatedAll['name'],
        ];
        $validatedPermissions = $validatedAll['permission_ids'];

        DB::beginTransaction();
        try{
            $role->update($validatedData);
            $role->permissions()->sync($validatedPermissions);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return new RoleResource($role->load('permissions'));
    }

    public function destroy(Role $role)
    {
        DB::beginTransaction();
        try{
            $role->permissions()->detach();
            $role->delete();
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->noContent();
    }

}
