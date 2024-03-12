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
            <a href="https://forms.gle/4FG2UAnrGDEutvL19" target="_blank">
              <img src="{{ asset('assets/img/illustrations/daily-activity.svg') }}" loading="lazy" alt="Daily Activity" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://forms.gle/4FG2UAnrGDEutvL19" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">Update Activity Andev</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Report</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://forms.gle/4FG2UAnrGDEutvL19" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
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
              <img src="{{ asset('assets/img/illustrations/usp.svg') }}" loading="lazy" alt="US Pharmacopeia" class="h-full w-full object-cover object-center" />
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
              <img src="{{ asset('assets/img/illustrations/sigma-aldrich.svg') }}" loading="lazy" alt="Sigma Aldrich" class="h-full w-full object-cover object-center" />
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
            <a href="https://www.merckmillipore.com/ID/id" target="_blank">
              <img src="{{ asset('assets/img/illustrations/merck-milipore.svg') }}" loading="lazy" alt="Sigma Aldrich" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://www.merckmillipore.com/ID/id" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">Merck Milipore</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">CoA</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://www.merckmillipore.com/ID/id" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
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
              <img src="{{ asset('assets/img/illustrations/epson-admin-print.svg') }}" loading="lazy" alt="Epson Admin Print" class="h-full w-full object-cover object-center" />
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
            <a href="https://helpdesk.aryanoble.co.id/" target="_blank">
              <img src="{{ asset('assets/img/illustrations/arya-noble.svg') }}" loading="lazy" alt="Photo by Leilani Angel" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://helpdesk.aryanoble.co.id/" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">E-Ticket</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Support System</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://helpdesk.aryanoble.co.id/" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
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
              <img src="{{ asset('assets/img/illustrations/pvt-disolusi.svg') }}" loading="lazy" alt="Perhitungan PVT Disolusi" class="h-full w-full object-cover object-center" />
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
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfaqiasHuNu14W9eg1FikjlHGRkTSaIx-UPfk8DIANMGz1QHg/viewform" target="_blank">
              <img src="{{ asset('assets/img/illustrations/borrow-asset-ga.svg') }}" loading="lazy" alt="Peminjaman Asset GA" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfaqiasHuNu14W9eg1FikjlHGRkTSaIx-UPfk8DIANMGz1QHg/viewform" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">Peminjaman Asset GA</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Items</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfaqiasHuNu14W9eg1FikjlHGRkTSaIx-UPfk8DIANMGz1QHg/viewform" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
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
            <a href="https://infalabs.pom.go.id" target="_blank">
              <img src="{{ asset('assets/img/illustrations/badan-pom.svg') }}" loading="lazy" alt="Peminjaman Asset GA" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://infalabs.pom.go.id" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">INFALABS</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">CoA</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://infalabs.pom.go.id" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
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
            <a href="https://standarobat.pom.go.id/" target="_blank">
              <img src="{{ asset('assets/img/illustrations/badan-pom.svg') }}" loading="lazy" alt="Peminjaman Asset GA" class="h-full w-full object-cover object-center" />
            </a>
          </div>
  
          <div>
            <a href="https://standarobat.pom.go.id/" target="_blank">
              <div class="text-center font-bold text-indigo-500 md:text-lg">SISOBAT</div>
            </a>
            <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">Event, Learning</p>
  
            <!-- social - start -->
            <div class="flex justify-center">
              <div class="flex gap-4">
                <a href="https://standarobat.pom.go.id/" target="_blank" class="group flex text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
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