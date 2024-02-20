<x-app-layout>

    <div class="space-y-10 pb-10">
        <div class="py-5 border-b px-3 md:px-10">
            <h3 class=" font-bold">Dashboard</h3>
        </div>
        <h1 class="text-3xl font-bold px-3 md:px-10 capitalize">Welcome Back</h1>

        <div class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 ">

            <div
                class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    @foreach ($data as $site)
                        {{ $site->users_count }}
                    @endforeach
                </h5>
                </p>
                <p class="mb-3 text-gray-600  font-bold">Users</p>
                <a href="{{ route('settings.users') }}">
                    <x-main-button><i class="bx bxs-user mr-1 "></i> Add User</x-main-button>

                </a>
            </div>
            {{--  --}}
            <div
                class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">12</h5>
                </p>
                <p class="mb-3 text-gray-600  font-bold">Platforms</p>
                <a href="#">
                    <x-main-button><i class="bx bxs-plug mr-1 "></i>Add new platforms</x-main-button>

                </a>
            </div>
            {{--  --}}
            <div
                class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    @foreach ($data as $site)
                        {{ $site->campaigns_count }}
                    @endforeach
                </h5>
                </p>
                <p class="mb-3 text-gray-600  font-bold">Campaings</p>
                <a href="{{ route('campaign.index') }}">
                    <x-main-button type="submit"><i class="bx bxs-star mr-1 "></i>Manage campaigns</x-main-button>
                </a>
            </div>
            {{--  --}}
            <div
                class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    @foreach ($data as $site)
                        {{ $site->campaigns->sum('reviews_count') }}
                    @endforeach
                </h5>
                </p>
                <p class="mb-3 text-gray-600  font-bold">Reviews</p>
                <a href="{{ route('review.index') }}">
                    <x-main-button><i class="bx bxs-conversation mr-1 "></i>Manage reviews</x-main-button>

                </a>
            </div>
            {{--  --}}
            <div
                class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">12</h5>
                </p>
                <p class="mb-3 text-gray-600  font-bold">Users</p>
                <a href="#">
                    <x-main-button>Add User</x-main-button>

                </a>
            </div>
            {{--  --}}
            <div
                class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">12</h5>
                </p>
                <p class="mb-3 text-gray-600  font-bold">Users</p>
                <a href="#">
                    <x-main-button>Add User</x-main-button>

                </a>
            </div>
            {{--  --}}

        </div>


        <h1 class=" px-3 md:px-10 text-xl font-semibold">Most recent review</h1>

        <section class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            @forelse ($reviews as $review)
                <div
                    class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-end px-4 pt-4">

                    </div>
                    <div class="flex flex-col items-center pb-5">
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
                    </div>
                </div>
            @empty
                no dta yet
            @endforelse
        </section>
    </div>


</x-app-layout>
