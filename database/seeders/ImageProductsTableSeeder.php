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
                'link' => 'uploads/products/tx07TTKkbLntmvrzcbVPWj8zc0VqVbEz9NAXzOOE.jpg',
                'product_id' => 1,

            ],
            [
                'link' => 'uploads/products/ijYk8ApvxkkEZYAX0X9i6LUZhbbU7Uet4aSNHZYl.jpg',
                'product_id' => 1,

            ],
            [
                'link' => 'uploads/products/PO3wLCo2YjBoHcEy9EkR8uFi91HIcug0jAZJwpWr.jpg',
                'product_id' => 1,

            ],
            [
                'link' => 'uploads/products/wUnTBJftmWm7sSzUKzEtS71UlXWFSxOCBO2wjrWL.jpg',
                'product_id' => 1,

            ],
            [
                'link' => 'uploads/products/IMT5ZSs8JLu9qpP3b2zReC4mx70XgKc55QNdGcvX.jpg',
                'product_id' => 2,
            ],
            [
                'link' => 'uploads/products/nXkREgcEHIZarlG0AHZyrS7oOsMxWyIMkE1aLSjo.jpg',
                'product_id' => 2,
            ],
            [
                'link' => 'uploads/products/8uPGOF3Ff6gTELjhQGtnv0SGoJh3FQ0yE1KPGZ4K.jpg',
                'product_id' => 2,
            ],
            [
                'link' => 'uploads/products/xIjryycEKGadMkkm7gifVKWSWYkMm9pckpT7t7h6.jpg',
                'product_id' => 2,
            ],
        ]);
    }
}
