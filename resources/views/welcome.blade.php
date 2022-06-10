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

        <label for="checked-toggle" class="inline-flex relative items-center cursor-pointer">
            <input type="checkbox" value="" id="checked-toggle" class="sr-only peer" checked="false" onclick="getStat()">
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Checked toggle</span>
        </label>


        {{--<audio controls>
            <source src="{{asset('music/moonKnigth.mp3')}}" type="audio/mpeg"> 
        </audio>--}}
        <div>
            <audio id="sound" src="{{asset('music/moonKnigth.mp3')}}"></audio>    
        </div>
        {{--<div>
            <button type="button" onclick="getStat()">status</button>
        </div>--}}

        <script type="text/javascript">
            var check = document.getElementById('checked-toggle');
            var music = document.getElementById('sound');


            function getStat(){
                console.log('aver aver aver...');                
                console.log(check.checked);
                if(check.checked){
                    music.play();
                } else {
                    music.pause();
                }

            }
        </script>

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