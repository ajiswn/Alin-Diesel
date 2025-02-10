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
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" x="0" y="0" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M68.18 68.59H41.76a1 1 0 1 1 0-2h25.42V27.16a2 2 0 0 0-2-2H18.15a2 2 0 0 0-2 2v37.45a2 2 0 0 0 2 2h7.15a1 1 0 0 1 0 2h-7.15a4 4 0 0 1-4-4V27.16a4 4 0 0 1 4-4H65.2a4 4 0 0 1 4 4v40.43a1 1 0 0 1-1.02 1z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M94 68.59h-3.64a1 1 0 1 1 0-2H94a2 2 0 0 0 2-2V48.41a.89.89 0 0 0-.22-.58L82.92 32.94a.85.85 0 0 0-.67-.31H69.18v34h4.72a1 1 0 0 1 0 2h-5.72a1 1 0 0 1-1-1v-36a1 1 0 0 1 1-1h14.07a2.88 2.88 0 0 1 2.19 1L97.3 46.52a2.92 2.92 0 0 1 .7 1.89v16.18a4 4 0 0 1-4 4z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M86.85 47.12H73.52a1 1 0 0 1-1-1v-9.61a1 1 0 0 1 1-1h7.1a1 1 0 0 1 .75.34l7 7.89a2 2 0 0 1 .33 2.18 2 2 0 0 1-1.85 1.2zm-12.33-2h12.33l-6.68-7.61h-5.65zM33.53 76.82a9.23 9.23 0 1 1 9.23-9.23 9.24 9.24 0 0 1-9.23 9.23zm0-16.46a7.23 7.23 0 1 0 7.23 7.23 7.23 7.23 0 0 0-7.23-7.23z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M33.53 71.51a3.92 3.92 0 1 1 3.92-3.92 3.93 3.93 0 0 1-3.92 3.92zm0-5.84a1.92 1.92 0 1 0 1.92 1.92 1.92 1.92 0 0 0-1.92-1.92zM82.13 76.82a9.23 9.23 0 1 1 9.23-9.23 9.24 9.24 0 0 1-9.23 9.23zm0-16.46a7.23 7.23 0 1 0 7.23 7.23 7.23 7.23 0 0 0-7.23-7.23z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M82.13 71.51a3.92 3.92 0 1 1 3.92-3.92 3.92 3.92 0 0 1-3.92 3.92zm0-5.84a1.92 1.92 0 1 0 1.92 1.92 1.92 1.92 0 0 0-1.92-1.92zM68.18 55.7h-53a1 1 0 0 1 0-2h53a1 1 0 0 1 0 2zM27.56 32H8.11a1 1 0 1 1 0-2h19.45a1 1 0 1 1 0 2zM24.29 48.24H6a1 1 0 0 1 0-2h18.29a1 1 0 0 1 0 2zM35.14 37.31h-25a1 1 0 0 1 0-2h25a1 1 0 0 1 0 2zM31.92 42.61H3a1 1 0 0 1 0-2h28.92a1 1 0 0 1 0 2z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                <h3><a href="">Truk</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" x="0" y="0" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M19.76 78.19A5.76 5.76 0 1 0 25.52 84a5.77 5.77 0 0 0-5.76-5.81Zm0 8.52A2.76 2.76 0 1 1 22.52 84a2.77 2.77 0 0 1-2.76 2.71Zm14.7-8.52A5.76 5.76 0 1 0 40.22 84a5.77 5.77 0 0 0-5.76-5.81Zm0 8.52A2.76 2.76 0 1 1 37.22 84a2.77 2.77 0 0 1-2.76 2.71ZM58.11 84a5.76 5.76 0 1 0 5.76-5.76A5.77 5.77 0 0 0 58.11 84Zm8.52 0a2.76 2.76 0 1 1-2.76-2.76A2.77 2.77 0 0 1 66.63 84Zm-17.47-5.81A5.76 5.76 0 1 0 54.92 84a5.77 5.77 0 0 0-5.76-5.81Zm0 8.52A2.76 2.76 0 1 1 51.92 84a2.77 2.77 0 0 1-2.76 2.71Zm5.59-47.82H43.34a1.5 1.5 0 0 0-1.5 1.5v12.44a1.5 1.5 0 0 0 1.5 1.5H60a1.5 1.5 0 0 0 1.25-.67 1.48 1.48 0 0 0 .13-1.41L56.14 39.8a1.51 1.51 0 0 0-1.39-.91Zm-9.91 12.44v-9.44h8.92l4 9.44Zm-15.57 8.88a1.5 1.5 0 0 1-1.5 1.5h-7.5a1.5 1.5 0 0 1 0-3h7.5a1.5 1.5 0 0 1 1.5 1.5Zm62.64-15.84L86 12.34a8.38 8.38 0 0 0-3.55-5.54 6.47 6.47 0 0 0-4.91-1h-.12a5.77 5.77 0 0 0-1.17.4L44.37 17.57a8.73 8.73 0 0 0-5.79 8.2v4.37h-3.81a1.5 1.5 0 0 0-1.5 1.5L33.21 51H12.68a1.5 1.5 0 0 0-1.5 1.5V68a1.5 1.5 0 0 0 1.5 1.5h4.09V73h-1.48A10.38 10.38 0 0 0 4.92 83.35v.59a10.39 10.39 0 0 0 10.37 10.38h51.27a10.39 10.39 0 0 0 10.38-10.38v-.59A10.38 10.38 0 0 0 66.56 73h-.86v-3.48h3.83A1.5 1.5 0 0 0 71 68V52.54a1.44 1.44 0 0 0-.15-.65L61 31a1.5 1.5 0 0 0-1.35-.86h-1.56v-4.59l15.08-8.41 10.16 28.51-7 20a1.5 1.5 0 0 0 .43 1.62 1.47 1.47 0 0 0 1 .37 1.44 1.44 0 0 0 .67-.16L90 61.69a8.06 8.06 0 0 0 4.59-10.36Zm-18 39v.59a7.39 7.39 0 0 1-7.38 7.38H15.29a7.39 7.39 0 0 1-7.37-7.38v-.59A7.39 7.39 0 0 1 15.29 76h51.27a7.39 7.39 0 0 1 7.38 7.35ZM62.7 73H19.77v-3.48H62.7ZM68 52.87v13.65H14.18V54h20.53a1.51 1.51 0 0 0 1.5-1.5V33.1h22.4ZM55.86 23.35a1.5 1.5 0 0 0-.77 1.31v5.48H41.58v-4.37a5.71 5.71 0 0 1 3.8-5.37l27.18-9.66a8.46 8.46 0 0 0-.25 3.44Zm19.56-8.83a5.33 5.33 0 0 1 .49-4.08A3.62 3.62 0 0 1 77.59 9l.54-.19a3.46 3.46 0 0 1 2.68.55 5.41 5.41 0 0 1 2.26 3.57l5.64 30.65-2.79.42Zm13.41 44.4a.35.35 0 0 0-.14.06l-8.31 4.16L86 47l3.45-.54 2.26 5.95a5.07 5.07 0 0 1-2.88 6.51Zm-8.19-46.31a1.52 1.52 0 0 1 .44 1.06 1.5 1.5 0 0 1-.44 1.06 1.52 1.52 0 0 1-1.07.44 1.5 1.5 0 0 1-1.49-1.5v-.29a1.61 1.61 0 0 1 .23-.54 1.37 1.37 0 0 1 .19-.23 1.57 1.57 0 0 1 2.14 0Z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                <h3><a href="">Alat Berat</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" x="0" y="0" viewBox="0 0 1707 1707" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M1573 1475h-116c-14 0-25-11-25-25 0-13 11-25 25-25h116c47 0 85-38 85-86V452c0-47-38-85-85-85H135c-47 0-86 38-86 85v889c0 47 39 86 86 86h1021c14 0 25 11 25 25s-11 25-25 25H135c-74 0-135-60-135-135V452c0-74 60-133 135-133h1438c74 0 133 59 133 133v889c0 73-59 134-133 134z" class="" fill="#000000" opacity="1" data-original="#000000"></path><path d="M1681 1233h-618c-14 0-25-11-25-25V342c0-14 11-25 25-25s25 11 25 25v842h593c14 0 25 11 25 25s-11 24-25 24zM322 1244c-76 0-139-63-139-139V631c0-77 63-139 139-139s139 62 139 139v475c0 77-63 138-139 138zm0-702c-50 0-90 40-90 90v476c0 50 40 90 90 90s90-40 90-90V631c0-50-40-89-90-89zM317 1636c-52 0-95-36-95-80v-106c0-13 11-25 25-25s25 12 25 25v106c0 16 21 32 46 32 24 0 44-14 44-32v-106c0-13 11-25 25-25s25 12 25 25v106c-1 44-44 80-95 80zM1307 1625c-97 0-175-78-175-173 0-96 79-174 175-174s173 78 173 174c0 95-77 173-173 173zm0-299c-70 0-126 56-126 124s56 125 126 125c69 0 125-57 125-125s-56-124-125-124z" class="" fill="#000000" opacity="1" data-original="#000000"></path><path d="M1489 367c-14 0-25-11-25-25v-83c0-32-27-58-59-58H344c-32 0-58 26-58 58v83c0 14-11 25-25 25s-25-11-25-25v-83c0-60 49-107 107-107h1061c60 0 107 49 107 107v83c1 14-9 25-22 25z" class="" fill="#000000" opacity="1" data-original="#000000"></path><path d="M1247 201c-14 0-25-11-25-25 0-6 2-11 6-15v-25c0-10-7-17-11-17h-114c-4 0-10 7-10 17v27c3 5 4 9 4 14 0 14-11 25-25 25-15 0-27-12-27-29v-37c0-36 26-66 58-66h114c32 0 59 31 59 66v36c0 16-12 29-29 29zm-173-49zM727 1240c-66 0-121-55-121-121 0-67 55-121 121-121 67 0 121 54 121 121 0 66-54 121-121 121zm0-193c-40 0-72 32-72 72s32 72 72 72 72-32 72-72c0-39-33-72-72-72zM727 939c-66 0-121-54-121-121s55-121 121-121c67 0 121 54 121 121s-54 121-121 121zm0-195c-39 0-72 34-72 73 0 38 33 72 72 72s72-34 72-72c0-39-33-73-72-73zM873 1364H190c-13 0-25-11-25-25 0-13 12-25 25-25h683c14 0 25 12 25 25 0 14-13 25-25 25zM773 470H580c-14 0-25-11-25-25s11-25 25-25h193c14 0 25 11 25 25s-11 25-25 25zM773 572H580c-14 0-25-11-25-24 0-14 11-25 25-25h193c14 0 25 11 25 25 0 13-11 24-25 24z" class="" fill="#000000" opacity="1" data-original="#000000"></path><path d="M823 842h-97c-14 0-25-12-25-25 0-14 11-25 25-25h97c14 0 25 11 25 25 0 13-11 25-25 25zM1213 1137c-5 0-9-1-13-4-10-6-14-20-10-31l114-277h-93c-8 0-17-4-21-13-4-7-4-16 0-23l181-330c4-9 12-13 20-13h159c8 0 16 4 20 13 4 7 4 16 0 25l-108 188h97c10 0 18 6 22 14 5 9 3 18-2 27l-347 414c-6 6-13 10-19 10zm38-359h88c8 0 15 4 21 11 5 7 5 15 2 22l-68 165 213-255h-88c-8 0-16-4-21-13-4-7-4-16 0-25l109-188h-102l-154 283z" class="" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                <h3><a href="">Genset</a></h3>
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
        {{-- <div class="container section-title py-5" data-aos="fade-up">
          <h2>Owner</h2>
          <p>Owner {{ $settings->name }}</p>
        </div> --}}
        <!-- End Owner Title -->
  
        <!-- Owner Container -->
        {{-- <div class="container">
  
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
            </div>
          </div>
        </div> --}}
  
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
                @if ($product->images->isNotEmpty())
                <img src="{{ asset($product->images[0]->image_path) }}" class="img-fluid" alt=""> 
                @else
                <img src="{{ asset($product->logo) }}" class="img-fluid" alt=""> 
                @endif
                {{-- <img src="{{ asset($product->logo) }}" class="position-absolute top-0 end-0 me-4 mt-2" alt="" style="width: 72px"> --}}
                <div class="product-info">
                  <h4>{{ $product->name }}</h4>
                  {{-- <p>{{ 'Rp'.number_format($product->price, 0, ',','.') }}</p> --}}
                  @if ($product->images->isNotEmpty())
                  <a href="{{ asset($product->images[0]->image_path) }}" title="{{ $product->name }}" data-gallery="product-gallery-category-{{ $product->category_id }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  @else
                  <a href="{{ asset($product->logo) }}" title="{{ $product->name }}" data-gallery="product-gallery-category-{{ $product->category_id }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  @endif
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