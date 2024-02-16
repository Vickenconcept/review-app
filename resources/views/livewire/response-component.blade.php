<div>
    <div class="p-3 md:px-16 md:py-5">

        <div class="flex flex-col md:flex-row justify-between border rounded-lg">
            @if ($campaign->campaignType == 'reviews')
                <select wire:model.live="selectedOption1"
                    class=" border-0 hover:border hover:border-gray-300 text-gray-900 text-sm  md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                    <option value="How would you rate our service?">How would you rate our service?</option>
                    <option value="Please let us know what was missing or disappointing in your experience with us.">
                        Please let us know what was missing or disappointing in your experience with us.
                    </option>
                </select>
            @endif
            @if ($campaign->campaignType == 'NPS')
                <select wire:model.live="selectedOption2"
                    class=" border-0 hover:border hover:border-gray-300 text-gray-900 text-sm  md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                    <option value="How likely are you to recommend our service to a friend or colleague?">How likely are
                        you to recommend our service to a friend or colleague?</option>
                    <option value="What is the primary reason for your score?">
                        What is the primary reason for your score?
                    </option>
                </select>
            @endif
            <select wire:model.live="selectedContactOption"
                class=" border-0 hover:border hover:border-gray-300 text-gray-900 text-sm  md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                <option value="All">All</option>
                <option value="with_contact">with contact</option>
                <option value="without_contact">without contact</option>
            </select>
            <select wire:model.live="sortOption"
                class=" border-0 hover:border hover:border-gray-300 text-gray-900 text-sm  md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                <option value="latest">Latest</option>
                <option value="oldest">Oldest</option>
            </select>

            <div>
                <input type="date" wire:model.live="selectedDate"
                    class="border-0 hover:border hover:border-gray-300">
            </div>


            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search" wire:model.live="search"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border-0 hover:border hover:border-gray-300   focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search" required autocomplete="off">

            </div>

            <div>
                <button class="flex justify-center items-center p-2">
                    <i class="bx bx-export text-xl"></i>
                </button>
            </div>
        </div>
        {{--  --}}
        @if ($campaign->campaignType == 'reviews')
            <div>
                <section class="grid grid-cols-3 gap-5 mt-5">
                    {{-- side --}}
                    <div class="h-full col-span-1 bg-gray-50 p-2 space-y-1">
                        @foreach ($reviews as $review)
                            <a href="#{{ $review->id }}-first"
                                class="bg-white p-2 space-y-2 block focus:outline-1 focus:ring focus:ring-cyan-300">
                                <p class="font-semibold text-gray-400">
                                    {{ $review->star_question_ans ? $review->star_question_ans : '[no value]' }}</p>
                                <p class="text-cyan-500 text-xs font-bold">#{{ $loop->iteration }}
                                    {{ $review->created_at }}</p>
                            </a>
                        @endforeach
                    </div>
                    {{--  --}}
                    <div class="h-screen col-span-2    space-y-3 transition-all duration-300 overflow-y-auto">
                        @forelse ($reviews as $key => $review)
                            <div id="{{ $review->id }}-first"
                                class="divide-y rounded-lg border px-4 pb-2 transition-all duration-300">
                                <div class="flex justify-between items-center">
                                    <span class="py-1 text-xs text-gray-400 font-bold">{{ $review->created_at }}</span>
                                    <div class="py-1 text-xs text-gray-400 font-bold flex items-center">
                                        <button class="text-gray-500 hover:text-gray-800"
                                            wire:click="deleteReview({{ $review->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                            </svg>

                                        </button>
                                        <span class=" ml-1 text-xs bg-cyan-100 text-cyan-500 p-1 rounded-lg">
                                            #{{ $loop->iteration }}
                                        </span>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <p class="text-cyan-700 font-bold text-sm">How would you rate our service?</p>
                                    <div class="">
                                        <button class="border px-2 py-0.5">
                                            @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                                <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                            @endfor
                                        </button>
                                    </div>

                                    <p class="text-cyan-700 font-bold text-sm">Please let us know what was missing or
                                        disappointing in your experience with us.</p>
                                    <div class="border px-2 py-0.5 text-xs font-semibold">
                                        {{ $review->review_platform_ans }}
                                    </div>

                                    <div>
                                        <p class="text-cyan-700 font-bold text-sm">Contact Info</p>
                                        <div class="bg-cyan-100 p-2">
                                            @if ($review->private_feed_back_ans['name'])
                                                <label for="" class="text-xs font-bold">Name</label>
                                                <input type="text"
                                                    value="{{ $review->private_feed_back_ans['name'] }}"
                                                    class=" px-3 bg-white rounded text-xs  border-0 py-2 w-full"
                                                    disabled>
                                            @endif
                                            @if ($review->private_feed_back_ans['email'] || $review->contact_info_ans['email'])
                                                <label for="" class="text-xs font-bold">Email</label>
                                                <input type="text"
                                                    value="{{ $review->private_feed_back_ans['email'] ? $review->private_feed_back_ans['email'] : $review->contact_info_ans['email'] }}"
                                                    class=" px-3 bg-white rounded text-xs  border-0 py-2 w-full"
                                                    disabled>
                                            @endif
                                            @if ($review->private_feed_back_ans['phonenumber'])
                                                <label for="" class="text-xs font-bold">Phone Number</label>
                                                <input type="text"
                                                    value="{{ $review->private_feed_back_ans['phonenumber'] }}"
                                                    class=" px-3 bg-white rounded text-xs  border-0 py-2 w-full"
                                                    disabled>
                                            @endif
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
        @endif
        {{--  --}}
        {{-- -------------------------- --}}
        {{--  --}}
        @if ($campaign->campaignType == 'NPS')
            <div>

                <section class="grid grid-cols-3 gap-5 mt-5">
                    {{-- side --}}
                    <div class="h-full col-span-1 bg-gray-50 p-2 space-y-1">
                        @foreach ($reviews as $review)
                            <a href="#{{ $review->id }}-second"
                                class="bg-white p-2 space-y-2 block focus:outline-1 focus:ring focus:ring-cyan-300">
                                <p class="font-semibold text-gray-400">
                                    {{ $review->star_question_ans ? $review->star_question_ans : '[no value]' }}</p>
                                <p class="text-cyan-500 text-xs font-bold">#{{ $loop->iteration }}
                                    {{ $review->created_at }}</p>
                            </a>
                        @endforeach
                    </div>
                    {{--  --}}
                    <div class="h-screen col-span-2    space-y-3 transition-all duration-300 overflow-y-auto">
                        @forelse ($reviews as $key => $review)
                            <div id="{{ $review->id }}-second"
                                class="divide-y rounded-lg border px-4 pb-2 transition-all duration-300">
                                <div class="flex justify-between items-center">
                                    <span class="py-1 text-xs text-gray-400 font-bold">{{ $review->created_at }}</span>
                                    <div class="py-1 text-xs text-gray-400 font-bold flex items-center">
                                        <button class="text-gray-500 hover:text-gray-800"
                                            wire:click="deleteReview({{ $review->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                            </svg>

                                        </button>
                                        <span class=" ml-1 text-xs bg-cyan-100 text-cyan-500 p-1 rounded-lg">
                                            #{{ $loop->iteration }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 py-2">
                                    <img src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                        alt="thumb" class="h-12 w-12 rounded-full border">
                                    <a href="#"
                                        class="hover:underline text-xs font-bold">{{ $review->private_feed_back_ans['name'] }}
                                        @if ($review->contact_info_ans['location'])
                                            <span
                                                class="text-cyan-400">({{ $review->contact_info_ans['location'] }})</span>
                                        @endif
                                    </a>
                                </div>
                                <div class="space-y-3">
                                    <p class="text-cyan-700 font-bold text-sm">How likely are you to recommend our
                                        service to a friend or colleague? (0 - 10)</p>
                                    <div class="">
                                        <button class="border-2 px-2 py-0.5 rounded">

                                            {{ $review->net_promote_ans }}
                                        </button>
                                    </div>

                                    <p class="text-cyan-700 font-bold text-sm">What is the primary reason for your
                                        score?</p>
                                    <div class="border px-2 py-0.5 text-xs font-semibold">
                                        {{ $review->nps_comment_ans }}
                                    </div>
                                    <p class="text-cyan-700 font-bold text-sm">Please let us know what was missing or
                                        disappointing in your experience with us.</p>
                                    <div class="border px-2 py-0.5 text-xs font-semibold">
                                        {{ $review->review_platform_ans }}
                                    </div>

                                    <div>
                                        <p class="text-cyan-700 font-bold text-sm">Contact Info</p>
                                        <div class="bg-cyan-100 p-2">
                                            @if ($review->private_feed_back_ans['name'])
                                                <label for="" class="text-xs font-bold">Name</label>
                                                <input type="text"
                                                    value="{{ $review->private_feed_back_ans['name'] }}"
                                                    class=" px-3 bg-white rounded text-xs  border-0 py-2 w-full"
                                                    disabled>
                                            @endif
                                            @if ($review->private_feed_back_ans['email'] || $review->contact_info_ans['email'])
                                                <label for="" class="text-xs font-bold">Email</label>
                                                <input type="text"
                                                    value="{{ $review->private_feed_back_ans['email'] ? : $review->contact_info_ans['email'] }}"
                                                    class=" px-3 bg-white rounded text-xs  border-0 py-2 w-full"
                                                    disabled>
                                            @endif
                                            @if ($review->private_feed_back_ans['phonenumber'])
                                                <label for="" class="text-xs font-bold">Phone Number</label>
                                                <input type="text"
                                                    value="{{ $review->private_feed_back_ans['phonenumber'] }}"
                                                    class=" px-3 bg-white rounded text-xs  border-0 py-2 w-full"
                                                    disabled>
                                            @endif
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
        @endif
        {{--  --}}
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
