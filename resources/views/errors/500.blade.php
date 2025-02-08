@extends('component.admin_layout')

@section('title', 'Kesalahan Server 500 - Alin Diesel')

@section('main')
<div class="container">
    <section class="section error min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>500</h1>
        <h2>Terjadi kesalahan pada server kami.</h2>
        <a class="btn" href="{{ url()->previous() }}">Kembali</a>
        <img src="{{ asset('assets/img/errors/500.svg') }}" class="img-fluid py-5" alt="Kesalahan Server">
        <div class="credits">
            <strong>Alin Diesel</strong>
        </div>
    </section>
</div>
@endsection
