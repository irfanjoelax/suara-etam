<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('logo.svg') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-700 pt-9 sm:pt-10">
    <!-- ========== { HEADER }==========  -->
    <x-template.header />
    <!-- end header -->

    <!-- Mobile menu -->
    <x-template.mobile-nav />
    <!-- End Mobile menu -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        @yield('content')
    </main>
    <!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <x-template.footer />
    <!-- end footer -->

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#"
        class="back-top fixed p-4 rounded-full bg-blue-700 hover:bg-yellow-400 text-gray-50 right-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <!--Vendor js-->
    <script src="{{ asset('template/vendors/hc-sticky/dist/hc-sticky.js') }}"></script>
    <script src="{{ asset('template/vendors/glightbox/dist/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/vendors/@splidejs/splide/dist/js/splide.min.js') }}"></script>
    <script src="{{ asset('template/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js') }}">
    </script>

    <!-- Start development js -->
    <script src="{{ asset('template/js/theme.js') }}"></script>
    <!-- End development js -->
</body>

</html>
