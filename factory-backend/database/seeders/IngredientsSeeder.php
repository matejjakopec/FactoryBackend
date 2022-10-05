<?php

namespace Database\Seeders;

use App\Models\Ingredients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredients::factory()
            ->count(100)
            ->create();
    }
}
