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
                            <h2 class="font-semibold"><span class="text-warna-02">Registration</span> PAQS Congress 2025
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- team-area -->
    <section id="team" class="team-area p-relative pt-120 pb-120 fix row">
        <form method="POST" action="{{ url('/order/store') }}" class="col-md-6 mx-auto">
            @csrf
            <div class="shadow-xl bg-white rounded-xl border border-blue-900 p-4 mb-4">
                <div class="mb-8">
                    <span for="title" class="text-warna-02 text-[16px] font-semibold block mb-2">Title <span
                            class="text-red-700">*</span></span>
                    @error('title')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="radio" name="title" id="title" value="Mr."
                        <?= old('title') == 'Mr.' ? 'checked' : '' ?>>
                    <label for="title" class="text-warna-02 text-[16px] font-semibold mr-4">Mr.</label>
                    <input type="radio" name="title" id="title2" value="Mrs."
                        <?= old('title') == 'Mrs.' ? 'checked' : '' ?>>
                    <label for="title2" class="text-warna-02 text-[16px] font-semibold">Mrs.</label>
                </div>
                <div class="mb-8">
                    <label for="first_name" class="text-warna-02 text-[16px] font-semibold">First Name <span
                            class="text-red-700">*</span></label>
                    @error('first_name')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="last_name" class="text-warna-02 text-[16px] font-semibold">Last Name <span
                            class="text-red-700">*</span></label>
                    @error('last_name')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="company" class="text-warna-02 text-[16px] font-semibold">Company / Organization <span
                            class="text-red-700">*</span></label>
                    @error('company')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="text" name="company" id="company" value="{{ old('company') }}"
                        class=" rounded-md w-full border-b text-[16px]">
                </div>
                <div class="mb-8">
                    <label for="address" class="text-warna-02 text-[16px] font-semibold">Address <span
                            class="text-red-700">*</span></label>
                    @error('address')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <textarea name="address" id="address" cols="30" rows="2" class="rounded-md w-full border-b text-[16px]">{{ old('address') }}</textarea>
                </div>
                <div class="mb-8">
                    <label for="telephone" class="text-warna-02 text-[16px] font-semibold">Telephone / Mobile <span
                            class="text-red-700">*</span></label>
                    @error('telephone')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="tel" name="telephone" id="telephone"
                        class=" rounded-md w-full border-b text-[16px]" value="{{ old('telephone') }}">
                </div>
                <div class="">
                    <label for="email" class="text-warna-02 text-[16px] font-semibold">Email <span
                            class="text-red-700">*</span></label>
                    @error('email')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="email" name="email" id="email"
                        class="rounded-md w-full border-b text-[16px]" value="{{ old('email') }}">
                </div>
            </div>

            <div class="shadow-xl bg-white rounded-xl border border-blue-900 p-4 mb-4">
                <div class="mb-8">
                    <label for="category" class="text-warna-02 text-[16px] font-semibold">Category <span
                            class="text-red-700">*</span></label>
                    @error('category')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <select name="category" id="category"
                        class="rounded-md w-full border-b text-[16px] outline-none">
                        <option disabled hidden selected>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" <?php if (old('category') == $category->id) {
                                echo 'selected';
                            }
                            ?>>{{ $category->name }}
                                [BND{{ $category->price }}]
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-8">
                    <div for="company" class="text-warna-02 text-[16px] font-semibold">Add on</div>
                    @foreach ($addons as $addon)
                        <input type="checkbox" name="addon_id" id="addon_id" class="rounded-md"
                            value="{{ $addon->id }}" <?php if (old('addon_id') == $addon->id) {
                                echo 'checked';
                            } ?>>

                        <label for="addon_id" class="text-warna-02 text-[16px]">{{ $addon->name }}
                            [BND{{ $addon->price }}]</label>
                    @endforeach
                </div>
                <div class="mb-8">
                    <label for="quantity" class="text-warna-02 text-[16px] font-semibold">Quantity <span
                            class="text-red-700">*</span></label>
                    @error('quantity')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="number" name="quantity" id="quantity"
                        class=" rounded-md w-full border-b text-[16px]" value="{{ old('quantity') }}">
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
