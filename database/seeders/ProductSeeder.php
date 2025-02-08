<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id'   => 1,
                'name'          => 'Mitsubishi',
                'description'   => 'Description Mitsubishi',
                'logo'          => 'assets/img/product-logos/Mitsubishi.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Kobelco',
                'description'   => 'Description Kobelco',
                'logo'          => 'assets/img/product-logos/Kobelco.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Deutz',
                'description'   => 'Description Deutz',
                'logo'          => 'assets/img/product-logos/Deutz.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Isuzu',
                'description'   => 'Description Isuzu',
                'logo'          => 'assets/img/product-logos/Isuzu.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Hitachi',
                'description'   => 'Description Hitachi',
                'logo'          => 'assets/img/product-logos/Hitachi.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Cummins',
                'description'   => 'Description Cummins',
                'logo'          => 'assets/img/product-logos/Cummins.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Nissan',
                'description'   => 'Description Nissan',
                'logo'          => 'assets/img/product-logos/Nissan.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Caterpillar',
                'description'   => 'Description Caterpillar',
                'logo'          => 'assets/img/product-logos/Caterpillar.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Volvo',
                'description'   => 'Description Volvo',
                'logo'          => 'assets/img/product-logos/Volvo.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Perkins',
                'description'   => 'Description Perkins',
                'logo'          => 'assets/img/product-logos/Perkins.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Hino',
                'description'   => 'Description Hino',
                'logo'          => 'assets/img/product-logos/Hino.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Komatsu',
                'description'   => 'Description Komatsu',
                'logo'          => 'assets/img/product-logos/Komatsu.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Mercedes-Benz',
                'description'   => 'Description Mercedes-Benz',
                'logo'          => 'assets/img/product-logos/Mercedes-Benz.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Kubota',
                'description'   => 'Description Kubota',
                'logo'          => 'assets/img/product-logos/Kubota.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Toyota',
                'description'   => 'Description Toyota',
                'logo'          => 'assets/img/product-logos/Toyota.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Bomag',
                'description'   => 'Description Bomag',
                'logo'          => 'assets/img/product-logos/Bomag.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Yanmar',
                'description'   => 'Description Yanmar',
                'logo'          => 'assets/img/product-logos/Yanmar.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);        
    }
}
