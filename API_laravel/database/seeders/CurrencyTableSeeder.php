<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Console\View\Components\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory(Currency::class, 10)->create();
    }
}
