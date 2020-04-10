<?php

use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// select a user
    	$users = App\User::all();

    	// Add 3 lists/segments for each user
    	foreach ($users as $user) {
    		$segments = factory(App\Listmanager\Segment::class, 3)->create();
    		$user->belongsToSegment()->saveMany($segments);
    	}
        
    }
}
