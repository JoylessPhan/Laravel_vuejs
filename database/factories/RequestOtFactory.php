<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'reason'        => '',
        'interval_time' => '',
        'date'          => '',
        'to'            => '',
        'carbon_copy'   => '',
        'employee_id'   => '',
    ];
});
