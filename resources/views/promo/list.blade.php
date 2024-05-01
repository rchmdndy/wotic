@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">Kalender Promo 2024</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4" id="promoList">
            @foreach($promoList as $promo)
                <a href="{{route('promo.detail', ['id' => $promo['id']])}}">
                <div class="card mb-3 card-promo">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $promo['image'] }}" class="img-fluid" alt="{{ $promo['nama_promo'] }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $promo['nama_promo'] }}</h5>
                                </div>
                                <p class="card-text"><small class="text-body-secondary">Start Date: {{ $promo['tanggal_mulai'] }}</small></p>
                                <p class="card-text"><small class="text-body-secondary">End Date: {{ $promo['tanggal_selesai'] }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
