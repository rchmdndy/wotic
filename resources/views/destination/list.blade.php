@extends('layouts.layout')

@section('content')
    <section class="container mt-3">
        <h1 class="text-center fs-4 mt-3">List Wisata</h1>
        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4" id="destinationList">
            @foreach($destinationList as $destinasi)
                <div class="col destination-card">
                    <a href="{{route('destination.detail', ['id' => $destinasi['id']])}}" class="text-decoration-none">
                        <div class="card h-100 w-100 card-list-wisata rounded-4 card-bg shadow p-3 mb-2">
                            <div class="card-body">
                                <div class="row row-cols-md-2 row-cols-1 g-1">
                                    <div class="col">
                                        <img src="{{ $destinasi['image'] }}" alt="Image" class="img-fluid rounded-4" style="margin-bottom: 15px;">
                                    </div>
                                    <div class="col" style="padding-left: 20px;">
                                        <h4 class="card-title mb-3">{{ $destinasi['nama_destinasi'] }}</h4>
                                        <div class="d-flex flex-column gap-1">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-map"></i>
                                                <h6 class="card-subtitle text-body-secondary">{{ $destinasi['alamat'] }}</h6>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-cash fs-6"></i>
                                                <h6 class="card-subtitle text-body-secondary">{{ $destinasi['tiket_weekend_local'] ? 'IDR ' . number_format($destinasi['tiket_weekend_local'], 0, ',', '.') : '' }}</h6>
                                            </div>
                                            <h5>Jarak</h5>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-geo-alt fs-6"></i>
                                                <h6 class="card-subtitle text-body-secondary">20 km</h6>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-geo-alt fs-6"></i>
                                                <h6 class="card-subtitle text-body-secondary">20 km</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel -->
                            <div class="mt-5">
                                <h2 class="text-center">Hotel List</h2>
                                <div class="overflow-auto">
                                    <div class="row flex-nowrap">
                                            <div class="col">
                                                    <div class="card mb-4" style="width: 18rem; height: 25rem;">
                                                        <img src="{{ asset('storage/default.jpg') }}" class="card-img-top img-fluid" alt="Hotel Image" style="width: auto; height: 250px">
                                                        <div class="card-body" style="margin-left: 10px; margin-right: 10px;">
                                                            <h5 class="card-title">Aston</h5>
                                                            <p class="card-subtitle mb-2 text-body-secondary">bintang 4</p>
                                                            <p class="card-text">📌 20 KM</p>
                                                            {{--                                        <p class="card-text">{{ $hotel['alamat'] }}</p>--}}
                                                            <!-- Add other hotel details as needed -->
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Carousel -->
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
    </script>
@endsection
