@extends('layouts.custom_layout')
@section('head_content')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap">
    <link rel="stylesheet" type="text/css" href="css/hotel-card.css">
    <style>
        .hotel-card {
            display: flex;
            align-items: center;
            background-color: white; /* Change background to white */
            border-radius: 10px; /* Increase border radius */
            border: 1px solid #ccc; /* Thinner border with gray color */
            margin-bottom: 10px; /* Increased margin bottom */
            width: 1200px; /* Increased width */
            height: 350px; /* Increased height */
            padding: 20px;
        }

        .hotel-card img {
            width: 320px;
            height: 320px;
            object-fit: cover;
            border-radius: 10px; /* Rounded edges for the image */
            margin-right: 20px;
        }

        .hotel-card-body {
            flex: 1;
            display: flex;
            justify-content: space-between;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Align content to top */
        }

        .card-title {
            color: #3D3D3D;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
            font-size: 2.2em; /* Increased font size */
            margin: 0; /* Remove margin for tighter alignment */
        }

        .card-text {
            color: black;
            font-size: 1.2em; /* Increased font size for card text */
            margin: 5px 0; /* Small margin for spacing */
        }

        .separator {
            margin: 0 20px; /* Space around separator */
            border-left: 1px dashed #3D3D3D; /* Dashed border on the left */
            height: 200px; /* Set the desired height */
        }

        .right-content {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: space-between;
        }

        .right-content .badge {
            margin-bottom: 15px; /* Increased margin bottom */
            font-size: 1.3em; /* Increased font size for badge */
        }

        .gradient-line {
            width: 80%;
            height: 10px; /* Set the height of the line */
            background: linear-gradient(to right, #87CEFA, white); /* Light blue gradient */
            margin: 10px 0; /* Margin for spacing */
        }

        .btn {
            font-size: 1.3em; /* Increased font size for button */
            margin-top: 50px; /* Margin top to position below address */
            margin-right: 400px;
        }
    </style>
@endsection

@section('custom-content')
<section class="light" style="background-color: white;"> <!-- Ensure section background is white -->
    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle">List Hotel</div>
        @foreach($hotelList as $index => $hotel)
            <div class="hotel-card">
                <div class="col-md-4">
                    <img src="{{ $hotel['image'] }}" class="img-fluid" alt="{{ $hotel['nama_hotel'] }}">
                </div>
                <div class="col-md-8 hotel-card-body">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                        <div class="gradient-line"></div> <!-- Adding gradient line below the address -->
                        <p class="card-text">{{ $hotel['alamat'] }}</p>
                        <a class="btn btn-my-primary"
                           href="{{ route('map_redirect', ['lat' => $hotel['koordinat'], 'lng' => $hotel['koordinat_y']]) }}" target="_blank">
                            Lihat Lokasi
                        </a>
                    </div>
                    <div class="separator"></div> <!-- Adding separator line -->
                    <div class="right-content">
                        <span class="badge rounded-pill text-bg-primary">
                            <i class="fas fa-star"></i>{{ $hotel['kelas'] }}
                        </span>
                        @if($hotel['is_important'] == 'yes')
                        <span class="badge rounded-pill text-bg-warning">Rekomendasi</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
