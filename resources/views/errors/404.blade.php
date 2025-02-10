@extends('layout.error')

@section('title','Halaman Tidak Ditemukan 404 - '.$settings->name)
    
@section('main')
<div class="container">

    <section class="section error min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h1>404</h1>
      <h2>Ups! Halaman yang Anda cari tidak ditemukan.</h2>
      <p>Halaman ini mungkin telah dihapus, atau URL yang Anda masukkan salah.</p>
      <a class="btn" href="{{ url()->previous() }}">Kembali</a>
      <img src="{{ asset ('assets/img/errors/404.svg') }}" class="img-fluid" alt="Halaman Tidak Ditemukan" style="max-height: 420px">
      <div class="credits">
        <strong>{{ $settings->name }}</strong>
      </div>
    </section>

</div>
@endsection