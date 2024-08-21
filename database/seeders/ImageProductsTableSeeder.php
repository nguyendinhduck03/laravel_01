<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('image_products')->insert([
            [
                'id' => 1,
                'link' => 'uploads/products/RUYcZ86DVZp4F7i0fTwxPqqB9SOhkrbBUV5YFSoi.jpg',
                'product_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'link' => 'uploads/products/RUYcZ86DVZp4F7i0fTwxPqqB9SOhkrbBUV5YFSoi.jpg',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
