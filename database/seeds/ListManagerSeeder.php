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
                    $tags = factory(App\Listmanager\Tag::class, 3)->create();
                    $contact->addTags($tags);
                } 
            }

            $i++;
        }

        return;


    }
}
