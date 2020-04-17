<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Magazine;
use Faker\Generator as Faker;

$factory->define(Magazine::class, function (Faker $faker) {
    return [
        'magazine_name' => $faker->sentence(5),
        'magazine_description' => $faker->sentence,
        'default_intro' => $faker->paragraph,
        'sector' => $faker->randomElement(
        	['beauty', 'hair', 'dogs', 'cats', 'wine', 'food']),
        'from_name' => $faker->firstName . ' ' . $faker->lastName,
        'from_email' => $faker->companyEmail,
        'reply_to_email' => $faker->safeEmail,
        'publish_day' => $faker->randomElement(
        	['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']),
        'publish_time' =>$faker->randomElement(
        	['06', '09', '12', '15', '18', '21']),
        'auto_publish' => $faker->randomElement(
        	['1','0']),
    ];
});
