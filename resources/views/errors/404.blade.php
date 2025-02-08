@extends('component.admin_layout')

@section('title','Halaman Tidak Ditemukan 404 - Alin Diesel')
    
@section('main')
<div class="container">

    <section class="section error min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h1>404</h1>
      <h2>Ups! Halaman yang Anda cari tidak ditemukan.</h2>
      <p>Halaman ini mungkin telah dihapus, atau URL yang Anda masukkan salah.</p>
      <a class="btn" href="{{ url()->previous() }}">Kembali</a>
      <img src="{{ asset ('assets/img/errors/404.svg') }}" class="img-fluid py-5" alt="Halaman Tidak Ditemukan">
      <div class="credits">
        <strong>Alin Diesel</strong>
      </div>
    </section>

</div>
@endsection