@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">List Hotel</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4" id="hotelList">
            <!-- Hotel items will be appended here -->
            @foreach($hotelList as $index => $hotel)
                <div class="card mb-3 card-hotel">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $hotel['image'] }}" class="img-fluid" alt="{{ $hotel['nama_hotel'] }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                                    <p class="card-text"><small class="text-body-secondary">Kelas: {{ $hotel['kelas'] }}</small></p>
                                </div>
                                <p class="card-text">Alamat: {{ $hotel['alamat'] }}</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal"
                                        data-lat="{{ (float) $hotel['koordinat'] }}" data-lng="{{ (float) $hotel['koordinat_y'] }}">
                                    Lihat Lokasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
                <!-- Map Modal -->
                <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="mapModalLabel">Peta</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="map" class="d-flex gap-3 mt-4"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="getDirectionBtn">Dapatkan Tujuan</button>
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
    <script src="/js/map.js" async defer></script>

@endsection
