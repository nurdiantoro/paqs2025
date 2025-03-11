<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgrammeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Programme::insert([
            [
                'name' => 'YQS Workshop',
                'date' => '2025-08-23',
                'time_start' => '08:00',
                'time_end' => '17:00',
                'information' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dinner & Fun Games',
                'date' => '2025-08-23',
                'time_start' => '08:00',
                'time_end' => '24:00',
                'information' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Technical Visit & City Tour',
                'date' => '2025-08-23',
                'time_start' => '08:00',
                'time_end' => '17:00',
                'information' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Golf Tournament',
                'date' => '2025-08-23',
                'time_start' => '07:30',
                'time_end' => '12:00',
                'information' => 'Pre-Congres',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Committee Meeting',
                'date' => '2025-08-23',
                'time_start' => '13:00',
                'time_end' => '17:00',
                'information' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Board Meeting',
                'date' => '2025-08-24',
                'time_start' => '08:00',
                'time_end' => '24:00',
                'information' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
