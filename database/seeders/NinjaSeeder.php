<?php

namespace Database\Seeders;

use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Database\Seeder;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shadowLotus = Dojo::where('name', 'Shadow Lotus Temple')->first() ?? Dojo::first();
        $cobraKai = Dojo::where('name', 'Cobra-Kai Dojo')->first() ?? Dojo::first();
        $ironBlade = Dojo::where('name', 'Iron Blade Forge')->first() ?? Dojo::first();
        $miyagiDo = Dojo::where('name', 'Miyagi-Do Sanctuary')->first() ?? Dojo::first();

        // Seed core iconic ninjas with specific dojos
        $notableNinjas = [
            [
                'name' => 'Ryu Hayabusa',
                'skill' => 'Fireball',
                'rank' => 'Jonin',
                'bio' => 'Master of flame ninjutsu trained in the volcanic peaks. Specializes in area denial and intense thermal strikes.',
                'dojo_id' => $cobraKai->id,
            ],
            [
                'name' => 'Ayame Shadow',
                'skill' => 'Stealth',
                'rank' => 'Chunin',
                'bio' => 'Shadow infiltrator who can vanish in the blink of an eye without leaving a trace.',
                'dojo_id' => $shadowLotus->id,
            ],
            [
                'name' => 'Kenji Steel',
                'skill' => 'Swordsmanship',
                'rank' => 'Sensei',
                'bio' => 'Dual-blade prodigy capable of striking seven times before thunder cracks. Master of the silent twin Katana style.',
                'dojo_id' => $ironBlade->id,
            ],
            [
                'name' => 'Mika Harmony',
                'skill' => 'Chakra Healing',
                'rank' => 'Jonin',
                'bio' => 'Master of secret herbal alchemy and revitalizing chakra recovery techniques. Preserves the vitality of allied shinobi.',
                'dojo_id' => $miyagiDo->id,
            ],
        ];

        foreach ($notableNinjas as $ninja) {
            Ninja::firstOrCreate(['name' => $ninja['name']], $ninja);
        }

        // Seed additional factory-generated ninjas
        Ninja::factory()->count(16)->create();
    }
}
