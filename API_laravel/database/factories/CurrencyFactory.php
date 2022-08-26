<?php

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(Currency::class, function(Faker $faker){

    return [
        'nameCountry' => $faker->country(),
        'currencyT'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2), // 48.8932
    
    ];
});
    
    

