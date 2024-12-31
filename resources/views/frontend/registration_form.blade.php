@include('frontend.components.header')
@include('frontend.components.navbar')
<main>
    <!-- breadcrumb-area -->
    <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix"
        style="background-image:url({{ asset('img/forum.jpg') }})">
        <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img/doddle_6.png" alt="shape"></div>
        <div class="slider-shape ss-three layer" data-depth="0.40"><img src="img/doddle_9.png" alt="shape"></div>
        <div class="slider-shape ss-four layer" data-depth="0.60"><img src="img/doddle_7.png" alt="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">

                        <div class="breadcrumb-title mb-30">
                            <h2 class="font-semibold"><span class="text-warna-02">Registration</span> Brunei Residents
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- team-area -->
    <section id="team" class="team-area p-relative pt-120 pb-120 fix row">
        <form method="POST" action="{{ url('/order_store') }}" class="col-md-6 mx-auto">
            @csrf
            <div class="shadow-xl bg-white rounded-xl border border-blue-900 p-4 mb-4">
                <div class="mb-8">
                    <label for="title" class="text-warna-02 text-[16px] font-semibold">Title <span
                            class="text-red-700">*</span></label>
                    <input type="text" name="title" id="title" class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="first_name" class="text-warna-02 text-[16px] font-semibold">First Name <span
                            class="text-red-700">*</span></label>
                    <input type="text" name="first_name" id="first_name"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="last_name" class="text-warna-02 text-[16px] font-semibold">Last Name <span
                            class="text-red-700">*</span></label>
                    <input type="text" name="last_name" id="last_name"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="company" class="text-warna-02 text-[16px] font-semibold">Company / Organization <span
                            class="text-red-700">*</span></label>
                    <input type="text" name="company" id="company" class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="address" class="text-warna-02 text-[16px] font-semibold">Address <span
                            class="text-red-700">*</span></label>
                    <textarea name="address" id="address" cols="30" rows="2" class="rounded-md w-full border-b text-[16px]"></textarea>
                </div>
                <div class="mb-8">
                    <label for="telephone" class="text-warna-02 text-[16px] font-semibold">Telephone / Mobile <span
                            class="text-red-700">*</span></label>
                    <input type="tel" name="telephone" id="telephone"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="">
                    <label for="email" class="text-warna-02 text-[16px] font-semibold">Email <span
                            class="text-red-700">*</span></label>
                    <input type="email" name="email" id="email" class="rounded-md w-full border-b text-[16px]">
                </div>
            </div>

            <div class="shadow-xl bg-white rounded-xl border border-blue-900 p-4 mb-4">
                <div class="mb-8">
                    <label for="category" class="text-warna-02 text-[16px] font-semibold">Category <span
                            class="text-red-700">*</span></label>
                    <select name="category" id="category" class="rounded-md w-full border-b text-[16px] outline-none">
                        <option disabled hidden selected>Select Category</option>
                        <option value="PUJA Member with Gala Dinner">PUJA Member with Gala Dinner [BND400]</option>
                        <option value="Non-PUJA Member with Gala Dinner">Non-PUJA Member with Gala Dinner [BND500]
                        </option>
                        <option value="Student (Conference Only)">Student (Conference Only) [BND100]</option>
                        <option value="PAQS Golf 2024">PAQS Golf 2024 [BND250]</option>
                    </select>
                </div>
                <div class="mb-8">
                    <div for="company" class="text-warna-02 text-[16px] font-semibold">Add on <span
                            class="text-red-700">*</span></div>
                    <input type="checkbox" name="add_on" id="add_on" class=" rounded-md">
                    <label for="add_on" class="text-warna-02 text-[16px]">PAQS Golf 2024
                        [BND250]</label>
                </div>
                <div class="mb-8">
                    <label for="quantity" class="text-warna-02 text-[16px] font-semibold">Quantity <span
                            class="text-red-700">*</span></label>
                    <input type="number" name="quantity" id="quantity"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn">Check Out</button>
                </div>
            </div>
        </form>
    </section>
    <!-- team-area-end -->
</main>
@include('frontend.components.footer')
