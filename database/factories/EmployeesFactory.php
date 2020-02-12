<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {
    return [
        //
        'last_name'     => $faker->lastName,
        'first_name'    => $faker->firstName,
        'birthday'      => $faker->date(),
        'email'         => $faker->unique()->safeEmail,
        'phone'         => $faker->phoneNumber,
        'address'       => $faker->address,
        'role_id'       => 0
    ];
});
