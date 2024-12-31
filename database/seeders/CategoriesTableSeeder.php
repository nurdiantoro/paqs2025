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
                'id' => 1,
                'name' => 'PUJA Member with Gala Dinner',
                'price' => '400',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Non-PUJA Member with Gala Dinner',
                'price' => '500',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
