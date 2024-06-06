@extends('layouts.layout')

@section('content')
    <section class="rekomendasi-wrapper">
        <div class="rekomendasi">
            <h1 class="display-2 mb-5">Event 2024</h1>

                    <div class="card rounded-4 w-75">
                        <h5 class="card-header text-center bg-my-primary text-white">{{ $currentMonth }}</h5>
                        <div class="card-body d-flex flex-column gap-3 px-4">
                            @if(isset($eventList['Error']))
                                <form method='get'>
                                    <div class="d-flex justify-content-center text-decoration-none text-black">
                                        <button type='submit' class="btn btn-warning">
                                            Gagal mendapatkan data event bulan ini, silahkan refresh halaman
                                        </button>
                                    </div>
                                </form>
                            @elseif(empty($eventList))
                                <div class="d-flex align-items-center text-decoration-none text-black">
                                    Tidak ada event bulan ini
                                </div>
                            @else
                                @foreach($eventList as $index => $event)
                                    <a href="{{route('event.detail', ['id'=>$event['id']])}}" class="d-flex align-items-center text-decoration-none text-black">
                                        <i class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                            <span class="position-absolute fs-6">{{ date('j', strtotime($event['tanggal_mulai'])) }}</span>
                                        </i>
                                        {{ $event['nama_event'] }}
                                    </a>
                               @endforeach
                            @endif
                        </div>
                    </div>
                </div>
    </section>
@endsection
