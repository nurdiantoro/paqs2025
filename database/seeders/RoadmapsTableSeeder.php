<?php

namespace Database\Seeders;

use App\Models\Roadmap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roadmap::insert([
            [
                'id' => 1,
                'title' => 'Team identification & initial planning',
                'description' => 'Formation of the committee and division of tasks, identifying the logistical needs of the congress (venue, accommodation, transportation, technical), and preparing sponsorship packages and proposals.',
                'date' => '2024-09-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Launch of the official website & digital campaign',
                'description' => 'Launching the official website and digital campaign, preparing the list of invitations and sponsorships, pre-booking the venue, and Offline Workshops.',
                'date' => '2024-10-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Digital promotion and pre-event preparations',
                'description' => 'Content publication through the website and social media. Distribution of monthly newsletters. Sending invitations to speakers and sponsors. Finalizing the logo and event theme. Searching for primary sponsors and negotiating',
                'date' => '2024-11-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Webinar dan Call for Papers',
                'description' => 'Starting monthly webinars with the distribution of press releases to local and international media, promotions on social media and the website, as well as finalizing event branding and promotional materials. Call for Papers, announcement of the availability of papers',
                'date' => '2024-12-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Fundraising & Networking',
                'description' => 'Holding networking dinners/breakfasts with potential sponsors and industry executives. Opening online registration for participants and donation campaigns on the official website. Initial logistics coordination for confirmed speakers. Preparation for the Charity Gala Dinner as part of fundraising efforts',
                'date' => '2025-01-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Panel Discussions and Roadshow',
                'description' => 'Online panel discussions with industry leaders, seminar roadshows, sponsor negotiations, and regular updates of event information on the website and social media',
                'date' => '2025-02-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Promotion and Innovation Competency',
                'description' => 'Launching technology and design innovation competitions for students and young professionals, accompanied by monthly webinars, social media campaigns, technical coordination, and press release distribution.',
                'date' => '2025-03-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'Crowdfunding & Competency Innovation',
                'description' => 'Launching an online crowdfunding campaign for public fundraising, organizing innovation competitions, finalizing presentation materials, and coordinating with media partners.',
                'date' => '2025-03-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'title' => 'Fundraising & Workshop',
                'description' => 'Conducting the Charity Gala Dinner and other fundraising events. Thematic workshops in major cities to increase engagement. Ticket and merchandise sales to raise additional funds. Sponsorship publication across all event promotional media',
                'date' => '2025-04-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'title' => 'Countdown Campaign & Offline Promotion',
                'description' => 'The countdown campaign begins 60 days before the event with teasers and videos on social media. Event guidelines are sent to speakers, technical meetings are conducted, and additional promotion is carried out through media partners and industry influencers',
                'date' => '2025-05-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'title' => 'Final Logistics and Coordination',
                'description' => 'Finalizing logistics and technical arrangements, coordinating with sponsors, closing participant registrations, and placing sponsors in promotional materials',
                'date' => '2025-06-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'title' => 'Final Preparations and Event Execution',
                'description' => 'Confirming speaker requirements and arrivals, briefing the committee and service providers, placing sponsor branding, coordinating sponsor booths, and executing the PAQS International Congress 2025 according to schedule',
                'date' => '2025-07-01',
                'icon' => "<x-sui-document />",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
