<?php

namespace Database\Seeders;

use App\Models\Dojo;
use Illuminate\Database\Seeder;

class DojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dojos = [
            [
                'name' => 'Cobra-Kai Dojo',
                'location' => 'Kyoto',
                'description' => 'Strike first, strike hard, no mercy. Aggressive offense and relentless hand-to-hand combat.',
            ],
            [
                'name' => 'Miyagi-Do Sanctuary',
                'location' => 'Okinawa',
                'description' => 'Defensive martial mastery. Prioritizes inner peace, spiritual harmony, and counter-striking balance.',
            ],
            [
                'name' => 'Eagle-Fang Academy',
                'location' => 'Osaka',
                'description' => 'Fierce combat readiness. Teaches adaptability, decisive speed, and airborne jump attacks.',
            ],
            [
                'name' => 'Shadow Lotus Temple',
                'location' => 'Mount Fuji',
                'description' => 'Ancient shinobi fortress shrouded in mist. Specializes in stealth infiltration, smoke arts, and poison evasion.',
            ],
            [
                'name' => 'Iron Blade Forge',
                'location' => 'Tokyo',
                'description' => 'Mastery of forged steel and twin katanas. Renowned for cutting through armor in the blink of an eye.',
            ],
        ];

        foreach ($dojos as $dojo) {
            Dojo::firstOrCreate(['name' => $dojo['name']], $dojo);
        }
    }
}
