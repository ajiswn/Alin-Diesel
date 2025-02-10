@extends('layout.error')

@section('title', 'Akses Ditolak 403 - '.$settings->name)

@section('main')
<div class="container">
    <section class="section error min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>403</h1>
        <h2>Anda tidak memiliki akses ke halaman ini.</h2>
        <a class="btn" href="{{ url()->previous() }}">Kembali</a>
        <img src="{{ asset('assets/img/errors/403.svg') }}" class="img-fluid py-5" alt="Akses Ditolak" style="max-height: 420px">
        <div class="credits">
            <strong>{{ $settings->name }}</strong>
        </div>
    </section>
</div>
@endsection