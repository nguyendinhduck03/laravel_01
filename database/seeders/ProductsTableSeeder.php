<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'quantity' => 100,
                'price' => 19.99,
                'day_add' => now()->toDateString(), 
                'description' => 'Description for Product 1',
                'view' => 0,
                'category_id' => 1, 
                'status' => 1,
        
            ],
            [
                'name' => 'Product 2',
                'quantity' => 50,
                'price' => 29.99,
                'day_add' => now()->toDateString(), 
                'description' => 'Description for Product 2',
                'view' => 0,
                'category_id' => 2, 
                'status' => 1,
                
            ],
            
        ]);
    }
}
