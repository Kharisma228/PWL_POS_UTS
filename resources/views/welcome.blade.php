@extends('layouts.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">WELCOME TOSERBA ETANA</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <p>Selamat datang semua di Toko Serba Ada Etana, ini adalah halaman utama dari aplikasi ini.</p>
        <div style="display: flex; justify-content: center;">
        <img src="{{ asset('images/dashboard.jpg') }}" alt="Selamat Datang" style="max-width: 100%; height: auto;">
    </div>
</div>

@endsection