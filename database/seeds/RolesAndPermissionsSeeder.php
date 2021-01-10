<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        
        // create permissions
        Permission::create(['name' => 'create series']);
        Permission::create(['name' => 'delete series']);
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'edit series']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'Admin'])
            ->givePermissionTo(['create series', 'edit series','delete series','admin']);

        // this can be done as separate statements
        $role = Role::create(['name' => 'ContentManager'])
            ->givePermissionTo(['create series', 'edit series']);
        $role = Role::create(['name' => 'Reader']);
    }
}
