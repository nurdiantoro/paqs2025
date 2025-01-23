<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            [
                "name" => "Retno Dwi (Eno)",
                "telephone" => "+6281211116900",
                "image" => "profile picture - woman.jpg",
            ],
            [
                "name" => "Rizka",
                "telephone" => "+6282125917021",
                "image" => "profile picture - woman.jpg",
            ],
            [
                "name" => "Geraldine",
                "telephone" => "+628114030903",
                "image" => "profile picture - woman.jpg",
            ],
            [
                "name" => "Graha",
                "telephone" => "+6282280286961",
                "image" => "profile picture - woman.jpg",
            ],
        ]);
    }
}
