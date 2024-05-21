@extends('layouts.layout')

@section('content')
    <section class="container mt-3">
        <h1 class="text-center fs-4 mt-3">List Wisata Alam</h1>
        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4" id="destinationList">
            @foreach($destinationList as $destinasi)
                <div class="col">
                    <a href="{{route('destination.detail', ['id' => $destinasi['id']])}}" class="text-decoration-none">
                    <div class="card h-100 w-100 card-list-wisata rounded-4">
                        <div class="card-body">
                            <div class="row row-cols-md-2 row-cols-1 g-3">
                                <div class="col">
                                    <img src="{{ $destinasi['image'][0] }}" alt="Image" class="img-fluid rounded-4">
                                </div>
                                <div class="col">
                                    <h5 class="card-title mb-3">{{ $destinasi['nama_destinasi'] }}</h5>
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <i class="bi bi-map"></i>
                                        <h6 class="card-subtitle text-body-secondary">{{ $destinasi['alamat'] }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-cash fs-6"></i>
                                        <h6 class="card-subtitle text-body-secondary">{{ $destinasi['tiket_weekend_local'] ? 'IDR ' . number_format($destinasi['tiket_weekend_local'], 0, ',', '.') : 'IDR 0' }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-globe fs-6"></i>
                                        <h6 class="card-subtitle text-body-secondary">{{ $destinasi['tiket_weekend_internasional'] ? 'IDR ' . number_format($destinasi['tiket_weekend_internasional'], 0, ',', '.') : 'IDR 0' }}</h6>
                                    </div>
                                    <h5>Jarak</h5>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-geo-alt fs-6"></i>
                                        <h6 class="card-subtitle text-body-secondary">Dari Semarang {{ $destinasi['jarak_dari_semarang'] }} KM</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-geo-alt fs-6"></i>
                                        <h6 class="card-subtitle text-body-secondary">Dari Jogja {{ $destinasi['jarak_dari_jogja'] }} KM</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
