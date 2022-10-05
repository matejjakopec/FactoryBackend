<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Translations>
 */
class TranslationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $createdDate = $this->faker->dateTimeThisDecade();
        $updatedDate = $this->faker->dateTimeBetween($createdDate);
        $deletedDate = $this->faker->boolean() ? $this->faker->dateTimeBetween($updatedDate) : null;

        return [
            'table_name'=>'',
            'resource_id'=>'',
            'resource_name'=>'',
            'en'=>'',
            'hr'=>'',
            'de'=>'',
            'created_at' => $createdDate,
            'updated_at' => $updatedDate,
            'deleted_at' => $deletedDate
        ];
    }
}
