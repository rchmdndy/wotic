@extends('layouts.layout')

@section('content')
    <style>
        .card-img-top {
            height: 200px; /* Atur tinggi gambar sesuai kebutuhan Anda */
            object-fit: cover; /* Pastikan gambar terpotong atau di-stretch untuk mengisi ruang yang ditentukan */
        }
    </style>

    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <form action="{{ route('destination.search') }}" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari destinasi..." value="{{ $query }}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @if(isset($destinationList['Error']))
                <form action="{{route('destination.search')}}" method="get">
                    <div class="d-flex justify-content-center text-decoration-none text-black">
                        <input type="hidden" name="search" value="{{ $query }}">
                        <button type="submit" class="btn btn-warning">
                            Gagal mendapatkan data pencarian, silahkan refresh halaman
                        </button>
                    </div>
                </form>
            @else
            @foreach ($destinationList as $result)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $result['image'][0] ?? 'placeholder.jpg' }}" class="card-img-top" alt="{{ $result['nama_destinasi'] }}">
                        <div class="card-body">
                            <h5 class="card-title mb-3" style="font-weight: bold;">{{ $result['nama_destinasi'] }}</h5>
                            <p class="card-text"><i class="bi bi-geo-alt-fill"></i> Alamat: {{ $result['alamat'] }}</p>
                            <p class="card-text"><i class="bi bi-cash-stack"></i> Harga Tiket Weekend Lokal: {{ $result['tiket_weekend_local'] ? 'IDR ' . number_format($result['tiket_weekend_local'], 0, ',', '.') : 'IDR 0' }}</p>
                            <p class="card-text"><i class="bi bi-cash-stack"></i> Harga Tiket Weekend Internasional: {{ $result['tiket_weekend_internasional'] ? 'IDR ' . number_format($result['tiket_weekend_internasional'], 0, ',', '.') : 'IDR 0' }}</p>
                            <p class="card-text"><i class="bi bi-geo-alt"></i> Jarak dari Semarang: ~{{ $result['jarak_dari_semarang'] }} KM</p>
                            <p class="card-text"><i class="bi bi-geo-alt"></i> Jarak dari Jogja: ~{{ $result['jarak_dari_jogja'] }} KM</p>

                            <a href="{{ route('destination.detail', ['id' => $result['id']]) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
        @if (empty($destinationList))
            <p class="text-center">Tidak ada hasil yang ditemukan.</p>
        @endif
    </div>
@endsection
