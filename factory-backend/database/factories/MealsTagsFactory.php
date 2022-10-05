<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MealsTags>
 */
class MealsTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'meals_id' => $this->faker->numberBetween(1,100),
            'tags_id' => $this->faker->numberBetween(1,100)
        ];
    }
}
