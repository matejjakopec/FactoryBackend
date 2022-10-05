<?php

namespace Database\Seeders;

use App\Models\Meals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



       Meals::factory()
           ->count(200)
           ->create();
    }
}
