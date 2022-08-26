<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\CountdownRate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountdownRateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CountdownRate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coutdown' => $this->faker->randomNumber(0),
        ];
    }
}
