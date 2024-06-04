@extends('layouts.custom_layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    <!-- Tambahkan link stylesheet untuk Bootstrap jika belum termasuk -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1 {
            font-size: 200%;
            margin-bottom: 20px;
        }

        .card {
            height: 100%;
            position: relative;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease;
            text-decoration: none;
            color: inherit;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-body {
            position: relative;
            padding-bottom: 40px; /* space for the button */
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-title::after {
            content: '';
            display: block;
            width: 50px;
            margin: 10px auto;
            border-bottom: 2px solid #000;
        }

        .card-img-top {
            height: 200px; /* fixed height for images */
            object-fit: cover;
        }

        .card-hover-content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .card-hover-content {
            opacity: 1;
        }
    </style>
@endsection

@section('custom-content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">KATEGORI WISATA</h1>
        <div class="row align-items-center justify-content-center">
            @php
                $categories = [
                    ['jenis_wisata' => 'alam', 'image' => 'wisata-alam.jpg', 'title' => 'WISATA ALAM'],
                    ['jenis_wisata' => 'petualangan', 'image' => 'wisata-petualangan.jpeg', 'title' => 'WISATA PETUALANGAN'],
                    ['jenis_wisata' => 'perbelanjaan', 'image' => 'wisata-perbelanjaan.jpg', 'title' => 'WISATA PERBELANJAAN'],
                    ['jenis_wisata' => 'kuliner', 'image' => 'wisata-kuliner.jpg', 'title' => 'WISATA KULINER'],
                    ['jenis_wisata' => 'industri', 'image' => 'wisata-industri.jpg', 'title' => 'WISATA INDUSTRI'],
                    ['jenis_wisata' => 'budaya', 'image' => 'wisata-budaya.jpg', 'title' => 'WISATA BUDAYA'],
                    ['jenis_wisata' => 'pertanian', 'image' => 'wisata-pertanian.jpg', 'title' => 'WISATA PERTANIAN'],
                    ['jenis_wisata' => 'pedesaan', 'image' => 'wisata-pedesaan.jpeg', 'title' => 'WISATA PEDESAAN'],
                    ['jenis_wisata' => 'religi', 'image' => 'wisata-religi.jpg', 'title' => 'WISATA RELIGI'],
                    ['jenis_wisata' => 'industri_kecil', 'image' => 'wisata-industri-kecil.jpg', 'title' => 'WISATA INDUSTRI KECIL'],
                    ['jenis_wisata' => 'edukasi', 'image' => 'wisata-edukasi.jpg', 'title' => 'WISATA EDUKASI'],
                    ['jenis_wisata' => 'buatan', 'image' => 'wisata-buatan.jpg', 'title' => 'WISATA BUATAN']
                ];
            @endphp

            @foreach($categories as $category)
                <div class="col-md-5 col-sm-6 mb-4">
                    <a href="{{ route('destination.fetch', ['jenis_wisata' => $category['jenis_wisata']]) }}" class="card">
                        <img src="{{ asset('/images/categories/' . $category['image']) }}" class="card-img-top" alt="{{ $category['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['title'] }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
