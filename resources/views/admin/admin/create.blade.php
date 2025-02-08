@extends('layout.admin')

@section('title','Tambah Admin - Alin Diesel')
    
@section('main')

  <div class="pagetitle">
    <h1>Tambah Admin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/admin/admins">Admin</a></li>
        <li class="breadcrumb-item active">Tambah Admin</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Formulir Tambah Admin</h5>
  
            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/admins" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                @error('email') <div class="invalid-feedback"> {{ $message }} </div> @enderror
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
              </div>
              <div class="col-12">
                <label for="photo" class="form-label">Foto</label>
                <img class="img-fluid photo-preview col-sm-5 mb-3">
                <input type="file" name="photo" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('photo') is-invalid @enderror" id="photo" onchange="previewPhoto()">
                @error('photo') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                <button type="button" class="btn btn-secondary mx-2" onclick="window.location.reload()"> <i class="bi bi-arrow-counterclockwise"></i> Reset</button>
              </div>
              <div class="col-12 mt-2">
                <a href="/admin/categories" class="btn btn-success mt-2"><i class="bi bi-arrow-left"></i> Kembali</a>
              </div>
            </form>
            <!-- Vertical Form -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function previewPhoto() {
      const logo = document.querySelector('#photo');
      const logoPreview = document.querySelector('.photo-preview');

      logoPreview.style.display = 'block';

      const OFReader = new FileReader();
      OFReader.readAsDataURL(logo.files[0]);

      OFReader.onload = function(oFREvent) {
        logoPreview.src = oFREvent.target.result;
      }
    }
  </script>

@endsection