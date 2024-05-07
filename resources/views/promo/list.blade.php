@extends('layouts.layout')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .title {
            margin-bottom: 50px;
            text-transform: uppercase;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 10px;
        }

        .card-promo {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            position: relative;
        }

        .card-promo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: #ADD8E6; /* Light blue color */
            border-radius: 10px 10px 0 0;
        }

        .card-promo:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        .promo-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 10px;
        }

        .card-info {
            margin-top: auto;
        }

        .promo-date {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .btn {
            border-radius: 0;
            float: right;
        }

        .btn-text {
            font-size: 1rem;
        }

        .start-icon,
        .end-icon {
            margin-right: 5px;
        }
    </style>

    <div class="container mt-4">
        <h1 class="text-center fw-medium title">Kalender Promo 2024</h1>
        <div class="row row-cols-md-2 row-cols-1 g-4">
            @foreach($promoList as $promo)
                <div class="col">
                    <a href="{{route('promo.detail', ['id' => $promo['id']])}}" class="text-decoration-none">
                        <div class="card mb-3 card-promo">
                            <img src="{{ $promo['image'] }}" class="img-fluid card-img-top" alt="{{ $promo['nama_promo'] }}">
                            <div class="card-body">
                                <div class="promo-title">{{ $promo['nama_promo'] }}</div>
                                <div class="card-info">
                                    <p class="promo-date"><i class="bi bi-calendar-check start-icon"></i><small class="text-body-secondary">Start Date: {{ $promo['tanggal_mulai'] }}</small></p>
                                    <p class="promo-date"><i class="bi bi-calendar-check end-icon"></i><small class="text-body-secondary">End Date: {{ $promo['tanggal_selesai'] }}</small></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
