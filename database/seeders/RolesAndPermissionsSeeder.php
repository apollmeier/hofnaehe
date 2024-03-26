<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // location permissions
        Permission::create(['name' => 'create locations']);
        Permission::create(['name' => 'view own locations']);
        Permission::create(['name' => 'view any locations']);
        Permission::create(['name' => 'update own locations']);
        Permission::create(['name' => 'update any locations']);
        Permission::create(['name' => 'delete own locations']);
        Permission::create(['name' => 'delete any locations']);

        // create super-admin role and grant all permissions
        $role = Role::create(['name' => 'Super Admin']);
        $role->givePermissionTo(Permission::all());

        // create admin role and grant permissions
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo(Permission::all());

        // create owner role and grant permissions
        $role = Role::create(['name' => 'Owner']);
        $role->givePermissionTo([
            'create locations',
            'view own locations',
            'update own locations',
            'delete own locations',
        ]);
    }
}
