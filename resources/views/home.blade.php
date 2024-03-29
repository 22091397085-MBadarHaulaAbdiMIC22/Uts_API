@extends('layouts.master')

@section('container')
    <style>
        .container {
            margin-top: 30px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            color: #2a9e09;
        }
        p {
            font-size: 18px;
            color: #373430;
        }

        
    </style>

    <div class="container">
        <h1>Selamat datang di aplikasi CRUD Laravel 11!</h1>
        <p>Di sini Anda dapat mengelola data kontak, pengguna, dan alamat.</p>
        <p>Aplikasi ini dikembangkan sebagai proyek menggunakan JSON.</p>
        <p>Jelajahi fitur-fitur aplikasi kami dan nikmati pengalaman mengelola data yang mudah dan efisien.</p>

        <img src="{{ asset('public/api.png') }}" alt="Logo Aplikasi" class="img-fluid">
    </div>
@endsection
