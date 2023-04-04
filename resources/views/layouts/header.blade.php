<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <div class="input-group-text">
          <i data-feather="search"></i>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="help-circle"></i>
          <div class="indicator">
            <div class="circle"></div>
          </div>
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
          <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom gap-3">
            <p class="text-primary align-items-center justify-content-between my-auto">Need Help?</p>
            <a href="javascript:;" class="badge bg-light text-dark">Click Me!</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="profile">
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
          <div class="d-flex flex-column align-items-center border-bottom px-5 py-2">
            <div class="text-center">
              <p class="tx-16 fw-bolder pt-2">Amiah Burton</p>
              <p class="tx-12 text-muted">amiahburton@gmail.com</p>
            </div>
          </div>
          <ul class="list-unstyled">
            <li class="dropdown-item ">
              <a href="{{ url('/dashboard') }}" class="ms-0 text-decoration-none pe-7 py-2 btn btn-link ">
                <i class="me-2 icon-md" data-feather="layout"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="dropdown-item ">
              <button class=" ms-0 text-decoration-none pe-7 py-2 border-0 btn btn-link">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
              </button>
              {{-- <a href="javascript:;" class="text-body ms-0 text-decoration-none pe-7 py-2">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
              </a> --}}
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>