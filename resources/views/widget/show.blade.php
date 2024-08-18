<x-app-layout>

    <div class="h-screen flex items-center justify-center">
        <a href="{{ url()->previous() }}" class="z-50" style="z-index: 1000">
            <button
                class="fixed right-3 md:right-10 top-20 shadow rounded-lg px-3 py-2 bg-cyan-300 text-cyan-700 hover:bg-cyan-700 hover:text-cyan-50  transition-all duration-300">
                <i class='bx bx-x text-2xl font-semibold '></i>
            </button>
        </a>
        @if ($widget->id == 1)
            {{-- 6 --}}
            <section>
                <div class="w-screen bg-gray-50">
                    <div class="my-10 mx-auto max-w-screen-md px-10 py-16">
                        <div class="flex w-full flex-col">
                            <div class="flex flex-col sm:flex-row">
                                <h1 class="max-w-sm text-3xl font-bold text-blue-900">
                                    What people think <br />
                                    about tailwind
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
                            <button class="w-36 rounded-full bg-blue-900 py-3 text-white font-medium">Write a
                                review</button>
                        </div>
                    </div>
                </div>

            </section>
            {{--  --}}
        @elseif ($widget->id == 2)
            {{-- 2 --}}
            <section>
                <section>
                    <div class="bg-gradient-to-b from-[#D0E8FF] to-[#FBCABA] text-gray-700 py-20">
                        <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
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
                                                    <form id="feedbackForm" action="" method="">
                                                        <div class="relative w-full mb-3">
                                                            <label
                                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                                for="email">Email</label><input type="email"
                                                                name="email" id="email"
                                                                class="border-0 px-3 py-3 rounded text-sm shadow w-full
                    bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400"
                                                                placeholder=" " style="transition: all 0.15s ease 0s;"
                                                                required />
                                                        </div>
                                                        <div class="relative w-full mb-3">
                                                            <label
                                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                                for="message">Message</label>
                                                            <textarea maxlength="300" name="feedback" id="feedback" rows="4" cols="80"
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
            </section>
            {{--  --}}
        @elseif ($widget->id == 3)
            {{-- 1 --}}
            {{-- <section>
                <div class="bg-gray-950 flex justify-center items-center min-h-screen p-10">
                    <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5 bg-gray-800 text-white">
                        <h1 class="py-5 text-lg">Reviews</h1>
                       
                        <div class="flex flex-col gap-3 mt-8">
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
                                    Gorgeous design! Even more responsive than the previous version. A pleasure to use!
                                </div>

                                <div class="flex justify-between">
                                    <span>Feb 13, 2021</span>
                                    
                                </div>
                            </div>

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
                                    The device has a clean design and the metal housing feels sturdy in my hands. Soft
                                    rounded corners make it a pleasure to look at.
                                </div>

                                <div class="flex justify-between">
                                    <span>Feb 13, 2021</span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
            </section> --}}
            <section class="w-full">
                <section class="rounded-md p-6 text-center  md:p-12 md:text-left" {{-- style="background-image: url(https://tecdn.b-cdn.net/img/Photos/Others/background2.jpg)" --}}>
                    <div class="flex justify-center overflow-x-auto  pl-10">
                        <div class="max-w-3xl space-x-5">
                            <div
                                class="m-4 block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-800 dark:shadow-black/20">
                                <!--Testimonial-->
                                <div class="md:flex md:flex-row">
                                    <div
                                        class="mx-auto mb-6 flex w-36 items-center justify-center md:mx-0 md:w-96 lg:mb-0">
                                        <img src="{{ asset('images/image-thumb.png') }}"
                                            class="rounded-full shadow-md dark:shadow-black/30" alt="woman avatar" />
                                    </div>
                                    <div class="md:ml-2 ">
                                        <p class="mb-6 font-light text-neutral-500 dark:text-neutral-300 ">
                                            Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit sed ut
                                            perspiciatis unde omnis
                                        </p>
                                        </p>
                                        <p class="mb-2 text-xl font-semibold text-neutral-800 dark:text-neutral-200">
                                            Anna Morian
                                        </p>
                                        <p class="mb-0 font-semibold text-neutral-500 dark:text-neutral-400">
                                            morian.anne@example.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-3xl space-x-5">
                            <div
                                class="m-4 block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-800 dark:shadow-black/20">
                                <!--Testimonial-->
                                <div class="md:flex md:flex-row">
                                    <div
                                        class="mx-auto mb-6 flex w-36 items-center justify-center md:mx-0 md:w-96 lg:mb-0">
                                        <img src="{{ asset('images/image-thumb.png') }}"
                                            class="rounded-full shadow-md dark:shadow-black/30" alt="woman avatar" />
                                    </div>
                                    <div class="md:ml-2 ">
                                        <p class="mb-6 font-light text-neutral-500 dark:text-neutral-300 ">
                                            Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit sed ut
                                            perspiciatis unde omnis
                                        </p>
                                        </p>
                                        <p class="mb-2 text-xl font-semibold text-neutral-800 dark:text-neutral-200">
                                            Anna Morian
                                        </p>
                                        <p class="mb-0 font-semibold text-neutral-500 dark:text-neutral-400">
                                            morian.anne@example.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center py-5">
                        <a href="javascript:void(0)">
                            <button
                                class="w-36 rounded-full bg-orange-500 py-3 text-white font-medium hover:shadow-lg">Write
                                a
                                review</button>
                        </a>
                    </div>
                </section>

            </section>
            {{--  --}}
        @elseif ($widget->id == 4)
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
        @elseif ($widget->id == 5)
            {{-- 11 --}}
            <section class="w-full">
                <div id="default-carousel" class="relative w-full bg-gray-500" data-carousel="slide">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1715914879541-57bf3411c4ed?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1674676470323-4aa46ef69086?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw2MXx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1715914879541-57bf3411c4ed?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1674676470323-4aa46ef69086?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw2MXx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1715914879541-57bf3411c4ed?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
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
        @elseif ($widget->id == 6)
            {{-- 9 --}}
            <section class="w-full">
                <div id="indicators-carousel" class="relative w-full bg-gray-500" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.unsplash.com/photo-1715704698525-6581ceb2d32f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4NHx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1674676470323-4aa46ef69086?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw2MXx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.unsplash.com/photo-1715704698525-6581ceb2d32f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4NHx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://plus.unsplash.com/premium_photo-1674676470323-4aa46ef69086?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw2MXx8fGVufDB8fHx8fA%3D%3D"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.unsplash.com/photo-1716136716704-7d5f7bbb6de4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4OHx8fGVufDB8fHx8fA%3D%3D"
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
        @elseif ($widget->id == 7)
            {{-- 9 --}}
            <section class="w-full">
                <div class="swiper mySwiper-7 h-96  py-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide  w-[300px]">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="text-center py-5">
                    <a href="javascript:void(0)">
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
        @elseif ($widget->id == 8)
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
                          background-image: url(https://swiperjs.com/demos/images/nature-1.jpg);
                        "
                        data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="title" data-swiper-parallax="-300">Slide 1</div>
                            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                            <div class="text" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                    dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                                    laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                                    Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                                    Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                                    ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                                    tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="title" data-swiper-parallax="-300">Slide 2</div>
                            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                            <div class="text" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                    dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                                    laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                                    Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                                    Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                                    ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                                    tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="text-center py-5">
                    <a href="javascript:void(0)">
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
        @elseif ($widget->id == 9)
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

                <div class="swiper mySwiper-9 ">
                    <div class="swiper-wrapper h-96">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
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
                    <a href="javascript:void(0)">
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
                                delay: 3000,
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
        @elseif ($widget->id == 10)
            <section class="w-full relative ">
                @section('styles')
                    <style>
                      

                        .swiper {
                            width: 240px;
                            height: 320px;
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
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                        </div>
                    </div>
    
                </div>
                <div class="text-center py-5">
                    <a href="javascript:void(0)">
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
</x-app-layout>
