@extends('layouts.layout')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .wisata-title {
            margin-bottom: 50px;
            text-transform: uppercase;
            padding: 10px;
            border-radius: 10px;
            color: #333;
        }

        .card-promo {
            border: 1px solid #ccc; /* Thin border */
            overflow: hidden;
            position: relative;
            border-radius: 0;
            background-color: #fff; /* Remove shadow by setting background color */
        }

        .card-img-top {
            width: calc(100% - 20px); /* Reduced width to account for margin */
            height: 250px; /* Reduced height */
            object-fit: cover;
            margin: 10px; /* Margin around the image */
        }

        .card-body {
            padding: 20px;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .promo-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .card-info {
            font-size: 0.9rem; /* Smaller font size for dates */
            color: #000; /* Change color of date to black */
        }

        .promo-date {
            margin-bottom: 5px;
        }

        .separator {
            width: 100%;
            height: 1px;
            background-color: #ccc;
            margin: 10px 0;
        }

        .btn {
            border-radius: 0;
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s ease;
            margin-top: 10px; /* Margin top to position below date */
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-text {
            font-size: 1rem;
        }

        .start-icon,
        .end-icon {
            margin-right: 5px;
        }

        .footer-margin {
            margin-bottom: 50px; /* Margin to avoid hitting footer */
        }
    </style>

    <div class="container mt-4 footer-margin">
        <h1 class="wisata-title text-center">Daftar Promo 2024</h1>
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-4">
            @foreach($promoList as $promo)
                <div class="col">
                    <a href="{{route('promo.detail', ['id' => $promo['id']])}}" class="text-decoration-none">
                        <div class="card card-promo h-100">
                            <img src="{{ $promo['image'] }}" class="img-fluid card-img-top" alt="{{ $promo['nama_promo'] }}">
                            <div class="card-body d-flex flex-column">
                                <div class="promo-title">{{ $promo['nama_promo'] }}</div>
                                <div class="separator"></div>
                                <div class="card-info">
                                    <p class="promo-date"><i class="bi bi-calendar-check start-icon"></i>
                                        <small>Tanggal mulai: {{ date('d-m-Y', strtotime($promo['tanggal_mulai'])) }}</small></p>
                                    <p class="promo-date"><i class="bi bi-calendar-check end-icon"></i>
                                        <small>Tanggal selesai: {{ date('d-m-Y', strtotime($promo['tanggal_selesai'])) }}</small></p>
                                </div>
                                <a href="{{route('promo.detail', ['id' => $promo['id']])}}" class="btn btn-primary btn-text">Detail</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
