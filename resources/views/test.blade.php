<!DOCTYPE html>

<!-- Bootstrap 5 (CSS y JS) -->
@vite(['resources/js/app.js'])

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      
    </head>
    <body class="antialiased">

        @include('layouts/head')

        {{$numero}}


        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
          
            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <a href="{{ route('test', ['number' => 7 ]) }}" >
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ trans('welcome.documentation')}}</h2>
                </a>
                
                
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ trans('welcome.news')}}</h2>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ trans('welcome.eco')}}</h2>


                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    {{ trans('welcome.infoKrobady')}}
                </p>

             
            </div>
        </div>
    </body>
</html>

