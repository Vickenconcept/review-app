<div x-data="{ isOpen: {{ $next }}, rating: 0, NPS: 0 }">
    <div class="   flex-grow flex justify-center">
        <div class="bg-gray-100   w-full px-5 h-screen flex items-center justify-center   ">
            {{-- 1 --}}
            <div x-show="{{ $campaignType == 'reviews' ? 'isOpen == 1' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 space-y-3 text-center select-none {{ $campaignType == 'reviews' ? '' : 'hidden' }}">
                <h4 class="text-gray-700 font-bold text-sm">{{ $star_question }}</h4>
                <div class="bg-white rounded-lg shadow  flex items-center justify-center space-x-5 py-3 px-16">
                    <div>
                        <i class="bx bxs-star text-4xl cursor-pointer text-gray-300"
                            :class="{ 'text-yellow-400': rating >= 1 }" @click="isOpen = '2'" @mouseover=" rating = 1"
                            wire:click="selectStar({{ 1 }})"></i>
                        <i class="bx bxs-star text-4xl cursor-pointer text-gray-300"
                            :class="{ 'text-yellow-400': rating >= 2 }" @click="isOpen = '2'" @mouseover=" rating = 2"
                            wire:click="selectStar({{ 2 }})"></i>
                        <i class="bx bxs-star text-4xl cursor-pointer text-gray-300"
                            :class="{ 'text-yellow-400': rating >= 3 }" @click="isOpen = '2'" @mouseover=" rating = 3"
                            wire:click="selectStar({{ 3 }})"></i>
                        <i class="bx bxs-star text-4xl cursor-pointer text-gray-300"
                            :class="{ 'text-yellow-400': rating >= 4 }" @click="isOpen = '2'" @mouseover=" rating = 4"
                            wire:click="selectStar({{ 4 }})"></i>
                        <i class="bx bxs-star text-4xl cursor-pointer text-gray-300"
                            :class="{ 'text-yellow-400': rating >= 5 }" @click="isOpen = '2'" @mouseover=" rating = 5"
                            wire:click="selectStar({{ 5 }})"></i>
                    </div>
                </div>
            </div>
            {{--  --}}
            {{-- 2 --}}
            <div x-show="{{ $campaignType == 'NPS' ? 'isOpen == 1' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 space-y-3 text-center {{ $campaignType == 'NPS' ? '' : 'hidden' }}">
                <h4 class="text-gray-700 font-bold text-xs">{{ $net_promote }}</h4>
                <div class="bg-white rounded-lg shadow  flex items-center justify-center space-x-10 py-3 px-5">
                    <div class="space-y-3">

                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 1 }})" :class="{ 'text-yellow-400': NPS >= 1 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 1">1</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 2 }})" :class="{ 'text-yellow-400': NPS >= 2 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 2">2</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 3 }})" :class="{ 'text-yellow-400': NPS >= 3 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 3">3</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 4 }})" :class="{ 'text-yellow-400': NPS >= 4 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 4">4</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 5 }})" :class="{ 'text-yellow-400': NPS >= 5 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 5">5</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 6 }})" :class="{ 'text-yellow-400': NPS >= 6 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 6">6</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 7 }})" :class="{ 'text-yellow-400': NPS >= 7 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 7">7</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 8 }})" :class="{ 'text-yellow-400': NPS >= 8 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 8">8</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 9 }})" :class="{ 'text-yellow-400': NPS >= 9 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 9">9</span>
                        <span class="text-gray-700 text-sm bg-gray-300 cursor-pointer font-semibold rounded py-1 px-2"
                            wire:click="selectNPSScore({{ 10 }})" :class="{ 'text-yellow-400': NPS >= 10 }"
                            @click="isOpen = '2'" @mouseover=" NPS = 10">10</span>
                        <div class="flex justify-between">
                            <span class="text-xs text-gray-500 ">very unlikely</span>
                            <span class="text-xs text-gray-500 ">very likely</span>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}

            {{-- 3 --}}
            <div x-show="{{ $campaignType == 'NPS' ? 'isOpen == 2' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[50%] space-y-3 select-none ">
                <h4 class="text-gray-700 font-bold text-xs">{{ $nps_comment }}</h4>
                <p class="text-gray-700  text-xs">{{ $nps_comment_desc }}</p>
                <textarea type="text" id="base-input" wire:model.live="nps_comment_ans"
                    class=" border border-gray-300 bg-gray-100 rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-xs text-gray-600">write feed back</textarea>
                <!--Submit button-->
                <button type="submit" @click="isOpen = '5'" wire:click="nextReview({{ 5 }})"
                    @if ($nps_comment_ans == '') disabled @endif
                    class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                    next
                </button>
            </div>
            {{--  --}}
            {{-- 4 --}}
            <div x-show="{{ $campaignType == 'reviews' ? 'isOpen == 2' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[50%] space-y-3 text-center">
                <h4 class="text-gray-700 font-bold text-xs">{{ $star_question }}</h4>
                <p class="text-gray-700  text-xs">{{ $review_platform }}</p>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <div @click="isOpen = '5'"
                        class="bg-white cursor-pointer rounded-lg shadow  p-3 {{ $enable_text_review ? '' : 'hidden' }}">
                        <p class="font-bold text-xs">Write a text review</p>
                    </div>
                    <div @click="isOpen = '7'"
                        class="bg-white cursor-pointer rounded-lg shadow  p-3 {{ $enable_video_review ? '' : 'hidden' }}">
                        <p class="font-bold text-xs">Record a video review</p>
                    </div>

                </div>
                {{-- <button type="submit" @click="isOpen = '5'" wire:click="nextReview({{ 5 }})"
                    class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                    next
                </button> --}}
            </div>
            {{--  --}}
            {{-- 5 --}}
            <div x-show="isOpen == '5'" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[50%] space-y-3 select-none ">
                <h4 class="text-gray-700 font-bold text-xs">{{ $normal_review }}</h4>
                <p class="text-gray-700  text-xs">{{ $normal_review_desc }}</p>
                <textarea type="text" id="base-input" wire:model.live="review_platform_ans"
                    class=" border border-gray-300 bg-gray-100 rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-xs text-gray-600">write feed back</textarea>
                <!--Submit button-->
                <button type="submit" @click=" @JS($enable_video_review) == 1 ? isOpen = '7': isOpen = '6'"
                    wire:click="nextReview({{ 7 }})" @if ($review_platform_ans == '') disabled @endif
                    class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                    next
                </button>

            </div>
            {{--  --}}
            {{-- 6 --}}
            <div x-show="{{ $no_negative == '0' ? 'isOpen == 6' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[50%] space-y-3 ">
                <h4 class="text-gray-700 font-bold text-sm">{{ $contact_info }}</h4>
                <div class="mb-5">
                    <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="text" id="email" wire:model.live="email"
                        class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com">
                    <label for="" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">
                        Loction</label>
                    <input type="text" id="location" wire:model.live="location"
                        class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="L.C Aline">
                    <label for="org" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">
                        Organisation</label>
                    <input type="text" id="org" wire:model.live="organisation"
                        class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Supreme Art">

                    <label class="block mb-1 text-xs font-medium text-gray-900 dark:text-white"
                        for="user_avatar">Upload file</label>
                    <input wire:model.live="image"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    <div class="mt-1 mb-2 text-xs text-gray-500 dark:text-gray-300" id="user_avatar_help">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.?</div>


                    <button type="submit" @click="isOpen = '8'" {{-- wire:click="nextReview({{ 8 }})" --}}
                        @if ($email == '') disabled @endif wire:click="saveData"
                        class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                        next
                    </button>
                </div>

            </div>
            {{--  --}}
            {{-- 7 --}}
            <div x-show="{{ $enable_video_review == '1' ? 'isOpen == 7' : 'isOpen == 0' }}" style="display: none" x-data="{ isPlay: true, next: false}"
                class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[50%] space-y-3 ">
                <div class="bg-white rounded-lg  space-y-3  py-3 px-5  w-full md:w-3/4 mx-auto">
                    <h4 class="text-gray-700 font-bold text-xs">{{ $video_review }}</h4>
                    <p class="text-gray-700  text-xs">{{ $video_review_desc }}</p>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <video id="video" name="video" width="420" height="300" autoplay
                            class="border bg-gray-900"></video>
                        <div class="flex justify-between mt-2">
                            <button class="px-3 py-1 rounded-lg bg-gray-100 text-xs border flex items-center" x-show="isPlay" style="display: none"
                                type="button" id="start" @click="startRecording() , isPlay =false">Start Recording</button>
                            <button x-show="!isPlay" class="px-3 py-1 rounded-lg bg-gray-100 text-xs border flex items-center" style="display: none"
                                type="button" id="stop" @click="stopRecording(),next = true " disabled>Stop
                                & Save</button>
                        </div>
                      
                    </form>
                    <button type="submit" @click="isOpen = '6'" wire:click="nextReview({{ 6 }})" x-show="next" style="display: none"
                        class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                        next
                    </button>
                </div>
            </div>
            {{--  --}}
            {{--  7 --}}
            <div x-show="{{ $no_negative == '0' ? 'isOpen == 8' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[50%] space-y-3 text-center">
                <h4 class="text-gray-700 font-bold text-sm">{{ $review_thanks }}</h4>
                <p class="text-gray-700  text-sm">{{ $review_thanks_desc }}</p>

            </div>
            {{--  --}}
            {{-- 9 --}}
            <div x-show="{{ $no_negative == '1' ? 'isOpen == 6' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full md:w-[50%] space-y-3 ">
                <h4 class="text-gray-700 font-bold text-xs">{{ $private_feed_back }}</h4>
                <p class="text-gray-700  text-xs">{{ $private_feed_back_desc }}</p>
                <div class="mb-5">
                    <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your
                        Name</label>
                    <input type="text" id="name" wire:model.live="name_h"
                        class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Smith Job">
                    <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your
                        Email</label>
                    <input type="email" id="email" wire:model.live="email_h"
                        class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com">
                    <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">
                        Phone Number</label>
                    <input type="number" id="num" wire:model.live="phonenumber_h"
                        class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="1334800">

                    <textarea type="text" id="base-input" wire:model.live="message_h"
                        class="mb-2 border border-gray-300 bg-gray-100 rounded-lg h-28 resize-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-xs text-gray-400">Message</textarea>

                    <button type="submit" @click="isOpen = '8'" wire:click="saveData" 
                        class="inline-block w-full rounded bg-cyan-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow transition duration-150 ease-in-out ">
                        next
                    </button>
                </div>
            </div>
            {{--  --}}
            {{-- 1 --}}
            <div x-show="{{ $no_negative == '1' ? 'isOpen == 8' : 'isOpen == 0' }}" style="display: none"
                class="bg-gray-50 rounded-lg shadow p-5 w-full  md:w-[50%] space-y-3 text-center">
                <h4 class="text-gray-700 font-bold text-sm">{{ $private_feed_back_Thanks }}</h4>
                <p class="text-gray-700  text-sm">{{ $private_feed_back_Thanks_desc }}</p>

            </div>
            {{--  --}}

        </div>

    </div>

    <script>
        const video = document.getElementById('video');
        const startButton = document.getElementById('start');
        const stopButton = document.getElementById('stop');
        const uploadButton = document.querySelector('button[type="submit"]');
        let mediaRecorder;
        let recordedBlob;

        function startRecording() {
            navigator.mediaDevices.getUserMedia({
                    audio: true,
                    video: true
                })
                .then((stream) => {
                    video.srcObject = stream;
                    mediaRecorder = new MediaRecorder(stream);

                    mediaRecorder.ondataavailable = (e) => {
                        if (e.data.size > 0) {
                            recordedBlob = e.data;
                        }
                    };

                    mediaRecorder.onstop = () => {
                        // Enable buttons after recording stops

                        const tracks = video.srcObject.getTracks();
                        tracks.forEach(track => track.stop());

                        // Hide the video element
                        // video.style.display = 'none';

                        startButton.disabled = false;
                        stopButton.disabled = true;
                        uploadButton.disabled = false;

                        uploadVideo(recordedBlob);
                    };

                    // Enable buttons after starting recording
                    startButton.disabled = true;
                    stopButton.disabled = false;
                    uploadButton.disabled = true;

                    mediaRecorder.start();
                    console.log('Recording started');
                })
                .catch((error) => {
                    console.error('Error accessing camera:', error);
                });
        }

        function stopRecording() {
            mediaRecorder.stop();
            console.log('Recording stopped');
        }

        // Video upload logic
        function uploadVideo(blob) {
            const uploadUrl = '/upload-video';

            const formData = new FormData();
            formData.append('video', blob, 'recorded-video.webm');

            // Get the CSRF token from a meta tag in the HTML
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(uploadUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken, // Include the CSRF token in the headers
                    },
                })
                .then(response => {
                    if (response.ok) {
                        const contentType = response.headers.get('content-type');
                        if (contentType && contentType.includes('application/json')) {
                            return response.json();
                        } else {
                            throw new Error('Invalid response format');
                        }
                    } else {
                        return response.json(); // Include validation error messages in the error object
                    }
                })
                .then(data => {
                    if (data.errors) {
                        const errorMessages = Object.values(data.errors).flat();
                        throw new Error(`Validation error: ${errorMessages.join(', ')}`);
                    } else {

                        console.log('Video uploaded successfully:', data);
                        video.src = data.videoUrl;
                    }
                })
                .catch(error => {
                    console.error('Error uploading video:', error);
                });


        }
    </script>
</div>
