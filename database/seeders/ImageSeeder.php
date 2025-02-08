<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'product_id'    => 1,
                'image_path'    => 'assets/img/product-images/product-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 2,
                'image_path'    => 'assets/img/product-images/product-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 3,
                'image_path'    => 'assets/img/product-images/product-3.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 4,
                'image_path'    => 'assets/img/product-images/product-4.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 5,
                'image_path'    => 'assets/img/product-images/product-5.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 6,
                'image_path'    => 'assets/img/product-images/product-6.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 7,
                'image_path'    => 'assets/img/product-images/product-7.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 8,
                'image_path'    => 'assets/img/product-images/product-8.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 9,
                'image_path'    => 'assets/img/product-images/product-9.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 10,
                'image_path'    => 'assets/img/product-images/product-10.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 11,
                'image_path'    => 'assets/img/product-images/product-11.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 12,
                'image_path'    => 'assets/img/product-images/product-12.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 13,
                'image_path'    => 'assets/img/product-images/product-13.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 14,
                'image_path'    => 'assets/img/product-images/product-14.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 15,
                'image_path'    => 'assets/img/product-images/product-15.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 16,
                'image_path'    => 'assets/img/product-images/product-16.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 17,
                'image_path'    => 'assets/img/product-images/product-17.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
