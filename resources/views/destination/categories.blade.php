@extends('layouts.custom_layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    <!-- Tambahkan link stylesheet untuk Bootstrap jika belum termasuk -->
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
    <style>

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
