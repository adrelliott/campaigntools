<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create the roles and permissions table
    	// factory(App\Role::class, 1)->create();
    	// factory(App\Permission::class, 1)->create();


    	// Create the users
        factory(App\User::class, 5)->create();
	}
}
