<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Segment;
use Faker\Generator as Faker;

$factory->define(Segment::class, function (Faker $faker) {
    return [
        'segment_name' => $faker->sentence(3),
        'segment_description' => $faker->sentence,
    ];
});
