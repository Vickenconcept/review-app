<div class="" x-data="{ menu: 'editor', isOpen: null }">
    <x-notification />
    <div class="sticky top-0 bg-white">
        <nav
            class="relative  z-50 flex w-full flex-wrap items-center justify-between bg-white  py-2 text-neutral-500 shadow-lg border border-b hover:text-neutral-700 lg:py-4">
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div> 
                    <a href="{{ route('home') }}">
                    <button class="flex items-center">
                            <i class='bx bxs-chevron-left text-2xl'></i> Back
                        </button>
                    </a>
                </div>
                <input type="text" wire:model="name"
                    class="border-none bg-transparent focus:outline-none outline-none focus:ring-transparent">

                <div class="ml-5 flex  items-center justify-end space-x-3 ">
                    <button wire:click="CampaignData"
                        class="px-4 py-2 rounded-lg bg-cyan-100 text-cyan-500 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300 flex items-center "><i
                            class="bx bx-save mr-1"></i>save</button>

                    <x-main-button>Share</x-main-button>
                </div>
            </div>
        </nav>

        <!-- Main navigation container -->
        <nav class="relative z-40 flex w-full flex-nowrap items-center justify-between bg-white py-2 text-neutral-500 shadow-sm hover:text-neutral-700 lg:flex-wrap lg:justify-start lg:py-4"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div class="!visible mt-2  flex-grow basis-[100%] items-center justify-center lg:mt-0 lg:!flex lg:basis-auto"
                    id="navbarSupportedContent8">
                    <ul class="list-style-none flex flex-col pl-0 lg:mt-1 lg:flex-row">
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" @click="menu = 'editor'">
                            <a class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>Editor</a>
                        </li>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" @click="menu = 'response'">
                            <a class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>Response</a>
                        </li>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" @click="menu = 'recipient'">
                            <a class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>Recipient</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <section>
        <div x-show="menu === 'editor'" style="display: none" class="flex flex-col md:flex-row">
            <div class="p-5 md:p-10  md:w-2/5  h-screen overflow-y-auto">
                <div class="flex-grow space-y-5">
                    <h3 class="font-bold text-xl">Setup your Campaign</h3>
                    <p class="text-gray-400 text-sm">Collect reviews or measure NPS with Trustmary campaigns. Share
                        campaign
                        with your customers when you're ready.</p>
                    <h4 class="font-bold text-md">Survey type</h4>

                    <div class="grid grid-cols-2 gap-3">
                        <label
                            class=" {{ $campaignType == 'reviews' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-200 text-gray-500' }} p-5 rounded-lg text-center space-y-1  cursor-pointer">
                            <p><i class="bx bxs-star text-5xl"></i></p>
                            <p class="font-semibold text-xs">Collect Reviews</p>
                            <input checked type="radio" name="campaignType" wire:model.live="campaignType"
                                value="reviews" class="hidden">
                        </label>
                        <label
                            class=" {{ $campaignType == 'NPS' ? 'bg-blue-950 text-cyan-200' : 'bg-gray-200 text-gray-500' }}  p-5 rounded-lg text-center space-y-2  cursor-pointer">
                            <p><i class="bx bxs-circle text-5xl"></i></p>
                            <p class="font-semibold text-xs">Measure NPS</p>
                            <input type="radio" name="campaignType" wire:model.live="campaignType" value="NPS"
                                class="hidden">
                        </label>
                    </div>


                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        an
                        option</label>
                    <select id="countries" wire:model="language"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="EN">English</option>
                        <option value="FR">French</option>
                    </select>

                    <h4 class="font-bold text-md">Survey type</h4>

                    <div class="bg-gray-100 rounde-lg p-4 flex justify-between items-center">
                        <p>Avoid negative reviews</p>

                        <label class="relative inline-flex items-center  cursor-pointer">
                            <input type="checkbox" value="1" class="sr-only peer"
                                @if ($no_negative) checked @endif wire:click="toggleNegativeView"
                                wire:model.live="no_negative">
                            <div
                                class="w-11 z-0 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all {{ $no_negative ? 'peer-checked:bg-blue-800' : 'peer-checked:bg-blue-800' }} dark:border-gray-600 
                                ">
                            </div>
                        </label>
                    </div>

                    <p class="text-sm text-gray-500">Enable this feature to guide customers to leave you private
                        feedback instead of leaving neutral or
                        negative public review.</p>

                    <section class=" space-y-3 ">
                        {{-- 1 --}}
                        {{-- @if ($type == 'reviews') --}}
                        <div class=" shadow rounded-lg space-y-3 {{ $campaignType == 'reviews' ? '' : 'hidden' }}">
                            <div @click="isOpen !== '1'? isOpen = '1' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class="bx bxs-star mx-2 text-cyan-500 text-xl"></i>Stars
                                    question</span>
                                <i x-show="isOpen !== '1'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '1'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '1'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="star_question"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            </div>

                        </div>
                        {{-- @endif --}}
                        {{--  --}}
                        {{-- 2 --}}
                        {{-- @if ($type == 'NPS') --}}
                        <div class=" shadow rounded-lg space-y-3 {{ $campaignType == 'NPS' ? '' : 'hidden' }}">
                            <div @click="isOpen !== '2'? isOpen = '2' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Net
                                    Promoters Score</span>
                                <i x-show="isOpen !== '2'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '2'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '2'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="net_promote"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            </div>

                        </div>
                        {{-- @endif --}}
                        {{--  --}}
                        {{-- 3 --}}
                        {{-- @if ($type == 'NPS') --}}
                        <div class=" shadow rounded-lg space-y-3 {{ $campaignType == 'NPS' ? '' : 'hidden' }}">
                            <div @click="isOpen !== '3'? isOpen = '3' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>NPS
                                    comment</span>
                                <i x-show="isOpen !== '3'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '3'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '3'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="nps_comment"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">

                                    <textarea type="text" id="base-input" wire:model.live="nps_comment_desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>


                            </div>

                        </div>
                        {{-- @endif --}}
                        {{--  --}}
                        {{--  --}}
                        <div class=" shadow rounded-lg space-y-3">
                            <div @click="isOpen !== '4'? isOpen = '4' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Review
                                    Platforms</span>
                                <i x-show="isOpen !== '4'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '4'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '4'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>
                                <textarea type="text" id="base-input" wire:model.live="review_platform"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

                                <div class="bg-gray-100 rounde-lg p-4 flex justify-between items-center">
                                    <p>Enable text reviews</p>

                                    <label class="relative inline-flex items-center  cursor-pointer">
                                        <input type="checkbox" value="1" class="sr-only peer"
                                            @if ($enable_text_review) checked @endif
                                            wire:click="toggleTextReview" wire:model.live="enable_text_review">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all {{ $enable_text_review ? 'peer-checked:bg-blue-800' : 'peer-checked:bg-blue-800' }} dark:border-gray-600 
                                                ">
                                        </div>
                                    </label>
                                </div>
                                <div class="bg-gray-100 rounde-lg p-4 flex justify-between items-center">
                                    <p>Enable Video reviews</p>

                                    <label class="relative inline-flex items-center  cursor-pointer">
                                        <input type="checkbox" value="1" class="sr-only peer"
                                            @if ($enable_video_review) checked @endif
                                            wire:click="toggleVideoReview" wire:model.live="enable_video_review">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all {{ $enable_video_review ? 'peer-checked:bg-blue-800' : 'peer-checked:bg-blue-800' }} dark:border-gray-600 
                                                ">
                                        </div>
                                    </label>
                                </div>
                            </div>

                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class=" shadow rounded-lg space-y-3">
                            <div @click="isOpen !== '5'? isOpen = '5' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Write a
                                    review </span>
                                <i x-show="isOpen !== '5'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '5'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '5'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="normal_review"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">

                                    <textarea type="text" id="base-input" wire:model.live="normal_review_desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>

                            </div>

                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class=" shadow rounded-lg space-y-3">
                            <div @click="isOpen !== '6'? isOpen = '6' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Leave
                                    contact info</span>
                                <i x-show="isOpen !== '6'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '6'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '6'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="contact_info"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            </div>

                        </div>
                        {{--  --}}
                        {{--  --}}
                        {{-- @if ($enable_video_review) --}}
                        <div class=" shadow rounded-lg space-y-3 {{ $enable_video_review ? '' : 'hidden' }}">
                            <div @click="isOpen !== '7'? isOpen = '7' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Record
                                    a video review</span>
                                <i x-show="isOpen !== '7'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '7'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '7'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>


                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="video_review"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">

                                    <textarea type="text" id="base-input" wire:model.live="video_review_desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>

                            </div>

                        </div>
                        {{-- @endif --}}
                        {{--  --}}
                        {{--  --}}
                        <div class=" shadow rounded-lg space-y-3">
                            <div @click="isOpen !== '8'? isOpen = '8' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Review
                                    thank you page</span>
                                <i x-show="isOpen !== '8'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '8'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '8'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="review_thanks"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">

                                    <textarea type="text" id="base-input" wire:model.live="review_thanks_desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>

                            </div>

                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class=" shadow rounded-lg space-y-3 {{ $no_negative ? '' : 'hidden' }}">
                            <div @click="isOpen !== '9'? isOpen = '9' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Collect
                                    private feedback</span>
                                <i x-show="isOpen !== '9'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '9'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '9'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="private_feed_back"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">

                                    <textarea type="text" id="base-input" wire:model.live="private_feed_back_desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>

                            </div>

                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class=" shadow rounded-lg space-y-3 {{ $no_negative ? '' : 'hidden' }}">
                            <div @click="isOpen !== '10'? isOpen = '10' :isOpen = null"
                                class="flex justify-between bg-gray-50 items-center hover:bg-gray-100 rounded-lg p-3 cursor-pointer">
                                <span class="font-bold"> <i class='bx bxs-grid mx-2 text-cyan-500 text-xl'></i>Thank
                                    you
                                </span>
                                <i x-show="isOpen !== '10'" class='bx bx-chevron-up text-2xl'></i>
                                <i x-show="isOpen === '10'" class='bx bx-chevron-down text-2xl'></i>

                            </div>
                            <div x-show="isOpen === '10'" class=" rounded-lg p-3 space-y-3" style="display: none">
                                <p class="text-xs text-gray-400"> First page of the form</p>

                                <div class="mb-5">
                                    <label for="base-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base
                                        input</label>
                                    <input type="text" id="base-input" wire:model.live="private_feed_back_Thanks"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">

                                    <textarea type="text" id="base-input" wire:model.live="private_feed_back_Thanks_desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>

                            </div>

                        </div>
                        {{--  --}}

                    </section>


                </div>
            </div>


            {{-- ______________second half_____________ --}}
            <div class="p-10  md:w-3/5 flex-grow flex justify-center cursor-grab">

                <div
                    class="bg-gray-100  rounded-3xl w-full px-5 h-[30rem] flex items-center justify-center  cursor-pointer hover:bg-cyan-200  hover:opacity-25 ">
                    {{-- <div class="bg-gray-100 z-10 rounded-3xl w-full px-5 h-96 flex items-center justify-center relative cursor-pointer  after:bg-cyan-200  after:opacity-25 after:w-full after:h-full after:top-0 after:left-0 after:absolute after:hidden hover:after:block after:rounded-lg"> --}}
                    {{-- 1 --}}
                    <div x-show="isOpen === '1'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 space-y-3 text-center select-none">
                        <h4 class="text-gray-700 font-bold text-sm">{{ $star_question }}</h4>
                        <div class="bg-white rounded-lg shadow  flex items-center justify-center space-x-5 py-3 px-16">
                            <div>
                                <i class="bx bxs-star text-4xl text-gray-300"></i>
                                <i class="bx bxs-star text-4xl text-gray-300"></i>
                                <i class="bx bxs-star text-4xl text-gray-300"></i>
                                <i class="bx bxs-star text-4xl text-gray-300"></i>
                                <i class="bx bxs-star text-4xl text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    {{-- 2 --}}
                    <div x-show="isOpen === '2'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 space-y-3 text-center">
                        <h4 class="text-gray-700 font-bold text-xs">{{ $net_promote }}</h4>
                        <div class="bg-white rounded-lg shadow  flex items-center justify-center space-x-10 py-3 px-5">
                            <div class="space-y-3">

                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">1</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">2</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">3</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">4</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">5</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">6</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">7</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">8</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">9</span>
                                <span
                                    class="text-gray-700 text-sm bg-gray-300 font-semibold rounded py-1 px-2">10</span>
                                <div class="flex justify-between">
                                    <span class="text-xs text-gray-500 ">very unlikely</span>
                                    <span class="text-xs text-gray-500 ">very likely</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}

                    {{-- 3 --}}
                    <div x-show="isOpen === '3'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[70%] space-y-3 select-none ">
                        <h4 class="text-gray-700 font-bold text-xs">{{ $nps_comment }}</h4>
                        <p class="text-gray-700  text-xs">{{ $nps_comment_desc }}</p>
                        <textarea type="text" id="base-input"
                            class=" border border-gray-300 bg-gray-100 rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-xs text-gray-400">write feed back</textarea>
                        <!--Submit button-->
                        <button type="submit"
                            class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                            next
                        </button>
                    </div>
                    {{--  --}}
                    {{-- 4 --}}
                    <div x-show="isOpen === '4'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[70%] space-y-3 text-center">
                        <h4 class="text-gray-700 font-bold text-xs">{{ $star_question }}</h4>
                        <p class="text-gray-700  text-xs">{{ $review_platform }}</p>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                            <div class="bg-white rounded-lg shadow  p-3 {{ $enable_text_review ? '' : 'hidden' }}">
                                <p class="font-bold text-xs">Write a text review</p>
                            </div>
                            <div class="bg-white rounded-lg shadow  p-3 {{ $enable_video_review ? '' : 'hidden' }}">
                                <p class="font-bold text-xs">Record a video review</p>
                            </div>

                        </div>
                    </div>
                    {{--  --}}
                    {{-- 1 --}}
                    <div x-show="isOpen === '5'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[70%] space-y-3 select-none ">
                        <h4 class="text-gray-700 font-bold text-xs">{{ $normal_review }}</h4>
                        <p class="text-gray-700  text-xs">{{ $normal_review_desc }}</p>
                        <textarea type="text" id="base-input"
                            class=" border border-gray-300 bg-gray-100 rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-xs text-gray-400">write feed back</textarea>
                        <!--Submit button-->
                        <button type="submit"
                            class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                            next
                        </button>
                    </div>
                    {{--  --}}
                    {{-- 6 --}}
                    <div x-show="isOpen === '6'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[70%] space-y-3 ">
                        <h4 class="text-gray-700 font-bold text-sm">{{ $contact_info }}</h4>
                        <div class="mb-5">
                            <label for="email"
                                class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input type="text" id=""
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@flowbite.com">
                            <label for="email"
                                class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">
                                Loction</label>
                            <input type="text" id=""
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="L.C Aline">
                            <label for="email"
                                class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">
                                Organisation</label>
                            <input type="text" id=""
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Supreme Art">

                            <label class="block mb-1 text-xs font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <div class="mt-1 mb-2 text-xs text-gray-500 dark:text-gray-300" id="user_avatar_help">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.?</div>


                            <button type="submit"
                                class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                                next
                            </button>
                        </div>

                    </div>
                    {{--  --}}
                    {{-- 1 --}}
                    <div x-show="isOpen === '7'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[70%] space-y-3 ">
                        <h4 class="text-gray-700 font-bold text-xs">{{ $video_review }}</h4>
                        <p class="text-gray-700  text-xs">{{ $video_review_desc }}</p>
                        <div class="bg-white rounded-lg  space-y-3  py-3 px-5 md:px-16">
                            <img src="{{ asset('images/video-image.png') }}" alt="video-image"
                                class="w-full rounded-lg">
                            <div class="flex justify-between">
                                <button class="px-3 py-1 rounded-lg bg-gray-100 text-xs border flex items-center"><i
                                        class="bx bx-cloud-upload mr-1"></i>Upload</button>
                                <button class="px-3 py-1 rounded-lg bg-gray-100 text-xs border flex items-center"><i
                                        class='bx bx-help-circle mr-1'></i>Help</button>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    {{-- 1 --}}
                    <div x-show="isOpen === '8'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[70%] space-y-3 text-center">
                        <h4 class="text-gray-700 font-bold text-sm">{{ $review_thanks }}</h4>
                        <p class="text-gray-700  text-sm">{{ $review_thanks_desc }}</p>

                    </div>
                    {{--  --}}
                    {{-- 1 --}}
                    <div x-show="isOpen === '9'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[70%] space-y-3 ">
                        <h4 class="text-gray-700 font-bold text-xs">{{ $private_feed_back }}</h4>
                        <p class="text-gray-700  text-xs">{{ $private_feed_back_desc }}</p>
                        <div class="mb-5">
                            <label for="email"
                                class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your
                                Name</label>
                            <input type="text" id=""
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Smith Job">
                            <label for="email"
                                class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your
                                Email</label>
                            <input type="text" id=""
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@flowbite.com">
                            <label for="email"
                                class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">
                                Phone Number</label>
                            <input type="text" id=""
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="1334800">

                            <textarea type="text" id="base-input"
                                class="mb-2 border border-gray-300 bg-gray-100 rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-xs text-gray-400">Message</textarea>

                            <button type="submit"
                                class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                                next
                            </button>
                        </div>
                    </div>
                    {{--  --}}
                    {{-- 1 --}}
                    <div x-show="isOpen === '10'" style="display: none"
                        class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[70%] space-y-3 text-center">
                        <h4 class="text-gray-700 font-bold text-sm">{{ $private_feed_back_Thanks }}</h4>
                        <p class="text-gray-700  text-sm">{{ $private_feed_back_Thanks_desc }}</p>

                    </div>
                    {{--  --}}

                </div>

            </div>
        </div>

        <div x-show="menu === 'response'" style="display: none">

            <livewire:response-component :campaign=$campaign />
        </div>

        <div x-show=" menu === 'recipient'" style="display: none">
            <livewire:recipient-component :campaign=$campaign />
        </div>
    </section>
</div>
