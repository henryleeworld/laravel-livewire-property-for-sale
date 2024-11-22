<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $agents = collect(Agent::all()->modelKeys());

        return [
            'agent_id'    => $agents->random(),
            'price'       => fake()->randomNumber(),
            'address'     => fake()->address(),
            'country'     => fake()->country(),
            'beds'        => fake()->numberBetween(1, 3),
            'baths'       => fake()->numberBetween(1, 3),
            'description' => fake()->text(),
            'is_popular'  => fake()->boolean(),
            'is_featured' => fake()->boolean(),
        ];
    }
}
