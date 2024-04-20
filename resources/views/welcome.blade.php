@extends('layouts.layout')

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="...">
                    <div class="carousel-caption">
                        <h1>Wisata Alam</h1>
                        <p>Kami menyediakan berbagai destinasi wisata yang menarik</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/wisata/kulinerwonogiri.jpeg') }}" alt="...">
                    <div class="carousel-caption">
                        <h1>Wisata Kuliner</h1>
                        <p>Kami menyediakan berbagai destinasi tempat kuliner yang menarik</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/events/event1.jpeg') }}" alt="...">
                    <div class="carousel-caption">
                        <h1>Event</h1>
                        <p>Kami memberikan informasi tentang event yang menarik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}
    {{-- Search --}}
    <section class="search-wrapper">
        <div class="search bg-white shadow mx-auto p-2 rounded-5">
            <div class="d-flex align-items-center gap-1 bg-my-primary py-1 px-3 rounded-4">
                <button class="button-search">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" class="input-search" placeholder="Cari Destinasi" />
            </div>
        </div>
    </section>
    {{-- End Search --}}
    {{-- Informasi --}}
    <section class="information-wrapper">
        <div class="information w-100 d-flex flex-column align-items-center">
            <h1 class="information-title">
                Informasi apa yang anda cari ?
            </h1>
            <div class="d-flex gap-3 mt-3">
                <a href="{{ route('destination.category') }}"
                    class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/destinasilogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Destinasi wisata
                    </p>
                </a>
                <a href="#" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/promologo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Promo wisata
                    </p>
                </a>
                <a href="#" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/umkmlogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        UMKM wisata
                    </p>
                </a>
                <a href="#" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/lainnyalogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Lainnya
                    </p>
                </a>
            </div>
        </div>
    </section>
    {{-- End Infromasi --}}
    {{-- Wisata Unik --}}
    <section class="wisata-wrapper">
        <div class="w-100 d-flex flex-column align-items-center wisata">
            <h1 class="wisata-title">Wisata Unik</h1>
            <div class="wisata-wrapper-box">
                <div class="wisata-box">
                    <a href="#" class="box"
                        style="background-image: url('{{ asset('images/wisata/candiborobudur.webp') }}')">
                        <p class="box-text bg-black bg-opacity-50">
                            Candi Borobudur
                        </p>
                    </a>
                    <a href="#" class="box"
                        style="background-image: url('{{ asset('images/wisata/telagawarna.jpeg') }}')">
                        <p class="box-text bg-black bg-opacity-50">
                            Telaga Warna
                        </p>
                    </a>
                    <a href="#" class="box"
                        style="background-image: url('{{ asset('images/wisata/bukitsikunir.webp') }}')">
                        <p class="box-text bg-black bg-opacity-50">
                            Bukit Sikunir
                        </p>
                    </a>
                    <a href="#" class="box"
                        style="background-image: url('{{ asset('images/wisata/kebunteh.webp') }}')">
                        <p class="box-text bg-black bg-opacity-50">
                            Kebun Teh
                        </p>
                    </a>
                    <a href="#" class="box"
                        style="background-image: url('{{ asset('images/wisata/bukitcinta.webp') }}')">
                        <p class="box-text bg-black bg-opacity-50">
                            Bukit Cinta
                        </p>
                    </a>
                    <a href="#" class="box"
                        style="background-image: url('{{ asset('images/wisata/gunungprau.webp') }}')">
                        <p class="box-text bg-black bg-opacity-50">
                            Gunung Prau
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Wisata Unik --}}
    {{-- Rekomendasi --}}
    <section class="rekomendasi-wrapper">
        <div class="rekomendasi">
            <h1 class="rekomendasi-title">
                Rekomendasi Wisata & Event
            </h1>
            <div class="d-flex flex-md-row flex-column justify-content-between w-100 mt-3 gap-3">
                <div class="d-flex flex-column gap-3 p-2 w-100 w-md-50">
                    <h1 class="text-center fw-normal rekomendasi-title">Wisata</h1>
                    <div class="w-100 d-flex flex-wrap gap-2 justify-content-center">
                        <a href="#" class="box"
                            style="background-image: url('{{ asset('images/wisata/candiborobudur.webp') }}')">
                            <p class="box-text bg-black bg-opacity-50">
                                Candi Borobudur
                            </p>
                        </a>
                        <a href="#" class="box"
                            style="background-image: url('{{ asset('images/wisata/telagawarna.jpeg') }}')">
                            <p class="box-text bg-black bg-opacity-50">
                                Telaga Warna
                            </p>
                        </a>
                        <a href="#" class="box"
                            style="background-image: url('{{ asset('images/wisata/bukitsikunir.webp') }}')">
                            <p class="box-text bg-black bg-opacity-50">
                                Bukit Sikunir
                            </p>
                        </a>
                        <a href="#" class="box"
                            style="background-image: url('{{ asset('images/wisata/kebunteh.webp') }}')">
                            <p class="box-text bg-black bg-opacity-50">
                                Kebun Teh
                            </p>
                        </a>
                        <a href="#" class="box"
                            style="background-image: url('{{ asset('images/wisata/bukitcinta.webp') }}')">
                            <p class="box-text bg-black bg-opacity-50">
                                Bukit Cinta
                            </p>
                        </a>
                        <a href="#" class="box" style="background-color: #F2F2F2">
                            <p class="box-text bg-black bg-opacity-50">
                                Lainnya
                            </p>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column gap-3 p-2 w-100 w-md-50">
                    <h1 class="text-center fw-normal rekomendasi-title">Kalender Event</h1>
                    <div id="carouselCalender" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner h-100">
                            <div class="carousel-item active h-100">
                                <div class="card h-100 rounded-4">
                                    <h5 class="card-header text-center bg-my-primary text-white">January</h5>
                                    <div class="card-body d-flex flex-column gap-3 px-5">
                                        <a href=""
                                            class="d-flex align-items-center text-decoration-none text-black">
                                            <i
                                                class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">5</span>
                                            </i>
                                            Grebeg Sudiro Tahun
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item  h-100">
                                <div class="card h-100 rounded-4">
                                    <h5 class="card-header text-center bg-my-primary text-white">February</h5>
                                    <div class="card-body d-flex flex-column gap-3 px-5">
                                        <a href=""
                                            class="d-flex align-items-center text-decoration-none text-black">
                                            <i
                                                class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">10</span>
                                            </i>
                                            Cap Go Meh Singkawang
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item  h-100">
                                <div class="card h-100 rounded-4">
                                    <h5 class="card-header text-center bg-my-primary text-white">March</h5>
                                    <div class="card-body d-flex flex-column gap-3 px-5">
                                        <a href=""
                                            class="d-flex align-items-center text-decoration-none text-black">
                                            <i
                                                class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">10</span>
                                            </i>
                                            Sabang Marine Festival
                                        </a>
                                        <a href=""
                                            class="d-flex align-items-center text-decoration-none text-black">
                                            <i
                                                class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">17</span>
                                            </i>
                                            Batam WonderFood Festival
                                        </a>
                                        <a href=""
                                            class="d-flex align-items-center text-decoration-none text-black">
                                            <i
                                                class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">20</span>
                                            </i>
                                            Festival Arakan Sahur
                                        </a>
                                        <a href=""
                                            class="d-flex align-items-center text-decoration-none text-black">
                                            <i
                                                class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">30</span>
                                            </i>
                                            Pesta Adat Dan Budaya Lom Plai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCalender"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCalender"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- End Rekomendasi --}}
@endsection
