<div class=" space-y-8" x-data="{ link: null }">
    <x-notification />
    <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
        <div>
            <h3 class=" font-bold">Reviews</h3>
        </div>
        <span class="text-xs">Manage, share and approve reviews</span>
    </div>

    <section class="px-3 :md:p-8 space-y-8">

        <div class="bg-cyan-100 text-cyan-500 p-4 rounded-md flex items-center justify-between">
            <div>
                <i class="bx bx-notice"></i><span>Are you looking for review widgets? You can find them here. <a
                        href="#" class="font-bold text-sm"> Manage widget</a>

                </span>
            </div>
            <button><i class="bx bx-x font-semibold text-xl"></i></button>
        </div>

        {{--  --}}
        <div class="bg-gray-50 rounded-lg p-5 grid md:grid-cols-7 gap-5 ">
            <div class="md:col-span-2  flex  items-center ">
                <div>
                    <p class="font-semibold">Star rating</p>
                    <p class="text-3xl font-bold">5</p>
                    <div class="">
                        <i class="bx bxs-star text-xl text-yellow-400"></i>
                        <i class="bx bxs-star text-xl text-yellow-400"></i>
                        <i class="bx bxs-star text-xl text-yellow-400"></i>
                        <i class="bx bxs-star text-xl text-yellow-400"></i>
                        <i class="bx bxs-star text-xl text-yellow-400"></i>
                    </div>
                </div>
            </div>
            <div class="space-y-3 text-center">
                <p class="font-bold text-sm">{{ $rate_one }}%</p>
                <div class="w-[50%] mx-auto  relative rounded-md h-24 cursor-pointer"
                    data-tooltip-target="tooltip-bottom-1" data-tooltip-placement="bottom">
                    <div class="w-full  bg-cyan-950 py-[1px]  absolute bottom-0 rounded-md"
                        style="height: {{ $rate_one }}%"></div>
                </div>
                <div id="tooltip-bottom-1" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    {{ $rate_one }}%
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="">
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                </div>

            </div>
            <div class="space-y-3 text-center">
                <p class="font-bold text-sm">{{ $rate_two }}%</p>
                <div class="w-[50%] mx-auto  relative rounded-md h-24 cursor-pointer"
                    data-tooltip-target="tooltip-bottom-2" data-tooltip-placement="bottom">
                    <div class="w-full  bg-cyan-950 py-[1px]  absolute bottom-0 rounded-md"
                        style="height: {{ $rate_two }}%"></div>
                </div>
                <div id="tooltip-bottom-2" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    {{ $rate_two }}%
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="">
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                </div>

            </div>
            <div class="space-y-3 text-center">
                <p class="font-bold text-sm">{{ $rate_three }}%</p>
                <div class="w-[50%] mx-auto  relative rounded-md h-24 cursor-pointer"
                    data-tooltip-target="tooltip-bottom-3" data-tooltip-placement="bottom">
                    <div class="w-full  bg-cyan-950 py-[1px]  absolute bottom-0 rounded-md"
                        style="height: {{ $rate_three }}%"></div>
                </div>
                <div id="tooltip-bottom-3" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    {{ $rate_three }}%
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="">
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                </div>

            </div>
            <div class="space-y-3 text-center">
                <p class="font-bold text-sm">{{ $rate_four }}%</p>
                <div class="w-[50%] mx-auto  relative rounded-md h-24 cursor-pointer"
                    data-tooltip-target="tooltip-bottom-4" data-tooltip-placement="bottom">
                    <div class="w-full  bg-cyan-950 py-[1px] absolute bottom-0 rounded-md"
                        style="height: {{ $rate_four }}%"></div>
                </div>
                <div id="tooltip-bottom-4" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    {{ $rate_four }}%
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="">
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-gray-300"></i>
                </div>

            </div>
            <div class="space-y-3 text-center">
                <p class="font-bold text-sm">{{ $rate_five }}%</p>
                <div class="w-[50%] mx-auto  relative rounded-md h-24 cursor-pointer"
                    data-tooltip-target="tooltip-bottom-5" data-tooltip-placement="bottom">
                    <div class="w-full  bg-cyan-950 py-[1px] absolute bottom-0 rounded-md"
                        style="height: {{ $rate_five }}%"></div>
                </div>
                <div id="tooltip-bottom-5" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    {{ $rate_five }}%
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="">
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                    <i class="bx bxs-star text-md text-yellow-400"></i>
                </div>

            </div>

        </div>


        <section class="grid md:grid-cols-3 gap-5  ">
            {{-- side --}}
            <div class="h-screen col-span-1 p-2 space-y-1 hidden md:block overflow-y-auto ">
                {{-- <div class="space-y-2">
                    <h2 class="font-semibold text-cyan-700 capitalize">Source</h2>
                    <label for="source-1"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="knowledge[]" id="source-1" value="">
                        <span> hhnn</span>
                    </label>
                    <label for="source-2"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="knowledge[]" id="source-2" value="">
                        <span> hhnn</span>
                    </label>
                    <label for="source-3"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="knowledge[]" id="source-3" value="">
                        <span> hhnn</span>
                    </label>
                </div> --}}

                {{-- <div class="space-y-2">
                    <h2 class="font-semibold text-cyan-700 capitalize">Status</h2>
                    <label for="status-1"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="knowledge[]" id="status-1" value="">
                        <span> hhnn</span>
                    </label>
                    <label for="status-2"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="knowledge[]" id="status-2" value="">
                        <span> hhnn</span>
                    </label>
                    <label for="status-3"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="knowledge[]" id="status-3" value="">
                        <span> hhnn</span>
                    </label>
                </div> --}}

                <div class="space-y-2">
                    <h2 class="font-semibold text-cyan-700 capitalize">Star review</h2>
                    <label for="star-1"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                            id="star-1" value="5">
                        <span>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                        </span>
                    </label>
                    <label for="star-2"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                            id="star-2" value="4">
                        <span>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                        </span>
                    </label>
                    <label for="star-3"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                            id="star-3" value="3">
                        <span>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                        </span>
                    </label>
                    <label for="star-4"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                            id="star-4" value="2">
                        <span>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                        </span>
                    </label>
                    <label for="star-5"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                            id="star-5" value="1">
                        <span>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                            <i class="bx bxs-star text-xl text-gray-400"></i>
                        </span>
                    </label>
                </div>

                <div class="space-y-2">
                    <h2 class="font-semibold text-cyan-700 capitalize">Star review</h2>
                    <label for="NPS-1"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="NPS" wire:model.live="selectedNPS"
                            id="NPS-1" value="9,10">
                        <span class="text-sm"> Promoters (9-10)</span>
                    </label>
                    <label for="NPS-2"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="NPS" wire:model.live="selectedNPS"
                            id="NPS-2" value="7,8">
                        <span class="text-sm"> Passives (7-8)</span>
                    </label>
                    <label for="NPS-3"
                        class=" cursor-pointer  bg-gray-50 px-2 py-1 space-x-2 rounded-md flex items-center">
                        <input type="checkbox" class="" name="NPS" wire:model.live="selectedNPS"
                            id="NPS-3" value="0,6">
                        <span class="text-sm"> Detractors (0-6)</span>
                    </label>
                </div>
            </div>
            {{-- <div class="h-screen  md:col-span-2    space-y-3 transition-all duration-300 overflow-y-auto "> --}}
            <div class="h-screen md:col-span-2 space-y-3 transition-all duration-300 overflow-y-auto">
                <div class="sticky top-0 bg-white z-10">
                    <div
                        class="flex flex-col justify-start md:flex-row px-3 md:px-10 space-y-5 md:space-y-0 md:space-x-6 md:items-center">
                        <p><span class="font-semibold">Count</span> {{ count($reviews) }}</p>
                        <p><span class="font-semibold">Limit</span> 100</p>

                        <select id="countries1" wire:model.live="sortOption"
                            class="md:bg-gray-50 border-0 md:border border-gray-300 text-gray-900 text-sm rounded-lg md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                            <option value="latest">Latest</option>
                            <option value="oldest">Oldest</option>
                        </select>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="search" wire:model.live="search"
                                class="block w-full p-3 ps-10 text-sm text-gray-900 border-0 md:border border-gray-300 rounded-lg md:bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div>
                    <section class="mt-5">

                        {{--  --}}
                        <div class="h-screen   space-y-3 transition-all duration-300 overflow-y-auto">

                            @forelse ($reviews as $key => $review)
                                <div id="{{ $review->id }}-first"
                                    class="divide-y rounded-lg border px-4 pb-2 transition-all duration-300 space-y-5">
                                    <div class="flex justify-between items-center">
                                        <div class="py-1 text-xs text-gray-400 font-bold flex items-center">
                                            <button class="">
                                                @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                                    <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                                @endfor
                                            </button>
                                            @if ($review->net_promote_ans)
                                                <div class=" text-gray-800 bg-gray-300 p-1.5 rounded">
                                                    NPS {{ $review->net_promote_ans }}
                                                </div>
                                            @endif
                                        </div>
                                        <span
                                            class="py-1 text-xs text-gray-400 font-bold">{{ $review->created_at }}</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="  text-sm font-semibold">
                                            {{ $review->review_platform_ans?: $review->nps_comment_ans }}
                                        </div>


                                        @if ($review->video)
                                            <video id="my-video" controls width="350" height="180"
                                                class="cld-video-player">
                                                <source src="{{ $review->video }}" type="video/mp4">
                                            </video>
                                        @endif

                                    </div>
                                    <div class="flex items-center space-x-3 py-2">
                                        <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                            alt="thumb" class="h-12 w-12 rounded-full border">

                                        @if ($review->private_feed_back_ans['name'])
                                            <span
                                                class="font-bold">{{ $review->private_feed_back_ans['name'] }}</span>
                                        @endif
                                        @if ($review->contact_info_ans['location'])
                                            <span
                                                class="text-cyan-800">{{ $review->contact_info_ans['location'] }}</span>
                                        @endif
                                    </div>

                                    <div class="">
                                        <p class="text-sm flex items-center">
                                            <i class='text-slate-500 bx bxs-bar-chart-alt-2  text-xl mr-2'></i>
                                            <b class="mr-2">Survey</b>
                                            <a href="{{ route('campaign.show', ['campaign' => $review->campaign->slug]) }}"
                                                class="text-cyan-500 underline hover:text-cyan-600">{{ $review->campaign->name }}</a>
                                        </p>
                                        <p class="text-sm flex items-center">
                                            <i class=' text-slate-500 bx bxs-buildings text-xl mr-2'></i>
                                            <b class="mr-2">Organisation</b>
                                            {{ $review->contact_info_ans['organisation'] ?: '-' }}
                                        </p>
                                        <p class="text-sm flex items-center">
                                            <i class=' text-slate-500 bx bxs-location-plus text-xl mr-2'></i>
                                            <b class="mr-2">Location</b>
                                            {{ $review->contact_info_ans['location'] ?: '-' }}
                                        </p>
                                    </div>

                                    <div class="space-y-5">
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <i class='bx bxs-purchase-tag text-slate-500 text-md'></i>
                                            </div>
                                            <input type="search" id="search"
                                                class="block w-full p-3 ps-10 text-sm text-gray-900 border-0 focus:ring-0"
                                                placeholder="Add tag">
                                        </div>
                                        <div class="flex justify-between pb-4">
                                            <div class="flex space-x-4">
                                                <a href="{{ route('review.shareOne', ['uuid' => $review->uuid]) }}">
                                                    <button
                                                        class=" rounded-lg px-3 py-0.5 border border-cyan-900 bg-cyan-900 text-cyan-50 text-xs flex items-center hover:shadow-md"><i
                                                            class="bx bxs-share-alt text-lg mr-2"></i> Share</button>
                                                </a>
                                                @if ($review->show)
                                                    <a href="{{ route('review.show', ['review' => $review->uuid]) }}" target="_blank">
                                                        <button
                                                            class=" rounded-lg px-3 py-0.5 border border-cyan-900 text-cyan-900 text-sm font-semibold flex items-center hover:shadow-md">

                                                            <i class='bx bxs-show text-lg mr-2'></i>View
                                                            review</button>
                                                    </a>
                                                    <button wire:click="showOrHide({{ $review->id }})"
                                                        class=" rounded-lg px-3 py-0.5 border border-green-500 text-green-500 text-sm font-semibold flex items-center hover:shadow-md">

                                                        <i class='bx bx-check text-lg mr-2'></i> Visible in
                                                        widget</button>
                                                @else
                                                    <button wire:click="showOrHide({{ $review->id }})"
                                                        class=" rounded-lg px-3 py-0.5 border border-cyan-900 text-cyan-900 text-sm font-semibold flex items-center hover:shadow-md">

                                                        <i class='bx bxs-hide text-lg mr-2'></i> Hidden from
                                                        widget</button>
                                                @endif

                                            </div>
                                            <div>
                                                <form action="{{ route('review.destroy', ['review' => $review]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class=" rounded-lg px-3 py-1.5 border border-red-600 text-red-600 text-sm font-semibold flex items-center hover:shadow-md ">

                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-5 h-5 mr-2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                        </svg> Remove</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center font-bold text-cyan-400 bg-cyan-100 p-3">empty data</div>
                            @endforelse

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>


    <script>
        const player = new cloudinary.videoPlayer('my-video');
    </script>



</div>
