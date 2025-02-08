@extends('layout.admin')

@section('title','Tambah Produk - Alin Diesel')
    
@section('main')

  <div class="pagetitle">
    <h1>Tambah Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/admin/products">Produk</a></li>
        <li class="breadcrumb-item active">Tambah Produk</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Formulir Tambah Produk</h5>
  
            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/products" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" placeholder="Nama" class="form-control @error('name') is-invalid @enderror @if(old('name') && !$errors->has('name')) is-valid @endif" id="name" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12">
                <label for="logo" class="form-label">Logo</label>
                <img class="img-fluid logo-preview col-sm-5 mb-3">
                <input type="file" name="logo" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('logo') is-invalid @enderror" id="logo" onchange="previewLogo()">
                @error('logo') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12">
                <label class="col-form-label" for>Kategori</label>
                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror @if(old('category_id') && !$errors->has('category_id')) is-valid @endif">
                  <option selected hidden>-Pilih Kategori-</option>
                  @foreach ($categories as $item)
                    @if (old('category_id') == $item->id)
                      <option value={{ $item->id }} selected>{{ $item->name }}</option>
                    @else
                      <option value={{ $item->id }}>{{ $item->name }}</option>  
                    @endif
                  @endforeach
                </select>
                @error('category_id') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
            <!-- Vertical Form -->
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card">
          <div class="card-body">
              <div class="col-12 mt-3">
                <label for="images" class="form-label">Gambar</label>
                <div class="image-previews-container" id="image-previews-container"></div>
                <input type="file" name="images[]" multiple accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('images') is-invalid @enderror" id="images" onchange="previewImages(this)">
                @error('images') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12 mt-3">
                <label for="description" class="form-label">Deskripsi</label>
                @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.reload()"> <i class="bi bi-arrow-counterclockwise"></i> Reset</button>
              </div>
              <a href="/admin/products" class="btn btn-success mt-2"><i class="bi bi-arrow-left"></i> Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function formatRupiah(input) {
      let nominal = input.value.replace(/\D/g, '');
      if (nominal !== "") {
        input.value = parseInt(nominal, 10).toLocaleString('in-id');
        document.getElementById('price-hidden').value = nominal;
      }
    }

    function previewImages(input) {
      const files = input.files;
      const previewsContainer = document.getElementById('image-previews-container');

      previewsContainer.style.display = 'block';

      previewsContainer.innerHTML = '';

      if (files) {
        Array.from(files).forEach((file, index) => {
          if (!file.type.startsWith('image/')) return; 

          const reader = new FileReader();
          reader.onload = function (e) {
            const productItem = document.createElement('div');
            productItem.className = 'box-image';

            productItem.innerHTML = `<img src="${e.target.result}">`;

            previewsContainer.appendChild(productItem);
          };
          reader.readAsDataURL(file);
        });
      }
    }

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

    function previewLogo() {
      const logo = document.querySelector('#logo');
      const logoPreview = document.querySelector('.logo-preview');

      logoPreview.style.display = 'block';

      const OFReader = new FileReader();
      OFReader.readAsDataURL(logo.files[0]);

      OFReader.onload = function(oFREvent) {
        logoPreview.src = oFREvent.target.result;
      }
    }

  </script>

@endsection