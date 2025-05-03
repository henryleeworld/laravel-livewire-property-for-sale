<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
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
            'photo'       => 'images/person_' . random_int(1, 6) . '-min.jpg',
            'company'     => fake()->jobTitle() . ', ' . fake()->company(),
            'rating'      => random_int(1, 5),
            'testimonial' => fake()->words(30, asText: true),
        ];
    }
}
