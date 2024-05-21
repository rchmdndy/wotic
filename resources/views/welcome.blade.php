@extends('layouts.layout')

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <div id="carouselExampleAutoplaying" class="carousel slide position-relative" data-bs-ride="carousel">
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
                    <img class="img-flex img-hero" src="{{ asset('images/wisata/wonosoboo.jpg') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-flex img-hero" src="{{ asset('images/wisata/balonudarafes.jpg') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-flex img-hero" src="{{ asset('images/events/dieng.jpg') }}" alt="...">
                </div>
            </div>
        </div>
        <div class="text-wrapper w-100 d-flex flex-column align-items-center">
            <h1 class="text-white text-center">SELAMAT DATANG DI WEBSITE</h1>
            <p class="text-white text-center">WONOSOBO TOURISM INFORMATION CENTER</p>
            <form class="d-flex w-25" role="search" method="get" action="{{route('destination.search')}}">
            <div class="form-floating flex-grow-1" id="search-container">
                <input type="text" class="form-control" name="search" id="search-input" placeholder="Cari Destinasi" aria-describedby="button-addon2" onfocus="removePlaceholder()">
                <label for="search-input" id="search-label">Cari Destinasi</label>
            </div>
            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="bi bi-search px-2"></i></button>
            </form>
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Informasi --}}
    <section class="information-wrapper">
        <div class="information w-100 d-flex flex-column align-items-center">
            <h1 class="information-title">
                Informasi apa yang anda cari ?
            </h1>
            <div class="d-flex gap-3 mt-3 justify-content-center w-100">
                <a href="{{ route('destination.categories') }}"
                   class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/destinasilogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Destinasi wisata
                    </p>
                </a>
                <a href="{{route('promo.index')}}" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
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
    {{-- End Informasi --}}
    {{-- Wisata Unik Start --}}
    <section class="wisata-wrapper">
        <div class="container">
            <h1 class="wisata-title text-center">Wisata Unik</h1>
            <div class="wisata d-none d-lg-flex">
                @foreach($attractiveDestinationList as $destination)
                    <a href="{{ route('attractive_destination.detail', ['id' => $destination['id']]) }}" class="text-decoration-none text-black w-75 h-75">
                        <div class="card rounded-5 shadow">
                            <div class="card-img-top h-100 rounded-top-5">
                                <img src="{{ $destination['image'][0] }}" alt="{{ $destination['nama_destinasi'] }}" class="rounded-top-5">
                            </div>
                            <div class="card-body d-flex flex-column gap-5">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title">{{ $destination['nama_destinasi'] }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Wisata Unik --}}
    {{-- Event Start --}}
    <section class="rekomendasi-wrapper">
        <div class="rekomendasi">
            <h1 class="text-center fw-normal rekomendasi-title mb-5">Kalender Event</h1>
            <div class="card rounded-4 w-75">
                <h5 class="card-header text-center bg-my-primary text-white">{{ $currentMonth }}</h5>
                <div class="card-body d-flex flex-column gap-3 px-4">
                    @if(empty($eventList))
                        <div class="d-flex align-items-center text-decoration-none text-black">
                            Tidak ada event bulan ini
                        </div>
                    @else
                        @foreach($eventList as $index => $event)
                            <a href="#" class="d-flex align-items-center text-decoration-none text-black">
                                <i class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                    <span class="position-absolute fs-6">{{ date('j', strtotime($event['tanggal_mulai'])) }}</span>
                                </i>
                                {{ $event['nama_event'] }}
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
                </div>
    </section>
    {{-- End Event --}}
    {{--Start Wisata Banner --}}
    <section class="wisata-wrapper mb-5">
        <div class="container">
            <h1 class="wisata-title text-center h1">Wisata Rekomendasi</h1>
            <div class="wisata d-none d-lg-flex">
                @foreach($bannerDestinationList as $bannerDestination)
                    <a href="{{ route('destination.detail', ['id' => $bannerDestination['id']]) }}" class="text-decoration-none text-black w-50 h-50">
                        <div class="card h-100 rounded-5 shadow">
                            <div class="card-img-top rounded-top-5">
                                <img src="{{ $bannerDestination['image'][0] }}" alt="{{ $bannerDestination['nama_destinasi'] }}" class="rounded-top-5">
                            </div>
                            <div class="card-body d-flex flex-column gap-5">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title">{{ $bannerDestination['nama_destinasi'] }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{--End Wisata Banner--}}

@endsection
