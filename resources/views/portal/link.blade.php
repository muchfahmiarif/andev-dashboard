@extends('portal.main')

@section('content')
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Favorite Link</h2>
  
        <p class="mx-auto max-w-screen-lg text-center text-gray-500 md:text-lg">Visit other links to get information from other websites. You can also access standard working stocks, CoA from several brands, pvt dissolution calculations and many others.</p>
      </div>
      <!-- text - end -->
  
      <div class="grid grid-cols-2 gap-x-4 gap-y-8 md:grid-cols-4 lg:gap-x-8 lg:gap-y-12">
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <a href="http://192.168.3.253/workingstandar" target="_blank">
              <img src="{{ asset('assets/img/illustrations/database-ws-rs.svg') }}" loading="lazy" alt="Photo by Radu Florin" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="http://192.168.3.253/workingstandar" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">Stock WS / RS</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">CoA</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="http://192.168.3.253/workingstandar" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <a target="_blank" href="https://crs.edqm.eu/">
              <img src="{{ asset('assets/img/illustrations/eurapean-pharmacopeia.svg') }}" loading="lazy" alt="Photo by christian ferrer" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://crs.edqm.eu/" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">European Pharmacopeia</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">CoA</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://crs.edqm.eu" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <a href="https://www.usp.org/" target="_blank">
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Ayo Ogunseinde" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://www.usp.org/" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">US Pharmacopeia</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">CoA</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://www.usp.org/" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <a href="https://www.sigmaaldrich.com/ID/en" target="_blank">
              <img src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Midas Hofstra" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://www.sigmaaldrich.com/ID/en" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">Sigma Aldrich</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">CoA</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://www.sigmaaldrich.com/ID/en" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <a href="https://192.168.3.7:10443/printadminweb" target="_blank">
              <img src="https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Elizeu Dias" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://192.168.3.7:10443/printadminweb" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">Epson Admin Print</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Print / Fotocopy</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://192.168.3.7:10443/printadminweb" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <a href="https://apps.usp.org/app/USPNF/pvtCalculationTool/" target="_blank">
              <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Matheus Ferrero" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://apps.usp.org/app/USPNF/pvtCalculationTool/" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">PVT Kalibrasi Disolusi</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Calculation</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://apps.usp.org/app/USPNF/pvtCalculationTool/" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Leilani Angel" class="h-full w-full object-cover object-center" />
          </div>
  
          <div>
            <div class="text-center font-bold text-indigo-500 md:text-lg">Rahul Williams</div>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Creative Director</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="http://192.168.3.253/workingstandar" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
  
        <!-- person - start -->
        <div class="flex flex-col items-center">
          <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:mb-4 md:h-32 md:w-32">
            <img src="https://images.unsplash.com/photo-1562904403-a5106bef8319?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Jernej Graj" class="h-full w-full object-cover object-center" />
          </div>
  
          <div>
            <div class="text-center font-bold text-indigo-500 md:text-lg">Ari Ferris</div>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Marketing Analyst</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="http://192.168.3.253/workingstandar" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                  <span class="">visit</span>
                  <svg
                    xmlns='http://www.w3.org/2000/svg'
                    width='22'
                    height='22'
                    viewBox='0 0 24 24'
                    class='group-hover:translate-x-2 group-hover:text-blue1 duration-200 flex self-center'
                    fill='currentColor'>
                    <path d='m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z'></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- social - end -->
          </div>
        </div>
        <!-- person - end -->
      </div>
    </div>
  </div>
@endsection