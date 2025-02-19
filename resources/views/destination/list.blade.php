@extends('layouts.layout')
@section('content')
    <style>
        .section-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            background-color: #e9ecef; /* Light gray background for section title */
            padding: 10px;
            border-radius: 10px;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .card-info {
            margin-top: auto;
        }

        .btn {
            border-radius: 0; /* Make button square */
        }

        .btn-icon {
            font-size: 1.2rem;
            margin-right: 5px;
        }

        /* Add glass effect */
        .glass {
            background-color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
        }
    </style>
    <section class="container mt-3">
        @if(isset($destinationList['Error']))
        <form method='get'>
            <div class="d-flex justify-content-center text-decoration-none text-black">
                <button type='submit' class="btn btn-warning">
                    Gagal mendapatkan data wisata, silahkan refresh halaman
                </button>
            </div>
    </form>
        @elseif(empty($destinationList))
            <h5 class="display-5 text-center justify-content-center position-absolute top-50 start-50 translate-middle">
                Belum ada data terkait wisata {{$jenis_wisata}}
            </h5>
        @else
        <h1 class="display-6 my-5 text-center">Wisata <span class="text-capitalize">{{$jenis_wisata}}</span> yang tersedia di Wonosobo</h1>
        <div class="row row-cols-md-2 row-cols-1 mt-3 my-4 mb-5 g-4" id="destinationList">
            @foreach($destinationList as $index => $destinasi)
                <div class="col">
                    <div class="card h-100 glass">
                        <img src="{{ $destinasi['image'][0] }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="section-title">{{ $destinasi['nama_destinasi'] }}</h5>
                            <p class="card-subtitle"><i class="bi bi-geo-alt-fill"></i> {{ $destinasi['alamat'] }}</p>
                            <p class="card-subtitle"><i class="bi bi-cash"></i> Tiket Weekend (Lokal): {{ $destinasi['tiket_weekend_local'] ? 'IDR ' . number_format($destinasi['tiket_weekend_local'], 0, ',', '.') : 'IDR 0' }}</p>
                            <p class="card-subtitle"><i class="bi bi-globe"></i> Tiket Weekend (Internasional): {{ $destinasi['tiket_weekend_internasional'] ? 'IDR ' . number_format($destinasi['tiket_weekend_internasional'], 0, ',', '.') : 'IDR 0' }}</p>
                            <div class="card-info">
                                <p class="card-subtitle"><i class="bi bi-geo-fill"></i> Dari Semarang: ~{{ $destinasi['jarak_dari_semarang'] }} KM</p>
                                <p class="card-subtitle"><i class="bi bi-geo-fill"></i> Dari Jogja: ~{{ $destinasi['jarak_dari_jogja'] }} KM</p>
                                <p class="card-subtitle"><i class="bi bi-telephone-fill"></i> Contact Person : {{ $destinasi['contact_person'] }} ({{$destinasi['telephone']}})</p>
                            </div>
                            <a href="{{ route('destination.detail', ['id' => $destinasi['id']]) }}" class="btn btn-primary btn-block">
                                <i class="bi bi-info-square btn-icon"></i> Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </section>
@endsection
