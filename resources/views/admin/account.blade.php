@extends('layout.admin')

@section('title','Setelan Akun- '.$settings->name)
    
@section('main')

  <div class="pagetitle">
    <h1>Setelan Akun</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Setelan Akun</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Profil Akun</h5>

            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
  
            <!-- Akun Form -->
            <form action="/admin/account-settings/" method="POST" enctype="multipart/form-data">
              @csrf @method('put')

              <div class="row mb-3">
                <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                <div class="col-md-8 col-lg-9">
                  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $account->name }}">
                  @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                <div class="col-md-8 col-lg-9">
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $account->email }}">
                  @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="photo" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                <div class="col-md-8 col-lg-9">
                  <img src="{{ asset($account->photo) }}" class="rounded old-logo" alt="Logo" height="100">
                  <div class="preview-logo d-inline ml-3 d-none"> <i class="bi bi-arrow-right-circle"></i> </div>
                  <div class="pt-2">
                      <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" class="form-control @error('photo') is-invalid @enderror" name="photo" onchange="previewLogo(this)">
                      @error('photo') <div class="invalid-feedback">{{ $message }}</div>@enderror 
                  </div>
                </div>
              </div> 
              <div class="text-end">
                <button type="button" class="btn btn-secondary" onclick="window.location.reload()"> <i class="bi bi-arrow-counterclockwise"></i> Reset</button>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Perbarui</button>
              </div>
            </form>  
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ganti Password</h5>

            @if(session()->has('success-update-password'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success-update-password') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
  
            <!-- Change Password Form -->
            <form action="/admin/account-settings/update-password" method="POST">
              @csrf @method('put')

              <div class="row mb-3">
                <label for="current_password" class="col-md-5 col-lg-4 col-form-label">Password Saat Ini</label>
                <div class="col-md-7 col-lg-8">
                  <input name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password">
                  @error('current_password') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="new_password" class="col-md-5 col-lg-4 col-form-label">Password Baru</label>
                <div class="col-md-7 col-lg-8">
                  <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password">
                  @error('new_password') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="new_password_confirmation" class="col-md-5 col-lg-4 col-form-label">Konfirmasi Password Baru</label>
                <div class="col-md-7 col-lg-8">
                  <input name="new_password_confirmation" type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="new_password_confirmation">
                  @error('new_password_confirmation') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Ganti Password</button>
              </div>
            </form>  
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