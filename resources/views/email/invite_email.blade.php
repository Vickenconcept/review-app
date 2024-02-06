<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Rating Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
        }

        p {
            color: #666666;
        }

        .rating {
            font-size: 24px;
            color: #ffc107;
            margin: 10px 0;
        }

        .review-content {
            color: #333333;
            margin: 10px 0;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello {{ $name ?: auth()->user()->name}}</h1>
        <p>Thank You for Your Review!</p>
        <p>Your feedback is valuable to us.</p>

        <a href="{{ $link }}" style="text-decoration: none">
            <div class="rating">⭐⭐⭐⭐⭐</div>
            <div class="rating">⭐⭐⭐⭐ </div>
            <div class="rating">⭐⭐⭐  </div>
            <div class="rating">⭐⭐   </div>
            <div class="rating">⭐   </div>
        </a>

        {{-- <p class="review-content">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua."
        </p> --}}

        <p>If you have any further feedback or questions, feel free to reach out to us.</p>
        <p>from: <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a></p>


        <a href="{{ $link }}" class="cta-button">Write Another Review</a>
    </div>
</body>

</html>
