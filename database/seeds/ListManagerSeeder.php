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
        // Create some users
        $i = 1;
        while ($i <= 5) {

            // Create a user
            $user = factory(App\User::class)->create();
            
            //Create some segments
            $segments = factory(App\Listmanager\Segment::class, 3)->create([
                'user_id' => $user->id
            ]);

            //loop through segments 
            foreach ($segments as $segment) {

                // Create some contacts & save to segment
                $contacts = factory(App\Listmanager\Contact::class, 30)->create(); 
                $segment->contacts()->sync($contacts); 

                // now apply some random tags to the contacts
                foreach ($contacts as $contact) {
                    $contact->tags()->sync(
                        factory(App\Listmanager\Tag::class, 3)->create()
                    );
                }
                // $ramdom_tags = App\Listmanager\Tag::limit(3)->inRandomOrder()->get();
                
            }

            $i++;
        }

        return;


    	// // select all users
    	// $users = App\User::all();

     //    // Loop through each user
     //    foreach ($users as $user) {

     //        // Create some lists for this user
     //        $segments = factory(App\Listmanager\Segment::class, 3)->create(['user_id' => $user->id]);

     //        // Now add some contacts to the list
     //        foreach ($segments as $segment) {
     //            $contacts = factory(App\Listmanager\Contact::class, 30)->create();
     //            $segment->contacts()->saveMany($contacts);

     //            // Now add some tags to the contacts
     //            $tags = App\Listmanager\Tag::all();
     //            foreach ($contacts as $contact) {
     //                $tags_to_apply = $tags->random(2);
     //                $contact->tags()->saveMany($tags_to_apply);
     //            }
     //        }
     //    }  
    }
}
