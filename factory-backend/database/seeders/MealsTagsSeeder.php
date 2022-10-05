<?php

namespace Database\Seeders;

use App\Models\meals_tags;
use App\Models\MealsTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MealsTags::factory()
            ->count(500)
            ->create();
    }
}
