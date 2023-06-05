<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <label class="input-group-text" for="navbarForm" id="labelNavbarForm">
          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
        </label>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search by Google...">
      </div>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item flex-wrap">
        <p id="clock" class="text-nowrap text-center align-middle nav-link mb-0 fs-5" style="cursor: default">
          <span class="loading-text fs-5">Loading...</span>
        </p>
      </li>
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
            <a href="https://helpdesk.aryanoble.co.id/" class="badge bg-light text-dark">Click Me!</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="wd-30 ht-30 rounded-circle" src="{{ asset('img/user.svg') }}" alt="profile">
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
          <div class="d-flex flex-column align-items-center border-bottom px-5 py-2">
            <div class="text-center">
              <p class="tx-16 fw-bolder pt-2">Amiah Burton</p> {{-- Sesuai nama user --}}
              <p class="tx-12 text-muted">amiahburton@gmail.com</p> {{-- Sesuai email user --}}
            </div>
          </div>
          <ul class="list-unstyled">
            <li class="dropdown-item ">
              <a href="{{ url('/') }}" class="ms-0 text-decoration-none pe-7 py-2 btn btn-link ">
                <i class="me-2 icon-md" data-feather="home"></i>
                <span>Home</span>
              </a>
            </li>
            <li class="dropdown-item ">
              <a href="{{ url('/dashboard') }}" class="ms-0 text-decoration-none pe-7 py-2 btn btn-link ">
                <i class="me-2 icon-md" data-feather="edit"></i>
                <span>Halaman Edit</span>
              </a>
            </li>
            <li class="dropdown-item ">
              <button class=" ms-0 text-decoration-none pe-7 py-2 border-0 btn btn-link">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
              </button>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>

<script src="{{ asset('js/clock.js') }}"></script>
<script>
  const SEARCH_GOOGLE_VALUE = document.getElementById('navbarForm');

  SEARCH_GOOGLE_VALUE.addEventListener("keypress", (keyboard) => {
    if (keyboard.keyCode == 13) {
      keyboard.preventDefault(); // prevent page reload
      let value = SEARCH_GOOGLE_VALUE.value.trim(); // trim to remove whitespace
      if (value !== "") {
        window.open(`https://www.google.com/search?q=${value}`, "_blank");
      }
      SEARCH_GOOGLE_VALUE.value = ""; // clear the input field
    }
  });
</script>