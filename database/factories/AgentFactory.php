<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name'   => fake()->firstName() . ' ' . fake()->lastName(),
            'title'       => 'Real Estate Agent',
            'description' => fake()->words(20, asText: true),
            'photo'       => 'storage/agents/person_' . random_int(1, 6) . '-min.jpg',
            'twitter'     => fake()->url(),
            'facebook'    => fake()->url(),
            'linkedin'    => fake()->url(),
            'instagram'   => fake()->url(),
        ];
    }
}
