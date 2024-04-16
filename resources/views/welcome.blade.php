@extends('layouts.layout')

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <video autoplay muted loop class="video-hero">
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <div class="d-flex flex-column align-items-center justify-content-center gap-[20px]">
            <h1 class="title-hero">
                Let's Explore Wonosobo
            </h1>
            <p class="subtitle-hero">
                Pesan dan jelajahi destinasi baru dengan mudah dari mana saja
            </p>
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
                <a href="{{route('destination.category')}}"
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
                <div class="container mt-4">
                    <div class="card p-2 rounded-6" onclick="window.location.href='/event'" style="background-color: #EDEDFF;">
                        <h3 class="fw-medium mb-0 text-center" style="font-size: 1.25rem; color: black; padding: 1rem">Event</h3>
                        <div class="d-flex flex-column align-items-center gap-1">
                            @foreach ($events as $event)
                                <div class="card mb-3 card-event" onclick="window.location.href='/event/{{ $event->id }}/detail'" style="max-width: 50rem; background-color: #d2d0d07b;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid"
                                                alt="{{ $event->nama_event }}" style="max-width: 100%; height: auto;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-size: 1rem;">{{ $event->nama_event }}
                                                </h5>
                                                <p class="card-text"><small class="text-body-secondary">
                                                        {{ $event->tanggal_mulai }} -
                                                        {{ $event->tanggal_selesai }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- End Rekomendasi --}}
@endsection
