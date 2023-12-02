<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Andev Dashboard</title>
  
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
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
  </style>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  @stack('css')
</head>
<body class="flex flex-col h-screen">
  <header class="bg-white shadow">
		<div class="flex items-center justify-between py-4 md:py-8 mx-auto container">
      <!-- logo - start -->
      <a href="#">
        <img src="https://genero.co.id/uploads/company/logo.png" alt="Genero" class="w-32">
      </a>
      <!-- logo - end -->

      <!-- nav - start -->
      <nav class="hidden gap-12 lg:flex">
        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700 {{ Request::is(['/']) ? 'text-indigo-500' : '' }}" target="_self">Home</a>
        <a href="{{ url('rear-view') }}" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700 " target="_self">Input Data</a>
        {{-- <a href="{{ url('https://fahmiarif.site') }}" class="text-lg font-semibold text-gray-600 hover:animate-text hover:bg-gradient-to-r from-teal-500 hover:via-purple-500 hover:to-orange-500 hover:bg-clip-text hover:text-transparent  active:text-indigo-700" target="_blank">Stock WS / RS</a> --}}
        <a href="{{ url('about') }}" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700 {{ Request::is(['about']) ? 'text-indigo-500' : '' }}" target="_self">About</a>
      </nav>
      <!-- nav - end -->

      <!-- buttons - start -->
      <a href="https://helpdesk.aryanoble.co.id/" class="flex hidden rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-500 hover:text-white active:text-indigo-100 focus-visible:ring active:text-gray-700 md:text-base lg:inline-block" target="_blank">e-Ticket</a>

      <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-indigo-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg>

        Menu
      </button>
      <!-- buttons - end -->
		</div>
	</header>

  @yield('content')

  <footer class="border-t text-white pb-6">
		<div class="container mx-auto px-4 flex flex-col items-center justify-between gap-10 pt-8 lg:flex-row lg:gap-8">
			<!-- stats - start -->
      <div class="-mx-6 grid grid-cols-2 gap-2 md:-mx-8 md:flex md:divide-x">
        <div class="md:ps-8 md:pe-2">
          <span class="block text-center text-lg font-bold text-indigo-500 md:text-left md:text-xl">200</span>
          <span class="block text-center text-sm font-semibold text-gray-800 md:text-left md:text-base">Method Refers to FI</span>
        </div>

        <div class="md:ps-8 md:pe-3">
          <span class="block text-center text-lg font-bold text-indigo-500 md:text-left md:text-xl">500+</span>
          <span class="block text-center text-sm font-semibold text-gray-800 md:text-left md:text-base">Projects</span>
        </div>

        <div class="md:ps-8 md:pe-2">
          <span class="block text-center text-lg font-bold text-indigo-500 md:text-left md:text-xl">250+</span>
          <span class="block text-center text-sm font-semibold text-gray-800 md:text-left md:text-base">Validated Method</span>
        </div>

        <div class="px-6 md:px-8">
          <span id="clock" class="loading block text-center text-lg font-bold text-indigo-500 md:text-left md:text-xl">
            <div class="loading-text">Loading...</div>
          </span>
          <span id="date-container" class="block text-center text-sm font-semibold text-gray-800 md:text-left md:text-base"></span>
        </div>
      </div>
      <!-- stats - end -->

      <!-- social - start -->
      <div class="flex items-center justify-center gap-4 lg:justify-start">
        <span class="py-4 pl-6 pr-2 text-sm font-semibold uppercase tracking-widest text-gray-400 sm:text-base hover:animate-text hover:bg-gradient-to-r from-teal-500 hover:via-purple-500 hover:to-orange-500 hover:bg-clip-text hover:text-transparent cursor-default">Social</span>
        <span class="h-px w-12 bg-gray-200"></span>

        <div class="relative flex gap-4">
          <div class="group cursor-pointer inline-block text-center relative">
            <a href="https://www.instagram.com/andev_genero/" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg>
            </a>
            <div class="opacity-0 w-32 bg-indigo-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full -left-1/2 -ml-11 px-3 pointer-events-none mb-1">
              Instagram Andev
              <svg class="absolute text-indigo-800 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
            </div>
          </div>

          <div class="group cursor-pointer inline-block text-center relative">
            <a href="https://www.linkedin.com/company/pt-genero-pharmaceuticals/" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>
            <div class="opacity-0 w-[7.5rem] bg-indigo-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full -left-1/2 -ml-10 px-3 pointer-events-none mb-1">
              Linkedin Genero
              <svg class="absolute text-indigo-800 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
            </div>
          </div>

          {{-- <div class="group cursor-pointer inline-block text-center relative">
            <a href="https://www.linkedin.com/in/muhammad-aglia-dwitama-8170b9163/" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>
            <div class="opacity-0 w-28 bg-indigo-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full -left-1/2 -ml-9 px-3 pointer-events-none mb-1">
              LinkedIn Aglia
              <svg class="absolute text-indigo-800 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
            </div>
          </div> --}}
          
          <div class="group cursor-pointer inline-block text-center relative">
            <a href="{{ url('https://github.com/muchfahmiarif/andev-dashboard') }}" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
              </svg>
            </a>
            <div class="opacity-0 w-18 bg-indigo-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full -left-1/2 -ml-3.5 px-3 pointer-events-none mb-1 tracking-wider">
              <p class="tracking-wider">Github</p>
              <svg class="absolute text-indigo-800 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
            </div>
          </div>

        </div>
      </div>
      <!-- social - end -->
		</div>
	</footer>
  <script src="{{ asset('js/clock.js') }}" defer></script>
  @stack('scripts')

</body>
</html>