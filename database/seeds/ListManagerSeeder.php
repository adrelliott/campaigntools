<?php

use Illuminate\Database\Seeder;

class ListManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// select all users
    	$users = App\User::all();

        // Loop through each user
        foreach ($users as $user) {

            // Create some lists for this user
            $lists = factory(App\Listmanager\Segment::class, 3)->create(['user_id' => $user->id]);

            // Now add some contacts to the list
            foreach ($lists as $list) {
                $contacts = factory(App\Listmanager\Contact::class, 30)->create();
                $list->contacts()->saveMany($contacts);

                // Now add some tags to the contacts
                $tags = App\Listmanager\Tag::all();
                foreach ($contacts as $contact) {
                    $tags_to_apply = $tags->random(2);
                    $contact->tags()->saveMany($tags_to_apply);
                }
            }
        }  
    }
}
