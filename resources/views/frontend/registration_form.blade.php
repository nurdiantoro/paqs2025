@include('frontend.components.header')
@include('frontend.components.navbar')
<main>
    <!-- breadcrumb-area -->
    <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix"
        style="background-image:url({{ asset('img/forum.jpg') }})">
        <div class="slider-shape ss-one layer" data-depth="0.10"><img src="{{ asset('img/doddle_6.png') }}" alt="shape">
        </div>
        <div class="slider-shape ss-three layer" data-depth="0.40"><img src="{{ asset('img/doddle_9.png') }}"
                alt="shape"></div>
        <div class="slider-shape ss-four layer" data-depth="0.60"><img src="{{ asset('img/doddle_7.png') }}"
                alt="shape"></div>
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
        <form method="POST" action="{{ url('/registration/payment_method') }}" class="col-md-6 mx-auto">
            @csrf
            <div class="shadow-xl bg-white rounded-xl border border-blue-900 p-4 mb-4">

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="mb-8">
                        <span for="title" class="text-warna-02 text-[16px] font-semibold block mb-2">Salutation <span
                                class="text-red-700">*</span></span>
                        @error('title')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="flex flex-row gap-2">
                            <div class="flex flex-row gap-2 items-center group">
                                <input type="radio" name="title" id="title" value="Mr."
                                    class="peer mr-2 hidden" <?= old('title') == 'Mr.' ? 'checked' : '' ?>>
                                <label for="title"
                                    class="text-warna-02 text-[16px] font-semibold opacity-50 py-2 px-4 bg-sky-50 border-[2px] border-sky-50 rounded peer-checked:opacity-100 peer-checked:border-sky-300  group-hover:opacity-100">Mr.</label>
                            </div>

                            <div class="flex flex-row gap-2 items-center group">
                                <input type="radio" name="title" id="title2" value="Mrs."
                                    class="peer mr-2 hidden" <?= old('title') == 'Mrs.' ? 'checked' : '' ?>>
                                <label for="title2"
                                    class="text-warna-02 text-[16px] font-semibold opacity-50 py-2 px-4 bg-sky-50 border-[2px] border-sky-50 rounded peer-checked:opacity-100 peer-checked:border-sky-300  group-hover:opacity-100">Mrs.</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="mb-8 flex-1">
                        <label for="first_name" class="text-warna-02 text-[16px] font-semibold">First Name <span
                                class="text-red-700">*</span></label>
                        @error('first_name')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                            class="custom_form">
                    </div>

                    <div class="mb-8 flex-1">
                        <label for="last_name" class="text-warna-02 text-[16px] font-semibold">Last Name <span
                                class="text-red-700">*</span></label>
                        @error('last_name')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                            class="custom_form">
                    </div>


                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="mb-8 flex-1">
                        <label for="email" class="text-warna-02 text-[16px] font-semibold">Email <span
                                class="text-red-700">*</span></label>
                        @error('email')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="email" name="email" id="email" border-slate-300 shadow-lg
                            class="custom_form" value="{{ old('email') }}">
                    </div>

                    <div class="mb-8 flex-1">
                        <label for="telephone" class="text-warna-02 text-[16px] font-semibold">Telephone / Mobile <span
                                class="text-red-700">*</span></label>
                        @error('telephone')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="tel" name="telephone" id="telephone" border-slate-300 shadow-lg
                            class="custom_form" value="{{ old('telephone') }}">
                    </div>

                    <div class="mb-8 flex-1">
                        <label for="company" class="text-warna-02 text-[16px] font-semibold">Company / Organization
                            <span class="text-red-700">*</span></label>
                        @error('company')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="text" name="company" id="company" value="{{ old('company') }}"
                            class="custom_form">
                    </div>
                </div>

                <div class="mb-8">
                    <label for="address" class="text-warna-02 text-[16px] font-semibold">Address <span
                            class="text-red-700">*</span></label>
                    @error('address')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <textarea name="address" id="address" cols="30" rows="2" border-slate-300 shadow-lg
                        class="custom_form">{{ old('address') }}</textarea>
                </div>


                <div class="mb-8">
                    <label for="member_id" class="text-warna-02 text-[16px] font-semibold">Are you a
                        member?</label>
                    @error('title')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-row gap-2 items-center group">
                            <input type="radio" name="member" id="member" value=1 class="peer mr-2 hidden"
                                <?= old('member') == 1 ? 'checked' : '' ?>>
                            <label for="member"
                                class="text-warna-02 text-[16px] font-semibold opacity-50 py-2 px-4 bg-sky-50 border-[2px] border-sky-50 rounded peer-checked:opacity-100 peer-checked:border-sky-300  group-hover:opacity-100">Yes</label>
                        </div>

                        <div class="flex flex-row gap-2 items-center group">
                            <input type="radio" name="member" id="member2" value=0 class="peer mr-2 hidden"
                                <?= old('member') == 0 || old('member') === null ? 'checked' : '' ?>>
                            <label for="member2"
                                class="text-warna-02 text-[16px] font-semibold opacity-50 py-2 px-4 bg-sky-50 border-[2px] border-sky-50 rounded peer-checked:opacity-100 peer-checked:border-sky-300 group-hover:opacity-100">No</label>
                        </div>
                    </div>
                </div>

                <div class="flex-col md:flex-row gap-4" id="member_details" style="display: none">
                    <div class="mb-8 flex-1">
                        <label for="association" class="text-warna-02 text-[16px] font-semibold">Name of Association
                            <span class="text-red-700">*</span></label>
                        @error('association')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <select name="association" id="association" border-slate-300 shadow-lg class="custom_form">
                            <option disabled hidden selected>Select Association</option>
                            @foreach ($associations as $association)
                                <option value="{{ $association->id }}" <?php if (old('association') == $association->id) {
                                    echo 'selected';
                                }
                                ?>>
                                    <span>{{ $association->name }}</span>
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-8 flex-1">
                        <label for="member_id" class="text-warna-02 text-[16px] font-semibold">Member ID
                            <span class="text-red-700">*</span></label>
                        @error('member_id')
                            <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="text" name="member_id" id="member_id" value="{{ old('member_id') }}"
                            class="custom_form">
                    </div>
                </div>

            </div>

            <div class="shadow-xl bg-white rounded-xl border border-blue-900 p-4 mb-4">
                <div class="mb-8">
                    <label for="category" class="text-warna-02 text-[16px] font-semibold">Category <span
                            class="text-red-700">*</span></label>
                    @error('category')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <select name="category" id="category" border-slate-300 shadow-lg class="custom_form">
                        <option disabled hidden selected>Select Category</option>
                        @foreach ($categories as $type => $items)
                            <optgroup label="{{ $type }}">
                                @foreach ($items as $category)
                                    <option value="{{ $category->id }}"
                                        class="{{ $category->is_member ? 'toggle_category' : '' }}"
                                        {{ old('category') == $category->id ? 'selected' : '' }}
                                        {{ $category->is_member ? 'hidden' : '' }}>
                                        {{ $category->name }} -
                                        <strong class="text-warna-01">
                                            {{ $category->currency . ' ' . number_format($category->price, 0, ',', '.') }}
                                        </strong>
                                    </option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>

                <div class="mb-8">
                    <label for="quantity" class="text-warna-02 text-[16px] font-semibold">Quantity <span
                            class="text-red-700">*</span></label>
                    @error('quantity')
                        <span class="text-danger block m-0 text-sm">{{ $message }}</span>
                    @enderror
                    <input type="number" name="quantity" id="quantity" border-slate-300 shadow-lg
                        class="custom_form" value="{{ old('quantity') }}">
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
