<div>
    {{-- Stop trying to control. --}}

    <div class="space-y-5 mt-3">
        <h1 class="font-bold text-xl  w-full md:w-[90%] mx-auto">Private Reviews</h1>
        <div class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-cyan-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Message
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            -
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                        @if ($review->private_feed_back_ans['name'] !== null)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{-- <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image']: asset('images/image-thumb.png') }}" alt="" class="rounded-full w-12 h-12"> --}}
                                </th>
                                <td class="px-6 py-1">
                                    <a href="#"
                                        class="hover:underline">{{ $review->private_feed_back_ans['name'] }}</a>
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->private_feed_back_ans['email'] }}
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->private_feed_back_ans['phonenumber'] }}
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->private_feed_back_ans['message'] }}
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->created_at }}
                                </td>
                                <td class="px-6 py-1">
                                    <button class="text-red-500" wire:click="deleteReview({{ $review->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>

                                    </button>
                                </td>

                            </tr>
                        @endif
                    @empty
                    
                        <tr>
                            <td class="px-6 py-1" colspan="5">
                                No data yet
                            </td>
                        </tr>
                    @endforelse
                    {{-- {{ $reviews->links(); }} --}}
                </tbody>
            </table>
        </div>
        {{-- --------------- --}}
        <h1 class="font-bold text-xl  w-full md:w-[90%] mx-auto">Regular Reviews</h1>
        <div class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-cyan-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Organisation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            -
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                        @if ($review->contact_info_ans['email'] !== null)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                        alt="" class="rounded-full w-12 h-12">
                                </th>
                                <td class="px-6 py-1">
                                    <a href="#"
                                        class="hover:underline">{{ $review->contact_info_ans['email'] }}</a>
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->contact_info_ans['location'] }}
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->contact_info_ans['organisation'] }}
                                </td>
                                <td class="px-6 py-1">
                                    {{ $review->created_at }}
                                </td>
                                <td class="px-6 py-1">
                                    <button class="text-red-500" wire:click="deleteReview({{ $review->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>

                                    </button>
                                </td>

                            </tr>
                        @endif
                    @empty
                    @endforelse
                    {{-- {{ $reviews->links(); }} --}}
                </tbody>
            </table>
        </div>
    </div>

    <script>


        document.addEventListener('livewire:initialized', () => {
            @this.on('review-deleted', (event) => {
                console.log(event);
                    location.reload();

            });
        });
    </script>

</div>
