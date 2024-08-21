<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'dinh',
                'password' => Hash::make('1234'),
                'avatar' => 'uploads/users/dBTGQs9hBk5vlY8VNUVGMcKg9DeEcafQReWx5L5P.jpg',
                'email' => 'kkk@gmail.com',
                'number' => null,
                'gender' => null,
                'address' => null,
                'date' => null,
                'role_id' => 1,
                'status' => 1,
            ],
            [
                'name' => 'Admin',
                'password' => Hash::make('1234'),
                'avatar' => null,
                'email' => 'jane@example.com',
                'number' => null,
                'gender' => null,
                'address' => null,
                'date' => null,
                'role_id' => 2,
                'status' => 1,
            ],
        ]);
    }
}
