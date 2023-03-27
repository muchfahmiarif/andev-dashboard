<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Andev | Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  @stack('plugin-style')

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  
  @stack('style')

  @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body>
  
  <script src="{{ asset('assets/js/spinner.js') }}"></script>

  <div class="main-wrapper">
    @include('layouts.sidebar')
    <div class="page-wrapper">
      @include('layouts.header')
      <div class="page-content">
        @yield('content')
      </div>
      @include('layouts.footer')
    </div>
  </div>

  <script src="https://unpkg.com/feather-icons"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>