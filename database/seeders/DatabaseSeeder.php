<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Admin::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@wotic.id',
            'password' => bcrypt('admin123'),
        ]);

        // \App\Models\User::create([
        //     'name' => 'User',
        //     'email' => 'user@example.com',
        //     'password' => bcrypt('user123'),
        //     'telepon' => '087655678654',
        //     'img' => 'profile-images/0DoIYCBEswX5aTh1HOB48Yo0f1nOnDSoY5lmd71Z.jpg',
        // ]);

        \App\Models\Background::create([
            'splash_image'=> 'background/0DoIYCBEswX5aTh1HOB48Yo0f1nOnDSoY5lmd71Z.jpg',
            'background_image' => 'background/0DoIYCBEswX5aTh1HOB48Yo0f1nOnDSoY5lmd71Z.jpg',
        ]);
    }
}

