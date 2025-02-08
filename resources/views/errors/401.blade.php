@extends('component.admin_layout')

@section('title', 'Akses Tidak Diizinkan 401 - Alin Diesel')

@section('main')
<div class="container">
    <section class="section error min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>401</h1>
        <h2>Anda belum masuk atau tidak memiliki izin untuk mengakses halaman ini.</h2>
        <a class="btn" href="{{ url()->previous() }}">Kembali</a>
        <img src="{{ asset('assets/img/errors/401.svg') }}" class="img-fluid py-5" alt="Akses Tidak Diizinkan">
        <div class="credits">
            <strong>Alin Diesel</strong>
        </div>
    </section>
</div>
@endsection
