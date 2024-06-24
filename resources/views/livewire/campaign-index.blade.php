    <div class="h-full  space-y-8 " x-data="{ openModal: false, link: 'Send', campaign: {}, folder: false, createFolder: false, editCampaign: false }">
        <div class="py-5 border-b px-3 md:px-10 flex justify-between items-center ">
            <div>
                <h3 class=" font-bold">Campaign</h3>
            </div>
            <form action="{{ route('campaign.store') }}" method="post">
                @csrf
                <x-main-button type="submit"><i class="bx bx-plus mr-2"></i>Create Campaign</x-main-button>
            </form>
        </div>
        <div class="flex flex-col md:flex-row px-3 md:px-10 space-y-5 md:space-y-0 md:space-x-6">
            <select id="countries1" wire:model.live="sortOrder"
                class="md:bg-gray-50 border-0 md:border border-gray-300 text-gray-900 text-sm rounded-lg md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 ">
                <option value="latest">Latest</option>
                <option value="oldest">Oldest</option>
            </select>


            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="md:bg-gray-50 border-0 md:border border-gray-300 text-gray-900 text-sm rounded-lg md:focus:ring-blue-500 md:focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white md:dark:focus:ring-blue-500 "
                type="button">Your Folder <i class='bx bxs-chevron-down ml-1 text-gray-500 text-md '></i>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    @forelse ($folders as $folder)
                        <li>
                            <a href="{{ route('folder.show', ['folder' => $folder]) }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $folder->name }}</a>
                        </li>
                    @empty
                        <p class="bg-cyan-100 text-cyan-500 py-2 text-center rounded">No folder.</p>
                    @endforelse
                </ul>
            </div>




            <div class="relative ">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search" wire:model.live="search"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border-0 md:border border-gray-300 rounded-lg md:bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search">
            </div>

            <button @click="createFolder = true"
                class="bg-cyan-950 hover:bg-cyan-800 hover:shadow px-4 py-1 font-semibold text-blue-50 rounded-md ">
                Create folder</button>

        </div>

        <section class="px-3 md:px-10 ">
            <!-- List Group -->
            <ul class="mt-3 flex flex-col space-y-0.5 overflow-y-auto pb-10">
                @forelse ($campaigns as $campaign)
                    <li
                        class="inline-flex items-center hover:shadow  gap-x-2  px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                        <div
                            class="flex flex-col md:flex-row text-center md:text-start items-center justify-between w-full ">
                            <a href="{{ route('campaign.show', ['campaign' => $campaign->slug]) }}"
                                class=" w-full md:w-3/4 py-3">
                                <p class="font-semibold capitalize">{{ $campaign->name }}</p>
                                <div class="flex justify-center md:justify-start space-x-3 ">
                                    <p class="text-xs ">Contacts
                                        {{ $campaign->reviews->pluck('private_feed_back_ans')->count() }}</p>
                                    <p class="text-xs ">Response {{ $campaign->reviews->count() }}</p>
                                    <p class="text-xs ">
                                        @if ($campaign->folder)
                                            Folder:
                                            <span
                                                class="rounded-full pt-0.5 pb-1 px-2 bg-cyan-300 ">{{ $campaign->folder->name }}</span>
                                        @endif
                                    </p>
                                    <p class="text-xs ">
                                        @if ($campaign->platform_id)
                                            <span
                                                class="rounded-full pt-0.5 pb-1 px-2 bg-cyan-800  text-gray-50">{{ optional($campaign->platform)->name }}</span>
                                        @endif
                                    </p>

                                </div>
                            </a>
                            <div
                                class="w-full md:w-1/4 flex justify-center items-center md:justify-end space-x-3 py-3 ">
                                <button @click="openModal = true , campaign =@js($campaign)"
                                    wire:click="setUrl('{{ $campaign->uuid }}')"
                                    class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                    <i class='bx bxs-share text-2xl mr-1'></i> Share
                                </button>
                                <a href="{{ route('campaign.show', ['campaign' => $campaign->slug]) }}">
                                    <button
                                        class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                        <i class='bx bx-stats text-2xl '></i>
                                    </button>
                                </a>
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button
                                            class="hover:bg-cyan-100 hover:text-cyan-700 rounded-full px-2 py-1 transition-all duration-300">
                                            <i class='bx bx-dots-vertical-rounded text-xl'></i>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link class="cursor-pointer">
                                            <button class="w-full text-left px-4 py-2 flex items-center"
                                                @click="folder = true; campaign = @js($campaign)"><i
                                                    class='bx bxs-folder-open text-xl mr-1'></i>Move To Folder</button>

                                        </x-dropdown-link>
                                        <x-dropdown-link class="cursor-pointer">
                                            <button class="w-full text-left px-4 py-2 flex items-center"
                                                @click="editCampaign = true; campaign = @js($campaign)"><i
                                                    class='bx bxs-edit text-xl mr-1'></i>Edit</button>

                                        </x-dropdown-link>
                                        <x-dropdown-link class="cursor-pointer">
                                            <a class="w-full text-left px-4 py-2 flex items-center hover:bg-cyan-100  text-cyan-900 font-semibold"
                                                href="{{ route('selectWidget', ['uuid' => $campaign->uuid]) }}">
                                                <button class="">
                                                    <i class='bx bxs-widget text-xl mr-1'></i>Manage widget</button>
                                            </a>
                                        </x-dropdown-link>
                                        <x-dropdown-link class="cursor-pointer">
                                            @if ($campaign->enabled)
                                                <button wire:click="showOrHide({{ $campaign->id }})"
                                                    class=" px-4 py-2  text-cyan-900 text-sm font-semibold flex items-center ">

                                                    <i class='bx bxs-hide text-lg mr-2'></i>Hide
                                                    Component</button>
                                            @else
                                                <button wire:click="showOrHide({{ $campaign->id }})"
                                                    class=" px-4 py-2  text-cyan-900 text-sm font-semibold flex items-center ">

                                                    <i class='bx bxs-show text-lg mr-2'></i>Show
                                                    Component</button>
                                            @endif
                                        </x-dropdown-link>
                                        <x-dropdown-link>
                                            <button type="button" data-item-id="{{ $campaign->id }}"
                                                class="delete-btn w-full text-left px-4 py-2 flex items-center text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5 mr-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>


                                                {{ __('Delete') }}
                                            </button>
                                        </x-dropdown-link>

                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </li>
                @empty
                    <div class="bg-cyan-100 text-cyan-500 py-4 flex justify-center items-center rounded ">
                        <span>No Campaign Yet.</span>
                        <p><i class='bx bxs-folder-open text-4xl'></i></p>
                    </div>
                @endforelse
                {{ $campaigns->links() }}



            </ul>
            <!-- End List Group -->
        </section>

        {{-- modal --}}
        <div class="fixed items-center justify-center  flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-30 z-50 transition duration-1000 ease-in-out"
            x-show="openModal" style="display: none;">
            <div @click.away="openModal = false"
                class="bg-white w-[90%] h-[33rem] shadow-inner  border rounded-2xl overflow-auto  pb-6 px-8 transition-all relative duration-700">
                <div class=" h-full ">
                    <div class="flex justify-between sticky top-0  py-6 bg-white">
                        <h1 class="text-xl font-semibold">Share Campaign</h1>
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
                            <li @click="link = 'embed'"
                                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"
                                :class="{ 'border-b-2 border-cyan-700': link === 'embed' }">
                                <i class='bx bx-code-alt text-xl mr-2'></i>

                                Embed Code
                            </li>
                            <li @click="link = 'QR'"
                                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"
                                :class="{ 'border-b-2 border-cyan-700': link === 'QR' }"><i
                                    class='bx bx-qr-scan text-xl mr-2'></i>QR code</li>
                        </ul>

                        <div x-show="link == 'Send'" style="display: none" class="mt-5">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="space-y-5">
                                    @if (session()->has('success'))
                                        <div class="bg-green-100 text-green-400 p-3">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="bg-red-200 text-red-500 p-4">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="flex items-center">
                                        <input type="text" wire:model="textEmail"
                                            class="text-gray-400 form-control text-md w-56" disabled>
                                        <button type="button" wire:click="testInvite"
                                            class="flex items-center bg-cyan-100 text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300 font-semibold rounded-md whitespace-nowrap  px-4 py-2 ml-4">
                                            <i class='bx bxs-send mr-1'></i>
                                            <span wire:loading.remove>Send test</span>
                                            <span wire:loading>Loading ...</span>
                                        </button>
                                    </div>
                                    <hr>
                                    <p class="text-gray-500">Invite people to leave you a review and they will receive
                                        a link to your review form.</p>
                                    <form action="" class="space-y-3">
                                        <input type="text" name="name" placeholder="Name" wire:model="name"
                                            class="text-gray-400 form-control text-md w-full">
                                        <input type="email" name="email" placeholder="Email*"
                                            wire:model.live="email" class="text-gray-400 form-control text-md w-full">
                                        <button type="button" @if ($email == '') disabled @endif
                                            class="btn " wire:click="invitUser">
                                            <span wire:loading.remove>send</span>
                                            <span wire:loading>Loading ...</span>
                                        </button>
                                    </form>

                                </div>
                                <!-- ---------- -->

                                <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg ">

                                    <h1 class="text-2xl font-bold text-gray-800 mb-4">Thank You for Your
                                        Review!</h1>

                                    <p class="text-gray-600">Your feedback is valuable to us.</p>

                                    <div class="text-yellow-500 text-md my-4">⭐⭐⭐⭐⭐</div>
                                    <div class="text-yellow-500 text-md my-4">⭐⭐⭐⭐</div>
                                    <div class="text-yellow-500 text-md my-4">⭐⭐⭐</div>
                                    <div class="text-yellow-500 text-md my-4">⭐⭐</div>
                                    <div class="text-yellow-500 text-md my-4">⭐</div>

                                    <p class="text-gray-800 my-4">
                                        Your review lights up our day! Thank you for sharing your thoughts and
                                        experiences with us. Your five-star rating reflects the dedication and
                                        commitment we pour into our service.
                                    </p>
                                    <p class="text-gray-800 my-4">
                                        But wait, we're not stopping there! We're constantly striving to elevate your
                                        experience even further. Your feedback is like a guiding star, illuminating our
                                        path towards perfection.
                                    </p>
                                    <p class="text-gray-800 my-4">
                                        Got more to say? We're all ears! Whether it's a suggestion, a question, or just
                                        a friendly chat, don't hesitate to reach out to us. Your voice matters, and
                                        we're here to listen.
                                    </p>
                                    <p class="text-gray-800 my-4">
                                        Looking forward to hearing from you soon!
                                    </p>
                                    <p class="text-gray-800 my-4">
                                        Warm regards,
                                    </p>
                                    <p>If you have any further feedback or questions, feel free to reach out to us.</p>
                                    <p>from: <span class="text-blue-500">{{ env('MspanIL_FROM_ADDRESS') }}</a></p>

                                    <p>P.S. Ready to embark on another journey of sharing your experiences? <span
                                            class="text-blue-500">Click here</span> to write another review!</p>
                                </div>

                            </div>
                        </div>
                        {{--  --}}
                        <div x-show="link == 'Url'" style="display: none" class="mt-5">
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <div class="space-y-5 md:col-span-2">
                                    <p class="font-semibold text-sm">Send this link to the recipients via email, share
                                        in social media or add it to your website.</p>
                                    <div class="rounded-lg border flex justify-between p-5">
                                        <p x-bind:id="'dynamic-id-' + campaign.id" class=" text-sm font-semibold    ">
                                            {{ route('campaign.share', ['uuid' => '' . '/']) }}/<span
                                                x-text="campaign.uuid"></span>
                                            <button class=" sm:hidden"
                                                @click="toCopy(document.getElementById('dynamic-id-' + campaign.id))">
                                                <i class="bx bx-copy text-xl"></i>
                                            </button>
                                        </p>
                                        <button
                                            class=" hidden  md:flex items-center bg-cyan-100 text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300 font-semibold rounded-md whitespace-nowrap  px-4 py-2 ml-4"
                                            @click="toCopy(document.getElementById('dynamic-id-' + campaign.id))">
                                            <i class="bx bx-copy text-xl"></i>Copy
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- embed --}}
                        <div x-show="link == 'embed'" style="display: none" class="mt-5">
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <div class="space-y-5 col-span-2">
                                    <p class="font-semibold text-sm">Send this link to the recipients via email, share
                                        in social media or add it to your website.</p>
                                    <div class="rounded-lg border  p-2">

                                        <button class="btn2 text-xs font-semibold text-right"
                                            @click="toCopy(document.getElementById('component-id-' + campaign.id))">
                                            <i class="bx bx-copy text-xl"></i>Copy
                                        </button>
                                        <p x-bind:id="'component-id-' + campaign.id"id="para1"
                                            class="bg-gray-800 text-gray-50 p-5 rounded shadow-inner ">

                                            &lt;iframe id="myIframe"
                                            src="{{ route('campaign.component', ['uuid' => '' . '/']) }}/<span
                                        x-text="campaign.uuid"></span>
                                            "
                                            <br>
                                            style=" position: relative;
                                            <br>
                                            "width="100%"
                                            height="600" &gt;
                                            <br>
                                            &lt;/iframe&gt;
                                            <br>

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{--  --}}
                        <div x-show="link == 'QR'" style="display: none" class="mt-5 space-y-3">

                            <p class="text-sm font-semibold text-cyan-700">Scan QR code to connect </p>
                            @php

                                $QRCode = QrCode::size(200)->color(0, 139, 139)->generate($currentUUID);
                            @endphp
                            {{ $QRCode }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- modal --}}
        <div class="fixed items-center justify-center  flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-30 z-50 transition duration-1000 ease-in-out"
            x-show="folder" style="display: none;">
            <div @click.away="folder = false"
                class="bg-white w-[90%] md:w-[60%] h-[25rem] shadow-inner  border rounded-2xl overflow-auto  py-6 px-8 transition-all relative duration-700">
                <div class=" h-full ">

                    <div class="font-bold text-xl flex items-center">
                        <i class='bx bxs-folder-open text-4xl mr-2 text-cyan-950'></i>
                        Select folder
                    </div>
                    <ul class="h-[70%] w-full px-10 pt-5 space-y-2">

                        @forelse ($folders as $folder)
                            <li>
                                <form action="{{ route('addToFolder') }}" method="post">
                                    @csrf
                                    <input type="text" name="campaignId" x-model="campaign.id" class="hidden">
                                    <input type="text" name="folderId" value="{{ $folder->id }}"
                                        class="hidden">
                                    <button
                                        class="w-full text-start bg-slate-100 rounded-lg hover:bg-cyan-50 hover:shadow p-2 flex items-center"><i
                                            class="bx bxs-folder text-3xl mr-2 text-cyan-600"></i>

                                        <span>{{ $folder->name }}</span>
                                        <span id="hiddenText" class="hidden">
                                            <i class='bx bx-loader-alt animate-spin ml-5'></i>
                                        </span>

                                    </button>
                                </form>
                            </li>
                        @empty

                            <div>No folder yet</div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        {{-- edit campaign --}}
        <div class="fixed items-center justify-center  flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-30 z-50 transition duration-1000 ease-in-out"
            x-show="editCampaign" style="display: none;">
            <div @click.away="editCampaign = false"
                class="bg-white w-[90%] md:w-[60%]  shadow-inner  border rounded-2xl overflow-auto  py-6 px-8 transition-all relative duration-700">
                <div class=" h-full ">

                    <div class="font-bold text-xl">Change Campaign Name</div>
                    <form action="{{ route('changeCampaignName') }}" method="post" class="my-10 space-y-3">
                        @csrf

                        <div>
                            <input class="form-control" id="" type="text" name="campaign_name"
                                x-model="campaign.name" placeholder="campaign name">
                            <input class="form-control " id="" type="hidden" name="id"
                                x-model="campaign.id" placeholder="">
                        </div>

                        <button
                            class="bg-cyan-950 hover:bg-cyan-800 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md  w-full"
                            type="submit">
                            <span>Edit</span>

                        </button>
                </div>
            </div>
        </div>
        {{-- createFolder modal --}}
        <div class="fixed items-center justify-center  flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-30 z-50 transition duration-1000 ease-in-out"
            x-show="createFolder" style="display: none;">
            <div @click.away="createFolder = false"
                class="bg-white w-[90%] md:w-[40%]  shadow-inner  border rounded-2xl overflow-auto  py-6 px-8 transition-all relative duration-700">
                <div class=" h-full ">

                    <div class="font-bold text-xl">Create Folder</div>
                    <form action="{{ route('folder.store') }}" method="post" class="my-10 ">
                        @csrf

                        <div class="mb-3">
                            <input class="form-control" id="folder_name" type="text" name="name"
                                placeholder="my folder">
                        </div>

                        <button
                            class="bg-cyan-950 hover:bg-cyan-800 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md  w-full"
                            type="submit">
                            <span>Create</span>

                        </button>
                    </form>

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



            document.addEventListener('livewire:initialized', () => {
                @this.on('email-sent', (event) => {
                    console.log(event);
                    setTimeout(function() {
                        location.reload();
                    }, 3000);

                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let deleteButtons = document.querySelectorAll('.delete-btn');

                deleteButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        let itemId = button.getAttribute('data-item-id');

                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var deleteRoute =
                                    "{{ route('campaign.destroy', ['campaign' => ':itemId']) }}";
                                deleteRoute = deleteRoute.replace(':itemId', itemId);

                                fetch(deleteRoute, {
                                        method: 'DELETE',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token in the headers using Blade syntax
                                        }
                                    })
                                    .then(response => {
                                        Swal.fire({
                                            title: "Deleted!",
                                            text: "Your item has been deleted.",
                                            icon: "success"
                                        }).then(() => {
                                            location
                                                .reload();
                                        });
                                    })
                                    .catch(error => {
                                        Swal.fire("Error", "Failed to delete the item",
                                            "error");
                                    });
                            }
                        });
                    });
                });
            });
        </script>

    </div>
