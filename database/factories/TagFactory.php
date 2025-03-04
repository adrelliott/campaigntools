<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listmanager\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
       	'tag_name' => $faker->word,
       	'tag_description' => $faker->sentence
    ];
});
