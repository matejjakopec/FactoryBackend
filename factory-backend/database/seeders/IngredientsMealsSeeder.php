<?php

namespace Database\Seeders;

use App\Models\ingredients_meals;
use App\Models\IngredientsMeals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsMealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IngredientsMeals::factory()
            ->count(500)
            ->create();
    }
}
