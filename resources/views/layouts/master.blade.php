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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

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

  @stack('plugin-style')

  {{-- Common css --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  
  @stack('style')

  @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body data-base-url="{{url('/')}}">
  
  <script src="{{ asset('/js/spinner.js') }}"></script>

  <div class="main-wrapper" id="app">
    @include('layouts.sidebar')
    <div class="page-wrapper">
      @include('layouts.header')
      <div class="page-content">
        @yield('content')
      </div>
      @include('layouts.footer')
    </div>
  </div>

  {{-- Feather Icon --}}
  <script src="{{ asset('js/feather.min.js') }}"></script>
  
  {{-- Common js --}}
  <script src="{{ asset('js/app.js') }}"></script>

  {{-- Plugin js --}}
  @stack('plugin-scripts')

  @stack('custom-scripts')
</body>
</html>