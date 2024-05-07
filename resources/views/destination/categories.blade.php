@extends('layouts.custom_layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
@endsection

@section('custom-content')
    <div class="container h-100 g-4">
        <h2 class="h1 text-center">Kategori Wisata</h2>
        <div class="row align-middle g-5">

            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-alam.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                ALAM</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-petualangan.jpeg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                PETUALANGAN</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'perbelanjaan']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-perbelanjaan.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                PERBELANJAAN</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'kuliner']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-kuliner.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                KULINER</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'industri']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-industri.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                INDUSTRI</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'budaya']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-budaya.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                BUDAYA</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'pertanian']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-pertanian.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                PERTANIAN</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'perdesaan']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-pedesaan.jpeg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                PEDESAAN</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'religi']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-religi.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                RELIGI</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'industri kecil']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-industri-kecil.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                INDUSTRI KECIL</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'edukasi']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-edukasi.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                EDUKASI</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href='{{ route('destination.fetch', ['jenis_wisata' => 'buatan']) }}'>
                    <div class="card gr-1" style="
                    background-image:
                    linear-gradient(rgba(1, 228, 248, 0.5),
                    rgba(29, 62, 222, 0.5)),
                    url('{{asset('/images/categories/wisata-buatan.jpg')}}')">
                        <div class="txt">
                            <h2>WISATA </br>
                                BUATAN</h2>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection
