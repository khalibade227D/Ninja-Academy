<?php

namespace Database\Factories;

use App\Models\Dojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Dojo>
 */
class DojoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Cobra-kai', 'Miyagi-do', 'Eagle-fang', 'Taichi Sanctum', 'Wudang Mountain', 'Shadow Lotus', 'Crimson Dragon']),
            'description' => fake()->realText(80),
            'location' => fake()->city(),
        ];
    }
}
