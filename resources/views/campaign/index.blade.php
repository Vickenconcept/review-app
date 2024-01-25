<x-app-layout>

    <div class="h-full  space-y-8" x-data="{ openModal: false, link: 'Send', campaign: '' }">
        <div class="py-5 border-b px-3 md:px-10 flex justify-between items-center">
            <div>
                <h3 class=" font-bold">Campaign</h3>
            </div>
            <form action="{{ route('campaign.store') }}" method="post">
                @csrf
                <x-main-button type="submit"><i class="bx bx-plus mr-2"></i>Create Campaign</x-main-button>
            </form>
        </div>
        <div class="flex flex-col md:flex-row px-3 md:px-10 space-y-5 md:space-y-0 md:space-x-6">
            <select id="countries1" wire:model="language"
                class="md:bg-gray-50 border-0 md:border border-gray-300 text-gray-900 text-sm rounded-lg md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                <option selected>Choose a country</option>
                <option value="EN">English</option>
                <option value="FR">French</option>
            </select>
            <select id="countries1" wire:model="language"
                class="md:bg-gray-50 border-0 md:border border-gray-300 text-gray-900 text-sm rounded-lg md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 md:dark:focus:border-blue-500">
                <option selected>Choose a country</option>
                <option value="EN">English</option>
                <option value="FR">French</option>
            </select>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border-0 md:border border-gray-300 rounded-lg md:bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search" required>
            </div>
        </div>

        <section class="px-3 md:px-10 ">
            <!-- List Group -->
            <ul class="mt-3 flex flex-col space-y-0.5">
                @forelse ($campaigns as $campaign)
                    <li
                        class="inline-flex items-center hover:shadow  gap-x-2  px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                        <div
                            class="flex flex-col md:flex-row text-center md:text-start items-center justify-between w-full ">
                            <a href="{{ route('campaign.show', ['campaign' => $campaign->slug]) }}"
                                class=" w-full md:w-3/4 py-3">
                                <p class="font-semibold">Payment to Front</p>
                                <div class="flex justify-center md:justify-start space-x-3 ">
                                    <p class="text-xs ">Payment to Front</p>
                                    <p class="text-xs ">Payment to Front</p>
                                </div>
                            </a>
                            <div
                                class="w-full md:w-1/4 flex justify-center items-center md:justify-end space-x-3 py-3 ">

                                <button @click="openModal = true , campaign =@js($campaign)"
                                    class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                    <i class='bx bxs-share text-2xl mr-1'></i> Share
                                </button>
                                <button
                                    class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                    <i class='bx bx-stats text-2xl '></i>
                                </button>
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button
                                            class="hover:bg-cyan-100 hover:text-cyan-700 rounded-full px-2 py-1 transition-all duration-300">
                                            <i class='bx bx-dots-vertical-rounded text-xl'></i>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">

                                        <x-dropdown-link class="cursor-pointer">
                                            <button class="w-full text-left px-4 py-2"><i
                                                    class='bx bxs-folder-open text-xl mr-1'></i>Move To Folder</button>

                                        </x-dropdown-link>
                                        <x-dropdown-link>
                                            <form class="w-full"
                                                action="{{ route('campaign.destroy', ['campaign' => $campaign]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="w-full text-left px-4 py-2 flex items-center text-red-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>


                                                    {{ __('Delete') }}
                                                </button>


                                            </form>
                                        </x-dropdown-link>

                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </li>
                @empty
                    <p>No Campaign Yet.</p>
                @endforelse



            </ul>
            <!-- End List Group -->
        </section>

        {{-- modal --}}
        <div class="fixed items-center justify-center  flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-30 z-50 transition duration-1000 ease-in-out"
            x-show="openModal" style="display: none;">
            <div @click.away="openModal = false"
                class="bg-white w-[90%] h-[33rem] shadow-inner  border rounded-2xl overflow-auto  pb-6 px-8 transition-all relative duration-700">
                <div class=" h-full ">
                    <div class="flex justify-between sticky top-0  py-6">
                        <h1 class="text-xl font-semibold">Share Cmapaign</h1>
                        <button @click="openModal = false"><i class="bx bx-x text-3xl text-gray-500"></i></button>
                    </div>
                    <div class=" ">
                        <ul class=" flex flex-col md:flex-row gap-6">
                            <li @click="link = 'Send'"
                                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 "
                                :class="{ 'border-b-2 border-cyan-700': link === 'Send' }"><i
                                    class='bx bxs-envelope text-xl mr-2'></i>Send via email</li>
                            <li @click="link = 'Url'"
                                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"
                                :class="{ 'border-b-2 border-cyan-700': link === 'Url' }"><i
                                    class='bx bx-link text-xl mr-2'></i>Url address</li>
                            <li @click="link = 'signature'"
                                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"
                                :class="{ 'border-b-2 border-cyan-700': link === 'signature' }"><i
                                    class='bx bxl-deviantart text-xl mr-2'></i>Email signature</li>
                            <li @click="link = 'QR'"
                                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"
                                :class="{ 'border-b-2 border-cyan-700': link === 'QR' }"><i
                                    class='bx bx-qr-scan text-xl mr-2'></i>QR code</li>
                        </ul>

                        <div x-show="link == 'Send'" style="display: none" class="mt-5">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="space-y-5">
                                    <div class="flex items-center">
                                        <input type="text" value="{{ auth()->user()->email }}"
                                            class="text-gray-400 form-control text-md w-56" disabled>
                                        <button
                                            class="flex items-center bg-cyan-100 text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300 font-semibold rounded-md whitespace-nowrap  px-4 py-2 ml-4">
                                            <i class='bx bxs-send mr-1'></i> Send test
                                        </button>
                                    </div>
                                    <hr>
                                    <p class="text-gray-500">Invite people to leave you a review and they will receive
                                        a link to your review form.</p>
                                    <form action="" class="space-y-3">
                                        <input type="text" name="name" placeholder="Name"
                                            class="text-gray-400 form-control text-md w-full">
                                        <input type="email" name="email" placeholder="Email*"
                                            class="text-gray-400 form-control text-md w-full">
                                        <button type="submit"
                                            class="btn ">
                                            send
                                        </button>
                                    </form>

                                </div>
                                <div></div>
                            </div>
                        </div>
                        {{--  --}}
                        <div x-show="link == 'Url'" style="display: none" class="mt-5">
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <div class="space-y-5 col-span-2">
                                    <p class="font-semibold text-sm">Send this link to the recipients via email, share
                                        in social media or add it to your website.</p>
                                    <div class="rounded-lg border flex justify-between p-5">
                                        <p x-bind:id="'dynamic-id-' + campaign.id"
                                            class="w-full text-sm font-semibold  flex items-center ">
                                            {{ route('campaign.share',['uuid' =>''.'/']) }}/<span x-text="campaign.uuid"></span> </p>
                                        <button  class="btn2" @click="toCopy(document.getElementById('dynamic-id-' + campaign.id))">
                                            <i class="bx bx-copy text-xl"></i>Copy
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{--  --}}
                        <div x-show="link == 'signature'" style="display: none" class="mt-5">
                            signature
                        </div>
                        {{--  --}}
                        <div x-show="link == 'QR'" style="display: none" class="mt-5">
                            QR
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script>
            function toCopy(copyDiv) {
                var range = document.createRange();
                range.selectNode(copyDiv);
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
                document.execCommand("copy");
                // alert("copied!");

            }
        </script>
    </div>
</x-app-layout>
