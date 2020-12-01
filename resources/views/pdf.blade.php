<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pdf['title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        .responsive-wrapper {
            min-width: 90%;
            height: 100vh;
            position: relative;
        }
        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>
</head>
<body>
    <div class="responsive-wrapper">
        <iframe src="{{ asset($pdf['url']) }}" type="application/pdf" frameborder="0"></iframe>
    </div>
</body>
</html>