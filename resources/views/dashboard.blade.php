<x-app-layout>

    <div class="space-y-10 pb-10">
        <div class="py-5 border-b px-3 md:px-10">
            <h3 class=" font-bold">Dashboard</h3>
        </div>
        <h1 class="text-3xl font-bold px-3 md:px-10 capitalize text-cyan-800">Welcome Back</h1>

        <div class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 ">

            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow flex justify-between">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        @foreach ($data as $site)
                            {{ $site->users_count }}
                        @endforeach
                    </h5>
                    <p class="mb-3 text-gray-600  font-bold">Users</p>
                    <a href="{{ route('settings.users') }}">
                        <x-main-button><i class="bx bxs-user mr-1 "></i> Add User</x-main-button>

                    </a>
                </div>

                <i class="bx bxs-user text-2xl text-slate-400"></i>
            </div>
            {{--  --}}
            {{-- <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow flex justify-between">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">0</h5>
                    <p class="mb-3 text-gray-600  font-bold">Platforms</p>
                    <a href="{{ route('platform.index') }}">
                        <x-main-button><i class="bx bxs-plug mr-1 "></i>Add new platforms</x-main-button>

                    </a>
                </div>
                <i class="bx bxs-plug text-2xl text-slate-400 "></i>
            </div> --}}
            {{--  --}}
            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow flex justify-between">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        @foreach ($data as $site)
                            {{ $site->campaigns_count }}
                        @endforeach
                    </h5>
                    <p class="mb-3 text-gray-600  font-bold">Campaings</p>
                    <a href="{{ route('campaign.index') }}">
                        <x-main-button type="submit"><i class="bx bxs-star mr-1 "></i>Manage campaigns</x-main-button>
                    </a>
                </div>
                <i class="bx bxs-star text-2xl text-slate-400 "></i>
            </div>
            {{--  --}}
            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow flex justify-between">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        @foreach ($data as $site)
                            {{ $site->campaigns->sum('reviews_count') }}
                        @endforeach
                    </h5>
                    <p class="mb-3 text-gray-600  font-bold">Reviews</p>
                    <a href="{{ route('review.index') }}">
                        <x-main-button><i class="bx bxs-conversation mr-1 "></i>Manage reviews</x-main-button>

                    </a>
                </div>
                <i class="bx bxs-conversation text-2xl text-slate-400 "></i>
            </div>
            {{--  --}}
            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow flex justify-between">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $site->email_number ?? 0}} <sup class="text-gray-400 text-sm">/15</sup></h5>
                    <p class="mb-3 text-gray-600  font-bold">Emails sent this month</p>
                    <a href="{{ route('campaign.index') }}">
                        <x-main-button>
                            <i class='bx bxs-bar-chart-alt-2 mr-1'></i>
                            Manage surveys</x-main-button>

                    </a>
                </div>
                <i class="bx bxs-bar-chart-alt-2 text-2xl text-slate-400 "></i>
            </div>
            {{--  --}}
            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow flex justify-between">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">6</h5>
                    <p class="mb-3 text-gray-600  font-bold">widgets</p>
                    <a href="{{ route('widget.index') }}">
                        <x-main-button>  <i class='bx bxs-widget mr-1'></i>View widget</x-main-button>

                    </a>
                </div>
                <i class='bx bxs-widget text-2xl text-slate-400'></i>
            </div>
            {{--  --}}

        </div>


        <h1 class=" px-3 md:px-10 text-xl font-semibold">Most recent review</h1>

        <section class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            @forelse ($reviews as $review)
                <div class="w-full  bg-white border border-gray-200 rounded-lg shadow flex justify-between">
                    {{-- <div class="flex justify-end px-4 pt-4">

                    </div> --}}
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

                        <div class=" py-0.5 px-3 text-xs bg-cyan-600 bg-opacity-25  font-semibold mt-8 w-full  rounded-b-lg text break-all truncate">{{ $review->campaign->name }}</div>
                    </div>
                </div>
            @empty
            <p class="bg-cyan-100 text-cyan-500 py-4 text-center rounded col-span-4" >No Data Yet.</p>
            @endforelse
        </section>
    </div>


</x-app-layout>
