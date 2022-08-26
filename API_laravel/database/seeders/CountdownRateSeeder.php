<?php

namespace Database\Seeders;

use App\Models\CountdownRate;
use Illuminate\Database\Seeder;

class CountdownRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CountdownRate::factory()
            ->count(5)
            ->create();
    }
}
