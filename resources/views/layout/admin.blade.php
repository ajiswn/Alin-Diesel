<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset($settings->logo_image) }}" rel="icon">
  <link href="{{ asset($settings->logo_image) }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/trix-editor/trix.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">

  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">{{ $settings->name }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset(Auth::user()->photo) }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>{{ Auth::user()->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/admin/account-settings">
                <i class="bi bi-gear"></i>
                <span>Setelan Akun</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center"  type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/dashboard') ? '' : 'collapsed' }}" href="{{ url('/admin/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dasbor</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/products*') ? '' : 'collapsed' }}" href="{{ url('/admin/products')}}">
          <i class="bi bi-box"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Product Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/categories*') ? '' : 'collapsed' }}" href="{{ url('/admin/categories')}}">
          <i class="bi bi-card-list"></i>
          <span>Kategori</span>
        </a>
      </li><!-- End Category Page Nav -->

    @can('is-superadmin')
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/admins*') ? '' : 'collapsed' }}" href="{{ url('/admin/admins')}}">
          <i class="bi bi-person-gear"></i>
          <span>Admin</span>
        </a>
      </li><!-- End Admin Page Nav --> 
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/settings') ? '' : 'collapsed' }}" href="{{ url('/admin/settings')}}">
          <i class="bi bi-gear"></i>
          <span>Setelan</span>
        </a>
      </li><!-- End Setting Page Nav -->
    @endcan
    
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    @yield('main')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>{{ $settings->name }}</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <!-- Start Konfirmasi Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title">Logout?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0 text-center">
            Anda harus Login lagi untuk membuka halaman admin.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Tutup</button>
          <form action="/auth/logout" method="POST">
            @csrf
            <button class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Konfirmasi Logout Modal-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/trix-editor/trix.umd.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/admin.js') }}"></script>

</body>

</html>