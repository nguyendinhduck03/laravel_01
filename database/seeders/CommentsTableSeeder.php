<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'id' => 1,
                'content' => 'Great product!',
                'day' => now()->toDateString(),
                'user_id' => 1,
                'product_id' => 1,
                'status' => 1,
            ],
        ]);
    }
}
