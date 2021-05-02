<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
          @livewireStyles
        <!-- Scripts -->
          <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" charset="utf-8"></script>
          <script data-ad-client="ca-pub-9861891759143204" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R4TBNG2FHW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-R4TBNG2FHW');
  </script>
    </head>
    <body class="dark:bg-dark-bg bg-light-bg transition duration-1000 ease-in-out">


      @if(session('upload') === null)
      @else
        <div class="dark:bg-green-500 dark:text-gray-200 fixed m-10 p-10 text-center top-0 right-0 z-50">
          <p class="lg:w-1/2 w-full leading-relaxed text-base">
            {{session('upload')}}
          </p>
        </div>
      @endif
        <x-jet-banner />
        @yield('content')
        @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/main.js') }}" defer></script>
    </body>
</html>
