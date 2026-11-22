<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ninja::factory()->count(20)->create();
    }
}
