<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween([0,10]),
            "title" => $this->faker->title(),
            "content" => $this->faker->slug(),
            "schedule" => $this->faker->date(),
            "banner" => $this->faker->imageUrl(),
        ];
    }
}
