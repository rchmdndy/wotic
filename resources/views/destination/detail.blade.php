@extends('layouts.layout')

@section('content')
    <section class="mt-3 container">
        <div id="destinationDetail" class="row row-cols-md-2 row-cols-1 g-3 mt-3 align-items-center">
            @if(count($destinationDetail['image']) > 1)
                <!-- Carousel -->
                <div class="col">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($destinationDetail['image'] as $index => $image)
                                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                                    <img src="{{ $image }}" class="d-block w-100" alt="Image">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            @else
                <!-- Single Image -->
                <div class="col">
                    <img src="{{ $destinationDetail['image'][0] }}" alt="Image" class="img-fluid rounded-4">
                </div>
            @endif
            <!-- Destination Details -->
            <div class="col">
                <h1>{{ $destinationDetail['destinasi']['nama_destinasi'] }}</h1>
{{--                {{ $x = $destinationDetail['destinasi']['koordinat_x'] }}--}}
{{--                {{ $y = $destinationDetail['destinasi']['koordinat_y'] }}--}}
                <div class="d-flex align-items-center gap-3 mb-2">
                    <i class="bi bi-map"></i>
                    <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['alamat'] }}</h6>
                </div>
                <div class="d-flex align-items-center gap-3 mb-2">
                    <i class="bi bi-cash fs-6"></i>
                    <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['tiket_weekend_local'] ? 'IDR ' . number_format($destinationDetail['destinasi']['tiket_weekend_local'], 0, ',', '.') : '' }}</h6>
                </div>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <i class="bi bi-geo-alt fs-6"></i>
                    <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['jenis_wisata'] }}</h6>
                </div>
                <p style="text-align: justify">{{ $destinationDetail['destinasi']['deskripsi'] }}</p>
                <button type="button" class="btn btn-success px-3 py-2 btn-sm rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Pesan Sekarang
                </button>
                <div id="map" class="d-flex gap-3 mt-4"></div>

            </div>
        </div>
        <div class="mt-5">
            <h2 class="text-center">Hotel List</h2>
            <div class="overflow-auto">
                <div class="row flex-nowrap">
                    @foreach($hotelList as $hotel)
                        <div class="col">
                            @if($hotel['is_important'] == 'yes')
                                <div class="card mb-4 card-important rounded-3" style="width: 18rem; height: 25rem;">
                                    <img src="{{ $hotel['image'] }}" class="card-img-top img-fluid" alt="Hotel Image" style="width: auto; height: 250px">
                                    <div class="card-body" style="margin-left: 10px; margin-right: 10px;">
                                        <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                                        <p class="card-subtitle mb-2 text-body-secondary">{{ $hotel['kelas'] }}</p>
                                        <span class="badge text-bg-warning mb-3">Rekomendasi 📍</span>
                                        <p class="card-text mb-3">📌 {{$hotel['distance_to_destination']}} KM</p>
                                        {{--                                    <p class="card-text">{{ $hotel['alamat'] }}</p>--}}
                                        <!-- Add other hotel details as needed -->
                                    </div>
                                </div>
                            @else
                                <div class="card mb-4" style="width: 18rem; height: 25rem;">
                                    <img src="{{ $hotel['image'] }}" class="card-img-top img-fluid" alt="Hotel Image" style="width: auto; height: 250px">
                                    <div class="card-body" style="margin-left: 10px; margin-right: 10px;">
                                        <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                                        <p class="card-subtitle mb-2 text-body-secondary">{{ $hotel['kelas'] }}</p>
                                        <p class="card-text">📌 {{$hotel['distance_to_destination']}} KM</p>
{{--                                        <p class="card-text">{{ $hotel['alamat'] }}</p>--}}
                                        <!-- Add other hotel details as needed -->
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Pesan --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan disini</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row row-cols-4 g-4 justify-content-center align-items-center">
                        <div class="col">
                            <a href="https://www.traveloka.com/en-id" class="d-flex justify-content-center">
                                <img src="{{ asset('images/logos/logotraveloka.png') }}" alt="" class="img-fluid rounded-4">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.tiket.com/" class="d-flex justify-content-center">
                                <img src="{{ asset('images/logos/logotiketcom.png') }}" alt="" class="img-fluid rounded-4">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://booking.kai.id/" class="d-flex justify-content-center">
                                <img src="{{ asset('images/logos/logoaccesskai.png') }}" alt="" class="img-fluid rounded-4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            const position = {lat: {{$destinationDetail['destinasi']['koordinat_x']}}, lng: {{$destinationDetail['destinasi']['koordinat_y']}}}
            var map;

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: position,
                    zoom: 18
                });
                const marker = new google.maps.Marker({
                    map: map,
                    position: position,
                    title: '{{$destinationDetail['destinasi']['nama_destinasi']}}'
                });
            }
        </script>
        <script src="/js/map.js"
                async defer></script>

@endsection
