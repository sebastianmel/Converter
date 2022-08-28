<?php

namespace Database\Factories;

use App\Models\Pair;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PairFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model =  Pair::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from'=> $this->faker->country,
            'to'=> $this->faker->country,
            'conversionRate' => $this->faker->randomNumber(2),
            
        ];
    }
}