@extends('layout.admin')

@section('title','Dasbor Admin - Alin Diesel')
    
@section('main')
  <div class="pagetitle">
    <h1>Dasbor</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Dasbor</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <div class="col-lg-8">
        <div class="row">

          <!-- Product Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Produk</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $num_of_products }}</h6>
                    
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Product Card -->

          <!-- Category Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Kategori</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-card-list"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $num_of_categories }}</h6>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Category Card -->

        </div>
      </div>

    </div>
  </section>
@endsection