<?php

namespace Database\Seeders;

use App\Models\Pair;
use Illuminate\Database\Seeder;

class PairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pair::factory()
            ->count(2)
            ->create();
    }
}