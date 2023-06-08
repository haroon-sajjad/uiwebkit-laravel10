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

    <style>
        body {
            font-family: 'PT Serif', serif;
        }
    </style>
</head>

<body>

    <section class="h-screen min-w-full grid lg:grid-cols-2 ">
        <div class="h-full lg:block hidden">
            <img src="{{ asset('/images/tree.png') }}" class="w-full h-screen object-cover" alt="">
        </div>


        <div class="p-8">
            <div class="flex items-center md:justify-between justify-center">
                <!-- Logo -->
                <a href="#">
                    <x-application-logo></x-application-logo>
                </a>
                <!-- Links -->
                <div class="md:block hidden">
                    <small class="font-inter">{{ __('Vous avez déjà un compte?') }}</small>
                    <a href="#" class=" text-red-950 font-bold pl-2">{{ __('Connectez-vous') }}</a>
                </div>
            </div>

            {{-- Form Section --}}

            <div class="sm:mt-40 mt-28 max-w-xs mx-auto  ">
                {{ $slot }}
            </div>


            <div class="  md:hidden mt-32 flex items-center justify-between sm:flex-row flex-col">
                <small class="font-inter ">{{ __('Vous avez déjà un compte?') }}</small>
                <a href="#" class="text-primaryColor font-bold pl-2">{{ __('Connectez-vous') }}</a>
            </div>
        </div>
    </section>
</body>

</html>
