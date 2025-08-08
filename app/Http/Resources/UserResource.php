<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'roles' => RoleResource::collection($this->whenLoaded('roles')),
            'permissions' => PermissionResource::collection($this->whenLoaded('permissions')),
            'role_ids' => $this->whenLoaded('roles', fn() => $this->roles->pluck('id')),
            'permission_ids' => $this->whenLoaded('permissions', fn() => $this->permissions->pluck('id')),
            'contract_ids' => $this->whenLoaded('contracts', fn() => $this->contracts->pluck('id')),
        ];
    }
}
