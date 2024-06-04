@extends('layouts.custom_layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    <style>
        .card {
            transition: transform 0.3s ease, filter 0.3s ease;
            color: white;
            height: 100%;
            position: relative;
            overflow: hidden; /* Ensure overflow is hidden to prevent extending issues */
            text-align: center;
            opacity: 70%;
        }

        .card:hover {
            transform: scaleY(1.02);
            transform: scaleX(1.02);
            filter: brightness(1);
            opacity: 100%;
        }

        .row{
            border-radius: 25px;
            margin: 20px;
            padding: 20px;
            background-color: #F5F5F5;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }
        
        .card:hover .txt h2 {
            color: white;
            transform: scaleY(1.02);
            transform: scaleX(1.02);
            filter: brightness(1);
            opacity: 100%;
        }

        h1{
            text-size: 150%;
        }


    </style>
@endsection

@section('custom-content')
    <div class="container mt-5" >
        <h1 class="text-center mb-5">Kategori Wisata</h1>
        <div class="row align-items-center justify-content-center">

            <div class="col-md-5 col-md-5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-alam.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA ALAM</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md -5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-petualangan.jpeg') }}');">
                        <div class="txt">
                            <h2>WISATA PETUALANGAN</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-md-5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-perbelanjaan.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA PERBELANJAAN</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md -5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-kuliner.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA KULINER</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-md-5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-industri.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA INDUSTRI</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md -5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-budaya.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA BUDAYA</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-md-5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-pertanian.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA PERTANIAN</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md -5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-pedesaan.jpeg ') }}');">
                        <div class="txt">
                            <h2>WISATA PEDESAAN</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md-5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-religi.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA RELIGI</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md -5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-industri-kecil.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA INDUSTRI KECIL</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md-5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-edukasi.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA EDUKASI</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-md -5 column">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
                    <div class="card gr-1" style="background-image: linear-gradient(rgba(1, 228, 248, 0.5), rgba(29, 62, 222, 0.5)), url('{{ asset('/images/categories/wisata-buatan.jpg') }}');">
                        <div class="txt">
                            <h2>WISATA BUATAN</h2>
                        </div>
                    </div>
                </a>
            </div>




            <!-- Add more cards here -->
        
        </div>
    </div>
@endsection
