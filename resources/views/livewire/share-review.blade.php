<div>
    <section class="h-screen">
        <div class="sticky top-0 bg-white z-10">
            <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
                <div>
                    <h3 class=" font-bold">Share reviews</h3>
                </div>
                <button onclick="PrintDiv(document.getElementById('htmltoimage'))">download</button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row  overflow-y-auto">
            <div class="p-5 md:p-10  md:w-2/6  h-full md:h-[35rem]   overflow-y-auto space-y-5 ">
                <h3 class="font-bold text-md">Image size</h3>
                <div class="grid grid-cols-2 gap-3">
                    <label
                        class=" bg-gray-100 text-gray-700 p-5 rounded-lg  space-y-1  cursor-pointer flex  flex-col items-center justify-center hover:bg-slate-400 border border-slate-500 shadow-sm hover:shadow-md">
                        <p><img src="{{ asset('images/facebook.png') }}" alt="" class="w-5 h-5"></p>
                        <p class="font-semibold text-xs">Facebook</p>
                        <p class=" text-xs">1068x226</p>
                        <input type="radio" name="campaignType" wire:model.live="campaignType"
                            wire:click="selectDimention('facebook')" value="reviews" class="hidden">
                    </label>

                    <label
                        class=" bg-gray-100 text-gray-700 p-5 rounded-lg  space-y-1  cursor-pointer flex  flex-col items-center justify-center hover:bg-slate-400 border border-slate-500 shadow-sm hover:shadow-md">
                        <p><img src="{{ asset('images/twitter_blue.png') }}" alt="" class="w-5 h-5"></p>
                        <p class="font-semibold text-xs">Twitter</p>
                        <p class=" text-xs">1068x226</p>
                        <input type="radio" name="campaignType" wire:model.live="campaignType"
                            wire:click="selectDimention('twitter')" value="reviews" class="hidden">
                    </label>
                    <label
                        class=" bg-gray-100 text-gray-700 p-5 rounded-lg  space-y-1  cursor-pointer flex  flex-col items-center justify-center hover:bg-slate-400 border border-slate-500 shadow-sm hover:shadow-md">
                        <p><img src="{{ asset('images/instagram.png') }}" alt="" class="w-5 h-5"></p>
                        <p class="font-semibold text-xs">Instagram</p>
                        <p class=" text-xs">1068x226</p>
                        <input type="radio" name="campaignType" wire:model.live="campaignType"
                            wire:click="selectDimention('instagram')" value="reviews" class="hidden">
                    </label>
                    <label
                        class=" bg-gray-100 text-gray-700 p-5 rounded-lg  space-y-1  cursor-pointer flex  flex-col items-center justify-center hover:bg-slate-400 border border-slate-500 shadow-sm hover:shadow-md">
                        <p><img src="{{ asset('images/linkedin.png') }}" alt="" class="w-5 h-5"></p>
                        <p class="font-semibold text-xs">Linkedin</p>
                        <p class=" text-xs">1068x226</p>
                        <input type="radio" name="campaignType" wire:model.live="campaignType"
                            wire:click="selectDimention('linkedin')" value="reviews" class="hidden">
                    </label>
                    <label
                        class=" bg-gray-100 text-gray-700 p-5 rounded-lg  space-y-1  cursor-pointer flex  flex-col items-center justify-center hover:bg-slate-400 border border-slate-500 shadow-sm hover:shadow-md">
                        <p><img src="{{ asset('images/linkedin.png') }}" alt="" class="w-5 h-5"></p>
                        <p class="font-semibold text-xs">Full HD</p>
                        <p class=" text-xs">1068x226</p>
                        <input type="radio" name="campaignType" wire:model.live="campaignType"
                            wire:click="selectDimention('full_hd')" value="reviews" class="hidden">
                    </label>



                </div>

                <h3 class="font-bold text-md">Image size</h3>

                <div>
                    {{-- i will be working here soon --}}
                </div>
                <h3 class="font-bold text-md">Background Image</h3>

                <div>
                    <div class="flex w-full  items-center justify-center bg-grey-lighter">
                        <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">Select a file</span>
                            <input type='file' class="hidden" wire:model.live="backgroundImage" />
                        </label>
                    </div>
                    <p class="text-center"><button wire:click="setBackgroundImage" >save</button></p>
                </div>

                <h3 class="font-bold text-md">Logo</h3>

                <div class="flex w-full  items-center justify-center bg-grey-lighter">
                    <label
                        class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                        <input type='file' class="hidden" />
                    </label>
                </div>


                <h4 class="font-bold text-md">Use or remove image</h4>
                <div class="bg-gray-100 rounde-lg p-4 flex justify-between items-center rounded-lg">
                    <p>Profile picture</p>
                    <label class="relative inline-flex items-center  cursor-pointer ">
                        <input type="checkbox" value="1" class="sr-only peer"
                            @if ($thumbnail) checked @endif wire:click="toggleThumbnail"
                            wire:model.live="thumbnail">
                        <div
                            class="w-11 z-0 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all {{ $thumbnail ? 'peer-checked:bg-blue-800' : 'peer-checked:bg-blue-800' }} dark:border-gray-600 
                            ">
                        </div>
                    </label>
                </div>

                {{--  --}}
                <h4 class="font-bold text-md">Use or remove star</h4>
                <div class="bg-gray-100 rounde-lg p-4 flex justify-between items-center rounded-lg">
                    <p>Star rating</p>
                    <label class="relative inline-flex items-center  cursor-pointer ">
                        <input type="checkbox" value="1" class="sr-only peer"
                            @if ($star) checked @endif wire:click="toggleStar"
                            wire:model.live="star">
                        <div
                            class="w-11 z-0 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all {{ $star ? 'peer-checked:bg-blue-800' : 'peer-checked:bg-blue-800' }} dark:border-gray-600 
                            ">
                        </div>
                    </label>
                </div>
                {{--  --}}

            </div>
            {{-- ______________second half_____________ --}}
            <div class="p-10  md:w-4/6 flex-grow flex justify-center  bg-green-500  h-[35rem]">
                <div id="htmltoimage" class=" relative flex items-center justify-center"
                    @if ($campaignType == 'facebook') style=" width: 1080px; height: 100%;"
                @elseif ($campaignType == 'twitter')
                style=" width: 1080px; height: 100%;" 
                @elseif ($campaignType == 'instagram')
                style=" width: 280px; height: 100%;" 
                @elseif ($campaignType == 'linkedin')
                style=" width: 1080px; height: 100%;" 
                @elseif ($campaignType == 'full_hd')
                style=" width: 100%; height: 100%;" @endif>
                    <img id="imageToCapture" class="flex-shrink-0 w-full h-full border  border-black/10"
                        src="{{ asset('images/video-image.png') }}" alt="Sebastiaan Kloos" loading="lazy">
                    <div
                        class=" absolute flex flex-col items-center p-4 shadow-md hover:shadow-lg rounded-lg bg-white bg-opacity-95 w-[90%] mx-auto">
                        <p class="max-w-full  whitespace-normal break-all text-md font-medium text-center">
                            "{{ $review->review_platform_ans }}"
                        </p>

                        @if ($star)

                            <div class="mt-8 text-left">
                                @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                    <i class="bx bxs-star text-yellow-400 text-xl"></i>
                                @endfor
                            </div>
                        @endif
                        <footer class="flex items-center gap-3 mt-8 ">
                            @if ($thumbnail)
                                <img id="imageToCapture"
                                    class="flex-shrink-0 w-12 h-12 border rounded-full border-black/10"
                                    src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                    alt="Sebastiaan Kloos" loading="lazy">
                            @else
                                <img id="imageToCapture"
                                    class="hidden flex-shrink-0 w-12 h-12 border rounded-full border-black/10"
                                    src="thumbnail">
                            @endif
                            <div class="inline-block font-bold tracking-tight text-sm">
                                <p>{{ $review->contact_info_ans['location'] }}</p>
                                <p class="font-medium text-black/60">
                                    {{ $review->contact_info_ans['organisation'] }}
                                </p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
