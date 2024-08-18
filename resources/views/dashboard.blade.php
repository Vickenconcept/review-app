<x-app-layout>
    <div class="space-y-10 pb-10">
        <h1 class="text-xl  px-3 md:px-10 capitalize font-medium">Welcome, <span
                class="font-bold">{{ auth()->user()->name }}</span></h1>

        <div class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 ">
            <div class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
                <div class="flex justify-between">
                    <span class=" capitalize flex items-center text-gray-500">
                        <i class="bx bx-group text-2xl mr-1"></i>
                        Users
                    </span>
                    <a href="{{ route('settings.users') }}" class="block">
                        <button
                            class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">
                            <i
                                class="bx bx-plus text-orange-500 font-medium  group-hover:text-white delay-100 transition-all duration-500 ease-in-out"></i>
                            <span class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">Add
                                New</span>
                        </button>
                    </a>
                </div>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-2xl">
                            @foreach ($data as $site)
                                {{ $site->users_count }}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
                <div class="flex justify-between">
                    <span class=" capitalize flex items-center text-gray-500">
                        <i class="bx bx-plug text-2xl mr-1"></i>
                        Platforms
                    </span>
                    <a href="{{ route('platform.index') }}" class="block">
                        <button
                            class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">
                            <i
                                class="bx bx-plus text-orange-500 font-medium  group-hover:text-white delay-100 transition-all duration-500 ease-in-out"></i>
                            <span class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">Add
                                New</span>
                        </button>
                    </a>
                </div>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-2xl">
                            {{ count($platforms) }}
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
                <div class="flex justify-between">
                    <span class=" capitalize flex items-center text-gray-500">
                        <i class='bx bx-paper-plane text-2xl mr-1'></i>
                        Campaigns
                    </span>
                    <a href="{{ route('campaign.index') }}" class="block">
                        <button
                            class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">

                            <i
                                class='bx bx-right-arrow-alt text-orange-500 font-medium  group-hover:text-white delay-100 transition-all duration-500 ease-in-out'></i>
                            <span class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">
                                Manage</span>
                        </button>
                    </a>
                </div>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-2xl">
                            @foreach ($data as $site)
                                {{ $site->campaigns_count }}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
                <div class="flex justify-between">
                    <span class=" capitalize flex items-center text-gray-500">
                        <i class='bx bx-conversation text-2xl mr-1'></i>
                        Reviews
                    </span>
                    <a href="{{ route('review.index') }}" class="block">
                        <button
                            class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">

                            <i
                                class='bx bx-right-arrow-alt text-orange-500 font-medium  group-hover:text-white delay-100 transition-all duration-500 ease-in-out'></i>
                            <span class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">
                                Manage</span>
                        </button>
                    </a>
                </div>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-2xl">
                            @foreach ($data as $site)
                                {{ $site->campaigns->sum('reviews_count') }}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
                <div class="flex justify-between">
                    <span class=" capitalize flex items-center text-gray-500">
                        <i class='bx bx-bar-chart-alt-2 text-2xl mr-1'></i>
                        Email sent
                    </span>
                    <a href="{{ route('campaign.index') }}" class="block">
                        <button
                            class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">

                            <i
                                class='bx bx-right-arrow-alt text-orange-500 font-medium  group-hover:text-white delay-100 transition-all duration-500 ease-in-out'></i>
                            <span class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">
                                Manage</span>
                        </button>
                    </a>
                </div>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-2xl">
                            {{ $site->email_number ?? 0 }} <sup class="text-gray-400 text-sm">/20</sup>
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
                <div class="flex justify-between">
                    <span class=" capitalize flex items-center text-gray-500">
                        <i class='bx bxs-widget text-2xl mr-1'></i>
                        Widgets
                    </span>
                    <a href="{{ route('selectWidget') }}" class="block">
                        <button
                            class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">

                            <i
                                class='bx bx-right-arrow-alt text-orange-500 font-medium  group-hover:text-white delay-100 transition-all duration-500 ease-in-out'></i>
                            <span class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">
                                Manage</span>
                        </button>
                    </a>
                </div>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-2xl">
                            0
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}

        </div>


        <h1 class=" px-3 md:px-10 text-xl font-semibold text-gray-500">Most recent review</h1>

        <section class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-5">

            @forelse ($reviews as $review)
                <div class="w-full  bg-white border border-gray-200 rounded-xl shadow  p-5 space-y-4">
                    <h3 class="text-lg font-medium capitalize pb-3"> {{ $review->campaign->name }}</h3>
                    <div class="flex space-x-3 ">
                        <a href="{{ route('review.shareOne', ['uuid' => $review->uuid]) }}" target="_blank"
                            class="block">
                            <button
                                class="bg-slate-200 hover:bg-orange-500 font-semibold group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">
                                <i
                                    class='bx bx-link-external font-semibold text-md mr-1  group-hover:text-white delay-100 transition-all duration-500 ease-in-out'></i>
                                <span
                                    class="group-hover:text-white whitespace-nowrap delay-100 transition-all duration-500 ease-in-out">
                                    Share</span>
                            </button>
                        </a>
                        <a href="{{ route('review.show', ['review' => $review->uuid]) }}" target="_blank" class="block">
                            <button
                                class="bg-slate-200 hover:bg-orange-500 font-semibold group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">

                                <i
                                    class='bx bx-show-alt  font-semibold text-md mr-1  group-hover:text-white delay-100 transition-all duration-500 ease-in-out'></i>
                                <span
                                    class="group-hover:text-white whitespace-nowrap delay-100 transition-all duration-500 ease-in-out">
                                    View Review</span>
                            </button>
                        </a>

                    </div>

                    <div>
                        @for ($i = 1; $i <= $review->star_question_ans; $i++)
                            <i class="bx bxs-star text-yellow-400 text-xl"></i>
                        @endfor

                        @for ($i = $review->star_question_ans + 1; $i <= 5; $i++)
                            <i class="bx bxs-star text-gray-300 text-xl"></i>
                        @endfor
                    </div>
                    <div class="rounded-xl border border-gray-400 p-1 flex space-x-2">
                        <div>
                            <img class="w-10 h-10 rounded-xl "
                                src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                alt="Bonnie image" />
                        </div>
                        <div>
                            <h5 class=" text-sm  font-medium text-gray-900 capitalize">
                                {{ $review->contact_info_ans['email'] ?: $review->private_feed_back_ans['email'] }}
                                hhhhh</h5>
                            <span
                                class="text-sm text-gray-400 ">{{ $review->contact_info_ans['location'] ? $review->contact_info_ans['location'] : 'N/A' }}</span>
                        </div>
                    </div>
                </div>


                {{-- <div class="w-full  bg-white border border-gray-200 rounded-lg shadow flex justify-between">
                    <div class="flex flex-col items-center  w-full rounded-lg pt-8">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                            src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-sm  font-medium text-gray-900 dark:text-white">
                            {{ $review->contact_info_ans['email'] ?: $review->private_feed_back_ans['email'] }}</h5>
                        <span
                            class="text-sm text-gray-500 dark:text-gray-400">{{ $review->contact_info_ans['location'] ? $review->contact_info_ans['location'] : 'N/A' }}</span>
                        <div class="flex mt-10 md:mt-14 space-x-2">
                            <a href="{{ route('review.shareOne', ['uuid' => $review->uuid]) }}">
                                <button
                                    class=" rounded-lg px-3 py-0.5 border border-cyan-900 bg-cyan-900 text-cyan-50 text-xs flex items-center hover:shadow-md"><i
                                        class="bx bxs-share-alt text-lg mr-1"></i> Share</button>
                            </a>
                            <a href="{{ route('review.show', ['review' => $review->uuid]) }}" target="_blank">
                                <button
                                    class=" rounded-lg px-3 py-0.5 border border-cyan-900 text-cyan-900 text-xs font-semibold flex items-center hover:shadow-md">

                                    <i class='bx bxs-show text-lg mr-1'></i>View
                                    review</button>
                            </a>

                        </div>

                        <div
                            class=" py-0.5 px-3 text-xs bg-cyan-600 bg-opacity-25  font-semibold mt-8 w-full  rounded-b-lg text break-all truncate">
                            {{ $review->campaign->name }}</div>
                    </div>
                </div> --}}
            @empty
                <p class="bg-orange-100 text-orange-500 py-4 text-center rounded col-span-4">No Data Yet.</p>
            @endforelse
        </section>
    </div>


</x-app-layout>
