<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome stranger</title>

        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
        <script type="text/javascript" src="{{mix('js/app.js')}}" defer></script>

    </head>
    <body class="">
        <h1>This the welcome of the application... :)</h1>
        <h2>By the way... is this the brach of dev</h2>

        <x-toggle-button/>

        <x-float-button/>

        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>        
    </body>
</html>


    {{--
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
        Sponsor
    </a>
    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
    --}}