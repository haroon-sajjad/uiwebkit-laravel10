<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=PT+Serif:ital,wght@0,400;0,700;1,400&family=Pangolin&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <title>{{ config('app.name', 'UI Webkit') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- header (NAVBAR)  --}}
    <x-global-app-header></x-global-app-header>

    {{ $slot }}

    {{-- FOOTER --}}
    <x-global-app-footer></x-global-app-footer>



</body>

</html>
