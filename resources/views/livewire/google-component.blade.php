{{-- @props(['search_term', 'location']) --}}
<section class="h-full w-full bg-gray-50 flex flex-col-reverse sm:flex-row min-h-0 min-w-0 overflow-hidden"
    x-data="{ isOpen: null }">
    <main class="sm:h-full flex-1 flex flex-col min-h-0 min-w-0 overflow-auto">
        <nav class="border-b bg-white px-6 py-2 flex items-center min-w-0 h-14">
            <h1 class="font-semibold text-lg"></h1>
            <span class="flex-1">
                @if ($errors->any())
                    <div class="bg-red-200 text-red-500 p-2 rounded-md text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-200 text-green-500 p-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-200 text-red-500 p-4">
                        {{ session('error') }}
                    </div>
                @endif
            </span>
            <span class="mr-3 text-sm text-slate-600">
              <button class="bg-cyan-900 hover:bg-cyan-800 text-cyan-50 rounded-md py-2 px-4 shadow hover:shadow-md" @click="isOpen = 'product'">Products</button>
              <button class="bg-cyan-200 hover:bg-cyan-900 text-cyan-900 hover:text-cyan-50 transition-all duration-300 rounded-md py-2 px-4 shadow hover:shadow-md" @click="isOpen = 'map'">Map</button>
            </span>
            <span class="mr-3 text-sm text-slate-600">
                <span class="font-semibold">Total import: </span> {{ $platforms->count() }}/{{ $platformCount }}
            </span>
            <button title="import" wire:click="saveDataToDatabase" x-show="isOpen === 'product'" style="display: none"
                @if ($platforms->count() == $platformCount) disabled
                @elseif(count($result) == 0)
                disabled @endif
                class=" bg-cyan-950 hover:bg-cyan-800 hover:shadow font-semibold text-blue-50 ml-auto border rounded-full  w-10 h-10 text-center leading-none  focus:outline-none focus:ring-2 focus:border-transparent flex items-center justify-center">
                <span wire:loading><i class='bx bx-loader-alt animate-spin'></i></span>
                <i class='bx bx-import ' wire:loading.remove></i>
            </button>

            <button title="import" wire:click="saveMapDataToDatabase" x-show="isOpen === 'map'" style="display: none"
                @if ($platforms->count() == $platformCount) disabled
                @elseif(count($result) == 0)
                disabled @endif
                class=" bg-red-950 hover:bg-red-800 hover:shadow font-semibold text-blue-50 ml-auto border rounded-full  w-10 h-10 text-center leading-none  focus:outline-none focus:ring-2 focus:border-transparent flex items-center justify-center">
                <span wire:loading><i class='bx bx-loader-alt animate-spin'></i></span>
                <i class='bx bx-import ' wire:loading.remove></i>
            </button>

        </nav>

        <section class="flex-1 pt-3 md:p-6 lg:mb-0 lg:min-h-0 lg:min-w-0">
            <div class="flex flex-col lg:flex-row h-full w-full">
                <div
                    class=" pb-2 lg:pb-0 w-full lg:max-w-sm px-3 flex flex-row lg:flex-col flex-wrap lg:flex-nowrap mb-10 lg:mb-0">
                    <!-- control content left -->
                    <div class="w-full h-24 min-h-0 min-w-0 mb-4 space-y-4">
                        <div>
                            <p class="font-bold text-xl capitalize">for your google review</p>
                            <h1 class="font-bold text-sm capitalize">Add Your Serp API Key</h1>
                        </div>
                        <form wire:submit="saveAPIKey">
                            <input type="text" name="serp_api_key" wire:model="serp_api_key"
                                class="form-control shadow" placeholder="o6yLhuE4_********">

                            <div class="mt-3">
                                <button wire:click="saveAPIKey"
                                    class="w-full  text-cyan-50 bg-cyan-800 rounded-lg hover:bg-cyan-900 hover:shadow p-2 flex justify-center items-center">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin mr-1'></i></span> Save &
                                    Update
                                </button>
                            </div>
                        </form>

                        @php
                            $firstThree = substr($site->serp_api_key, 0, 3);
                            $lastThree = substr($site->serp_api_key, -3);

                        @endphp
                        @if ($site->serp_api_key)
                            <p class="font-semibold text-sm bg-blue-100 p-2 rounded-md text-center"> API Key:
                                {{ $firstThree }}***********{{ $lastThree }}</p>
                        @endif
                    </div>

                </div>

                <!-- selection buttons -->
                <div class=" h-full lg:flex-1 px-3 min-h-0 min-w-0" x-show="isOpen == null" style="display: none">
                    <div class="grid grid-cols-2 gap-5">
                        <div @click="isOpen = 'product'"
                            class="w-full bg-white border border-gray-200 rounded-lg shadow cursor-pointer hover:shadow-md">
                            <div class="w-full h-48 overflow-hidden">
                                <img class="rounded-t-lg w-full"
                                    src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHN8ZW58MHx8MHx8fDA%3D"
                                    alt="" />
                            </div>
                            <div class="p-1.5 space-y-2 divide-y">
                                <div>
                                    <h5 class=" text-md tracking-tight font-semibold text-gray-900 ">
                                        GOOGLE PRODUCT</h5>
                                    <span class="text-xs text-blue-500">Review</span>
                                </div>
                            </div>
                        </div>
                        <div @click="isOpen = 'map'"
                            class="w-full bg-white border border-gray-200 rounded-lg shadow cursor-pointer hover:shadow-md">
                            <div class="w-full h-48 overflow-hidden">
                                <img class="rounded-t-lg w-full"
                                    src="https://media.istockphoto.com/id/1292500214/vector/gps-3d-location-pines.jpg?s=612x612&w=0&k=20&c=1pV8U1p-fOSRpVimToxMyypBUfIHrDkZ53oLa1wDNDM="
                                    alt="" />
                            </div>
                            <div class="p-1.5 space-y-2 divide-y">
                                <div>
                                    <h5 class=" text-md tracking-tight font-semibold text-gray-900 ">
                                        GOOGLE MAP</h5>
                                    <span class="text-xs text-blue-500">Review</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- selection buttons -->

                <div class=" h-full w- lg:flex-1 px-3 min-h-0 min-w-0 " x-show="isOpen === 'product'"
                    style="display: none">
                    <!-- overflow content right -->
                    <div class="bg-gray-200 w-full h-full min-h-0 min-w-0 overflow-auto p-4 space-y-10 ">

                        <form class="flex gap-4   flex-col md:flex-row relative">
                            <div class="relative  block w-full">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="term" wire:model="search_term"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="search product..">
                            </div>
                            <div>
                                <button type="button" wire:click="searchData"
                                    class="btn flex items-center whitespace-nowrap">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin'></i>
                                        loading..</span>
                                    <span wire:loading.remove>Search</span>
                                </button>
                            </div>

                            <div
                                class="absolute right-0 z-10 mt-10 w-full grid grid-cols-5 gap-1 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">

                                @foreach ($search_response as $item)
                                    <div @isset($item['title'], $item['product_id'])
                                     wire:click="setMapId('{{ $item['title'] }}', '{{ $item['product_id'] }}')" @endisset
                                        class="w-full bg-white border border-gray-200 rounded-lg shadow cursor-pointer hover:shadow-md">
                                        @if (isset($item['thumbnail']))
                                            <img class="rounded-t-lg w-full" src="{{ $item['thumbnail'] }}"
                                                alt="" />
                                        @endif
                                        <div class="p-1.5 space-y-2 divide-y">
                                            <div>
                                                <h5 class=" text-xs tracking-tight text-gray-700 ">
                                                    {{ $item['title'] }}</h5>
                                                @if (isset($item['rating']))
                                                    @for ($i = 1; $i <= $item['rating']; $i++)
                                                        <i class="bx bxs-star text-yellow-400 text-xs"></i>
                                                    @endfor
                                                @endif
                                                @if (isset($item['reviews']))
                                                    <span
                                                        class="text-xs tracking-tight  text-blue-500  capitalize">{{ $item['reviews'] }}</span>
                                                @endif
                                            </div>
                                            <div>
                                                @if (isset($item['price']))
                                                    <h5 class=" text-xs tracking-tight font-semibold text-gray-900 ">
                                                        {{ $item['price'] }}</h5>
                                                @endif

                                                @if (isset($item['seller']))
                                                    <h5 class=" text-xs tracking-tight  text-blue-500  capitalize">
                                                        {{ $item['seller'] }}</h5>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </form>

                        <!-- next form-->
                        <form class="flex gap-4 flex-col md:flex-row ">
                            <div
                                class="bg-gray-50 border truncate w-5/6  border-gray-300 text-gray-900 text-sm rounded-lg  ps-10 p-2.5 ">
                                {{ $productName ?? 'Search and Enter product name' }}
                            </div>
                            <div>
                                <button type="button" wire:click="getReviews"
                                    @if ($productName == '') disabled @endif
                                    class="btn flex items-center whitespace-nowrap">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin'></i>
                                        loading..</span>
                                    <span wire:loading.remove>Search</span>
                                </button>
                            </div>
                        </form>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            Rating
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            NPS
                                        </th>
                                        <th scope="col" class="px-6 py-3 ">
                                            Message
                                        </th>
                                        <th scope="col" class="px-6 py-3 ">
                                            Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($forProduct)
                                        @forelse ($result as $data)
                                            <tr class="bg-white border-b dark:bg-gray-800 ">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    {{ $data['source'] }}
                                                </th>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @for ($i = 1; $i <= round($data['rating']); $i++)
                                                        <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                                    @endfor
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ round($data['rating']) * 2 }}
                                                </td>
                                                <td class="px-6 py-4  ">
                                                    @if (isset($data['content']))
                                                        <details class="cursor-pointer">
                                                            <summary class="line-clamp-1">{{ $data['content'] }}
                                                            </summary>
                                                            <p class="line-clamp-4">{{ $data['content'] }}</p>
                                                        </details>
                                                    @endif
                                                </td>

                                                <td class="px-6 py-4 ">
                                                    {{ $data['date'] }}
                                                </td>
                                            </tr>

                                        @empty
                                            <tr class="bg-white">
                                                <td colspan="7" class="text-center p-5">
                                                    <p class="text-sm">NO DATA FOUND</p>
                                                    <p><i class='bx bxs-folder-open text-6xl'></i></p>
                                                </td>
                                            </tr>
                                        @endforelse

                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <!--first view ends here -->
                <!--Second view begins here -->
                <div class=" h-full w- lg:flex-1 px-3 min-h-0 min-w-0 " x-show="isOpen === 'map'"
                    style="display: none">
                    <!-- overflow content right -->
                    <div class="bg-gray-200 w-full h-full min-h-0 min-w-0 overflow-auto p-4 space-y-10 ">

                        <form class="flex gap-4   flex-col md:flex-row relative">
                            <div class="relative  block w-full">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="term" wire:model="search_term"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="search product..">
                            </div>
                            <div>
                                <button type="button" wire:click="searchMapData"
                                    class="btn flex items-center whitespace-nowrap">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin'></i>
                                        loading..</span>
                                    <span wire:loading.remove>Search</span>
                                </button>
                            </div>

                            <div
                                class="absolute right-0 z-10 mt-10 w-full grid grid-cols-5 gap-1 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">

                                @foreach ($search_response as $item)
                                    <div @isset($item['title'], $item['data_id']) wire:click="setMapId('{{ $item['title'] }}', '{{ $item['data_id'] }}')" @endisset
                                        class="w-full bg-white border border-gray-200 rounded-lg shadow cursor-pointer hover:shadow-md">
                                        <div class="w-full h-32 overflow-hidden">
                                            @if (isset($item['thumbnail']))
                                                <img class="rounded-t-lg w-full" src="{{ $item['thumbnail'] }}"
                                                    alt="" />
                                            @endif
                                        </div>
                                        <div class="p-1.5 space-y-2 divide-y">
                                            <div>
                                                <h5 class=" text-xs tracking-tight text-gray-700 ">
                                                    {{ $item['title'] }}</h5>
                                                @if (isset($item['rating']))
                                                    @for ($i = 1; $i <= $item['rating']; $i++)
                                                        <i class="bx bxs-star text-yellow-400 text-xs"></i>
                                                    @endfor
                                                @endif
                                                @if (isset($item['reviews']))
                                                    <span
                                                        class="text-xs tracking-tight  text-blue-500  capitalize">{{ $item['reviews'] }}</span>
                                                @endif
                                            </div>
                                            <div>
                                                @if (isset($item['price']))
                                                    <h5 class=" text-xs tracking-tight font-semibold text-gray-900 ">
                                                        {{ $item['price'] }}</h5>
                                                @endif
                                                @if (isset($item['seller']))
                                                    <h5 class=" text-xs tracking-tight  text-blue-500  capitalize">
                                                        {{ $item['seller'] }}</h5>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </form>

                        <!-- next form-->
                        <form class="flex gap-4 flex-col md:flex-row ">
                            <div
                                class="bg-gray-50 border truncate w-5/6  border-gray-300 text-gray-900 text-sm rounded-lg  ps-10 p-2.5 ">
                                {{ $productName ?? 'Search and Enter product name' }}
                            </div>
                            <div>
                                <button type="button" wire:click="getMapReviews"
                                    @if ($productName == '') disabled @endif
                                    class="btn flex items-center whitespace-nowrap">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin'></i>
                                        loading..</span>
                                    <span wire:loading.remove>Search</span>
                                </button>
                            </div>
                        </form>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            Rating
                                        </th>

                                        <th scope="col" class="px-6 py-3 ">
                                            Message
                                        </th>
                                        <th scope="col" class="px-6 py-3 ">
                                            Likes
                                        </th>
                                        <th scope="col" class="px-6 py-3 ">
                                            Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($result as $data)
                                        <tr class="bg-white border-b dark:bg-gray-800 ">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">

                                                @if (isset($data['user']['thumbnail']))
                                                    <img src="{{ $data['user']['thumbnail'] }}" alt=""
                                                        class="w-16 h-10 rounded-full">
                                                @endif
                                            </th>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                @if (isset($data['user']['name']))
                                                    {{ $data['user']['name'] }}
                                                @endif
                                            </th>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @for ($i = 1; $i <= round($data['rating']); $i++)
                                                    <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                                @endfor
                                            </td>

                                            <td class="px-6 py-4  ">
                                                <details class="cursor-pointer">
                                                    @if (isset($data['snippet']))
                                                        <summary class="line-clamp-1">{{ $data['snippet'] }}</summary>
                                                        <p class="line-clamp-4">{{ $data['snippet'] }}</p>
                                                    @endif
                                                </details>
                                            </td>

                                            <td class="px-6 py-4 ">
                                                @if (isset($data['likes']))
                                                    {{ $data['likes'] }}
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 ">
                                                @if (isset($data['date']))
                                                    {{ $data['date'] }}
                                                @endif
                                            </td>
                                        </tr>

                                    @empty
                                        <tr class="bg-white">
                                            <td colspan="9" class="text-center p-5">
                                                <p class="text-sm">NO DATA FOUND</p>
                                                <p><i class='bx bxs-folder-open text-6xl'></i></p>
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <!-- -->

        </section>
    </main>

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('refreshPage', () => {
                location.reload();
            });
        });
    </script>
</section>
