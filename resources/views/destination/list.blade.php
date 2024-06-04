@extends('layouts.custom_layout')
@section('head_content')
<style>
    .page-title {
        text-align: center;
        margin-bottom: 30px;
        margin-top: 30px;
        font-size: 3rem;
        color: #333; /* Adjust color as needed */
    }

    .card-custom {
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        padding-top: 170px; /* Adjust padding to accommodate image height */
    }

    .card-custom img {
        position: absolute;
        top: -20px; /* Move image further up */
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        height: 200px; /* Set a fixed height for the images */
        object-fit: cover; /* Ensure the image covers the entire area */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-body-custom {
        padding-top: 20px; /* Adjust padding to account for moved image */
    }

    .card-title {
        font-size: 1.25rem;
    }

    .card-text {
        font-size: 0.7rem;
    }

    .btn-custom {
        border-radius: 20px;
        padding: 0.4rem 0rem;
        display: block;
        width: 100%;
        max-width: 130px;
        margin: 0 auto;
        font-size: 0.7rem;

    }

    .icon {
        margin-right: 5px;
        color: #FF5733; /* Change icon color */
    }

    .separator {
        width: 100%;
        height: 1px;
        background-color: #ccc;
        margin: 10px 0;
    }

</style>
@endsection

@section('custom-content')
<section id="page-title" class="page-title">
    DESTINASI WISATA
</section>

<section id="gallery">
    <div class="container">
        <div class="row">
            @foreach ($destinationList as $destination)
            <div class="col-lg-4 mb-4">
                <div class="card card-custom">
                    <img src="{{ $destination['image'][0] }}" alt="Image">
                    <div class="card-body card-body-custom">
                        <h5 class="card-title">{{ $destination['nama_destinasi'] }}</h5>
                        <div class="separator"></div>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt icon"></i>{{ $destination['alamat'] }}<br>
                            <i class="fas fa-ticket-alt icon"></i>{{ $destination['tiket_weekend_local'] ? 'Tiket Weekend (Local): IDR ' . number_format($destination['tiket_weekend_local'], 0, ',', '.') : 'Tiket Weekend (Local): IDR 0' }}<br>
                            <i class="fas fa-globe icon"></i>{{ $destination['tiket_weekend_internasional'] ? 'Tiket Weekend (Internasional): IDR ' . number_format($destination['tiket_weekend_internasional'], 0, ',', '.') : 'Tiket Weekend (Internasional): IDR 0' }}<br>
                            <i class="fas fa-route icon"></i>Dari Semarang: {{ $destination['jarak_dari_semarang'] }} KM<br>
                            <i class="fas fa-route icon"></i>Dari Jogja: {{ $destination['jarak_dari_jogja'] }} KM
                        </p>
                        <a href="{{ route('destination.detail', ['id' => $destination['id']]) }}" class="btn btn-primary btn-custom">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
