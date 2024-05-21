{{-- @props(['search_term', 'location']) --}}
<section class="h-full w-full bg-gray-50 flex flex-col-reverse sm:flex-row min-h-0 min-w-0 overflow-hidden">
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
                @if (session('error'))
                    <div class="bg-red-200 text-red-500 p-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-200 text-green-500 p-4">
                        {{ session('success') }}
                    </div>
                @endif
            </span>
            <span class="mr-3 text-sm text-slate-600">
                <span class="font-semibold">Total import: </span> {{ $yelp_used }}/{{ $platformCount }}
            </span>
            <button title="import" wire:click="saveDataToDatabase"
                @if ($yelp_used == $platformCount) disabled
                @elseif(count($result) == 0)
                disabled @endif
                class=" bg-cyan-950 hover:bg-cyan-800 hover:shadow font-semibold text-blue-50 ml-auto border rounded-full  w-10 h-10 text-center leading-none  focus:outline-none focus:ring-2 focus:border-transparent flex items-center justify-center">
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
                        <h1 class="font-bold text-xl capitalize">Add Your Yelp API Key</h1>
                        <form wire:submit="saveAPIKey">
                            <input type="text" name="yelp_api_key" wire:model="yelp_api_key"
                                class="form-control shadow" placeholder="o6yLhuE4_********">

                            <div class="mt-3">
                                <button
                                    class="w-full  text-cyan-50 bg-cyan-800 rounded-lg hover:bg-cyan-900 hover:shadow p-2 flex justify-center items-center">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin mr-1'></i></span> Save &
                                    Update
                                </button>
                            </div>
                        </form>

                        @php
                            $firstThree = substr($site->yelp_api_key, 0, 3);
                            $lastThree = substr($site->yelp_api_key, -3);

                        @endphp
                        @if ($site->yelp_api_key)
                            <p class="font-semibold text-sm bg-blue-100 p-2 rounded-md text-center"> API Key:
                                {{ $firstThree }}***********{{ $lastThree }}</p>
                        @endif
                    </div>

                </div>

                <div class=" h-full w- lg:flex-1 px-3 min-h-0 min-w-0 ">
                    <!-- overflow content right -->
                    <div class="bg-gray-200 w-full h-full min-h-0 min-w-0 overflow-auto p-4 space-y-10 ">

                        <form class="flex gap-4   flex-col md:flex-row">
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
                                    placeholder="Term">
                            </div>
                            <select id="countries" wire:model="location"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                                <option value="">Select a place</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="ES">Spain</option>
                                <option value="FR">France</option>
                                <optgroup label="United Kingdom">
                                    <option value="GB">United Kingdom</option>
                                </optgroup>
                                <option value="IE">Ireland</option>
                                <option value="IT">Italy</option>
                                <option value="NL">Netherlands</option>
                                <option value="PH">Philippines</option>
                                <option value="SG">Singapore</option>
                                <option value="TW">Taiwan</option>
                                <option value="AS">American Samoa</option>
                                <option value="GU">Guam</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="VI">US Virgin Islands</option>
                                <option value="GG">Guernsey</option>
                                <option value="IM">Isle of Man</option>
                                <option value="JE">Jersey</option>
                            </select>
                            <select id="limit" wire:model="limit"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 ">
                                <option value="">Limit</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                            </select>

                            <div>
                                <button type="button" wire:click="searchData"
                                    class="btn flex items-center whitespace-nowrap">
                                    <span wire:loading><i class='bx bx-loader-alt animate-spin'></i> loading..</span>
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
                                            Phone Number
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Rating
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            NPS
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Location
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($result as $data)
                                        <tr class="bg-white border-b dark:bg-gray-800 ">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                <img src="{{ $data['image_url'] }}" alt=""
                                                    class="w-16 h-10 rounded-full">
                                            </th>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">

                                                {{ $data['name'] }}
                                            </th>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $data['display_phone'] }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{-- {{ round($data['rating']) }} --}}
                                                @for ($i = 1; $i <= round($data['rating']); $i++)
                                                    <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                                @endfor
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ round($data['rating']) * 2 }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $data['location']['address1'] }}
                                                <p>{{ $data['location']['city'] }}</p>
                                            </td>

                                        </tr>

                                    @empty
                                        <tr class="bg-white">
                                            <td colspan="6" class="text-center p-5">
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
                <!-- -->

            </div>
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
