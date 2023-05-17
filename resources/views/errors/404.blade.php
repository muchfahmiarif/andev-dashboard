{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- Favicon --}}
  <link rel="apple-touch-icon-precomposed" sizes="48x48" href="{{ asset('ico/not-entry-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('ico/not-entry-192x192.png') }}" sizes="192x192" />
  <link rel="icon" type="image/png" href="{{ asset('ico/not-entry-512x512.png') }}" sizes="512x512" />
  <link rel="icon" type="image/png" href="{{ asset('ico/not-entry-32x32.png') }}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ asset('ico/not-entry-16x16.png') }}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{ asset('ico/not-entry.ico') }}" sizes="48x48" />

  <title>Not Found</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          animation: {
            text: 'text 2.5s ease-in-out infinite',
          },
          keyframes: {
            text: {
              '0%, 100%': {
                'background-size': '200% 200%',
                'background-position': 'left center',
              },
              '50%': {
                'background-size': '200% 200%',
                'background-position': 'right center',
              },
            },
          },
        }
      }
    }
  </script>
</head>
<body>
  <div class="grid h-screen px-4 bg-gray-900 place-content-center">
    <div class="text-center">
      <h1 class="font-black text-gray-700 text-9xl select-none">404</h1>
  
      <p class="text-2xl font-bold tracking-tight text-white sm:text-4xl">
        Not Found
      </p>
  
      <p class="mt-4 text-gray-400">We can't find that page.</p>
  
      <a href="javascript:history.back()" class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring">Go Back</a>
    </div>
  </div>
</body>
</html>