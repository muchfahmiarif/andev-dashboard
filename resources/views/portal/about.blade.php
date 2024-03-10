@extends('portal.main')

@push('css')
  <style>
    details[open] summary {
      /* background-color: #b896ff; */
      /* animation-duration: 2s; */
      /* animation-name: fadeIn; */
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
@endpush

@section('content')
<section class="container block justify-center flex-grow gap-x-12 mx-auto">
  <div class="my-6">
    <h3 class="text-center font-bold text-3xl text-gray-600">Frequently Asked Questions</h3>
  </div>
  <div class="px-72 space-y-4 my-10">
    <details class="group [&_summary::-webkit-details-marker]:hidden " open>
      <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-gray-200 group-open:bg-violet-300 duration-500 ">
        <h2 class="font-medium text-gray-900 select-none">
          Apa itu Andev Dashboard?
        </h2>

        <svg
          class="ml-1.5 h-5 w-5 flex-shrink-0 transition duration-300 group-open:-rotate-180"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M19 9l-7 7-7-7"
          />
        </svg>
      </summary>

      <p class="px-4 mt-4 leading-relaxed text-gray-700 whitespace-pre-line bg-gray-50 rounded-lg">
        Alat berbasis web canggih yang dibuat untuk mengoptimalkan kinerja, penyimpanan data, dan efektivitas aplikasi web secara keseluruhan, dasbor ini berfungsi sebagai pusat kontrol terpusat bagi user untuk memantau, menganalisis, dan memastikan berkelanjutan proyek - proyek yang sedang di handle.
    </details>

    <details class="group [&_summary::-webkit-details-marker]:hidden">
      <summary
        class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-gray-200 group-open:bg-violet-300 duration-500"
      >
        <h2 class="font-medium text-gray-900 select-none">
          Aplikasi ini menggunakan template atau dibuat dari awal?
        </h2>

        <svg
          class="ml-1.5 h-5 w-5 flex-shrink-0 transition duration-300 group-open:-rotate-180"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M19 9l-7 7-7-7"
          />
        </svg>
      </summary>

      <p class="px-4 mt-4 leading-relaxed text-gray-700 whitespace-pre-line">
        Aplikasi ini dibuat dengan template dashboard yaitu NobleUI dengan menggunakan stack Laravel
      </p>
    </details>
  </div>
</section>
@endsection

@push('scripts')

@endpush