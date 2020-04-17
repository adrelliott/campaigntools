<?php

use Illuminate\Database\Seeder;

class RoleSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Create roles
        $roles = [
            ['role_name' => 'user'],
            ['role_name' => 'organisation'],
            ['role_name' => 'admin'],
            ['role_name' => 'superadmin'],
        ];

        foreach($roles as $role) {
            factory(App\Role::class)->create($role);
        }

        // Create modules
        $modules = [
            ['module_name' => 'listmanager'],
            ['module_name' => 'inboxmag'],
            ['module_name' => 'listswap'],
            ['module_name' => 'emailgeeks'],
            ['module_name' => 'academy'],
            ['module_name' => 'admin'],
        ];
        foreach($modules as $module) {
            factory(App\Module::class)->create($module);
        }

        // @todo Create permissions seeder
        
    }
}
