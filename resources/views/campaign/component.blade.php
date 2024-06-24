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
                <div class="bg-black text-white py-20">
                    <div class="  flex flex-col md:flex-row my-6 md:my-24">
                        <div class="flex flex-col w-full lg:w-1/3 p-8">
                            <p class="ml-6 text-yellow-300 text-lg uppercase tracking-loose">REVIEW</p>
                            <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Leave us a
                                feedback!
                            </p>
                            <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
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
                                                            class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
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
                    <div class="flex justify-center overflow-x-auto  pl-10">

                        @foreach ($reviews as $review)
                            <div class="max-w-3xl space-x-5">
                                <div
                                    class="m-4 block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-800 dark:shadow-black/20">
                                    <!--Testimonial-->
                                    <div class="md:flex md:flex-row">
                                        <div
                                            class="mx-auto mb-6 flex w-36 items-center justify-center md:mx-0 md:w-96 lg:mb-0">
                                            <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                class="rounded-full shadow-md dark:shadow-black/30"
                                                alt="woman avatar" />
                                        </div>
                                        <div class="md:ml-2 ">
                                            <p class="mb-6 font-light text-neutral-500 dark:text-neutral-300 ">
                                                {{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}
                                            </p>
                                            </p>
                                            <p
                                                class="mb-2 text-xl font-semibold text-neutral-800 dark:text-neutral-200">
                                                {{ $review->private_feed_back_ans['name'] ?: 'Client' }}
                                            </p>
                                            <p class="mb-0 font-semibold text-neutral-500 dark:text-neutral-400">
                                                {{ $review->contact_info_ans['email'] ?: $review->private_feed_back_ans['email'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="text-center py-5">
                        <a href="{{ route('campaign.share', ['uuid' => $campaign->uuid]) }}" target="_blank">
                            <button
                                class="w-36 rounded-full bg-blue-900 py-3 text-white font-medium hover:shadow-lg">Write
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
                        <button class="w-36 rounded-full bg-blue-900 py-3 text-white font-medium hover:shadow-lg">Write
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
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @foreach ($reviews as $review)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-full w-full ">
                                    <div class="mb-6 md:mb-0 px-10">
                                        <div class="mb-6 flex justify-center">
                                            <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                                        </div>
                                        <p class="my-4 text-xl text-neutral-500 dark:text-neutral-300">
                                            {{ $review->private_feed_back_ans['message'] ?: $review->review_platform_ans }}
                                        </p>
                                        <p class="italic">- {{ $review->private_feed_back_ans['name'] ?: 'Client' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse bg-cyan-">
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

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 6)
            {{-- 9 --}}
            <section class="w-full">
                <div id="indicators-carousel" class="relative w-full bg-gray-50" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        
                        @foreach ($reviews as $review)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-full w-full ">
                                    <div class="mb-6 md:mb-0 px-10">
                                        <div class="mb-6 flex justify-center">
                                            <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                                class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                                        </div>
                                        <p class="my-4 text-xl text-neutral-500 dark:text-neutral-300">
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
                            <button type="button" class="w-3 h-3 rounded-full shadow-md" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 shadow-md group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
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
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 shadow-md group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </section>
            {{--  --}}
        @endif
    </div>

</x-guest-layout>
