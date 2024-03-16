@extends('portal.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/splidjs.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
@endpush

@section('content')
    <section class="container mx-auto flex items-center flex-grow gap-x-12">
        <!-- content - start -->
        <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-6/12">
            {{-- <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">Very proud to introduce</p> --}}
            <p
                class="mb-4 font-semibold text-xl animate-text bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 bg-clip-text text-transparent">
                Very proud to introduce</p>

            <h1 class="text-black-800 mb-8 text-4xl font-bold sm:text-5xl md:mb-12 md:text-6xl">Andev Digital</h1>

            <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
                <a href="{{ url('/home') }}"
                    class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Start
                    now</a>

                {{-- <a href="#" class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Documentations</a> --}}
            </div>
        </div>
        <!-- content - end -->

        <!-- image - start -->
        <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-96 xl:w-6/12">
            {{-- <img src="https://images.unsplash.com/photo-1618556450991-2f1af64e8191?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Fakurian Design" class="h-full w-full object-cover object-center" /> --}}
            <div class="splide">
                <div class="splide__slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{ asset('img/genero.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
                                    class="w-full object-cover" />
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('img/laboratory.webp') }}" alt="Genero" loading="lazy"
                                    class="w-full object-cover" />
                            </li>
                            <li class="splide__slide">
                                {{-- <h1>Test</h1> --}}
                                {{-- <img src="https://images.unsplash.com/photo-1618556450991-2f1af64e8191?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Fakurian Design" class="h-full w-full object-cover object-center" /> --}}
                                <img src="{{ asset('img/report.webp') }}" alt="Report Digital" loading="lazy"
                                    class="w-full object-cover">
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- <div class="splide__progress">
          <div class="splide__progress__bar">
          </div>
        </div> --}}
            </div>
        </div>
        <!-- image - end -->
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            arrows: false,
        });

        splide.mount();
    </script>
@endpush
