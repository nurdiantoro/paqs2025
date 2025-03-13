@php
    use Carbon\Carbon;

    $paqsMeetings = [
        (object) [
            'name' => 'Golf Tournament',
            'date' => '2025-08-23',
            'time_1' => '07.30',
            'time_2' => '13.00',
        ],
        (object) [
            'name' => 'Education and Research Committee Meeting',
            'date' => '2025-08-23',
            'time_1' => '13.00',
            'time_2' => '15.00',
        ],
        (object) [
            'name' => 'Sustainability and BIM Committee Meeting',
            'date' => '2025-08-23',
            'time_1' => '15.00',
            'time_2' => '17.30',
        ],
    ];
@endphp

<div class="">
    @foreach ($paqsMeetings as $paqsMeeting)
        <div
            class="relative w-full group flex flex-row justify-between items-center before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 after:contents[''] after:w-4 after:h-4 after:bg-sky-400  after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full py-2">
            <div class="w-[49%] group-hover:bg-slate-700 group-hover:text-white p-3 rounded-lg mr-6 md:mr-12 text-right">
                {{ $paqsMeeting->time_1 }}
                <?php
                if ($paqsMeeting->time_2 != null) {
                    echo ' - ' . $paqsMeeting->time_2;
                }
                ?>
            </div>
            <div class="w-[49%] group-hover:bg-slate-700 group-hover:text-white p-3 rounded-lg ml-6 md:ml-12">
                {{ $paqsMeeting->name }}</div>
        </div>
    @endforeach
</div>
