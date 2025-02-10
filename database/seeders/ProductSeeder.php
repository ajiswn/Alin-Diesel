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
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Isuzu</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Isuzu</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Isuzu</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Mitsubishi.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Kobelco',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part alat berat <strong>Kobelco</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk alat berat <strong>Kobelco</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi alat berat <strong>Kobelco</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Kobelco.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Deutz',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part genset <strong>Deutz</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk genset <strong>Deutz</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi genset <strong>Deutz</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Deutz.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Isuzu',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Isuzu</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Isuzu</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Isuzu</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Isuzu.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Hitachi',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part alat berat <strong>Hitachi</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk alat berat <strong>Hitachi</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi alat berat <strong>Hitachi</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Hitachi.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Cummins',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part genset <strong>Cummins</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk genset <strong>Cummins</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi genset <strong>Cummins</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Cummins.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Nissan',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Nissan</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Nissan</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Nissan</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Nissan.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Caterpillar',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part alat berat <strong>Cateroillar</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk alat berat <strong>Cateroillar</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi alat berat <strong>Cateroillar</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Caterpillar.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Volvo',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Volvo</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Volvo</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Volvo</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Volvo.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Perkins',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part genset <strong>Perkins</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk genset <strong>Perkins</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi genset <strong>Perkins</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Perkins.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Hino',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Hino</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Hino</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Hino</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Hino.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Komatsu',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part alat berat <strong>Komatsu</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk alat berat <strong>Komatsu</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi alat berat <strong>Komatsu</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Komatsu.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Mercedes-Benz',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Mercedes-Benz</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Mercedes-Benz</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Mercedes-Benz</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Mercedes-Benz.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Kubota',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part genset <strong>Kubota</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk genset <strong>Kubota</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi genset <strong>Kubota</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Kubota.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 1,
                'name'          => 'Toyota',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part truk <strong>Toyota</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk truk <strong>Toyota</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi truk <strong>Toyota</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Toyota.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 2,
                'name'          => 'Bomag',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part alat berat <strong>Bomag</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk alat berat <strong>Bomag</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Drive belt</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi alat berat <strong>Bomag</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Bomag.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'category_id'   => 3,
                'name'          => 'Yanmar',
                'description'   => '<div><strong>Alin Diesel</strong> adalah supplier spare part genset <strong>Yanmar</strong> yang terpercaya di Indonesia.<br><br>Kami menyediakan berbagai suku cadang berkualitas untuk genset <strong>Yanmar</strong>, termasuk:</div><ul><li>Piston/ Liner</li><li>Piston Ring</li><li>Crankshaft</li><li>Cylinder head</li><li>Bearing</li><li>Oil dan Water pump</li><li>Fuel Pump dan Injector</li><li>Cooler</li><li>Turbocharger</li><li>Manifold</li><li>Gasket set</li><li>In dan Out of Frame set</li></ul><div>Sebagai penyedia spare part yang berkomitmen pada kepuasan pelanggan, <strong>Alien Diesel</strong> menghadirkan solusi terbaik untuk menjaga dan meningkatkan efisiensi genset <strong>Yanmar</strong> Anda. Setiap produk yang kami sediakan dipilih dengan cermat agar sesuai dengan kebutuhan operasional dan memberikan performa yang optimal.</div>',
                'logo'          => 'assets/img/product-logos/Yanmar.png',
                'status'        => 'Aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);        
    }
}
