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

            // Create a user with standard credentials (admin@admin.com/password)
        	UserSeeder::class,

            // Now mock creating users, lists, segments, tags and contacts
            ListManagerSeeder::class, 
            
            // Now create a magazine for each user and add some subscribers
            // InboxMagSeeder::class,  // Mocks up some magazines, with issues and articles
            
           

        ]);

        // Create some pivot fields
    }
}
