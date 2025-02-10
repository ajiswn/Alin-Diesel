<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'name'              => 'Alin Diesel',
            'slogan'            => 'Menyediakan spare part truck dan alat berat',
            'description'       => 'Alin Dielse menyediakan spare part truck dan alat berat',
            'keywords'          => 'spare part, truck, truk, heavy equipment, alat berat, Alin Diesel',
            'owner'             => 'Alin',
            'address'           => 'Jl. Raya Kasang Pudak<br>Kumpeh Ulu<br>Muaro Jambi',
            'email'             => 'alindiesel01@gmail.com',
            'instagram'         => 'alin_diesel03',
            'owner_instagram'   => 'all1n_h',
            'whatsapp'          => '6281158504442',
            'gmaps'             => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2809823635225!2d103.67454257496624!3d-1.590595298394572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258f1a23c353a7%3A0x448a5f0822aafe44!2sJl.%20Raya%20Kasang%20Pudak%2C%20Kec.%20Kumpeh%20Ulu%2C%20Kabupaten%20Muaro%20Jambi%2C%20Jambi!5e0!3m2!1sid!2sid!4v1737658687390!5m2!1sid!2sid',
            'owner_image'       => 'assets/img/owner.jpg',
            'logo_image'        => 'assets/img/logo.png',
            'hero_image'        => 'assets/img/hero-bg.jpg',
            'about_image'       => 'assets/img/about.jpg',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
