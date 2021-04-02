<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tbl_emp_branch;
use Faker\Generator as Faker;

$factory->define(Tbl_emp_branch::class, function (Faker $faker) {
    return [
        'emp_branch_name' => $faker->randomElement(['Dhaka','Tangail ','Cumilla','Barishal','Rajshahi']),
        'emp_branch_code' => $faker->numberBetween(1, 100),
        'emp_branch_status' => $faker->numberBetween(0, 1),
 
    ];
});
