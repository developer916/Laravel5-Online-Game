<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\User\Models\Role::unguard();
        \Romuniverse\User\Models\Role::truncate();

        $roles_data = array(
            0 => array(
                'key' => 'admin',
            ),
            1 => array(
                'key' => 'customer',
            ),
            2 => array(
                'key' => 'member',
            ),
            3 => array(
                'key' => 'guest',
            ),
        );

        foreach ($roles_data as $item) {
            $role = \Romuniverse\User\Models\Role::create($item);
            //If admin associate all permissions
            if ($role->key = 'admin') {
                $permissions = \Romuniverse\User\Models\Permission::all();
                foreach($permissions as $permission)
                {
                    $permissions_array[] = $permission;
                }
                $role->permissions()->saveMany($permissions_array);
            }

        }

        //Add All Permissions to the admin role
        DB::table('role_permissions')->truncate();
        $role = \Romuniverse\User\Models\Role::where('key','=','admin')->firstOrFail();

        $permissions = \Romuniverse\User\Models\Permission::all();
        $permissions_array = [];
        foreach($permissions as $permission)
        {
            $permissions_array[] = $permission;
        }

        //Detach existing permissions
        foreach($role->permissions as $permission)
        {
            $role->permissions()->detach($permission->id);
        }

        $role->permissions()->saveMany($permissions_array);



        \Romuniverse\User\Models\Role::reguard();
    }
}
