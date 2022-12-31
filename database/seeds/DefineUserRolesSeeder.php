<?php
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class DefineUserRolesSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'create card']);
        Permission::create(['name' => 'create resource']);
        Permission::create(['name' => 'view feedback']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'admin dashboard']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('create category');
        $role2->givePermissionTo('create card');
        $role2->givePermissionTo('create resource');
        $role2->givePermissionTo('view feedback');
        $role2->givePermissionTo('manage users');
        $role2->givePermissionTo('admin dashboard');

        $newUser = User::create([
            'name' => 'Test Admin',
            'email' => 'test.admin@test.com',
            'email_verified_at' => '2020-01-01 00:00:00',
            'password' => '$2y$10$coq8FcG/V6wkjHQUmq0bNuTz8PMykS2qbuyWZyL7vm00PusSOE1Xu'
        ]);

        $newUser->assignRole('admin');

        $newUser = User::create([
            'name' => 'Test User',
            'email' => 'test.user@test.com',
            'email_verified_at' => '2020-01-01 00:00:00',
            'password' => '$2y$10$coq8FcG/V6wkjHQUmq0bNuTz8PMykS2qbuyWZyL7vm00PusSOE1Xu'
        ]);

        $newUser->assignRole('user');

    }
}
