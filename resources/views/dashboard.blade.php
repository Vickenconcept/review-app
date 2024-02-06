<x-app-layout>

    <div class="space-y-10 pb-10">
        <div class="py-5 border-b px-3 md:px-10">
            <h3 class=" font-bold">Dashboard</h3>
        </div>
        <h1 class="text-3xl font-bold px-3 md:px-10 capitalize">Welcome Back</h1>

        <div class="px-3 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 ">

            <div
                class="max-w-sm p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                class="max-w-sm p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                class="max-w-sm p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                class="max-w-sm p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                class="max-w-sm p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                class="max-w-sm p-6 bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-end px-4 pt-4">

                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                            src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-sm whitespace-pre-wrap font-medium text-gray-900 dark:text-white">
                            {{ $review->contact_info_ans['email'] ?: $review->private_feed_back_ans['email'] }}</h5>
                        <span
                            class="text-sm text-gray-500 dark:text-gray-400">{{ $review->contact_info_ans['location'] ? $review->contact_info_ans['location'] : 'N/A' }}</span>
                        <div class="flex mt-4 md:mt-6">
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                friend</a>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Message</a>
                        </div>
                    </div>
                </div>
            @empty
                no dta yet
            @endforelse



        </section>
    </div>


</x-app-layout>
