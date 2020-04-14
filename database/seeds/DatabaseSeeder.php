<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	
        $this->call([
            // Seed the databases that don't need direct relationships
        	UserSeeder::class,
            // TagSeeder::class,
            // CategorySeeder::class,
            // SuggestionSeeder::class,

            // Now seed those tables with relationships
            ListManagerSeeder::class,  // Mocks up a user base with contacts lists
            
            InboxMagSeeder::class,  // Mocks up some magazines, with issues and articles
            
            // SubscriptionMagSeeder::class,  // Mocks up contact subscriptions to magazines

            // LISTMANAGER: Create the assocciated records for the user
            // ListManagerSeeder::class,
            // ContactListSeeder::class,
            // ContactSeeder::class,

        ]);

        // Create some pivot fields
    }
}
