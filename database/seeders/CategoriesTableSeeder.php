<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'IQSI Member (Main Congress & Gala Dinner)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '3500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NON - IQSI (Main Congress & Gala Dinner)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '4500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Main Congress',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '3500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Student (Main Congress)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '3000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Student (YQS)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Student (Main Congress & YQS)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '4750000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAQS GOLF 2025 (Member IQSI)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '2500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAQS GOLF 2025 (Non - Member)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '3500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Networking Dinner (Professional, Construction Industries, Suppliers, and others)',
                'type' => 'Congress Fee (Indonesia)',
                'currency' => 'IDR',
                'price' => '2500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAQS Member (Pre Congress, Main Congress & Gala Dinner)',
                'type' => 'Congress Fee (Non-Indonesia)',
                'currency' => 'USD',
                'price' => '850',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NON - PAQS (Main Congress & Gala Dinner)',
                'type' => 'Congress Fee (Non-Indonesia)',
                'currency' => 'USD',
                'price' => '950',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Early Bird',
                'type' => 'Congress Fee (Non-Indonesia)',
                'currency' => 'USD',
                'price' => '770',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAQS GOLF 2025 (Member)',
                'type' => 'Congress Fee (Non-Indonesia)',
                'currency' => 'USD',
                'price' => '160',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAQS GOLF 2025 (Non - Member)',
                'type' => 'Congress Fee (Non-Indonesia)',
                'currency' => 'USD',
                'price' => '185',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Spouse Program',
                'type' => 'Congress Fee (Non-Indonesia)',
                'currency' => 'USD',
                'price' => '95',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
