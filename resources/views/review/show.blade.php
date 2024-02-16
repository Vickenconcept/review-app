<x-guest-layout>
    {{-- {{ $review }} --}}


    <div class="h-screen">
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
        <nav
            class="relative flex w-full flex-wrap items-center justify-between bg-neutral-100 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4">
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div>
                    <a class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                        href="#">
                        <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 20px"
                            alt="TE Logo" loading="lazy" />
                    </a>
                </div>
            </div>
        </nav>
        <div class="h-[95%] bg-gray-200  dark:bg-gray-800   flex flex-wrap items-center  justify-center  ">
            <div
                class="container lg:w-2/6 xl:w-2/7 sm:w-full md:w-2/3  rounded-lg    bg-white  shadow-lg    transform   duration-200  easy-in-out">
                <div class=" h-32 overflow-hidden bg-slate-300 rounded-t-lg ">
                    @if ($review->video)
                        <video id="my-video" controls class="w-full" height="180" class="cld-video-player">
                            <source src="{{ $review->video }}" type="video/mp4">
                        </video>
                    @else
                        <i class='bx bxs-quote-left text-6xl text-slate-400 px-2'></i>
                    @endif
                </div>
                <div class="flex justify-center px-5  -mt-12 ">
                    <img class="h-32 w-32 bg-white p-2 rounded-full  shadow-2xl  "
                        src="{{ $review->contact_info_ans['image'] ?: asset('images/image-thumb.png') }}"
                        alt="" />

                </div>
                <div class="  ">
                    <div class="text-center px-14">
                        <h2 class="text-gray-800 text-3xl font-bold">{{ $review->private_feed_back_ans['name'] }}</h2>
                        <a class="text-gray-400 mt-2 hover:text-blue-500"
                            href="mailto: {{ $review->private_feed_back_ans['email'] ?: $review->contact_info_ans['email'] }}"
                            target="BLANK()">{{ $review->private_feed_back_ans['email'] ?: $review->contact_info_ans['email'] }}</a>
                        <p class="mt-2 text-gray-500 text-sm">
                            {{ $review->nps_comment_ans ?: $review->review_platform_ans }} </p>
                    </div>
                    <hr class="mt-6" />
                    <div class="flex  bg-gray-50  rounded-b-lg">
                        <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                            <p>
                                <span class="font-semibold">
                                    @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                        <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                    @endfor
                                </span>
                            </p>
                        </div>
                        <div class="border"></div>
                        <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                            <p>
                            <div class="font-semibold text-sm ">
                                NPS <span class="font-bold">{{ $review->net_promote_ans ?: '-' }}</span>
                            </div>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                const player = new cloudinary.videoPlayer('my-video');
            </script>
        </div>
    </div>
</x-guest-layout>
