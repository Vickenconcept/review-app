<div class=" pb-20 h-screen ">
    <main class=" space-y-8  md:px-10" x-data="{ link: null }">
        <div class="px-3 ">
                <h3 class="font-medium text-2xl">Reviews</h3>
        </div>

        <section class="px-3 :md:p-8 space-y-8">
            <div class="bg-white rounded-xl py-5 pl-10  grid md:grid-cols-7 gap-5  md:divide-x-2">
                <div class="md:col-span-2  flex  items-center ">
                    <div class="space-y-2">
                        <p class="text-3xl font-bold">5.0</p>
                        <div class="">
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-yellow-400"></i>
                            <i class="bx bxs-star text-xl text-gray-300"></i>
                        </div>
                        <p class="text-gray-500 text-xs">Star rating</p>
                    </div>

                </div>

                <div class="md:col-span-5 space-y-4 md:px-10 pr-10">
                    <div class="space-x-4  flex  items-center" data-tooltip-target="tooltip-bottom-1"
                        data-tooltip-placement="bottom">
                        <div class="flex">
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 ">
                            <div class="bg-orange-500 h-2 rounded-full " style="width: {{ $rate_one }}%"></div>
                        </div>
                        <span class="text-sm font-semibold ">{{ $rate_one }}%</span>
                        <div id="tooltip-bottom-1" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ $rate_one }}%
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div> 

                    <div class="space-x-4  flex  items-center" data-tooltip-target="tooltip-bottom-2"  data-tooltip-placement="bottom">
                        <div class="flex">
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 ">
                            <div class="bg-orange-500 h-2 rounded-full " style="width: {{ $rate_two }}%"></div>
                        </div>
                        <span class="text-sm font-semibold ">{{ $rate_two }}%</span>
                        <div id="tooltip-bottom-2" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ $rate_two }}%
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                    <div class="space-x-4  flex  items-center" data-tooltip-target="tooltip-bottom-3"  data-tooltip-placement="bottom">
                        <div class="flex">
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 ">
                            <div class="bg-orange-500 h-2 rounded-full " style="width: {{ $rate_three }}%"></div>
                        </div>
                        <span class="text-sm font-semibold ">{{ $rate_three }}%</span>
                        <div id="tooltip-bottom-3" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ $rate_three }}%
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                    <div class="space-x-4  flex  items-center" data-tooltip-target="tooltip-bottom-4"  data-tooltip-placement="bottom">
                        <div class="flex">
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-gray-300"></i>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 ">
                            <div class="bg-orange-500 h-2 rounded-full " style="width: {{ $rate_four }}%"></div>
                        </div>
                        <span class="text-sm font-semibold ">{{ $rate_four }}%</span>
                        <div id="tooltip-bottom-4" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ $rate_four }}%
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                    <div class="space-x-4  flex  items-center" data-tooltip-target="tooltip-bottom-5"  data-tooltip-placement="bottom">
                        <div class="flex">
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                            <i class="bx bxs-star text-md text-yellow-400"></i>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 ">
                            <div class="bg-orange-500 h-2 rounded-full " style="width: {{ $rate_five }}%"></div>
                        </div>
                        <span class="text-sm font-semibold ">{{ $rate_five }}%</span>
                        <div id="tooltip-bottom-5" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ $rate_five }}%
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
     
            <!--  -->



            <section class="grid md:grid-cols-3 gap-5  ">

                <!-- side -->
                <div class="h-screen col-span-1 p-2 space-y-1 hidden md:block overflow-y-auto ">



                    <div class="space-y-2">
                        <h2 class="font-semibold text-gray-700 capitalize">Star review</h2>
                        <label for="star-1"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
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
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                                id="star-2" value="4">
                            <span>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                            </span>
                        </label>
                        <label for="star-3"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                                id="star-3" value="3">
                            <span>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                            </span>
                        </label>
                        <label for="star-4"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                                id="star-4" value="2">
                            <span>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                            </span>
                        </label>
                        <label for="star-5"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="star" wire:model.live="selectedRatings"
                                id="star-5" value="1">
                            <span>
                                <i class="bx bxs-star text-xl text-yellow-400"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                                <i class="bx bxs-star text-xl text-gray-300"></i>
                            </span>
                        </label>
                    </div>

                    <div class="space-y-2">
                        <h2 class="font-semibold text-gray-700 capitalize">NPS</h2>
                        <label for="NPS-1"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="NPS" wire:model.live="selectedNPS"
                                id="NPS-1" value="9,10">
                            <span class="text-sm"> Promoters (9-10)</span>
                        </label>
                        <label for="NPS-2"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="NPS" wire:model.live="selectedNPS"
                                id="NPS-2" value="7,8">
                            <span class="text-sm"> Passives (7-8)</span>
                        </label>
                        <label for="NPS-3"
                            class=" cursor-pointer  bg-white px-2 py-1 space-x-2 rounded-md flex items-center">
                            <input type="checkbox" class="" name="NPS" wire:model.live="selectedNPS"
                                id="NPS-3" value="0,6">
                            <span class="text-sm"> Detractors (0-6)</span>
                        </label>
                    </div>
                </div>

                <div class="h-screen md:col-span-2 space-y-3 transition-all duration-300 overflow-y-auto">

                    <div class="sticky top-0  z-10 bg-slate-100 pb-5">
                        <div
                            class="flex flex-col justify-end md:flex-row px-3 md:px-10  space-y-5 md:space-y-0 md:space-x-6 md:items-center">
                            {{-- <p><span class="font-semibold">Count</span> {{ count($reviews) }}</p>
                            <p><span class="font-semibold">Limit</span> 100</p> --}}

                            <select id="countries1" wire:model.live="sortOption"
                                class="md:bg-white border-0 md:border border-gray-300 text-gray-900 text-sm rounded-lg md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                                <option value="latest">Latest</option>
                                <option value="oldest">Oldest</option>
                            </select>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none bg-orange-400 pr-2  rounded-lg">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="search" wire:model.live="search"
                                    class="block w-full p-3 ps-10 text-sm text-gray-900 border-0 md:border border-gray-300 rounded-lg md:bg-white focus:ring-orange-500 focus:border-orange-500 "
                                    placeholder="Search" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div>
                        <section class="mt-5">

                            <!--  -->
                            <div class=" space-y-3 transition-all duration-300 overflow-y-auto">

                                @forelse ($reviews as $key => $review)
                                    <div id="{{ $review->id }}-first"
                                        class="divide-y rounded-lg border px-4 pb-2 transition-all duration-300 space-y-5 bg-white">
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
                                                {{ $review->review_platform_ans ?: $review->nps_comment_ans }}
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
                                                    class="text-orange-800">{{ $review->contact_info_ans['location'] }}</span>
                                            @endif
                                        </div>

                                        <div class="">
                                            <p class="text-sm flex items-center">
                                                <i class='text-slate-500 bx bxs-bar-chart-alt-2  text-xl mr-2'></i>
                                                <b class="mr-2">Survey</b>
                                                <a href="{{ route('campaign.show', ['campaign' => $review->campaign->slug]) }}"
                                                    class="text-orange-500 underline hover:text-orange-600">{{ $review->campaign->name }}</a>
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

                                            {{-- @if (count($review->tags) != 0)
                                                <div class=" flex items-center ">
                                                    <span><i
                                                            class='bx bxs-purchase-tag text-slate-500 text-md'></i></span>
                                                    @foreach ($review->tags as $tag)
                                                        <span
                                                            class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 ">{{ $tag->name }}</span>
                                                    @endforeach
                                                </div>
                                            @else
                                                <livewire:tag-component :reviewId="$review->id"
                                                    :wire:key="'review-'.$review->id" />
                                            @endif --}}



                                            <div class="flex justify-between pb-4">
                                                <div class="flex space-x-4">
                                                    <a
                                                        href="{{ route('review.shareOne', ['uuid' => $review->uuid]) }}">
                                                        <button
                                                            class=" rounded-lg px-3 py-0.5 border border-gray-600 bg-gray-200 text-gray-700 text-xs flex items-center hover:shadow-md"><i
                                                                class="bx bxs-share-alt text-lg mr-2"></i>
                                                            Share</button>
                                                    </a>
                                                    @if (!$review->show)
                                                       
                                                        <button wire:click="showOrHide({{ $review->id }})"
                                                            class=" rounded-lg px-3 py-0.5 border border-green-500 text-green-500 text-sm font-semibold flex items-center hover:shadow-md">

                                                            <i class='bx bx-check text-lg mr-2'></i> Visible in
                                                            widget</button>
                                                    @else
                                                    <a href="{{ route('review.show', ['review' => $review->uuid]) }}"
                                                        target="_blank">
                                                        <button
                                                            class=" rounded-lg px-3 py-0.5 border border-orange-600 text-orange-600 text-sm font-semibold flex items-center hover:shadow-md">

                                                            <i class='bx bxs-show text-lg mr-2'></i>View
                                                            review</button>
                                                    </a>
                                                        <button wire:click="showOrHide({{ $review->id }})"
                                                            class=" rounded-lg px-3 py-0.5 border border-orange-600 text-orange-600 text-sm font-semibold flex items-center hover:shadow-md">

                                                            <i class='bx bxs-hide text-lg mr-2'></i> Hidden from
                                                            widget</button>
                                                    @endif

                                                </div>
                                                <div>
                                                    <form
                                                        action="{{ route('review.destroy', ['review' => $review]) }}"
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
                                    <div class="text-center font-bold text-orange-400 bg-orange-100 p-10">Empty data</div>
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
    </main>
</div>
