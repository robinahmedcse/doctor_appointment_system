<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tbl_emp_designation;
use Faker\Generator as Faker;

$factory->define(Tbl_emp_designation::class, function (Faker $faker) {
    return [
        'emp_designation_name' => $faker->randomElement(['Chief Executive Officer (CEO)','Chief Operating Officer (COO) ','Chief Financial Officer (CFO) ','Chief Marketing Officer (CMO)' ,'Chief Technology Officer (CTO)']),
        'emp_designation_status' => $faker->numberBetween(0, 1),
    ];
});

