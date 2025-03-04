<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inboxmag\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word,
        'category_description' => $faker->sentence,
    ];
});
