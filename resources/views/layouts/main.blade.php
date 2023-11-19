<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ isset($title) ? "$title | " : '' }} {{ env('BRAND_NAME') }}</title>

  {{-- GLOBAL STYLE --}}
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
    <script src="{{ asset('src/js/loader.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('src/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/sweetalert/src/sweetalert.css') }}">
  {{-- /GLOBAL STYLE --}}

  {{-- PAGE STYLE --}}
    @yield('css')
  {{-- /PAGE STYLE --}}
  
</head>
<body>    
  <div id="load_screen">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('src/img/icons/logo.png') }}" alt="">
        <span class="d-none d-lg-block">AXLIB</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        @if ((auth()->user())!= null)
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
          <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('src/img/icons/null-profile.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Kenly Krisaguino</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kenly Krisaguino</h6>
              <span>Email Address</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{ route('logout') }}" method="POST" name="logoutForm">
                @csrf
                <a class="dropdown-item d-flex align-items-center" href="javascript:logout();">
                  <i class="bi bi-box-arrow-right"></i>
                  <span class="">Sign Out</span>
                </a>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        @else
          <li class="nav-item me-5">
            <a href="/login">
              <button type="button" class="btn btn-primary pe-3"><i class="bi bi-box-arrow-in-right"></i> Login</button>
            </a>
          </li>
        @endif
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
    @include('partials.sidebar')
    
  {{-- PAGE CONTENT --}}
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>{{ isset($title) ? "$title" : '' }}</h1>
      <nav>
        <ol class="breadcrumb">
          @php $link = "" @endphp
          @for ($i = 1; $i <= count(Request::segments()); $i++)
              <?php $link .= '/' . Request::segment($i); ?>
              @if ($i < count(Request::segments()))
                  <li class="breadcrumb-item">
                      <a href="{{ url($link) }}">
                          {{ ucwords(str_replace('-', ' ', Request::segment($i))) }}
                      </a>
                  </li>
              @else
                  <li class="breadcrumb-item active">
                    {{ ucwords(str_replace('-', ' ', Request::segment($i))) }}
                  </li>
              @endif
          @endfor
        </ol>
      </nav>
    </div>

    <section class="section">
        @yield('content')
    </section>
  </main>
  {{-- /PAGE CONTENT --}}
    
  @include('partials.footer')
    
  {{-- GLOBAL SCRIPT --}}
    <script src="{{ asset('src/js/custom.js') }}"></script>
    <script src="{{ asset('src/js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ asset('src/vendor/sweetalert/docs/assets/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('src/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('src/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('src/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('src/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('src/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('src/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('src/vendor/php-email-form/validate.js') }}"></script>
  {{-- /GLOBAL SCRIPT --}}

  {{-- LOCAL SCRIPT --}}
    @yield('script')
  {{-- /LOCAL SCRIPT --}}

  <script>
    function logout() {
      document.logoutForm.submit();
    }
  </script>

</body>
</html>