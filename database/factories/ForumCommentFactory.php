<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ForumCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "topic_id" =>$this->faker->numberBetween(0,1),
            "user_id" =>$this->faker->numberBetween(0,1),
            "comment" =>$this->faker->text(),
        ];
    }
}
