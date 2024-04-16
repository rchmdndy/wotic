@extends('layouts.layout')

@section('content')
    <section class="container mt-3">
        <div class="row row-cols-md-4 row-cols-2 g-md-5 g-4 my-3">
            <div class="col">
                <a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}"
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasialam.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Alam</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasipetualangan.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Petualangan</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasibelanja.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Perbelanjaan</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasikuliner.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Kuliner</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasiindustri.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Industri</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasibudaya.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Budaya</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasipertanian.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Pertanian</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Perdesaan</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasireligi.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Religi</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasiindustrikecil.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Industri Kecil</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasiedukasi.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Edukasi</h1>
                </a>
            </div>
            <div class="col">
                <a href=""
                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-black">
                    <div class="destination-logo">
                        <img src="{{ asset('images/destinationlogos/logodestinasibuatan.png') }}" alt="">
                    </div>
                    <h1 class="destination-text mt-2">Wisata Buatan</h1>
                </a>
            </div>
        </div>
    </section>
@endsection
