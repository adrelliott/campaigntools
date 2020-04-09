<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listmanager\ContactList;
use Faker\Generator as Faker;

$factory->define(ContactList::class, function (Faker $faker) {
    return [
        'list_name' => $faker->sentence(3),
        'list_description' => $faker->sentence,
    ];
});
