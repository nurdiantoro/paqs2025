<?php

namespace Database\Seeders;

use App\Models\Addon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Addon::insert([
            [
                'id' => 1,
                'name' => 'PAQS Golf 2024',
                'price' => '250',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
