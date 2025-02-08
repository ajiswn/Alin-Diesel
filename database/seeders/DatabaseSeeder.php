<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'      => 'Super Admin',
            'email'     => 'admin1@gmail.com',
            'password'  => Hash::make('123'),
            'photo'     => 'assets/img/admin-photos/admin-1.jpg',
            'role'      => 'Super Admin',
        ]);

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
