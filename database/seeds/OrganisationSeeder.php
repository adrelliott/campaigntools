<?php

use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	// Create some fake organisations
        $organisations = factory(App\Organisation::class,5)->create([
        	'organisation_name' => $faker->company,
        	'website'	=> $faker->domainName
        ]);

        return $organisations;
    }
}
