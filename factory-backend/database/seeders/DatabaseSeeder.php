<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Tags;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([IngredientsSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([TagsSeeder::class]);
        $this->call([MealsSeeder::class]);
        $this->call([IngredientsMealsSeeder::class]);
        $this->call([MealsTagsSeeder::class]);
        $this->call([TranslationsSeeder::class]);
    }
}
