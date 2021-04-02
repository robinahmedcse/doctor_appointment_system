<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tbl_emp_department;
use Faker\Generator as Faker;

$factory->define(Tbl_emp_department::class, function (Faker $faker) {
    return [
        'emp_department_name' => $faker->randomElement(['HR','Marketing ','Production','Accounting and Finance']),
        'emp_department_code' => $faker->numberBetween(10, 100),
        'emp_department_status' => $faker->numberBetween(0, 1),
 
    ];
});
