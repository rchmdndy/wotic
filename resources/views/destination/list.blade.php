@extends('layouts.layout')

@section('content')
    <section class="container mt-3">
        <h1 class="text-center fs-4 mt-3">List Wisata Alam</h1>

        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4">
            @foreach($destinasis as $destinasi)
                <div class="col">
                    <div class="card h-100 w-100 card-list-wisata rounded-4">
                        <div class="card-body">
                            <div class="row row-cols-md-2 row-cols-1 g-3">
                                <div class="col">
                                    @if($destinasi->images->isNotEmpty())
                                        <img src="{{ asset('storage/'.$destinasi->images->first()->image_path) }}" alt=""
                                             class="img-fluid rounded-4">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                                <div class="col">
                                    <h5 class="card-title mb-3">{{ $destinasi->nama_destinasi }}</h5>
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <i class="bi bi-map"></i>
                                        <h6 class="card-subtitle text-body-secondary">{{ $destinasi->desa }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <i class="bi bi-cash fs-6"></i>
                                        <h6 class="card-subtitle text-body-secondary">{{ $destinasi->tiket_weekend_local }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <i class="bi bi-geo-alt fs-6"></i>
                                        <h6 class="card-subtitle text-body-secondary">{{ $destinasi->jenis_wisata }}</h6>
                                    </div>
{{--                                    <a href="{{ route('destination.detail') }}" class="btn btn-primary btn-sm rounded-5 mt-3">Lihat--}}
{{--                                        Detail</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
