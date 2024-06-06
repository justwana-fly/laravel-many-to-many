<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::create(['name' => 'HTML']);
        Technology::create(['name' => 'CSS']);
        Technology::create(['name' => 'JavaScript']);
        Technology::create(['name' => 'Vue.js']);
        Technology::create(['name' => 'Sass']);
        Technology::create(['name' => 'php']);
        Technology::create(['name' => 'MySQL']);
        Technology::create(['name' => 'Laravel']);
        Technology::create(['name' => 'GitHub Copilot']);
        Technology::create(['name' => 'Postman']);
        Technology::create(['name' => 'Vite']);
        Technology::create(['name' => 'Tailwind']);
        Technology::create(['name' => 'Bootstrap']);
        Technology::create(['name' => 'VitePress']);
        Technology::create(['name' => 'PWA']);
        Technology::create(['name' => 'Phyton']);
        Technology::create(['name' => 'Java']);
    }
}
