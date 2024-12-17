@extends('layouts.custom_layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/services_categories.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection

@section('custom-content')
    @php
        // Data kategori
        $categories = [
            [
                'jenis_wisata' => 'kesehatan',
                'image' => 'kesehatan.jpg',
                'title' => 'KESEHATAN',
                'has_dropdown' => true,
                'dropdown_items' => ['Rumah Sakit', 'Puskesmas', 'Klinik', 'Ambulance', 'Apotik']
            ],
            [
                'jenis_wisata' => 'transportasi',
                'image' => 'transportasi.jpg',
                'title' => 'TRANSPORTASI',
                'has_dropdown' => true,
                'dropdown_items' => ["Bus", "Shuttle", "Jeep Wisata", "Ojek Wisata"]
            ],
            [
                'jenis_wisata' => 'Biro Perjalanan Wisata',
                'image' => 'biro-perjalanan-wisata.png',
                'title' => 'BIRO PERJALANAN WISATA',
                'has_dropdown' => false,
                'dropdown_items' => []
            ],
            [
                'jenis_wisata' => 'Pemandu Wisata',
                'image' => 'pemandu-wisata.jpg',
                'title' => 'PEMANDU WISATA',
                'has_dropdown' => false,
                'dropdown_items' => []
            ],
            [
                'jenis_wisata' => 'bengkel',
                'image' => 'bengkel.jpg',
                'title' => 'BENGKEL',
                'has_dropdown' => true,
                'dropdown_items' => ['Bengkel Motor', 'Bengkel Mobil']
            ]
        ];
    @endphp
<div class="container">
    <div class="row">
        <h1 class="display-6 text-center my-5">Kategori Layanan</h1>

        @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/categories/' . $category['image']) }}" class="card-img-top" alt="{{ $category['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category['title'] }}</h5>
                        @if ($category['has_dropdown'])
                            <!-- Button with Dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton{{ $loop->index }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilih Layanan
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton{{ $loop->index }}">
                                    @foreach ($category['dropdown_items'] as $item)
                                        <li><a class="dropdown-item" href="{{route('layanan.list', ['jenis_layanan' => $item])}}">{{ $item }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <!-- Button without Dropdown -->
                            <a href="{{route('layanan.list', ['jenis_layanan' => $category['jenis_wisata']])}}" class="btn btn-primary w-100">Lihat Detail</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    @endsection
