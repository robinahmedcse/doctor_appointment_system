<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company_title;
use Faker\Generator as Faker;

$factory->define(Company_title::class, function (Faker $faker) {
    return [
        
        'company_titles' =>  $faker->title,
        'company_logo' =>'images/img.jpg',
 
    ];
});
