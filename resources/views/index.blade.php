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
          <p>Tentang {{ $settings->name }}</p>
        </div>
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
            <div class="col-lg-4 order-1 order-lg-2">
              <img src="{{ asset($setting->about_image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 order-2 order-lg-1 content">
              <h3>Apa itu {{ $settings->name }}?</h3>
              <p class="fst-italic">
                Selamat datang di Alien Diesel, mitra terbaik Anda dalam menyediakan:
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Spare Part Truk.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Spare Part Alat Berat.</span></li>
              </ul>
              <p class="text-justify">
                Berbasis di Kasang Pudak, Kec. Kumpeh Ulu, Kabupaten Muaro Jambi, Jambi, kami hadir untuk memenuhi kebutuhan industri transportasi, konstruksi, dan pertambangan dengan menyediakan suku cadang berkualitas tinggi dan layanan terbaik.
              </p>
              <p class="text-justify">
                Seiring dengan meningkatnya kebutuhan akan perawatan dan perbaikan kendaraan operasional, Alien Diesel berkomitmen untuk menjadi solusi utama bagi pelanggan yang mencari spare part berkualitas dengan harga bersaing. Kami memahami bahwa dalam dunia industri, keandalan kendaraan dan alat berat merupakan faktor utama dalam menjaga efisiensi operasional. Oleh karena itu, kami menyediakan berbagai jenis suku cadang yang terjamin kualitasnya, baik untuk truk pengangkut maupun alat berat.
              </p>
              <p class="text-justify">
                Alien Diesel memiliki visi untuk menjadi penyedia suku cadang terkemuka di Indonesia dengan menghadirkan produk yang tahan lama, original, dan sesuai dengan spesifikasi teknis yang dibutuhkan pelanggan. Kami juga percaya bahwa pelayanan yang cepat dan responsif adalah kunci dalam membangun kepercayaan pelanggan. Oleh sebab itu, kami selalu siap memberikan konsultasi dan rekomendasi terbaik sesuai dengan kebutuhan industri Anda.
              </p>
            </div>
          </div>

          <div class="row gy-4 justify-content-center mt-3">
            <div class="col-lg-12 order-1 order-lg-2 content">
              <h3 class="text-center">Visi</h3>
              <p class="text-center">
                Menjadi <b>penyedia spare part truk dan alat berat terdepan di Indonesia,</b> yang dikenal dengan produk berkualitas tinggi, layanan prima, dan kepercayaan pelanggan yang kuat.
              </p>
              <h3 class="text-center">Misi</h3>
              <ul>
                <li class="text-justify"><i class="bi bi-check2-all"></i> <span><b>Menyediakan produk berkualitas</b> - Kami hanya menawarkan suku cadang yang teruji dan terpercaya untuk menjamin performa optimal kendaraan dan alat berat pelanggan.</span></li>
                <li class="text-justify"><i class="bi bi-check2-all"></i> <span><b>Memberikan pelayanan terbaik</b> - Kepuasan pelanggan adalah prioritas kami. Tim kami siap memberikan solusi yang cepat, tepat, dan profesional.</span></li>
                <li class="text-justify"><i class="bi bi-check2-all"></i> <span><b>Menjaga ketersediaan produk</b></span> - Kami memastikan bahwa setiap suku cadang yang dibutuhkan pelanggan tersedia dan siap dikirim dengan cepat.</li>
                <li class="text-justify"><i class="bi bi-check2-all"></i> <span><b>Menjalin kemitraan jangka panjang</b> - Kami ingin tumbuh bersama pelanggan dengan membangun hubungan yang didasarkan pada kepercayaan dan kepuasan.</span></li>
                <li class="text-justify"><i class="bi bi-check2-all"></i> <span><b>Mendukung efisiensi operasional pelanggan</b> - Dengan produk berkualitas dan layanan prima, kami membantu pelanggan menjaga kelangsungan bisnis mereka tanpa hambatan teknis.</span></li>
              </ul>
              <p class="text-justify">
                Di Alien Diesel, kami bukan sekadar penjual suku cadang. Kami adalah mitra bisnis Anda dalam menjaga kinerja kendaraan dan alat berat agar tetap optimal, efisien, dan produktif. Hubungi kami sekarang dan temukan solusi terbaik untuk kebutuhan spare part Anda! 🚛🔩✨
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
          <p>Owner {{ $settings->name }}</p>
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
                {{-- <img src="{{ asset($product->logo) }}" class="position-absolute top-0 end-0 me-4 mt-2" alt="" style="width: 72px"> --}}
                <div class="product-info">
                  <h4>{{ $product->name }}</h4>
                  {{-- <p>{{ 'Rp'.number_format($product->price, 0, ',','.') }}</p> --}}
                  <a href="{{ asset($product->images[0]->image_path) }}" title="{{ $product->name }}" data-gallery="product-gallery-category-{{ $product->category_id }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="/product-details/{{ $product->id }}" title="Detail Produk" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  <a href="https://wa.me/{{ $setting->whatsapp }}?text=Halo%20saya%20ingin%20pesan%20produk%20{{ $product->name }}" title="Pesan Produk" class="whatsapp-link" target="_blank"><i class="bi bi-whatsapp"></i></a>
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
                  <p>{!! $setting->address !!}</p>
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