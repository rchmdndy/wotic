@extends('layouts.layout')

@section('content')
    <div class="container mt-3 event">
        <h1 class="text-center fw-medium">Kalender Event 2024</h1>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 mt-3">
            @foreach($eventList as $month => $events)
                <div class="col">
                    <div class="card rounded-4">
                        <h5 class="card-header text-center bg-my-primary text-white">{{ $month }}</h5>
                        <div class="card-body d-flex flex-column gap-3 px-5">
                            @foreach($events as $event)
                                <a href="{{route('event.detail', ['id' => $event['id']])}}" class="d-flex align-items-center text-decoration-none text-black">
                                    <i class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                        <span class="position-absolute fs-6">{{ $event['hari_mulai'] }}</span>
                                    </i>
                                    {{ $event['nama_event'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
