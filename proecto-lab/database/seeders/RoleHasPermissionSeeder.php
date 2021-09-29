<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Constants\Resource;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdminRolePermissions();
        //$this->createUserRolePermissions();
    }

    private function createAdminRolePermissions()
    {
        $role = Role::findByName('Admin');
        $role->syncPermissions(Permission::all());
    }

    private function createModeratorRolePermissions()
    {
        $role = Role::findByName('User');
        $role->syncPermissions(Permission::where('name', Resource::PRODUCT_INDEX)->first());
    }

}
