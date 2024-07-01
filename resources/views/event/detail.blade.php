@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4">
            <div class="col">
                <img src="{{ asset($eventDetail['image']) }}" alt="image" class="rounded-4 image-detail">
            </div>
            <div class="col">
                <h4 class="mt-3 fw-medium display-6">{{ $eventDetail['nama_event'] }}</h4>
                <div class="d-flex gap-3 align-items-center my-4">
                    <div class="logo-detail">
                        <img src="{{ asset('images/logos/logocalander.png') }}" alt="logocalander">
                    </div>
                    <h6 class="m-0">Tanggal : {{ $eventDetail['tanggal_mulai']  }} - {{$eventDetail['tanggal_selesai'] }}</h6>
                </div>
                <h4 class="my-4 display-6 ">Informasi Event</h4>
                <p class="text-justify">
                    {{ $eventDetail['deskripsi'] }}
                </p>
            </div>

        </div>
    </div>
@endsection
