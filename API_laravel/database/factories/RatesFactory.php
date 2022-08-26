<?php

namespace Database\Factories;

use App\Models\Rates;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rates::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'conversion_rate' => $this->faker->randomNumber(2),
            'countdown_rate_id' => \App\Models\CountdownRate::factory(),
        ];
    }
}
