<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Models\Role;
use App\Models\Permission;
use App\Http\Resources\ContractResource;
use App\Http\Resources\RoleResource;
use App\Http\Resources\PermissionResource;
use Illuminate\Support\Facades\DB;
use App\Models\Contract;
class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $users = User::query()
                ->with('roles')
                ->with('permissions')
                ->with('contracts')
                ->orderBy('id', 'desc')
                ->paginate(1000);
            return UserResource::collection($users);
        }
        $roles = Role::orderBy('name')->get();
        $permissions = Permission::orderBy('name')->get();
        $contracts = Contract::all();
        return view('pages.users-index', [
            'roles' => RoleResource::collection($roles),
            'permissions' => PermissionResource::collection($permissions),
            'contracts' => ContractResource::collection($contracts),
        ]);
    }

    public function store(Request $request)
    {

        $validatedAll = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8',
            'role_ids' => 'required|array',
            'role_ids.*' => 'required|exists:roles,id',
            'permission_ids' => 'required|array',
            'permission_ids.*' => 'required|exists:permissions,id',
            'contract_ids' => 'required|array',
            'contract_ids.*' => 'required|exists:contracts,id',
        ]);

        $validatedData = [
            'name' => $validatedAll['name'],
            'email' => $validatedAll['email'],
            'username' => $validatedAll['username'],
            'password' => bcrypt($validatedAll['password'])
        ];

        $validatedRoles = $validatedAll['role_ids'];
        $validatedPermissions = $validatedAll['permission_ids'];
        $validatedContracts = $validatedAll['contract_ids'];
        DB::beginTransaction();
        try{
            $user = User::create($validatedData);
            $user->roles()->sync($validatedRoles);
            $user->permissions()->sync($validatedPermissions);
            $user->contracts()->sync($validatedContracts);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

        $user->refresh();
        return new UserResource($user->load('roles', 'permissions', 'contracts'));
    }

    public function update(Request $request, User $user)
    {
        $validatedAll = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role_ids' => 'required|array',
            'role_ids.*' => 'required|exists:roles,id',
            'permission_ids' => 'required|array',
            'permission_ids.*' => 'required|exists:permissions,id',
            'contract_ids' => 'required|array',
            'contract_ids.*' => 'required|exists:contracts,id',
        ]);

        $validatedData = [
            'name' => $validatedAll['name'],
            'email' => $validatedAll['email'],
            'username' => $validatedAll['username'],
        ];

        if($request->has('password')){
            $validatedData['password'] = bcrypt($validatedAll['password']);
        }

        $validatedRoles = $validatedAll['role_ids'];
        $validatedPermissions = $validatedAll['permission_ids'];
        $validatedContracts = $validatedAll['contract_ids'];
        DB::beginTransaction();
        try{
            $user->update($validatedData);
            $user->roles()->sync($validatedRoles);
            $user->permissions()->sync($validatedPermissions);
            $user->contracts()->sync($validatedContracts);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

        $user->refresh();

        return new UserResource($user->load('roles', 'permissions', 'contracts'));
    }

    public function destroy(User $user)
    {
        DB::beginTransaction();
        try{
            $user->roles()->detach();
            $user->permissions()->detach();
            $user->contracts()->detach();
            $user->delete();
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->noContent();
    }

    public function toggleStatus(Request $request, User $user)
    {
        $user->update(['is_active' => $request->is_active]);
        $user->refresh();
        return new UserResource($user);
    }

}
