@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="event fix pt-120 pb-120 max-w-[100rem] mx-auto">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Event</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-40">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Congress
                        Information</span>
                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">General
                        Information
                    </h2>
                </div>
            </div>
        </div>

        {{-- Wheater --}}
        <div class="bg-white shadow rounded-lg p-4 w-full max-w-sm mx-auto">
            @if (isset($weatherData['error']))
                <h2 class="text-xl font-semibold text-center text-red-500">Weather Info Unavailable</h2>
                <p class="text-center text-gray-600">{{ $weatherData['message'] }}</p>
            @else
                <h2 class="text-xl font-semibold text-center">{{ $weatherData['location']['name'] }}</h2>
                <p class="text-center text-gray-600">
                    {{ $weatherData['location']['region'] }}, {{ $weatherData['location']['country'] }}
                </p>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <img src="https:{{ $weatherData['current']['condition']['icon'] }}" alt="Weather Icon"
                        class="w-12 h-12">
                    <p class="ml-3 text-2xl font-bold">{{ $weatherData['current']['temp_c'] }}°C</p>
                </div>

                <p class="text-center text-gray-500">{{ $weatherData['current']['condition']['text'] }}</p>

                <div class="mt-3 text-sm text-gray-700">
                    <p><strong>Feels Like:</strong> {{ $weatherData['current']['feelslike_c'] }}°C</p>
                    <p><strong>Humidity:</strong> {{ $weatherData['current']['humidity'] }}%</p>
                    <p><strong>Wind Speed:</strong> {{ $weatherData['current']['wind_kph'] }} km/h
                        ({{ $weatherData['current']['wind_dir'] }})</p>
                    <p><strong>Pressure:</strong> {{ $weatherData['current']['pressure_mb'] }} mb</p>
                    <p><strong>UV Index:</strong> {{ $weatherData['current']['uv'] }}</p>
                </div>

                <p class="text-xs text-gray-400 text-center mt-3">
                    Last updated: {{ $weatherData['current']['last_updated'] }}
                </p>
            @endif
        </div>



        <div class="container flex flex-col divide-y divide-dashed divide-slate-600 text-slate-900">
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Travel Information</span>
                <p>Starting 09 June 2023, all document requirements for international arrival and domestic travel in the
                    territory of the Republic of Indonesia which include the obligation to download and use the
                    SATUSEHAT and show the Covid-19 vaccine certificate are no longer required.</p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Visa on Arrival (VOA)
                    Activities</span>
                <p>A Visa on Arrival (VOA) can be used to do such activities.
                    1. Tourism visits
                    2. Government officials\' visits
                    3. Business talks and meetings visits
                    4. Purchasing goods visits
                    5. Transit
                </p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Period of Stay</span>
                <p>The period of stay in Indonesia is granted for 30 days. A stay permit derived from this visa is
                    extendable.
                </p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Source</span>
                <p>https://www.imigrasi.go.id/
                    https://www.kemlu.go.id/
                    https://covid19.go.id/en

                </p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Dress Code</span>
                <p>Meetings/Congress: Lounge suit or National Working Attire
                    Luncheon/Dinner: Smart Casual
                </p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Weather & TimeCode</span>
                <p>Climate: Being a tropical country, Indonesia does not have spring, summer, autumn, or winter, instead
                    of just the two seasons of Rainy and Dry, both of which are relative. While there is significant
                    regional variation, in most of the country (including Java and Bali) the dry season is April to
                    October, while the wet season is November to March. However, global warming has made the seasons
                    less predictable. https://www.bmkg.go.id/

                    Time Zone: Jakarta is GMT+7 (7 hours ahead of Greenwich Mean Time).
                </p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Currency & Banking</span>
                <p>• Currency
                    The official currency of Indonesia is Rupiah which is Issued and controlled by the Bank of
                    Indonesia. The currency code for Rupiahs is IDR, and the currency symbol is Rp. By law, all
                    transactions are required to be conducted in rupiah, and information on the daily exchange rate can
                    be found in newspapers or from the internet and online apps. Credit cards are widely accepted in
                    hotels, large restaurants, and large stores.

                    Indonesian banknotes come in denominations of IDR1000, IDR2000, IDR5000, IDR10000, IDR20000,
                    IDR50000, and IDR100000. Coins in circulation include IDR1000, IDR500, IDR200, IDR100, and IDR50.

                    • ATMs:
                    ATMs on the international Plus/Cirrus or Alto networks are common in all major Indonesian cities and
                    tourist destinations. Limitation withdrawal is depending on your respective home bank. Machines are
                    loaded with IDR50,000 denomination notes or IDR100,000 denomination notes, as indicated on the
                    machine; however keep in mind that the bigger notes can be harder to split, especially in rural
                    non-tourist areas. It is also best to withdraw some money from an ATM in major cities before
                    venturing onto more secluded destinations.

                    • Banks:
                    Most international credit card networks are acceptable in Indonesia’s major cities and tourist
                    hotspots like Jakarta, Bandung, Bali, Surabaya, Medan, Yogyakarta, etc.

                    Cards such as JCB (Japan Credit Bureau) is acceptable in Indonesia because it is affiliated with
                    some of Indonesia’s major well-known bank such as BNI (Bank Negara Indonesia), CIMB Niaga, Mandiri,
                    BRI (Bank Rakyat Indonesia). While American Express (Amex) is also acceptable however Amex has fewer
                    affiliated local banks in Indonesia. Bank Danamon is currently one of the local banks affiliated
                    with Amex. The most widely accepted card in all merchants in Indonesia is Visa and Mastercard.

                    There will be instances where stores may not display the symbols of the cards they accept. Be sure
                    to check with the salesperson in the store prior to using your card if your card is acceptable or
                    not.

                </p>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4 relative">Another Travel
                    Information</span>
                <p>Make your preparation for PAQS Congress 2025 complete and have a successful and enjoyable experience.
                    More information: https://www.indonesia.travel/gb/en/general-information.html
                </p>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
