@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">Kalender Event 2024</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4">
            @foreach($events as $event)
            <div class="card mb-3 card-event" onclick="window.location.href='/event/{{ $event->id }}/detail'">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid" alt="{{ $event->nama_event }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ $event->nama_event }}</h5>
                                <p class="card-text"><small class="text-body-secondary">Tanggal Mulai: {{ $event->tanggal_mulai }}</small></p>
                            </div>
                            <p class="card-text">{{ substr($event->deskripsi, 0, 121) }}{{ strlen($event->deskripsi) > 121 ? '' : '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
