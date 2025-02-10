@extends('layout.admin')

@section('title','Edit Kategori - '.$settings->name)
    
@section('main')

  <div class="pagetitle">
    <h1>Edit Kategori</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/admin/categories">Kategori</a></li>
        <li class="breadcrumb-item active">Edit Kategori</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Formulir Edit Kategori</h5>
  
            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/categories/{{ $category->id }}" method="POST" enctype="multipart/form-data">
              @method('put')
              @csrf
              <div class="col-12">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $category->name) }}">
                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Perbarui</button>
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

@endsection