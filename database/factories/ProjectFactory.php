<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'start_date' => $this->faker->dateTimeBetween('2021-02-02', '2022-02-02'),
            'description' => $this->faker->paragraph(),
            'budget' => $this->faker->numberBetween(1000, 9999),
            'user_id' => rand(1, 10)
        ];
    }
}
