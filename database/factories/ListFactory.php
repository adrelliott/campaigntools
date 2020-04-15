<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listmanager\ListModel;
use Faker\Generator as Faker;

$factory->define(ListModel::class, function (Faker $faker) {
    return [
        'list_name' => $faker->sentence(3),
        'list_description' => $faker->sentence,
    ];
});
