@extends('layout.admin')

@section('title','Setelan - '.$settings->name )
    
@section('main')

  <div class="pagetitle">
    <h1>Setelan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Setelan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pt-3">

            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
  
            <!-- Setting Form -->
            <form action="/admin/settings" method="POST" enctype="multipart/form-data">
              @csrf @method('put')

              <div class="row mb-3">
                <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Situs Web</label>
                <div class="col-md-8 col-lg-9">
                  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $setting->name }}">
                  @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="slogan" class="col-md-4 col-lg-3 col-form-label">Slogan</label>
                <div class="col-md-8 col-lg-9">
                  <input name="slogan" type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan" value="{{ $setting->slogan }}">
                  @error('slogan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="description" class="col-md-4 col-lg-3 col-form-label">Deskripsi Situs Web</label>
                <div class="col-md-8 col-lg-9">
                  <textarea name="description" class="form-control @error('description') is-invalid @enderror" style="height: 100px">{{ $setting->description }}</textarea>
                  @error('description') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="keywords" class="col-md-4 col-lg-3 col-form-label">Kata Kunci Situs Web</label>
                <div class="col-md-8 col-lg-9">
                  <textarea name="keywords" class="form-control @error('keywords') is-invalid @enderror" style="height: 100px">{{ $setting->keywords }}</textarea>
                  @error('keywords') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="owner" class="col-md-4 col-lg-3 col-form-label">Nama Owner</label>
                <div class="col-md-8 col-lg-9">
                  <input name="owner" type="text" class="form-control @error('owner') is-invalid @enderror" id="owner" value="{{ $setting->owner }}">
                  @error('owner') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                <div class="col-md-8 col-lg-9">
                  <textarea name="address" class="form-control @error('address') is-invalid @enderror" style="height: 100px">{{ $setting->address }}</textarea>
                  @error('address') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                <div class="col-md-8 col-lg-9">
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $setting->email }}">
                  @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="instagram" class="col-md-4 col-lg-3 col-form-label">Instagram</label>
                <div class="col-md-8 col-lg-9">
                  <input name="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" value="{{ $setting->instagram }}">
                  @error('instagram') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="owner_instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Owner</label>
                <div class="col-md-8 col-lg-9">
                  <input name="owner_instagram" type="text" class="form-control @error('owner_instagram') is-invalid @enderror" id="owner_instagram" value="{{ $setting->owner_instagram }}">
                  @error('owner_instagram') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="whatsapp" class="col-md-4 col-lg-3 col-form-label">Whatsapp</label>
                <div class="col-md-8 col-lg-9">
                  <input name="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" value="{{ $setting->whatsapp }}">
                  @error('whatsapp') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pt-3">

              <div class="row mb-3">
                <label for="gmaps" class="col-md-4 col-lg-3 col-form-label">Link Google Maps</label>
                <div class="col-md-8 col-lg-9">
                  <textarea name="gmaps" class="form-control @error('gmaps') is-invalid @enderror" style="height: 100px">{{ $setting->gmaps }}</textarea>
                  @error('gmaps') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="owner_image" class="col-md-4 col-lg-3 col-form-label">Foto Owner</label>
                <div class="col-md-8 col-lg-9">
                  <img src="{{ asset($setting->owner_image) }}" class="rounded old-logo" alt="Logo" height="100">
                  <div class="preview-logo d-inline ml-3 d-none"> <i class="bi bi-arrow-right-circle"></i> </div>
                  <div class="pt-2">
                      <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('owner_image') is-invalid @enderror" name="owner_image" onchange="previewLogo(this)">
                      @error('owner_image') <div class="invalid-feedback">{{ $message }}</div>@enderror 
                  </div>
                </div>
              </div>  
              <div class="row mb-3">
                <label for="logo_image" class="col-md-4 col-lg-3 col-form-label">Logo</label>
                <div class="col-md-8 col-lg-9">
                  <img src="{{ asset($setting->logo_image) }}" class="rounded old-logo" alt="Logo" height="100">
                  <div class="preview-logo d-inline ml-3 d-none"> <i class="bi bi-arrow-right-circle"></i> </div>
                  <div class="pt-2">
                      <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('logo_image') is-invalid @enderror" name="logo_image" onchange="previewLogo(this)">
                      @error('logo_image') <div class="invalid-feedback">{{ $message }}</div>@enderror 
                  </div>
                </div>
              </div>  
              <div class="row mb-3">
                <label for="hero_image" class="col-md-4 col-lg-3 col-form-label">Hero</label>
                <div class="col-md-8 col-lg-9">
                  <img src="{{ asset($setting->hero_image) }}" class="rounded old-logo" alt="Logo" height="100">
                  <div class="preview-logo d-inline ml-3 d-none"> <i class="bi bi-arrow-right-circle"></i> </div>
                  <div class="pt-2">
                      <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('hero_image') is-invalid @enderror" name="hero_image" onchange="previewLogo(this)">
                      @error('hero_image') <div class="invalid-feedback">{{ $message }}</div>@enderror 
                  </div>
                </div>
              </div>  
              <div class="row mb-3">
                <label for="about_image" class="col-md-4 col-lg-3 col-form-label">Tentang Kami</label>
                <div class="col-md-8 col-lg-9">
                  <img src="{{ asset($setting->about_image) }}" class="rounded old-logo" alt="Logo" height="100">
                  <div class="preview-logo d-inline ml-3 d-none"> <i class="bi bi-arrow-right-circle"></i> </div>
                  <div class="pt-2">
                      <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('about_image') is-invalid @enderror" name="about_image" onchange="previewLogo(this)">
                      @error('about_image') <div class="invalid-feedback">{{ $message }}</div>@enderror 
                  </div>
                </div>
              </div>  

              <div class="text-end">
                <button type="button" class="btn btn-secondary" onclick="window.location.reload()"> <i class="bi bi-arrow-counterclockwise"></i> Reset</button>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Perbarui</button>
              </div>
            </form><!-- End Setting Form -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>

  function previewLogo(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader();
      
      reader.onload = function(e) {
        let parentContainer = input.closest('.row');
        let previewContainer = parentContainer.querySelector('.preview-logo');
        let existingPreview = previewContainer.querySelector('img');
        
        if (existingPreview) {
            existingPreview.src = e.target.result;
        } else {
          let newImg = document.createElement('img');
          newImg.src = e.target.result;
          newImg.classList.add('rounded', 'ml-2');
          newImg.style.height = '100px';
          
          previewContainer.appendChild(newImg);
        }
        
        previewContainer.classList.remove('d-none');
      };
      
      reader.readAsDataURL(input.files[0]);
    }
  }

  </script>

@endsection