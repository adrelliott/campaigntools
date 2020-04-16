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

            // Set up the roles and modules
            RoleSetupSeeder::class,

            // Create a superadmin
            SuperAdminUserSeeder::class,

            // Create some organisations and users & apply modules & roles
            UsersSeeder::class,
            
            // Now mock creating lists, segments, tags and contacts
            ListManagerSeeder::class, 
            
            // Now create a magazine for each user and add some subscribers
            // InboxMagSeeder::class,  // Mocks up some magazines, with issues and articles
            
           

        ]);

        // Create some pivot fields
    }
}
