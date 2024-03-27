<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_edit = Role::create(['name' => 'edit']);

        $permission_create_roles = Permission::create(['name' => 'create roles']);
        $permission_read_roles = Permission::create(['name' => 'read roles']);
        $permission_update_roles = Permission::create(['name' => 'update roles']);
        $permission_delete_roles = Permission::create(['name' => 'delete roles']);

        $permission_create_lessons = Permission::create(['name' => 'create lessons']);
        $permission_read_lessons = Permission::create(['name' => 'read lessons']);
        $permission_update_lessons = Permission::create(['name' => 'update lessons']);
        $permission_delete_lessons = Permission::create(['name' => 'delete lessons']);

        $permission_create_categories = Permission::create(['name' => 'create categories']);
        $permission_read_categories = Permission::create(['name' => 'read categories']);
        $permission_update_categories = Permission::create(['name' => 'update categories']);
        $permission_delete_categories = Permission::create(['name' => 'delete categories']);

        $permission_admin = [
            $permission_create_roles,
            $permission_read_roles,
            $permission_update_roles,
            $permission_delete_roles,
            $permission_create_lessons,
            $permission_read_lessons,
            $permission_update_lessons,
            $permission_delete_lessons,
            $permission_create_categories,
            $permission_read_categories,
            $permission_update_categories,
            $permission_delete_categories
        ];

        $permission_edit = [
            $permission_create_lessons,
            $permission_read_lessons,
            $permission_update_lessons,
            $permission_delete_lessons,
            $permission_create_categories,
            $permission_read_categories,
            $permission_update_categories,
            $permission_delete_categories
        ];

        $role_admin->syncPermissions($permission_admin);
        $role_edit->syncPermissions($permission_edit);

    }
}
