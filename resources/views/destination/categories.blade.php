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
        <h1 class="display-6 text-center my-5">Kategori Wisata</h1>
        <div class="row align-items-center justify-content-center">
            @php
                $categories = [
                    ['jenis_wisata' => 'alam', 'image' => 'wisata-alam.jpg', 'title' => 'WISATA ALAM'],
                    ['jenis_wisata' => 'minat khusus', 'image' => 'wisata-petualangan.jpeg', 'title' => 'WISATA MINAT KHUSUS'],
                    ['jenis_wisata' => 'budaya', 'image' => 'wisata-budaya.jpg', 'title' => 'WISATA BUDAYA'],
                    ['jenis_wisata' => 'desa wisata', 'image' => 'wisata-pedesaan.jpeg', 'title' => 'DESA WISATA'],
                    ['jenis_wisata' => 'religi', 'image' => 'wisata-religi.jpg', 'title' => 'WISATA RELIGI'],
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
