<?php

namespace Database\Factories;

use App\Models\Meals;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredients>
 */
class IngredientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $num = 1;

        $createdDate = $this->faker->dateTimeThisDecade();
        $updatedDate = $this->faker->dateTimeBetween($createdDate);
        $deletedDate = $this->faker->boolean() ? $this->faker->dateTimeBetween($updatedDate) : null;


        return [
            'slug'=>'ingredient_' . $num++,
            'created_at' => $createdDate,
            'updated_at' => $updatedDate,
            'deleted_at' => $deletedDate
        ];
    }
}
