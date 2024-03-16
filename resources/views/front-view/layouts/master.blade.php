<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" sizes="85x76" href="{{ asset('assets/img/title-logo.png') }}">
    <meta name="description" content="Andev Dashboard">
    <meta name="author" content="Fahmi Arif">
    <meta name="keywords"
        content="bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

    <title>Andev | Dashboard</title>

    {{-- Font --}}
    <link href="{{ asset('/font/roboto.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('ico/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('ico/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('ico/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('ico/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('ico/apple-touch-icon-152x152.png') }}" />
    <link rel="stylesheet" href="/plugin/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- Plugin CSS --}}
    @stack('plugin-style')

    {{-- Common CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @hasSection('custom-css')
        @yield('custom-css')
    @endif
    @stack('style')
    @stack('head-script')
    @hasSection('custom-css')
        @yield('custom-css')
    @endif
    {{-- Script --}}
    @vite(['resources/js/app.js'])

</head>

<body data-base-url="{{ url('/') }}">

    <script src="{{ asset('/js/spinner.js') }}"></script>

    <div class="main-wrapper" id="app">
        @include('front-view.layouts.sidebar')
        <div class="page-wrapper">
            @include('front-view.layouts.header')
            <div class="page-content">
                @yield('content')
            </div>
            @include('front-view.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('plugin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugin/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('plugin/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    {{-- Plugin js --}}
    @stack('plugin-scripts')

    @stack('custom-scripts')
    @hasSection('custom-js')
        @yield('custom-js')
    @endif
    {{-- Common js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
