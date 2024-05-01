@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">List Hotel</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4" id="hotelList">
            <!-- Hotel items will be appended here -->
            @foreach($hotelList as $hotel)
                <a href="{{ route('hotel.detail', ['id' => $hotel['id']]) }}"> // ANCHOR -> ENGKER
                <div class="card mb-3 card-hotel">
                    <div class="row g-0">
{{--                        div 1--}}
                        <div class="col-md-4">
                            <img src="{{ $hotel['image'] }}" class="img-fluid" alt="{{ $hotel['nama_hotel'] }}">
                        </div>
{{--                         div 2--}}
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                                    <p class="card-text"><small class="text-body-secondary">Kelas: {{ $hotel['kelas'] }}</small></p>
                                </div>
                                <p class="card-text">Alamat: {{ $hotel['alamat'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
