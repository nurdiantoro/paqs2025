<?php

namespace Database\Seeders;

use App\Models\Itinerary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItineraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Itinerary::insert([
            [
                'day' => 1,
                'time_1' => '08:45:00',
                'time_2' => '09:00:00',
                'title' => 'Registration at Raffles Hotel',
            ],
            [
                'day' => 1,
                'time_1' => '09:00:00',
                'time_2' => '09:10:00',
                'title' => 'Opening Speech by PAQS YQS Chair',
            ],
            [
                'day' => 1,
                'time_1' => '09:10:00',
                'time_2' => '09:20:00',
                'title' => 'Welcome Speech by PAQS Chairman',
            ],
            [
                'day' => 1,
                'time_1' => '09:20:00',
                'time_2' => '10:00:00',
                'title' => 'Ice Breaking Game / Activity No. 1',
            ],
            [
                'day' => 1,
                'time_1' => '10:00:00',
                'time_2' => '10:30:00',
                'title' => 'Morning Tea & Networking Session',
            ],
            [
                'day' => 1,
                'time_1' => '10:30:00',
                'time_2' => '10:45:00',
                'title' => 'Presentation from Indonesian Quantity Surveyor Association (IQSI)',
            ],
            [
                'day' => 1,
                'time_1' => '10:45:00',
                'time_2' => '11:00:00',
                'title' => 'Presentation from Australian Institute of Quantity Surveyors (AIQS)',
            ],
            [
                'day' => 1,
                'time_1' => '11:00:00',
                'time_2' => '11:15:00',
                'title' => 'Presentation from Institute of Quantity Surveyors Sri Lanka (IQSSL)',
            ],
            [
                'day' => 1,
                'time_1' => '11:15:00',
                'time_2' => '11:30:00',
                'title' => 'Presentation from New Zealand Institute of Quantity Surveyors (NZIQS)',
            ],
            [
                'day' => 1,
                'time_1' => '11:30:00',
                'time_2' => '11:45:00',
                'title' => 'Presentation from Hong Kong Institute of Surveyors (HKIS)',
            ],
            [
                'day' => 1,
                'time_1' => '11:45:00',
                'time_2' => '12:00:00',
                'title' => 'Lunch & Friday Prayer',
            ],
            [
                'day' => 1,
                'time_1' => '12:00:00',
                'time_2' => '14:00:00',
                'title' => 'Ice Breaking Game / Activity No. 2',
            ],
            [
                'day' => 1,
                'time_1' => '14:00:00',
                'time_2' => '14:30:00',
                'title' => 'Presentation from Phillipines Institue of Certified Quantity Surveyors (PICQS)',
            ],
            [
                'day' => 1,
                'time_1' => '14:30:00',
                'time_2' => '14:45:00',
                'title' => 'Presentation from Institute of Surveyors, Engineers and Architects, Brunei (PUJA)',
            ],
            [
                'day' => 1,
                'time_1' => '14:45:00',
                'time_2' => '15:00:00',
                'title' => 'Presentation from Royal Institution of Surveyors Malaysia (RISM)',
            ],
            [
                'day' => 1,
                'time_1' => '15:15:00',
                'time_2' => '15:30:00',
                'title' => 'Presentation from Singapore Institute of Surveyors and Valuers (SISV)',
            ],
            [
                'day' => 1,
                'time_1' => '15:30:00',
                'time_2' => '15:45:00',
                'title' => 'Afternoon Tea Break',
            ],
            [
                'day' => 1,
                'time_1' => '15:45:00',
                'time_2' => '16:00:00',
                'title' => 'Closing Speech by IQSI Chairman',
            ],
            [
                'day' => 1,
                'time_1' => '16:30:00',
                'time_2' => '16:15:00',
                'title' => 'Briefing on Day 2 event: Site Visit & Dinner',
            ],
            [
                'day' => 1,
                'time_1' => '17:30:00',
                'time_2' => NULL,
                'title' => 'Casual Dinner',
            ],
            [
                'day' => 1,
                'time_1' => '19:30:00',
                'time_2' => NULL,
                'title' => 'Evening activity',
            ],
            [
                'day' => 2,
                'time_1' => '08:30:00',
                'time_2' => '09:00:00',
                'title' => 'Meet and depart for Site Visit',
            ],
            [
                'day' => 2,
                'time_1' => '09:00:00',
                'time_2' => '12:00:00',
                'title' => 'Site Visit to MRT Phase 2',
            ],
            [
                'day' => 2,
                'time_1' => '12:00:00',
                'time_2' => '13:30:00',
                'title' => 'Lunch',
            ],
            [
                'day' => 2,
                'time_1' => '13:30:00',
                'time_2' => '17:00:00',
                'title' => 'Visit to Iconic Attraction',
            ],
            [
                'day' => 2,
                'time_1' => '17:00:00',
                'time_2' => '19:00:00',
                'title' => 'Depart back to Raffles Hotel',
            ],
        ]);
    }
}
