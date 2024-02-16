<x-guest-layout>

    <div class="h-screen flex items-center justify-center">
        @if ($campaign->widget_id == 1)
            {{-- 6 --}}
            <section>
                <div class="w-screen bg-gray-50">
                    <div class="my-10 mx-auto max-w-screen-md px-10 py-16">
                        <div class="flex w-full flex-col">
                            <div class="flex flex-col sm:flex-row">
                                <h1 class="max-w-sm text-3xl font-bold text-blue-900">
                                    What people think <br />
                                    about Us
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
                {{-- <div class="bg-gray-950 flex justify-center items-center min-h-screen p-10  w-full">
                    <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5 bg-gray-800 text-white">
                        <h1 class="py-5 text-lg">Reviews</h1>

                        <div class="flex flex-col gap-3 mt-14">
                            @foreach ($reviews as $review)
                                <div class="flex flex-col gap-4 bg-gray-700 p-4">
                                    <div class="flex justify justify-between">
                                        <div class="flex gap-2">
                                            <div class="w-7 h-7 text-center rounded-full bg-red-500">J</div>
                                            <span>Jess Hopkins</span>
                                        </div>
                                        <div class="flex p-1 gap-1 text-orange-300">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half"></ion-icon>
                                        </div>
                                    </div>

                                    <div>
                                        Gorgeous design! Even more responsive than the previous version. A pleasure to
                                        use!
                                    </div>

                                    <div class="flex justify-between">
                                        <span>Feb 13, 2021</span>
                                        <button
                                            class="p-1 px-2 bg-gray-900 hover:bg-gray-950 border border-gray-950 bg-opacity-60">
                                            <ion-icon name="share-outline"></ion-icon> Share</button>
                                    </div>
                                </div>
                            @endforeach

                            <div class="flex flex-col gap-4 bg-gray-700 p-4">
                                <div class="flex justify justify-between">
                                    <div class="flex gap-2">
                                        <div class="w-7 h-7 text-center rounded-full bg-yellow-500">A</div>
                                        <span>Alice Banks</span>
                                    </div>
                                    <div class="flex p-1 gap-1 text-orange-300">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>

                                    </div>
                                </div>

                                <div>
                                    The device has a clean design and the metal housing feels sturdy in my hands.
                                    Soft
                                    rounded corners make it a pleasure to look at.
                                </div>

                                <div class="flex justify-between">
                                    <span>Feb 13, 2021</span>
                                    <button
                                        class="p-1 px-2 bg-gray-900 hover:bg-gray-950 border border-gray-950 bg-opacity-60">
                                        <ion-icon name="share-outline"></ion-icon> Share</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
                <!--Background-->
                <section class="rounded-md p-6 text-center  md:p-12 md:text-left"
                    {{-- style="background-image: url(https://tecdn.b-cdn.net/img/Photos/Others/background2.jpg)" --}}
                    >
                    <div class="flex justify-center overflow-x-auto ">
                       
                       @foreach ($reviews as  $review)
                       <div class="max-w-3xl space-x-7 ">
                        <div
                            class="m-4 block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-800 dark:shadow-black/20">
                            <!--Testimonial-->
                            <div class="md:flex md:flex-row">
                                <div
                                    class="mx-auto mb-6 flex w-36 items-center justify-center md:mx-0 md:w-96 lg:mb-0">
                                    <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                        class="rounded-full shadow-md dark:shadow-black/30" alt="woman avatar" />
                                </div>
                                <div class="md:ml-6">
                                    <p class="mb-6 font-light text-neutral-500 dark:text-neutral-300">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
                                        quam sapiente molestiae numquam quas, voluptates omnis nulla
                                        ea odio quia similique corrupti magnam.
                                    </p>
                                    <p class="mb-2 text-xl font-semibold text-neutral-800 dark:text-neutral-200">
                                        {{ $review->private_feed_back_ans['name'] ?: 'Client'}}
                                    </p>
                                    <p class="mb-0 font-semibold text-neutral-500 dark:text-neutral-400">
                                        {{ $review->contact_info_ans['email']?:$review->private_feed_back_ans['email'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                       @endforeach
                    </div>
                </section>

            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 4)
            {{-- 8 --}}
            <section>
                <section class="px-4">
                    <div class="mx-auto max-w-3xl text-center">
                        <h3 class="mb-6 text-3xl font-bold">Testimonials</h3>
                        <p class="mb-6 pb-2 text-neutral-500 dark:text-neutral-300 md:mb-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
                            error amet numquam iure provident voluptate esse quasi, veritatis
                            totam voluptas nostrum quisquam eum porro a pariatur veniam.
                        </p>
                    </div>

                    <div class="grid gap-12 text-center md:grid-cols-2">
                        <div class="mb-6 md:mb-0">
                            <div class="mb-6 flex justify-center">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(22).jpg"
                                    class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                            </div>
                            <p class="my-4 text-xl text-neutral-500 dark:text-neutral-300">
                                "Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing
                                elit sed ut perspiciatis unde omnis."
                            </p>
                            <p class="italic">- Anna Morian</p>
                        </div>

                        <div class="mb-0">
                            <div class="mb-6 flex justify-center">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(19).jpg"
                                    class="w-24 rounded-full shadow-lg dark:shadow-black/30" />
                            </div>
                            <p class="my-4 text-xl text-neutral-500 dark:text-neutral-300">
                                "Neque cupiditate assumenda in maiores repudiandae mollitia
                                architecto elit sed adipiscing elit."
                            </p>
                            <p class="italic">- Teresa May</p>
                        </div>
                    </div>
                </section>
            </section>
            {{--  --}}
        @elseif ($campaign->widget_id == 5)
            {{-- 11 --}}
            <section>
                <div id="default-carousel" class="relative w-full bg-gray-500" data-carousel="slide">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1702635214548-db9e08aa6126?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1702635214548-db9e08aa6126?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1702635214548-db9e08aa6126?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1702635214548-db9e08aa6126?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1702635214548-db9e08aa6126?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
            <section>
                <div id="indicators-carousel" class="relative w-full bg-gray-500" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://images.unsplash.com/photo-1707669291003-a7afa20b0a05?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1fHx8ZW58MHx8fHx8"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.unsplash.com/photo-1707343888207-2ffddba86fd5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1703026186056-0b37531f879e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMnx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/docs/images/carousel/carousel-4.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/docs/images/carousel/carousel-5.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
