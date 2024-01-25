<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/favicon.ico') }}"> --}}

    <title>Booking ApP</title>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://unpkg.com/cloudinary-video-player@2.5.0/dist/cld-video-player.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="h-full">
    <div id="ap" class="h-full bg-gray- text-gray-700" x-data="{ openHelp: false }">
        <x-sidebar />
        <div class=" h-full sm:ml-64">

            {{-- <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <video id="video" name="video" width="640" height="480" autoplay></video>
                <button type="button" id="start" onclick="startRecording()">Start Recording</button>
                <button type="button" id="stop" onclick="stopRecording()" disabled>Stop Recording</button>
                <button type="submit" disabled>Upload Video</button>
            </form>

            <video id="my-video" controls width="640" height="360" class="cld-video-player">
                <source src="https://res.cloudinary.com/dp0bpzh9b/video/upload/v1706198244/rk1x8gx8f3oposre4aqb.mkv" type="video/mp4">
            </video> --}}
            
            {{ $slot }}
            <x-footer />
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
                        startButton.disabled = false;
                        stopButton.disabled = true;
                        uploadButton.disabled = false;

                        // Log the video type
                        console.log('Recorded video type:', recordedBlob.type);
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
     {{-- <script>
        const player = new cloudinary.videoPlayer('my-video');
    </script> --}}


    @livewireScripts

</body>

</html>
