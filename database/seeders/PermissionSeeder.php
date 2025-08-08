<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'users-menu','description' => 'Users Menu'],
            ['name' => 'users-create','description' => 'Users Create'],
            ['name' => 'users-update','description' => 'Users Update'],
            ['name' => 'users-delete','description' => 'Users Delete'],
            ['name' => 'roles-menu','description' => 'Roles Menu'],
            ['name' => 'roles-create','description' => 'Roles Create'],
            ['name' => 'roles-update','description' => 'Roles Update'],
            ['name' => 'roles-delete','description' => 'Roles Delete'],
            ['name' => 'permissions-menu','description' => 'Permissions Menu'],
            ['name' => 'permissions-create','description' => 'Permissions Create'],
            ['name' => 'permissions-update','description' => 'Permissions Update'],
            ['name' => 'permissions-delete','description' => 'Permissions Delete'],
            ['name' => 'contracts-menu','description' => 'Contracts Menu'],
            ['name' => 'contracts-create','description' => 'Contracts Create'],
            ['name' => 'contracts-update','description' => 'Contracts Update'],
            ['name' => 'contracts-delete','description' => 'Contracts Delete'],
            ['name' => 'stakeholders-menu','description' => 'Stakeholders Menu'],
            ['name' => 'stakeholders-create','description' => 'Stakeholders Create'],
            ['name' => 'stakeholders-update','description' => 'Stakeholders Update'],
            ['name' => 'stakeholders-delete','description' => 'Stakeholders Delete'],
            ['name' => 'tags-menu','description' => 'Tags Menu'],
            ['name' => 'tags-create','description' => 'Tags Create'],
            ['name' => 'tags-update','description' => 'Tags Update'],
            ['name' => 'tags-delete','description' => 'Tags Delete'],
        ];

        Permission::insert($permissions);
    }
}
