<div class="">
    <nav class="" data-animation="fadeInDown animated" data-delay=".2s">
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active show" id="day-one" data-toggle="tab" href="#one" role="tab"
                aria-selected="true">
                <div class="nav-content">
                    <span>Day 1</span>
                </div>
            </a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#two" role="tab"
                aria-selected="false">
                <div class="nav-content">
                    <span>Day 2</span>
                </div>
            </a>
        </div>
    </nav>

    <div class="tab-content py-3 md:px-3 px-sm-0 " data-animation="fadeInDown animated" data-delay=".2s"
        id="nav-tabContent">
        <div class="tab-pane fade active show relative" id="one" role="tabpanel" aria-labelledby="day-one">
            @foreach ($itinerary_day1 as $day_1)
                <div
                    class="relative w-full group flex flex-row justify-between items-center before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 after:contents[''] after:w-4 after:h-4 after:bg-sky-400  after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full py-2">
                    <div
                        class="w-[49%] group-hover:bg-slate-700 group-hover:text-white p-3 rounded-lg mr-6 md:mr-12 text-right">
                        {{ date('h.ia', strtotime($day_1->time_1)) }}
                        <?php
                        if ($day_1->time_2 != null) {
                            echo ' - ' . date('h.ia', strtotime($day_1->time_2));
                        }
                        ?>
                    </div>
                    <div class="w-[49%] group-hover:bg-slate-700 group-hover:text-white p-3 rounded-lg ml-6 md:ml-12">
                        {{ $day_1->title }}</div>
                </div>
            @endforeach
        </div>

        <div class="tab-pane fade relative" id="two" role="tabpanel" aria-labelledby="day-one">
            @foreach ($itinerary_day2 as $day_2)
                <div
                    class="relative w-full group flex flex-row justify-between items-center before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 after:contents[''] after:w-4 after:h-4 after:bg-sky-400  after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full py-2">
                    <div
                        class="w-[49%] group-hover:bg-slate-700 group-hover:text-white p-3 rounded-lg mr-6 md:mr-12 text-right">
                        {{ date('h.ia', strtotime($day_2->time_1)) }}
                        - {{ date('h.ia', strtotime($day_2->time_2)) }}</div>
                    <div class="w-[49%] group-hover:bg-slate-700 group-hover:text-white p-3 rounded-lg ml-6 md:ml-12">
                        {{ $day_2->title }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
