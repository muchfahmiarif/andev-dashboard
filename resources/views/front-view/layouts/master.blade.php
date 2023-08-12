<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Andev Dashboard">
  <meta name="author" content="Fahmi Arif">
  <meta name="keywords" content="bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

  <title>Andev | Dashboard</title>

  {{-- Font --}}
  <link href="{{ asset('/font/roboto.css') }}" rel="stylesheet">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  {{-- Favicon --}}
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('ico/apple-touch-icon-57x57.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114x114.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72x72.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144x144.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('ico/apple-touch-icon-60x60.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('ico/apple-touch-icon-120x120.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('ico/apple-touch-icon-76x76.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('ico/apple-touch-icon-152x152.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('ico/favicon-196x196.png') }}" sizes="196x196" />
  <link rel="icon" type="image/png" href="{{ asset('ico/favicon-96x96.png') }}" sizes="96x96" />
  <link rel="icon" type="image/png" href="{{ asset('ico/favicon-32x32.png') }}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ asset('ico/favicon-16x16.png') }}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{ asset('ico/favicon-128.png') }}" sizes="128x128" />

  {{-- Plugin CSS --}}
  @stack('plugin-style')

  {{-- Common CSS --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  
  @stack('style')
  @stack('head-script')

  {{-- Script --}}
  @vite(['resources/js/app.js'])
</head>
<body data-base-url="{{url('/')}}">
  
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

  
  <script src="{{ asset('js/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('plugin/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  
  {{-- Plugin js --}}
  @stack('plugin-scripts')
  
  @stack('custom-scripts')
  
  {{-- Common js --}}
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>