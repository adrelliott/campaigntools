<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listmanager\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name'	=> $faker->lastName,
        'email' => $faker->email,
        'postal_code' => $faker->postcode,
    ];
});
