<x-guest-layout>
    <div class="h-screen flex items-center justify-center">
        @if ($campaign->widget_id == 1)
            {{-- 6 --}}
            <section>
                <div class="w-screen  bg-gray-50">
                    <div class="my-10 mx-auto max-w-screen-md px-10 py-16">
                        <div class="flex w-full flex-col">
                            <div class="flex flex-col sm:flex-row">
                                <h1 class="max-w-sm text-3xl font-bold text-blue-900">
                                    What people think <br />
                                    about us
                                </h1>
                                <div class="my-4 rounded-xl bg-white py-2 px-4 shadow sm:my-0 sm:ml-auto">
                                    <div class="flex h-16 items-center text-2xl font-bold text-blue-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        4.7
                                    </div>
                                    <p class="text-sm text-gray-500">Average User Rating</p>
                                </div>
                            </div>
                            <div class="text-gray-700">
                                <p class="font-medium">Reviews</p>
                                <ul class="mb-6 mt-2 space-y-2">
                                    <li class="flex items-center text-sm font-medium">
                                        <span class="w-3">5</span><span class="mr-4 text-yellow-400"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg></span>
                                        <div class="mr-4 h-2 w-96 overflow-hidden rounded-full bg-gray-300">
                                            <div class="h-full w-10/12 bg-yellow-400"></div>
                                        </div>
                                        <span class="w-3">56</span>
                                    </li>
                                    <li class="flex items-center text-sm font-medium">
                                        <span class="w-3">4</span><span class="mr-4 text-yellow-400"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg></span>
                                        <div class="mr-4 h-2 w-96 overflow-hidden rounded-full bg-gray-300">
                                            <div class="h-full w-8/12 bg-yellow-400"></div>
                                        </div>
                                        <span class="w-3">12</span>
                                    </li>
                                    <li class="flex items-center text-sm font-medium">
                                        <span class="w-3">3</span><span class="mr-4 text-yellow-400"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg></span>
                                        <div class="mr-4 h-2 w-96 overflow-hidden rounded-full bg-gray-300">
                                            <div class="h-full w-1/12 bg-yellow-400"></div>
                                        </div>
                                        <span class="w-3">4</span>
                                    </li>
                                    <li class="flex items-center text-sm font-medium">
                                        <span class="w-3">2</span><span class="mr-4 text-yellow-400"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg></span>
                                        <div class="mr-4 h-2 w-96 overflow-hidden rounded-full bg-gray-300">
                                            <div class="h-full w-0 bg-yellow-400"></div>
                                        </div>
                                        <span class="w-3">0</span>
                                    </li>
                                    <li class="flex items-center text-sm font-medium">
                                        <span class="w-3">1</span><span class="mr-4 text-yellow-400"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg></span>
                                        <div class="mr-4 h-2 w-96 overflow-hidden rounded-full bg-gray-300">
                                            <div class="h-full w-1/12 bg-yellow-400"></div>
                                        </div>
                                        <span class="w-3">5</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                                <button class="w-36 rounded-full bg-blue-900 py-3 text-white font-medium">Write a
                                    review</button>
                            </a>
                        </div>
                    </div>
                </div>

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 2)
            {{-- 2 --}}
            <section>
                <div class="bg-gradient-to-b from-[#D0E8FF] to-[#FBCABA] text-gray-700 py-20">
                    <div class="  flex flex-col md:flex-row my-6 md:my-24">
                        <div class="flex flex-col w-full lg:w-1/3 p-8">
                            <p class="ml-6 text-orange-300 text-lg uppercase tracking-loose">REVIEW</p>
                            <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Leave us a
                                feedback!
                            </p>
                            <p class="text-sm md:text-base leading-snug text-orange-500 text-opacity-100">
                                Please provide your valuable feedback and something something ...
                            </p>
                        </div>
                        <div class="flex flex-col w-full lg:w-2/3 justify-center">
                            <div class="container w-full px-4">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                            <div class="flex-auto p-5 lg:p-10">
                                                <h4 class="text-2xl mb-4 text-black font-semibold">Have a
                                                    suggestion?
                                                </h4>
                                                <form id="feedbackForm" action="{{ route('review.store') }}"
                                                    method="post">

                                                    @if (Session::has('success'))
                                                        <div class="bg-green-100 text-green-500 p-3 rounded-lg">
                                                            {{ Session::get('success') }}
                                                        </div>
                                                    @endif
                                                    <div class="relative w-full mb-3">

                                                        <input type="hidden" name="campaignId"
                                                            value="{{ $campaign->id }}">
                                                        <input type="hidden" name="siteId"
                                                            value="{{ $campaign->site_id }}">
                                                        <label
                                                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                            for="email">Email</label>

                                                        <input type="email" name="email" id="email"
                                                            class="border-0 px-3 py-3 rounded text-sm shadow w-full
                    bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400"
                                                            placeholder=" " style="transition: all 0.15s ease 0s;"
                                                            required />
                                                    </div>
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                            for="message">Message</label>
                                                        <textarea maxlength="300" name="message" id="feedback" rows="4" cols="80"
                                                            class="border-0 px-3 py-3 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
                                                            placeholder="" required></textarea>
                                                    </div>
                                                    <div class="text-center mt-6">
                                                        <button id="feedbackBtn"
                                                            class="bg-orange-300 text-black text-center mx-auto active:bg-orange-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                            type="submit"
                                                            style="transition: all 0.15s ease 0s;">Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 3)
            {{-- 1 --}}
            <section class="w-full">
                <section class="rounded-md p-6 text-center  md:p-12 md:text-left" {{-- style="background-image: url(https://tecdn.b-cdn.net/img/Photos/Others/background2.jpg)" --}}>
                    <div class="flex justify-center flex-col md:flex-row overflow-x-auto  pl-10">

                        @foreach ($reviews as $review)
                            <div class="max-w-3xl space-x-5  flex flex-row">
                                <div
                                    class="m-4 block rounded-lg bg-white p-6 shadow-lg flex-grow w-full ">
                                    <!--Testimonial-->
                                    <div class="md:flex md:flex-row">
                                        <div
                                            class="mx-auto mb-6 flex w-36 items-center justify-center md:mx-0 md:w-96 lg:mb-0">

                                        </div>
                                        <div class="md:ml-2 ">
                                            <p class="mb-6 font-light text-neutral-500 dark:text-neutral-300 ">
                                                "{{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}"
                                            </p>

                                            <div class="flex justify-center items-center space-x-1">
                                                <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                    class="rounded-full shadow-md d3 w-12 h-12" alt="woman avatar" />
                                                    <div>
                                                        <p
                                                            class=" text-xl font-semibold text-gray-800">
                                                            {{ $review->private_feed_back_ans['name'] ?: 'Client' }}
                                                        </p>
                                                        <p class="mb-0 font-semibold text-neutral-500 ">
                                                            {{ $review->contact_info_ans['email'] ?: $review->private_feed_back_ans['email'] }}
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="text-center py-5">
                        <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                            <button
                                class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                                a
                                review</button>
                        </a>
                    </div>
                </section>

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 4)
            {{-- 8 --}}

            <section class="px-4 h-full overflow-y-auto">
                <div class="mx-auto max-w-3xl text-center">
                    <h3 class="mb-6 text-3xl font-bold">Testimonials</h3>
                    <p class="mb-6 pb-2 text-neutral-500 dark:text-neutral-300 md:mb-12">
                        "Discover what others are saying. Explore the voices that shape our community and share your own
                        experience with us."
                    </p>
                </div>

                <div class="grid gap-12 text-center md:grid-cols-2">
                    @foreach ($reviews as $review)
                        <div class="mb-6 md:mb-0">
                            <div class="mb-6 flex justify-center">
                                <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                    class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                            </div>
                            <p class="my-4 text-xl text-neutral-500 dark:text-neutral-300">
                                {{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}
                            </p>
                            <p class="italic">- {{ $review->private_feed_back_ans['name'] ?: 'Client' }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>
            </section>

            {{--  --}}
        @elseif ($campaign->widget_id == 5)
            {{-- 11 --}}
            <section class="w-full">
                <div id="default-carousel" class="relative w-full bg-gray-50"
                    style="background-image: url(https://tecdn.b-cdn.net/img/Photos/Others/background2.jpg)"
                    data-carousel="slide">
                    <div class="relative h-60 overflow-hidden rounded-lg md:h-[500px]">
                        @foreach ($reviews as $review)
                            <div class="hidden duration-700 ease-in-out py-5" data-carousel-item>
                                <div class="h-full bg-slate-900 bg-opacity-25 w-[80%] rounded-lg  mx-auto ">
                                    <div class="mb-6 md:mb-0 px-10">
                                        <div class="mb-6 flex justify-center">
                                            <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                                        </div>
                                        <p class="my-4 text-md text-white ">
                                            {{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}
                                        </p>
                                        <p class="italic">- {{ $review->private_feed_back_ans['name'] ?: 'Client' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div
                        class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse bg-cyan-">
                        @foreach ($reviews as $index => $review)
                            <button type="button" class="w-3 h-3 rounded-full shadow-md" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        @endforeach
                    </div>
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 shadow-md group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full shadow-md bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 6)
            {{-- 9 --}}
            <section class="w-full">
                <div id="indicators-carousel" class="relative w-full " data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                        @foreach ($reviews as $review)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-full w-full md:w-[80%] mx-auto rounded-xl shadow-md bg-slate-100 ">
                                    <div class="mb-6 md:mb-0 px-10">
                                        <div class="mb-6 flex justify-center">
                                            <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                                        </div>
                                        <p class="my-4 text-md text-gray-700 dark:text-neutral-300 overflow-y-auto">
                                            {{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}
                                        </p>
                                        <p class="italic">- {{ $review->private_feed_back_ans['name'] ?: 'Client' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                        @foreach ($reviews as $index => $review)
                            <button type="button"
                                class="w-3 h-3 rounded-full shadow-md shadow-orange-500 bg-orange-500 "
                                aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 shadow-md group-focus:ring-4 group-focus:ring-slate-200 border-2  group-focus:outline-none">
                            <svg class="w-4 h-4 text-slate-300  rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 shadow-md group-focus:ring-4 group-focus:ring-slate-200 border-2  group-focus:outline-none">
                            <svg class="w-4 h-4 text-slate-300  rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 7)
            {{-- 9 --}}
            <section class="w-full">

                <div class="swiper mySwiper-7 h-[500px]  py-10">
                    <div class="swiper-wrapper h-full">

                        @foreach ($reviews as $review)
                            <div class="swiper-slide  w-[350px] bg-slate-100 h-full rounded-xl shadow-md p-5">
                                <div class="mb-6 md:mb-0">
                                    <div class="mb-6 flex justify-center">
                                        <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                            class="w-24 rounded-full shadow-lg " />
                                    </div>
                                    <p class="my-4 text-sm text-gray-800  h-[225px] overflow-y-auto">
                                        "{{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}."
                                    </p>
                                    <p class="italic">- {{ $review->private_feed_back_ans['name'] ?: 'Client' }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>

                <!-- Initialize Swiper -->
                @section('scripts')
                    <script>
                        var swiper = new Swiper(".mySwiper-7", {
                            effect: "coverflow",
                            grabCursor: true,
                            centeredSlides: true,
                            slidesPerView: "auto",
                            coverflowEffect: {
                                rotate: 50,
                                stretch: 0,
                                depth: 100,
                                modifier: 1,
                                slideShadows: true,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                            },
                        });
                    </script>
                @endsection

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 8)
            {{-- 8 --}}

            @section('styles')
                <style>
                    .swiper {
                        width: 100%;
                        height: 100%;
                        background: #000;
                    }

                    .swiper-slide {
                        font-size: 18px;
                        color: #fff;
                        -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                        padding: 40px 60px;
                    }

                    .parallax-bg {
                        position: absolute;
                        left: 0;
                        top: 0;
                        width: 130%;
                        height: 100%;
                        -webkit-background-size: cover;
                        background-size: cover;
                        background-position: center;
                    }

                    .swiper-slide .title {
                        font-size: 41px;
                        font-weight: 300;
                    }

                    .swiper-slide .subtitle {
                        font-size: 21px;
                    }

                    .swiper-slide .text {
                        font-size: 14px;
                        max-width: 400px;
                        line-height: 1.3;
                    }
                </style>
            @endsection
            <section class="w-full relative">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper mySwiper-8">
                    <div class="parallax-bg"
                        style="
                          background-image: url(https://media.istockphoto.com/id/1484987971/photo/customer-review-popup-user-assessment-and-feedback-by-select-five-star-rating-on-app.jpg?s=612x612&w=0&k=20&c=WHHPXDwDHlhs7ticKmGSy_d5nNVd9ODtWP8uYBxntMg=);
                        "
                        data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">

                        @foreach ($reviews as $review)
                            <div class="swiper-slide ">
                                <div class="text-sm uppercase mb-1 font-semibold" data-swiper-parallax="-200">-
                                    {{ $review->private_feed_back_ans['name'] ?: 'Client' }}</div>

                                <div class="text-sm uppercase mb-2" data-swiper-parallax="-200">
                                    @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                        <i class="bx bxs-star text-yellow-300 text-xl"></i>
                                    @endfor
                                </div>
                                <div class="text  bg-slate-900 bg-opacity-70 p-4 rounded-lg h-[250px] overflow-y-auto"
                                    data-swiper-parallax="-100">
                                    <p>
                                        "{{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}"
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>
                <!-- Initialize Swiper -->
                @section('scripts')
                    <script>
                        var swiper = new Swiper(".mySwiper-8", {
                            speed: 600,
                            parallax: true,
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                            },
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                        });
                    </script>
                @endsection

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 9)
            <section class="w-full relative">
                @section('styles')
                    <style>
                        .swiper {
                            width: 100%;
                            height: 100%;
                        }

                        .swiper-slide {
                            text-align: center;
                            font-size: 18px;
                            background: #fff;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .swiper-slide img {
                            display: block;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }

                        .autoplay-progress {
                            position: absolute;
                            right: 16px;
                            bottom: 16px;
                            z-index: 10;
                            width: 48px;
                            height: 48px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-weight: bold;
                            color: var(--swiper-theme-color);
                        }

                        .autoplay-progress svg {
                            --progress: 0;
                            position: absolute;
                            left: 0;
                            top: 0px;
                            z-index: 10;
                            width: 100%;
                            height: 100%;
                            stroke-width: 4px;
                            stroke: var(--swiper-theme-color);
                            fill: none;
                            stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
                            stroke-dasharray: 125.6;
                            transform: rotate(-90deg);
                        }
                    </style>
                @endsection

                <div class="swiper mySwiper-9 w-full">
                    <div class="swiper-wrapper h-[500px] w-full">
                        @foreach ($reviews as $review)
                            <div class="swiper-slide w-full">
                                <div class="mx-5 w-full  grid place-content-center">
                                    <div
                                        class="bg-gradient-to-b from-[#D0E8FF] to-[#FBCABA] rounded-2xl text-gray-800 p-8 text-center h-72 max-w-md mx-auto">
                                        <h1 class="text-3xl mb-3">
                                            {{ $review->private_feed_back_ans['name'] ?: 'Client' }}</h1>
                                        <p class="text-sm h-[150px] overflow-y-auto">
                                            "{{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}"
                                        </p>
                                    </div>
                                    <div
                                        class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-32 sm:-translate-y-24 max-w-xs mx-auto flex items-center justify-center">
                                        <div class=" h-12 w-12">
                                            <img class="w-20 h-20 object-cover rounded-full shadow-lg"
                                                src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                alt="User avatar">
                                        </div>
                                        <div class="font-semibold text-md ">
                                            <p>
                                                @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                                    <i class="bx bxs-star text-yellow-300 text-xl"></i>
                                                @endfor
                                            </p>
                                            <p>{{ $review->private_feed_back_ans['name'] ?: 'Client' }}</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- component -->
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="autoplay-progress">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span></span>
                    </div>
                </div>

                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>
                @section('scripts')
                    <script>
                        const progressCircle = document.querySelector(".autoplay-progress svg");
                        const progressContent = document.querySelector(".autoplay-progress span");
                        var swiper = new Swiper(".mySwiper-9", {
                            spaceBetween: 30,
                            centeredSlides: true,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false
                            },
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true
                            },
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev"
                            },
                            on: {
                                autoplayTimeLeft(s, time, progress) {
                                    progressCircle.style.setProperty("--progress", 1 - progress);
                                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                                }
                            }
                        });
                    </script>
                @endsection

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 10)
            <section class="w-full relative ">
                @section('styles')
                    <style>
                        .swiper {
                            width: 280px;
                            height: 340px;
                        }

                        .swiper-slide {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 18px;
                            font-size: 22px;
                            font-weight: bold;
                            color: #fff;
                        }

                        .swiper-slide:nth-child(1n) {
                            background-color: rgb(206, 17, 17);
                        }

                        .swiper-slide:nth-child(2n) {
                            background-color: rgb(0, 140, 255);
                        }

                        .swiper-slide:nth-child(3n) {
                            background-color: rgb(10, 184, 111);
                        }

                        .swiper-slide:nth-child(4n) {
                            background-color: rgb(211, 122, 7);
                        }

                        .swiper-slide:nth-child(5n) {
                            background-color: rgb(118, 163, 12);
                        }

                        .swiper-slide:nth-child(6n) {
                            background-color: rgb(180, 10, 47);
                        }

                        .swiper-slide:nth-child(7n) {
                            background-color: rgb(35, 99, 19);
                        }

                        .swiper-slide:nth-child(8n) {
                            background-color: rgb(0, 68, 255);
                        }

                        .swiper-slide:nth-child(9n) {
                            background-color: rgb(218, 12, 218);
                        }

                        .swiper-slide:nth-child(10n) {
                            background-color: rgb(54, 94, 77);
                        }
                    </style>
                @endsection

                <div class="w-full flex items-center justify-center">
                    <div class="swiper mySwiper-10">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide">
                                    <!-- component -->
                                    <div class="px-5 py-4   shadow rounded-lg max-w-lg h-full">
                                        <div class="flex mb-4">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
                                            <div class="ml-2 mt-0.5">
                                                <span class="block font-medium text-base leading-snug text-white">Loyce
                                                    Kuvalis</span>
                                                <span class="block text-xs text-white  font-light leading-snug">16
                                                    December at 08:25</span>
                                            </div>
                                        </div>
                                        <p
                                            class="text-white text-sm font-bold h-[200px] overflow-y-auto bg-slate-900 bg-opacity-50 p-3 rounded-lg">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim

                                        </p>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="text-center py-5">
                    <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                        <button
                            class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                            a
                            review</button>
                    </a>
                </div>

                @section('scripts')
                    <script>
                        var swiper = new Swiper(".mySwiper-10", {
                            effect: "cards",
                            grabCursor: true,
                        });
                    </script>
                @endsection
            </section>
            {{--  --}}
        @endif
    </div>

</x-guest-layout>
