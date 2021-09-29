<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = ['Admin', 'Invitado'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        /* 
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Final']);

        $permission = Permission::create(['name' => 'ver dashbard']);
        */

    }
}
