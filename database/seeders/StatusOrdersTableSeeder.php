<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_orders')->insert([
            ['id' => 1, 'name' => 'Đang Xử Lý'],
            ['id' => 2, 'name' => 'Đã Giao'],
            ['id' => 3, 'name' => 'Đã Hủy'],
        ]);
    }
}
