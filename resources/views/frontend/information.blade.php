@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="event fix pt-120 pb-120 md:px-80">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Event</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-80">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Congress
                        Information</span>
                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">General
                        Information
                    </h2>
                </div>
            </div>
        </div>
        <div class="container flex flex-col divide-y divide-dashed divide-slate-600 text-slate-900">
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4  relative ">Visa
                    and Arrival</span>
                <ul class="list-disc ml-4 text-lg">
                    <li class="list-disc"><strong>Essential: </strong>Ensure your passport is valid for at least 6
                        months after your
                        arrival date.
                    </li>
                    <li class="list-disc">Visa Requirements: Check visa requirements on the Ministry of Foreign Affairs
                        website for
                        details and processing times.
                    </li>
                    <li class="list-disc">E-Arrival Card: Don’t forget to complete your E-arrival card online before
                        arriving in Brunei.
                    </li>
                </ul>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4  relative ">Dress Code</span>
                <ul class="list-disc ml-4 text-lg">
                    <li class="list-disc"><strong>Meetings/Congress:</strong> Lounge suit or National Working Attire
                    </li>
                    <li class="list-disc">Luncheon/Dinner: Smart Casual
                    </li>
                </ul>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4  relative ">Car Rentals</span>
                <span class="block text-lg">Self-driven or chauffeur-driven cars are available at major hotels and the
                    airport.</span>
                <ul class="list-disc ml-4 text-lg">
                    <li class="list-disc">L&W Car Rental: +673 242 4246 / +673 8752783
                    </li>
                    <li class="list-disc">Avis Car Rental: +673 233 3298
                    </li>
                    <li class="list-disc">Auto X Car Rent: +673 812 3682
                    </li>
                    <li class="list-disc">Hertz Car Rental: +673 872 6000
                    </li>
                    <li class="list-disc">Indera En Voy Transportation: +673 873 1621
                    </li>
                </ul>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4  relative ">Taxis</span>
                <span class="block text-lg">Taxis are readily available in the capital and at the airport. A surcharge
                    applies for rides between 6:30 pm and 6:00 am. For taxi reservations, call +673 222 2214 or +673 222
                    6853.</span>
            </div>
            <div class="py-8">
                <span class="text-4xl text-warna-01 inline-block font-bold mb-4  relative ">Dart</span>
                <span class="block text-lg">Brunei’s ride-sharing app is Dart (Uber and Grab are unavailable). Download
                    the app for convenient rides. More information can be found on the website:
                    https://www.dartbrunei.com/</span>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
