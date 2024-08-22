<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Blog số 1',
                'thumbnail' => 'uploads/products/o9Qmhvyl5uhcRRtsMEdw0g9X2XV3vE261w9xSQ9Q.jpg',
                'content' => 'This is the content of the sample blog post',
            ]
        ]);
    }
}
