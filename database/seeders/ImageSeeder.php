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
                'image_path'    => 'assets/img/product-images/Mitsubishi-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 1,
                'image_path'    => 'assets/img/product-images/Mitsubishi-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 2,
                'image_path'    => 'assets/img/product-images/Kobelco-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 2,
                'image_path'    => 'assets/img/product-images/Kobelco-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 3,
                'image_path'    => 'assets/img/product-images/Deutz-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 3,
                'image_path'    => 'assets/img/product-images/Deutz-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 4,
                'image_path'    => 'assets/img/product-images/Isuzu-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 4,
                'image_path'    => 'assets/img/product-images/Isuzu-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 5,
                'image_path'    => 'assets/img/product-images/Hitachi-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 5,
                'image_path'    => 'assets/img/product-images/Hitachi-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 6,
                'image_path'    => 'assets/img/product-images/Cummins-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 6,
                'image_path'    => 'assets/img/product-images/Cummins-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 7,
                'image_path'    => 'assets/img/product-images/Nissan-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 7,
                'image_path'    => 'assets/img/product-images/Nissan-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 8,
                'image_path'    => 'assets/img/product-images/Caterpillar-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 8,
                'image_path'    => 'assets/img/product-images/Caterpillar-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 9,
                'image_path'    => 'assets/img/product-images/Volvo-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 9,
                'image_path'    => 'assets/img/product-images/Volvo-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 10,
                'image_path'    => 'assets/img/product-images/Perkins-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 10,
                'image_path'    => 'assets/img/product-images/Perkins-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 11,
                'image_path'    => 'assets/img/product-images/Hino-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 11,
                'image_path'    => 'assets/img/product-images/Hino-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 12,
                'image_path'    => 'assets/img/product-images/Komatsu-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 12,
                'image_path'    => 'assets/img/product-images/Komatsu-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 13,
                'image_path'    => 'assets/img/product-images/Mercedes-Benz-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 13,
                'image_path'    => 'assets/img/product-images/Mercedes-Benz-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 14,
                'image_path'    => 'assets/img/product-images/Kubota-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 14,
                'image_path'    => 'assets/img/product-images/Kubota-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 15,
                'image_path'    => 'assets/img/product-images/Toyota-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 15,
                'image_path'    => 'assets/img/product-images/Toyota-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 16,
                'image_path'    => 'assets/img/product-images/Bomag-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 16,
                'image_path'    => 'assets/img/product-images/Bomag-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 17,
                'image_path'    => 'assets/img/product-images/Yanmar-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'product_id'    => 17,
                'image_path'    => 'assets/img/product-images/Yanmar-2.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
