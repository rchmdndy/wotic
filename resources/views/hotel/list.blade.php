@extends('layouts.custom_layout')
@section('head_content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hotel-card.css') }}">
@endsection
@section('custom-content')

    <section class="light">
        <div class="container py-2">
            <h1 class="display-2 my-5 text-center text-dark text-capitalize">Daftar Pilihan {{ $jenis_hotel }} 🛏️</h1>
            @if (isset($hotelList['Error']))
                <form method='get'>
                    <div class="d-flex justify-content-center text-decoration-none text-black">
                        <button type='submit' class="btn btn-warning">
                            Gagal mendapatkan data hotel, silahkan refresh halaman
                        </button>
                    </div>
                </form>
            @else
                <div class="row">

                    @foreach ($hotelList as $hotel)
                        <div class="col-md-6 mb-4">
                            <article class="postcard light blue">
                                <a class="postcard__img_link" href="#">
                                    <img class="postcard__img" src="{{ $hotel['image'] }}" alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title blue" style="color: black; font-weight: bolder">
                                        {{ $hotel['nama_hotel'] }}</a></h1>
                                    <div class="postcard__subtitle">
                                        <span class="badge rounded-pill text-bg-primary">
                                            <i class="fas fa-calendar-alt mr-2"></i> {{ $hotel['kelas'] }}
                                        </span>
                                    </div>
                                    @if ($hotel['is_important'] == 'yes')
                                        <div class="postcard__badge">
                                            <span class="badge rounded-pill text-bg-warning">Rekomendasi</span>
                                        </div>
                                    @endif
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt">
                                        {{ $hotel['alamat'] }}
                                    </div>
                                    <div class="my-2">
                                        <a class="btn btn-primary w-100"
                                            href="{{ route('map_redirect', ['lat' => $hotel['koordinat'], 'lng' => $hotel['koordinat_y']]) }}"
                                            target="_blank">
                                            Lihat Lokasi
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
            @endif
        </div>
        </div>
    </section>
@endsection
