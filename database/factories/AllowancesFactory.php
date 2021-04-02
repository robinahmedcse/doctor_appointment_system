<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tbl_allowances;
use Faker\Generator as Faker;

$factory->define(Tbl_allowances::class, function (Faker $faker) {
    return [
      
            'allowances_name' => $faker->name,
            'allowances_status' =>$faker->randomElement(['Active','Inactive']),
            
     
    ];
});
