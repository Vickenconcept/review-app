<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/favicon.ico') }}"> --}}

    <title>ChatBot</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-171b3f1e.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-a461d729.css') }}">
    <script src="{{ asset('build/assets/app-11155cd2.js') }}"></script> --}}

    @livewireStyles
</head>

<body class="h-full">
    {{ $slot }}

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

{{-- <script>
    function PrintDiv(div) {

        var img = new Image();

        img.src = document.getElementById('imageToCapture').src;

        img.onload = function() {
            html2canvas(div, {
                logging: true,
                letterRendering: 1,
                allowTaint: false,
                useCORS: true,
                dpi: 144,
                scale: 2,
                onrendered: function(canvas) {
                    var myImage = canvas.toDataURL();
                    downloadURI(myImage, "my-review.png");
                }
            });
        };
    }

    function downloadURI(uri, name) {
        var link = document.createElement("a");

        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script> --}}

<script>
    function PrintDiv(div) {
        var img = new Image();
        img.src = document.getElementById('imageToCapture').src;

        img.onload = function() {
            html2canvas(div, {
                logging: true,
                letterRendering: 1,
                allowTaint: false,
                useCORS: true,
                dpi: 144,
                scale: 2,
                onrendered: function(canvas) {
                    setpixelated(canvas.getContext('2d')); // Set pixelated rendering
                    var myImage = canvas.toDataURL();
                    downloadURI(myImage, "my-review.png");
                }
            });
        };
    }

    function downloadURI(uri, name) {
        var link = document.createElement("a");

        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    function setpixelated(context) {
        context['imageSmoothingEnabled'] = false; // Standard
        context['mozImageSmoothingEnabled'] = false; // Firefox
        context['oImageSmoothingEnabled'] = false; // Opera
        context['webkitImageSmoothingEnabled'] = false; // Safari
        context['msImageSmoothingEnabled'] = false; // IE
    }
</script>

@livewireScripts

</html>
