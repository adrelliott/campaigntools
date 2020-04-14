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

            // Now seed those tables with relationships
            ListManagerSeeder::class,  // Mocks up a user base with contacts lists
            
            // Now create a magazine for each user and add some subscribers
            // InboxMagSeeder::class,  // Mocks up some magazines, with issues and articles
            
           

        ]);

        // Create some pivot fields
    }
}
