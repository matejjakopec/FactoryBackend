<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meals>
 */
class MealsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $createdDate = $this->faker->dateTimeThisDecade();
        $updatedDate = $this->faker->boolean() ? $this->faker->dateTimeBetween($createdDate) : null;
        $deletedDate = $this->faker->boolean() ? $this->faker->dateTimeBetween($updatedDate) : null;

        $category = $this->faker->numberBetween(1,100);

        if($this->faker->numberBetween(1,100) % 10 == 0){
            $category = null;
        }

        return [
            'categories' => $category,
            'created_at' => $createdDate,
            'updated_at' => $updatedDate,
            'deleted_at' => $deletedDate
        ];
    }
}
