<?php

namespace Database\Seeders;

use App\Models\Speaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Speaker::insert([
            [
                'name' => 'Prof. Dr. (H.C.). Ir. Mohammed Ali Berawi, M.Eng.Sc., Ph.D.',
                'title' => NULL,
                'image' => 'Prof. Berawi.png',
                'description' => "Prof. Dr. (H.C.) Ir. Mohammed Ali Berawi, M.Eng.Sc, Ph.D, currently serves as the Deputy for Green and Digital Transformation at the Nusantara Capital Authority. He has also been actively teaching in the Department of Civil Engineering, Faculty of Engineering, Universitas Indonesia, since 2008. Previously, Prof. Ali Berawi held the position of Secretary to a Member of the Advisory Council to the President of Indonesia (2020–2022).<br>
Prof. Mohammed Ali Berawi completed his doctoral studies in Value Engineering and Innovation at Oxford Brookes University, UK. He holds a professional engineering degree (Ir.) from Universitas Indonesia and a Master of Engineering Science (M.Eng.Sc.) from the University of Malaya. In 2024, he was awarded an Honorary Doctorate from Peter the Great Saint Petersburg Polytechnic University, Russia.<br>
Prof. Mohammed Ali Berawi is a professor in the Department of Civil Engineering, Faculty of Engineering, Universitas Indonesia. He has also been a Visiting Scholar at the Department of Civil and Environmental Engineering, University of Washington, USA (2017), and a Visiting Professor at the University of Malaya, Malaysia (2023–2024). Additionally, he served as a Professor at the Graduate School of Industrial Economics, Peter the Great Saint Petersburg Polytechnic University, Russia (2019–2023). Prof. Mohammed Ali Berawi has been listed among the Top 2% of the World's Best Scientists by Elsevier and Stanford University for four consecutive years, from 2021 to 2024.<br>
He is the Chairperson of the Indonesian Association of Lecturers (ADI) (2022–2027), Chair of the Supervisory Board for the Forum of Science and Technology Professional Organizations (FOPI) (2023–2026), Director of the Center for Sustainable Infrastructure Development (CSID), Executive Director of the ASEAN University Network for Sustainable City and Urban Development (AUN-SCUD), and Chair of the Smart Cities Working Group under the Association of Pacific Rim Universities (APRU-SCL).
"
            ],
            [
                'name' => 'Eugene Seah (A/Prof Dr)',
                'title' => 'CEO DLS Consultancy Pte Ltd',
                'image' => "Dr Eugene Seah's.png",
                'description' => "Eugene holds over 25 years of experience in Project Management, Cost and Contracts Management, Sustainability, Digital and Technology as well as Construction Law and Alternate Dispute Resolution. He has supervision and works a wide range of developments including commercial buildings, hotels, residential, institutional, airports and infrastructure project, industrial, mobility, TOD and sports complexes. He has vast experience in the construction sector and is well respected in the academic community as well. Eugene taught at the National University of Singapore (MSc PM) since 2008 to 2023 and volunteers teaching at other Local and Foreign Universities. In his past companies, Eugene was tasked to build up and carry out cost research and cost data analysis and was in charge of the Building and M&E Cost data build up. In his experience, he has worked in international design and engineering companies and has experience in managing public listed companies His strengths are his networks, the understanding of people as a Coach and his business entrepreneurship, keeping abreast with the latest in the AEC sector."
            ],
            [
                'name' => 'SR DR ONG SEE LIAN, KMN',
                'title' => 'Director & Strategic Advisor Turner & Townsend Malaysia',
                'image' => 'ONG SEE LIAN.png',
                'description' => "Sr. Dr. Ong has an illustrious career spanning over 50 years in both the public and private sectors of the property and construction industry. He is currently the Director and Strategic Adviser of Turner and Townsend Malaysia.<br>
Sr. Dr. Ong is an active member of several professional institutions in Malaysia and internationally and has served in various capacities. Some of his notable appointments are:
<ul>
<li>
President of the Royal Institution of Surveyors Malaysia (RISM) for 2003 – 2004 session.</li>
<li>
Chairman of PAQS from 2003 to 2005.</li>
<li>
Board member of the Board of Quantity Surveyors Malaysia (2003-2010)</li>
<li>
130th Global President of the Royal Institution of Chartered Surveyors (2011-2012). He is the first non-British passport holder, first Asian and the first Malaysian to be elected as the Global President in the 143-year history of RICS.</li>
<li>
Chairman of Commission 10 (Construction Economics and Management) of Federation of International Surveyors (FIG), (2015-2018).</li>
<li>
Chairman of Standard Setting Committee of International Construction Management Standard (ICMS) – (2015 to 2020).</li>
<li>
Member of Technical Committee on the revision of CIDB Standard Forms of Contract (from 2022 until now)</li>
<li>
Member of Expert Committee of the Asian International Arbitration Centre (AIAC) Standard Forms of Contract</li>
</ul>"
            ],
        ]);
    }
}
