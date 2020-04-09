<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inboxmag\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence(10),
        'excerpt' => $faker->paragraph,
        'link' => $faker->url
    ];
});
