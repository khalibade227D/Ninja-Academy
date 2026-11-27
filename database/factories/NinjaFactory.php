<?php

namespace Database\Factories;

use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skill' => fake()->randomElement(['Stealth', 'Fireball', 'Swordsmanship', 'Chakra Healing', 'Shadow Clone', 'Lightning Blade', 'Water Dragon']),
            'bio' => fake()->realText(80),
            'rank' => fake()->randomElement(['Genin', 'Chunin', 'Jonin', 'Kage']),
            'dojo_id' => Dojo::inRandomOrder()->first()?->id ?? Dojo::factory(),
        ];
    }
}
