<?php

use Illuminate\Database\Seeder;

class SubscriptionMagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Get all users
    	$users = App\User::all();
    	$magazines = App\Inboxmag\Magazine::all();

    	foreach ($users as $user) {
    		// Get all lists belonging to this user
    		$lists = $user->lists;
    		$users_magazines = $magazines->where('user_id', $user->id);

    		// Now get all contacts on each list
    		foreach ($lists as $list) {
    			$contacts = $list->contacts;

    			// Now subscribe some contacts to some magazines
	    		foreach ($contacts as $contact) {
	    			$subscriptions = $users_magazines->random(2);
	    			$contact->subscribesTo()->saveMany($subscriptions);
	    		}
    		}
    	}
    }
}
