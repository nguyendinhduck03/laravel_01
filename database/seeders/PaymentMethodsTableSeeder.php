<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_methods')->insert([
            ['id' => 1, 'name' => 'Thanh Toán Khi Nhận Hàng'],
            ['id' => 2, 'name' => 'Chuyển Khoản Ngân Hàng'],
            ['id' => 3, 'name' => 'Thanh Toán Qua Thẻ Tín Dụng'],
        ]);
    }
}
