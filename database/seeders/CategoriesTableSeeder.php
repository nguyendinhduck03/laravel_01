<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Cà Phê', 'image' => 'uploads/categoreis/OxhpT4B1DgqCqkDLXpB1FyYxpYbBo6T3cY86aqoy.avif', 'description' => null],
            ['id' => 2, 'name' => 'Trà', 'image' => 'uploads/categoreis/UuxkYM9TUIvFOBQmHPpiciWzoZ748ZocUXA5Vphg.webp', 'description' => null],
        ]);
    }
}
