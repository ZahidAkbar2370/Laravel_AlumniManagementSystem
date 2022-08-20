<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ALimnusBio>
 */
class AlimnusBioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "firstname" => $this->faker->firstName(),
            "middlename" => $this->faker->lastName(),
            "lastname" => $this->faker->lastName(),
            "gender" => "mail",
            "batch"  => $this->faker->year(),
            "cource_id"  => $this->faker->numberBetween(1,10),
            "email"  => $this->faker->email(),
            "connected_to"  => $this->faker->lastName(),
            "avatar"  => $this->faker->imageUrl(),
            "status" => "1",
        ];
    }
}
