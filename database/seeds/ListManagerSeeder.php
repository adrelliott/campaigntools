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
        // Get the organisations
        $organisations = App\Organisation::all();

        // Loop through each and create populated lists
        foreach ( $organisations as $organisation ) {

            // Create some lists
            $lists = factory(App\ListModel::class, 3)->create([
                'organisation_id' => $organisation->id
            ]);

            // Add some contacts to each list
            foreach ( $lists as $list ) {
                $contacts = factory(App\Contact::class, 30)->create([
                    'organisation_id' => $organisation->id,
                ]); 

                // now apply some tags to these contacts
                foreach ( $contacts as $contact ) {
                    $tags = factory(App\Tag::class, 4)->create();
                    $contact->addTags($tags);
                }
            }
        }

        


    }
    public function run_old()
    {
        // Create some users
        $i = 1;
        while ($i <= 5) {

            // Create a user
            $user = factory(App\User::class)->create();
            
            //Create some lists
            $lists = factory(App\ListModel::class, 3)->create([
                'user_id' => $user->id
            ]);

            //loop through lists 
            foreach ($lists as $list) {

                // Create some contacts & save to this list
                $contacts = factory(App\Contact::class, 30)->create(
                    ['user_id' => $user->id]
                ); 
                $list->addContacts($contacts);
                // $list->contacts()->sync($contacts); 

                // now apply some random tags to the contacts
                foreach ($contacts as $contact) {
                    $tags = factory(App\Tag::class, 3)->create();
                    $contact->addTags($tags);
                } 
            }

            $i++;
        }

        return;


    }
}
