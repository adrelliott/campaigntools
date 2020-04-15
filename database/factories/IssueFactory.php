<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inboxmag\Issue;
use Faker\Generator as Faker;

$factory->define(Issue::class, function (Faker $faker) {

	static $counter = 1;
    
    return [
        'issue_number' => $counter++,
        'issue_name' => 'Issue' . $counter . ': ' . $faker->sentence,
        'issue_description' => $faker->sentence,
        'introduction' => $faker->paragraph,
        'sign_off' => $faker->paragraph,
        
    ];
});
