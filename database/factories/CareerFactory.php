<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "company" => $this->faker->company(),
            "location" => $this->faker->address(),
            "job_title" => $this->faker->title(),
            "description" => $this->faker->paragraph(),
            "user_id" => $this->faker->numberBetween(0,10),
        ];
    }
}
