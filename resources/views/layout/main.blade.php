<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="{{ $setting->description }}">  
  <meta name="keywords" content="{{ $setting->keywords }}">

  <!-- Favicons -->
  <link href="{{ asset($settings->logo_image) }}" rel="icon">
  <link href="{{ asset($settings->logo_image) }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect" crossorigin>
  <link href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="@yield('body_class')">

  <header id="header" class="header d-flex align-items-center @yield('header_class')">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="{{ asset($settings->logo_image) }}" alt="">
        <h1 class="sitename">{{ $settings->name }}</h1>
        {{-- <span>.</span> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/#hero" class="active">Beranda<br></a></li>
          <li><a href="/#about">Tentang Kami</a></li>
          <li><a href="/#product">Produk</a></li>
          <li><a href="/#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @auth
        <a class="btn-getstarted" href="{{url('/admin/dashboard')}}">Dasbor</a>
        <form action="/auth/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      @else    
        <a class="btn-getstarted" href="{{url('/auth/login')}}">Login</a>
      @endauth

    </div>
  </header>

  <main class="main">
    @yield('main')
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">{{ $settings->name }}</span>
            </a>
            <div class="footer-contact pt-3">
              <p>{{ $setting->address }}</p>
              <p class="mt-3"><strong>Telepon:</strong> <span>+62 {{ $setting->whatsapp }}</span></p>
              <p><strong>Instagram:</strong> <span>{{ '@'.$setting->instagram }}</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/"> Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#about"> Tentang Kami</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#product"> Produk</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#contact"> Kontak</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $settings->name }}</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>