<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superAdmin = new Role();
        $role_superAdmin->name = 'super_admin';
        $role_superAdmin->full_name = 'Super Admin';
        $role_superAdmin->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->full_name = 'Admin';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->full_name = 'User';
        $role_user->save();
    }
}
