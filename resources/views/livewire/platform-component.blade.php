<div class="space-y-10 h-full" x-data="{ openModal: false, platform: null }">
    <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
        <div>
            <h3 class=" font-bold">Settings {{ $platform }}</h3>
        </div>
        <span class="text-xs">Invite users to your team</span>
    </div>
    <h1 class="text-3xl font-bold -tracking-wider  px-3 md:px-10"> Add new platform for reviews</h1>


    <section class="px-3 md:px-10 ">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
            <div class=" w-full">
                <button @click="openModal = true; platform ='g2'" wire:click="updatePlatform('g2')"
                    class=" {{ $platform == 'g2' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">G2</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='google'" wire:click="updatePlatform('google')"
                    class=" {{ $platform == 'google' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">Google</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='facebook'" wire:click="updatePlatform('facebook')"
                    class=" {{ $platform == 'facebook' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">Facebook</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='capterra'" wire:click="updatePlatform('capterra')"
                    class=" {{ $platform == 'capterra' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">Capterra</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='yelp'" wire:click="updatePlatform('yelp')"
                    class=" {{ $platform == 'yelp' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">Yelp</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='google_play'" wire:click="updatePlatform('google_play')"
                    class=" {{ $platform == 'google_play' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">Google Play</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='tripadvisor'" wire:click="updatePlatform('tripadvisor')"
                    class=" {{ $platform == 'tripadvisor' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p><i class="bx bxs-star text-5xl"></i></p>
                    <p class="font-semibold text-xs">Tripadvisor</p>

                </button>
            </div>
            <div class=" w-full">
                <button @click="openModal = true; platform ='manually'" wire:click="updatePlatform('manually')"
                    class=" {{ $platform == 'manually' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-50 text-gray-700' }}
             p-5 rounded-lg text-center space-y-1  cursor-pointer col-span-1 w-full">
                    <p>
                        <i class='bx bxs-file-import text-2xl'></i>
                    </p>
                    <p class="font-semibold text-xs">Import Manually</p>

                </button>
            </div>



        </div>
    </section>
    <hr class="px-3 md:px-10">




    <div class="flex justify-between items-center px-3 md:px-10">
        <h1 class="text-2xl font-semibold -tracking-wider  ">Connected review platforms</h1>
        <h3 class="text-sm">
            REVIEW PLATFORMS:
            1/1
        </h3>
    </div>

    <section class="px-3 md:px-10">

        <div class="divide-y rounded-lg border px-8 pb-2 transition-all duration-300 space-y-5  mb-10">
            <div class="flex justify-between items-center pt-5">
                <div class="py-1 text-sm text-gray-700 font-bold flex items-center space-x-2">

                    <span>facbook</span>

                    <button type="submit"
                        class=" rounded-lg px-3 py-1.5 border text-xs border-green-400 text-green-400  font-semibold flex items-center hover:shadow-md ">
                        Connected
                    </button>
                </div>
                <div class=" rounde-lg p-4 flex justify-between items-center">
                    <p class="mr-1">Avoid negative reviews</p>

                    <label class="relative inline-flex items-center  cursor-pointer">
                        <input type="checkbox" value="1" class="sr-only peer"
                            @if ($auto_publish_reviews) checked @endif wire:click="toggleAutoPublishReviews"
                            wire:model.live="auto_publish_reviews">
                        <div
                            class="w-11 z-0 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all 
                                {{ $auto_publish_reviews ? 'peer-checked:bg-green-800' : 'peer-checked:bg-green-800' }}
                                 dark:border-gray-600 
                                ">
                        </div>
                    </label>
                </div>
            </div>

            <div class="flex space-x-10  pt-10">

                <div class=" space-y-2">
                    <h2 class="font-bold text-sm">Imported from Facebook </h2>
                    <p class="text-xs text-gray-400"> 0/0</p>

                </div>
                <div class=" space-y-2">
                    <h2 class="font-bold text-sm">Last import </h2>
                    <p class="text-xs text-gray-400"> January 18, 2024 2:55 AM</p>

                </div>
                <div class=" space-y-2">
                    <h2 class="font-bold text-sm">Next scheduled import</h2>
                    <p class="text-xs text-gray-400"> March 18, 2024 2:55 AM0/0</p>

                </div>

            </div>


            <div class="space-y-5 py-5">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center  pointer-events-none space-x-5">
                        <span class="text-gray-700 font-semibold ">Tags </span> <i
                            class='bx bxs-purchase-tag text-slate-700 text-md'></i>
                    </div>
                    <input type="search" id="search"
                        class="block w-full p-3 ps-20 text-sm text-gray-900 border-0 focus:ring-0 focus:border-b focus:border-cyan-900 focus:bottom-3"
                        placeholder="Add tag">
                </div>
            </div>

            <div class="flex space-x-10  pt-10 pb-5">
                <div class=" space-y-2">
                    <h2 class="font-bold text-sm">Custom review fields</h2>
                </div>
                <div class=" space-y-2">
                    <button type="submit"
                        class=" rounded-lg px-3 py-1  text-xs  text-cyan-700  font-semibold flex items-center hover:shadow-md hover:bg-gray-100 ">
                        <i class='bx bx-menu mr-1 text-lg'></i> Manage Fields
                    </button>
                </div>
            </div>

            <div class="space-y-5 py-5">
                <div class="flex justify-between pb-4">
                    <div class="flex space-x-4">
                        <a href="#">
                            <button
                                class=" rounded-lg px-3 py-0.5 border border-cyan-900 bg-cyan-900 text-cyan-50 text-xs flex items-center hover:shadow-md"><i
                                    class="bx bxs-share-alt text-lg mr-2"></i> Import reviews now</button>
                        </a>
                    </div>
                    <div>

                        <button type="submit"
                            class=" rounded-lg px-3 py-1.5 border border-red-600 text-red-600 text-sm font-semibold flex items-center hover:shadow-md ">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg> Delete Platform</button>

                    </div>
                </div>
            </div>
        </div>


    </section>

    {{-- modal --}}
    <div class="fixed items-center justify-center  flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-30 z-50 transition duration-1000 ease-in-out"
        x-show="openModal" style="display: none;">
        <div @click.away="openModal = false"
            class="bg-white w-[90%] h-[33rem] shadow-inner  border rounded-2xl overflow-auto  pb-6 px-8 transition-all relative duration-700">
            <div class=" h-full " wire:poll>

                this is it <input type="text" wire:model.live="platform">
                {{ $platform == 'g2' ? 'ss' : 'hidden' }}

                <div style="display: none" x-show="platform == 'g2'">
                    g2
                </div>
                <div style="display: none" x-show="platform == 'google'">
                    google
                </div>
                <div style="display: none" x-show="platform == 'yelp'">
                    yelp
                </div>
                <div style="display: none" x-show="platform == 'facebook'">
                    facebook
                </div>
                <div style="display: none" x-show="platform == 'google_play'">
                    google_play
                </div>
                <div style="display: none" x-show="platform == 'tripadvisor'">
                    tripadvisor
                </div>
                <div style="display: none" x-show="platform == 'capterra'">
                    capterra
                </div>
                <div style="display: none" x-show="platform == 'manually'">
                    manully
                </div>

                {{-- @if ($platform === 'g2')
                    <div>
                        {{ $platform }}
                    </div>
                @elseif ($platform === 'google')
                    <div>
                        {{ $platform }}
                    </div>
                @elseif ($platform === 'yelp')
                    <div>
                        i am on help
                        {{ $platform }}
                    </div>
                @elseif ($platform === 'google_play')
                    <div>
                        {{ $platform }}
                    </div>
                @elseif ($platform === 'tripadvisor')
                    <div>
                        {{ $platform }}
                    </div>
                @elseif ($platform === 'capterra')
                    <div>
                        {{ $platform }}
                    </div>
                @elseif ($platform == 'manually')
                    <div>
                        {{ $platform }}
                    </div>
                @endif --}}


            </div>
        </div>
    </div>


</div>
