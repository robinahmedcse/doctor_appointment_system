<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tbl_deductions;
use Faker\Generator as Faker;

$factory->define(Tbl_deductions::class, function (Faker $faker) {
    return [
        'deductions_name' => $faker->name,
        'deductions_status' =>$faker->randomElement(['Active','Inactive']),
    ];
});
