<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => $this->faker->sentence,
            'bandleden' => $this->faker->paragraph(5),
            'genre' => $this->faker->randomElement(['Rock', 'Pop', 'Metal', "D\'n b"]),
            'platenmaatschappij' => $this->faker->randomElement(['Other', 'Universal', 'Warner', 'Sony']),
        ];
    }
}

//  \App\Models\Artist::factory()->times(10)->create();
