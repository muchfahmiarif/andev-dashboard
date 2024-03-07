<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand text-decoration-none">
      Andev <span>Dash</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ Request::is(['home']) ? 'active' : '' }}"> 
        <a href="{{ url('home') }}" class="nav-link">
          <i class="link-icon" data-feather="trello"></i>
          <span class="link-title">Home</span>
        </a>
      </li>

      {{-- Group Development Starts--}}
      <li class="nav-item nav-category">Core Part</li>
      <li class="nav-item {{ Request::is('development-journey*') ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#development-journey" role="button" aria-expanded="{{ Request::is(['development-journey/*']) ? 'true' : 'false' }}" aria-controls="development-journey">
          <i class="link-icon" data-feather="command"></i>
          <span class="link-title">Development Journey</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['development-journey/*']) ? 'show' : ''}}" id="development-journey">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/development-journey/eksternal') }}" class="nav-link {{ Request::is(['development-journey/eksternal*']) ? 'active' : '' }}">Eksternal</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/development-journey/finish_good') }}" class="nav-link {{ Request::is(['development-journey/finish_good*']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/development-journey/mikrobiologi') }}" class="nav-link {{ Request::is(['development-journey/mikrobiologi*']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/development-journey/raw_material') }}" class="nav-link {{ Request::is(['development-journey/raw_material*']) ? 'active' : '' }}">Raw Material</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ Request::is(['rpv-riv/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#rpv-riv" role="button" aria-expanded="{{ Request::is(['rpv-riv/*']) ? 'true' : 'false' }}" aria-controls="rpv-riv">
          <i class="link-icon" data-feather="bookmark"></i>
          <span class="link-title">RPV - RIV</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['rpv-riv/*']) ? 'show' : '' }}" id="rpv-riv">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/eksternal') }}" class="nav-link {{ Request::is(['rpv-riv/eksternal']) ? 'active' : '' }}">Eksternal</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/finish_good') }}" class="nav-link {{ Request::is(['rpv-riv/finish_good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/mikrobiologi') }}" class="nav-link {{ Request::is(['rpv-riv/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/raw_material') }}" class="nav-link {{ Request::is(['rpv-riv/raw_material']) ? 'active' : '' }}">Raw Material</a>
            </li>
          </ul>
        </div>
      </li>
      
      {{-- Group Development Ends --}}

      {{-- Data Report Starts --}}
      <li class="nav-item nav-category">Data Report</li>
      <li class="nav-item {{ Request::is(['report-analysis/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#report-analysis" role="button" aria-expanded="{{ Request::is(['report-analysis/*']) ? 'true' : 'false' }}" aria-controls="report-analysis">
          <i class="link-icon" data-feather="clipboard"></i>
          <span class="link-title">Report Analysis</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['report-analysis/*']) ? 'show' : '' }}" id="report-analysis">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/report-analysis/ShowFormReportAnalysis') }}" class="nav-link {{ Request::is(['report-analysis/ShowFormReportAnalysis']) ? 'active' : '' }}">Create Report</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/report-analysis/finish_good') }}" class="nav-link {{ Request::is(['report-analysis/finish_good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/report-analysis/mikrobiologi') }}" class="nav-link {{ Request::is(['report-analysis/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/report-analysis/raw_material') }}" class="nav-link {{ Request::is(['report-analysis/raw_material']) ? 'active' : '' }}">Raw Material</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/report-analysis/stabilita') }}" class="nav-link {{ Request::is(['report-analysis/stabilita']) ? 'active' : '' }}">Stabilita</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ Request::is(['lka/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#lka" role="button" aria-expanded="{{ Request::is(['lka/*']) ? 'true' : 'false' }}" aria-controls="lka">
          <i class="link-icon" data-feather="tablet"></i>
          <span class="link-title">Lembar Kerja Analis</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['lka/*']) ? 'show' : '' }}" id="lka">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/lka/finish_good') }}" class="nav-link {{ Request::is(['lka/finish_good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/lka/mikrobiologi') }}" class="nav-link {{ Request::is(['lka/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/lka/raw_material') }}" class="nav-link {{ Request::is(['lka/raw_material']) ? 'active' : '' }}">Raw Material</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/lka/stabilita') }}" class="nav-link {{ Request::is(['lka/stabilita']) ? 'active' : '' }}">Stabilita</a>
            </li>
          </ul>
        </div>
      </li>
      <!--<li class="nav-item {{ Request::is(['jadwal-stabilita/*']) ? 'active' : '' }}">-->
      <!--  <a class="nav-link" data-bs-toggle="collapse" href="#jadwal-stabilita" role="button" aria-expanded="{{ Request::is(['jadwal-stabilita/*']) ? 'true' : 'false' }}" aria-controls="jadwal-stabilita">-->
      <!--    <i class="link-icon" data-feather="calendar"></i>-->
      <!--    <span class="link-title">Jadwal Stabilita</span>-->
      <!--    <i class="link-arrow" data-feather="chevron-down"></i>-->
      <!--  </a>-->
      <!--  <div class="collapse {{ Request::is(['jadwal-stabilita/*']) ? 'show' : '' }}" id="jadwal-stabilita">-->
      <!--    <ul class="nav sub-menu">-->
      <!--      <li class="nav-item">-->
      <!--        <a href="{{ url('/jadwal-stabilita/ss-1') }}" class="nav-link {{ Request::is(['jadwal-stabilita/ss-1']) ? 'active' : '' }}">SS 1</a>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <a href="{{ url('/jadwal-stabilita/ss-2') }}" class="nav-link {{ Request::is(['jadwal-stabilita/ss-2']) ? 'active' : '' }}">SS 2</a>-->
      <!--      </li>-->
      <!--    </ul>-->
      <!--  </div>-->
      <!--</li>-->
      {{-- Report Data Ends --}}

      {{-- Others Starts --}}
      <li class="nav-item nav-category">Others</li>
      <li class="nav-item {{ Request::is(['other/compliance']) ? 'active' : '' }}">
        <a href="{{ url('/other/compliance') }}" class="nav-link">
          <i class="link-icon" data-feather="user-check"></i>
          <span class="link-title">Compliance</span>
        </a>
      </li>
     
      <li class="nav-item {{ Request::is(['other/instrument_andev']) ? 'active' : '' }}">
        <a href="{{ url('/other/instrument_andev') }}" class="nav-link">
          <i class="link-icon" data-feather="tool"></i>
          <span class="link-title">Instrument Andev</span>
        </a>
      </li>
       <li class="nav-item nav-category">Users</li>
      <li class="nav-item {{ Request::is(['/users']) ? 'active' : '' }}">
        <a href="{{ url('/users') }}" class="nav-link">
          <i class="link-icon" data-feather="user-check"></i>
          <span class="link-title">List User</span>
        </a>
      </li>
      {{-- <li class="nav-item {{ Request::is(['resource-analysis/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#resource-analysis" role="button" aria-expanded="{{ Request::is(['resource-analysis/*']) ? 'true' : 'false' }}" aria-controls="resource-analysis">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Resource Analysis</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['resource-analysis/*']) ? 'show' : '' }}" id="resource-analysis">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/resource-analysis/instrument') }}" class="nav-link {{ Request::is(['resource-analysis/instrument']) ? 'active' : '' }}">Instrument</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/resource-analysis/man-power') }}" class="nav-link {{ Request::is(['resource-analysis/man-power']) ? 'active' : '' }}">Man Power</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/resource-analysis/reagent-and-consumable') }}" class="nav-link {{ Request::is(['resource-analysis/reagent-and-consumable']) ? 'active' : '' }}">Reagent and Consumable</a>
            </li>
          </ul>
        </div>
      </li> --}}
      
      {{-- Docs Starts --}}
      {{-- <li class="nav-item nav-category">Docs</li>
      <li class="nav-item">
        <a href="https://docs-andev-genero.vercel.app" target="_blank" class="nav-link">
          <i class="link-icon" data-feather="code"></i>
          <span class="link-title">Documentation</span>
        </a>
      </li> --}}
      {{-- Docs Ends --}}

    </ul>
  </div>
</nav>