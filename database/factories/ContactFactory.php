<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listmanager\Contact;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
	// $now = Carbon::createFromFormat('Y-m-d H:i:s', '2019-02-01 03:45:27');
	// $now = date("Y-m-d H:i:s");
    return [
        'first_name' => $faker->firstName,
        'last_name'	=> $faker->lastName,
        'email' => $faker->email,
        'postal_code' => $faker->postcode,
        'verified_at' => today(),
    ];
});
