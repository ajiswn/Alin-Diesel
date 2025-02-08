@extends('layout.main')

@section('title', $settings->name)
@section('body_class', 'index-page')
@section('header_class', 'fixed-top')

@section('main')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset($setting->hero_image) }}" alt="" data-aos="fade-in">
  
        <div class="container">
  
          <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-6 col-lg-8">
              <h2>{{ $settings->name }}<span>.</span></h2>
              <p>{{ $setting->slogan }}</p>
            </div>
          </div>
  
          <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-truck"></i>
                <h3><a href="">Truck</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-wrench-adjustable"></i>
                <h3><a href="">Alat Berat</a></h3>
              </div>
            </div>
          </div>
  
        </div>
  
      </section><!-- /Hero Section -->
  
      <!-- About Section -->
      <section id="about" class="about section">
  
        <div class="container section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
          <p>Tentang Alin Diesel</p>
        </div>
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
            <div class="col-lg-4 order-1 order-lg-2">
              <img src="{{ asset($setting->about_image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 order-2 order-lg-1 content">
              <h3>Apa itu Alin Diesel?</h3>
              <p class="fst-italic">
                Alin Diesel adalah penyedia spare part untuk:
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Spare part truck.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Spare part.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>
            </div>
          </div>
  
        </div>
  
        <!-- Categories -->
        <div class="container py-5" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              @foreach ($products as $product)
                <div class="swiper-slide"><img src="{{ asset($product->logo) }}" class="img-fluid" alt="{{ $product->name }}"></div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
        <!-- Owner Title -->
        <div class="container section-title py-5" data-aos="fade-up">
          <h2>Owner</h2>
          <p>Owner Alin Diesel</p>
        </div><!-- End Owner Title -->
  
        <!-- Owner Container -->
        <div class="container">
  
          <div class="row gy-4 justify-content-center">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="about-owner">
                <div class="owner-img">
                  <img src="{{ asset($setting->owner_image) }}" class="img-fluid" alt="{{ $setting->owner }}">
                  <div class="social">
                    <a href="https://www.instagram.com/{{ $setting->owner_instagram }}/"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="owner-info">
                  <h4>{{ $setting->owner }}</h4>
                  <span>Owner</span>
                </div>
              </div>
            </div><!-- End Owner -->
            
          </div>
  
        </div>
  
      </section><!-- /About Section -->
  
      <!-- Call Us Section -->
      <section id="call-us" class="call-us section dark-background">
  
        <img src="{{ asset($setting->hero_image) }}" alt="">
  
        <div class="container">
          <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
              <div class="text-center">
                <h3>Hubungi untuk pesan</h3>
                <p>Ingin memesan produk kami? Klik link di bawah untuk menghubungi kami melalui WhatsApp</p>
                <a class="call-us-btn" href="https://wa.me/{{ $setting->whatsapp }}/" target="_blank"><i class="bi bi-whatsapp"></i>  Hubungi untuk pesan</a>
              </div>
            </div>
          </div>
        </div>
  
      </section><!-- /Call Us Section -->
  
      <!-- Produk Section -->
      <section id="product" class="product section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Produk</h2>
          <p>Cek Produk Kami</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <ul class="product-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">Semua Produk</li>
              @foreach ($categories as $category)
                <li data-filter=".filter-category-{{ $category->id }}">{{ $category->name }}</li>
              @endforeach
            </ul><!-- End Product Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
            @foreach ($products as $product)
              <div class="col-lg-4 col-md-6 product-item isotope-item filter-category-{{ $product->category_id }}">
                <img src="{{ asset($product->images[0]->image_path) }}" class="img-fluid" alt="">
                <div class="product-info">
                  <h4>{{ $product->name }}</h4>
                  {{-- <p>{{ 'Rp'.number_format($product->price, 0, ',','.') }}</p> --}}
                  <a href="{{ asset($product->images[0]->image_path) }}" title="{{ $product->name }}" data-gallery="product-gallery-category-{{ $product->category_id }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="/product-details/{{ $product->id }}" title="Detail Produk" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Product Item -->  
            @endforeach  
  
            </div><!-- End Product Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Product Section -->
  
      <!-- Contact Section -->
      <section id="contact" class="contact section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>{{ $setting->address }}</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-whatsapp flex-shrink-0"></i>
                <div>
                  <h3>WhatsApp</h3>
                  <p>+{{ $setting->whatsapp }}</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-instagram flex-shrink-0"></i>
                <div>
                  <h3>Instagram</h3>
                  <p>{{ '@'.$setting->instagram }}</p>
                </div>
              </div><!-- End Info Item -->
  
            </div>
  
            <div class="col-lg-8">
              <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;" src="{{ $setting->gmaps }}" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- End Google Maps -->
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->
@endsection