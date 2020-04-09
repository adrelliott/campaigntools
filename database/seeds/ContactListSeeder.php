<?php

use Illuminate\Database\Seeder;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// select a user
    	$users = App\User::all();
dd($users);
    	// Add 3 lists for each user
    	foreach ($users as $user) {
    		$lists = factory(App\Listmanager\Contactlist::class, 3)->create();
    		$user->belongsToList()->saveMany($lists);
    	}
        
    }
}
