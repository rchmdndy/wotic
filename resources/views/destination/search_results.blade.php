@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4 search-results-heading">Hasil Pencarian untuk "{{ $query }}"</h1>

        <div class="row">
            @foreach ($results as $result)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $result['image'][0] ?? 'placeholder.jpg' }}" class="card-img-top" alt="{{ $result['nama_destinasi'] }}" >
                        <div class="card-body">
                        <h5 class="card-title mb-3" style="font-weight: bold;">{{ $result['nama_destinasi'] }}</h5>
                        <p class="card-text"><i class="bi bi-geo-alt-fill"></i> Alamat: {{ $result['alamat'] }}</p>
                        <p class="card-text"><i class="bi bi-cash-stack"></i> Harga Tiket Weekend Local: {{ $result['tiket_weekend_local'] ? 'IDR ' . number_format($result['tiket_weekend_local'], 0, ',', '.') : 'IDR 0' }}</p>
                        <p class="card-text"><i class="bi bi-cash-stack"></i> Harga Tiket Weekend Internasional: {{ $result['tiket_weekend_internasional'] ? 'IDR ' . number_format($result['tiket_weekend_internasional'], 0, ',', '.') : 'IDR 0' }}</p>
                        <p class="card-text"><i class="bi bi-geo-alt"></i> Jarak dari Semarang: {{ $result['jarak_dari_semarang'] }}</p>
                        <p class="card-text"><i class="bi bi-geo-alt"></i> Jarak dari Jogja: {{ $result['jarak_dari_jogja'] }}</p>

                            <a href="{{ route('destination.detail', ['id' => $result['id']]) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        @if (empty($results))
            <p class="text-center">Tidak ada hasil yang ditemukan.</p>
        @endif
    </div>
@endsection
