<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create some organisations
    	$organisations = factory(App\Organisation::class, 5)->create();

        // Get module list
    	$modules = App\Module::all();

        // Get the 'user' role
		$role = App\Role::where('role_name', 'user')->first();

        // Add a random number of users to each org
        foreach ( $organisations as $Organisation ) {
        	
        	// Generate a random number of users
        	$randomNumber = rand(1,7);

        	$users = factory(App\User::class, $randomNumber)->create([
        		'organisation_id' => $Organisation->id,
        		'role_id'	=> $role->id
        	]);

        	// Now give access to all the modules
        	// (we can test by remving access manually)
        	foreach( $users as $user ) {
        		$user->modules()->sync($modules);	
        	}
        	
        }
    }
}
