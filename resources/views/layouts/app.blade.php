<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased bg-white-900 text-gray-900 dark:bg-gray-900 dark:text-white">
      @if(session('upload') === null)
      @else
      <div x-data="{ show: true }" x-show="show"
      class="dark:bg-green-500 dark:text-gray-200 fixed m-10 p-10 text-center top-0 right-0 z-50 text-yellow-600 py-3 px-3 rounded-lg max-w-md">
      <div class=" mr-5">
        <span class="lg:w-1/2 w-full leading-relaxed text-base mt-5">{{session('upload')}}</span>
      </div>
      <div class="absolute right-2 top-0">
        <button type="button" @click="show = false" class=" text-yellow-700">
          <span class="text-2xl">&times;</span>
        </button>
      </div>
    </div>
      @endif

        <x-jet-banner />
            @livewire('navigation-menu')

        @yield('content')
        @stack('modals')
        @livewireScripts
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
