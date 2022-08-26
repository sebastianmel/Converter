<?php

namespace Database\Seeders;

use App\Models\Rates;
use Illuminate\Database\Seeder;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rates::factory()
            ->count(5)
            ->create();
    }
}
