<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // User Model
        $createUserPermission = Permission::create(['name' => 'create: user']);
        $readUserPermission = Permission::create(['name' => 'read: user']);
        $updateUserPermission = Permission::create(['name' => 'update: user']);
        $deleteUserPermission = Permission::create(['name' => 'delete: user']);

        // Role Model
        $createRolePermission = Permission::create(['name' => 'create: role']);
        $readRolePermission = Permission::create(['name' => 'read: role']);
        $updateRolePermission = Permission::create(['name' => 'update: role']);
        $deleteRolePermission = Permission::create(['name' => 'delete: role']);

        // Permission Model
        $createPermissionPermission = Permission::create(['name' => 'create: permission']);
        $readPermissionPermission = Permission::create(['name' => 'read: permission']);
        $updatePermissionPermission = Permission::create(['name' => 'update: permission']);
        $deletePermissionPermission = Permission::create(['name' => 'delete: permission']);

        // Create Roles
        $userRole = Role::create(['name' => 'user'])->syncPermissions([]);

        $superAdminRole = Role::create(['name' => 'administrator'])->syncPermissions([
            $createUserPermission,
            $readUserPermission,
            $updateUserPermission,
            $deleteUserPermission,

            $createRolePermission,
            $readRolePermission,
            $updateRolePermission,
            $deleteRolePermission,

            $createPermissionPermission,
            $readPermissionPermission,
            $updatePermissionPermission,
            $deletePermissionPermission,
        ]);

        $moderatorRole = Role::create(['name' => 'moderator'])->syncPermissions([
            $readUserPermission,
            $readRolePermission,
            $readPermissionPermission,
        ]);

        $this->command->info('Roles and Permissions created!');

        // Create Admins & Users
        // User::create([
        //     "name" => "John Doe",
        //     "is_admin" => false,
        //     "email" => "john.doe@gmail.com",
        //     "email_verified_at" => now(),
        //     "password" => Hash::make("password"),
        //     "remember_token" => Str::random(10),
        // ])->assignRole($userRole);
    }
}
