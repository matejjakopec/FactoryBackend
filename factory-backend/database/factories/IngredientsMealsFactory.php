<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IngredientsMeals>
 */
class IngredientsMealsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ingredients_id' => $this->faker->numberBetween(1,100),
            'meals_id' => $this->faker->numberBetween(1,100)
        ];
    }
}
