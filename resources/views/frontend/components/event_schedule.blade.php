@php
    use Carbon\Carbon;

    $programmes = [
        (object) ['name' => 'YQS Workshop', 'date' => '2025-08-22'],
        (object) ['name' => 'YQS Dinner', 'date' => '2025-08-22'],
        (object) ['name' => 'YQS Fun Game', 'date' => '2025-08-22'],

        (object) ['name' => 'YQS Technical Visit & City Tour', 'date' => '2025-08-23'],
        (object) ['name' => 'Golf Tournament', 'date' => '2025-08-23'],
        (object) ['name' => 'Committee Meeting', 'date' => '2025-08-23'],

        (object) ['name' => 'Board Meeting', 'date' => '2025-08-24'],
        (object) ['name' => 'Spouse Pogram', 'date' => '2025-08-24'],

        (object) ['name' => 'Opening Congress', 'date' => '2025-08-25'],
        (object) ['name' => 'Plenary Session', 'date' => '2025-08-25'],

        (object) ['name' => 'Plenary Session', 'date' => '2025-08-26'],
        (object) ['name' => 'Gala Dinner', 'date' => '2025-08-26'],
    ];

    $groupedProgrammes = collect($programmes)->groupBy('date');
@endphp

<div class="flex flex-col flex-wrap justify-center items-start w-full md:w-2/3 lg:w-1/2 mx-auto">
    @foreach ($groupedProgrammes as $date => $items)
        <div
            class="flex flex-col md:flex-row justify-center items-start py-2 md:p-4 relative before:contents[''] before:w-1 before:h-full before:bg-warna-01 before:opacity-20 before:absolute before:top-0 before:left-0 md:before:left-1/2 before:-translate-x-1/2 hover:before:opacity-100 cursor-pointer group w-full ">
            <div
                class="pl-4 md:p-4 md:group-hover:-translate-x-4 duration-300 group-hover:text-warna-01 w-full md:w-1/2 md:text-right my-auto">
                @php
                    // Ubah format tanggal dengan nama hari dalam bahasa Indonesia
                    \Carbon\Carbon::setLocale('en');
                    $formattedDate = Carbon::parse($date)->translatedFormat('F d, Y');
                    $formattedDay = Carbon::parse($date)->translatedFormat('l');
                @endphp
                <span class="block font-bold md:font-normal">{{ $formattedDate }}</span>
                <span class="block font-bold md:font-normal">{{ $formattedDay }}</span>
            </div>

            @php
                $warna = '';
                if ($date == '2025-08-22') {
                    $warna = 'before:bg-sky-400';
                } elseif ($date == '2025-08-23') {
                    $warna = 'before:bg-green-400';
                } elseif ($date == '2025-08-24') {
                    $warna = 'before:bg-yellow-400';
                } elseif ($date == '2025-08-25') {
                    $warna = 'before:bg-red-500';
                } elseif ($date == '2025-08-26') {
                    $warna = 'before:bg-warna-temp-02';
                }
            @endphp
            <div
                class="ml-4 w-full md:w-1/2 flex flex-col p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 {{ $warna }} drop-shadow-lg before:rounded-2xl hover:before:translate-y-2 before:duration-300 mb-20 md:mb-0">
                <div class="flex flex-col flex-1 p-2 py-4 md:px-4 bg-white rounded-xl shadow-lg h-auto relative">
                    <ul>
                        @foreach ($items as $programme)
                            <li class="block lg:text-nowrap">• {{ $programme->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div
                class="absolute w-2 h-2 bg-warna-01 top-1/2 left-0 -translate-x-1/2 md:left-1/2 -translate-y-1/2 rounded-full group-hover:scale-150 duration-300">
            </div>
        </div>
    @endforeach
</div>
