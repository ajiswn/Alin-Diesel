@extends('layout.main')

@section('title', $product->name.' - '.$settings->name)
@section('body_class', 'product-details-page')
@section('header_class', 'position-relative')

@section('main')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>{{ $product->name }}</h1>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li class="current">Detail Produk</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      <!-- Product Details Section -->
      <section id="product-details" class="product-details section">
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="product-details-slider swiper init-swiper">
  
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
                    }
                  }
                </script>
  
                <div class="swiper-wrapper align-items-center">
  
                  @foreach ($product->images as $image)
                    <div class="swiper-slide">
                      <img src="{{ asset($image->image_path) }}" alt="">
                    </div>
                  @endforeach
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="product-info" data-aos="fade-up" data-aos-delay="200">
                <h3>Informasi Produk</h3>
                <ul>
                  <li><strong>Kategori</strong>: {{ $product->category->name }}</li>
                  <li><strong>Harga</strong>: {{ 'Rp'.number_format($product->price, 0, ',', '.') }}</li>
                  <li><strong>Stok</strong>: {{ $product->stock }}</li>
                  <li><strong>Deskripsi</strong>:</li>
                </ul>
                {!! $product->description !!}
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Product Details Section -->
@endsection