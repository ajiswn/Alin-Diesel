@extends('layout.admin')

@section('title','Edit Produk - '.$settings->name)
    
@section('main')

  <div class="pagetitle">
    <h1>Edit Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/admin/products">Produk</a></li>
        <li class="breadcrumb-item active">Edit Produk</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Formulir Edit Produk</h5>
  
            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
              @method('put')
              @csrf
              <div class="col-12">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $product->name }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12">
                <label for="logo" class="form-label">Logo</label>
                <img src="{{ asset($product->logo) }}" class="d-block mb-3 logo-preview img-fluid col-lg-6" alt="Logo">
                <input type="file" name="logo" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('logo') is-invalid @enderror" id="logo" onchange="previewLogo(this)">
                @error('logo') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12">
                <label class="col-form-label" for>Status</label>
                <select name="status" class="form-select @error('status') is-invalid @enderror">
                  <option selected hidden>-Pilih Status-</option>
                  <option value="Aktif" {{ $product->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                  <option value="Nonaktif" {{ $product->status == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12">
                <label class="col-form-label" for>Kategori</label>
                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                  <option selected hidden>-Pilih Kategori-</option>
                  @foreach ($categories as $item)
                    @if ($product->category_id == $item->id)
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
              <div class="col-lg-12 mt-3">
                <label for="description" class="form-label">Deskripsi</label>
                @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                <input id="description" type="hidden" name="description" value="{{ $product->description }}">
                <trix-editor input="description"></trix-editor>
              </div>
              <div class="col-12 mt-3">
                <label for="images" class="form-label">Gambar</label>
                <div class="image-previews-container" id="image-previews-container"></div>
                @if(session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                <div class="image-previews-container d-block">
                    @foreach ($product_images as $data)
                        <div class="box-image position-relative">
                          <img src="{{ asset($data->image_path) }}" class="border border-black rounded" alt="Product Image">
                          <a href="{{ url('admin/product-images/'.$data->id) }}" class="btn btn-sm btn-danger position-absolute bottom-0 end-0 m-2"><i class="bi bi-trash"></i></a>
                        </div>
                    @endforeach
                </div>
                <input type="file" name="images[]" multiple accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('images') is-invalid @enderror" id="images" onchange="previewImages(this)">
                @error('images') <div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.reload()"> <i class="bi bi-arrow-counterclockwise"></i> Reset</button>
              </div>
              <a href="{{ url()->previous() }}" class="btn btn-success mt-2"><i class="bi bi-arrow-left"></i> Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>

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
            productItem.className = 'box-image border border-black rounded';

            productItem.innerHTML = `<img src="${e.target.result}">`;

            previewsContainer.appendChild(productItem);
          };
          reader.readAsDataURL(file);
        });
      }
    }

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