@extends('layouts.layout')

@section('content')
    <section class="mt-3 container">
        <div id="destinationDetail" class="row row-cols-1 g-5 mt-3 align-items-center">
            <h1 class="text-center text-uppercase fw-semibold m-3 mt-5">{{ $destinationDetail['destinasi']['nama_destinasi'] }}</h1>

            @if(count($destinationDetail['image']) > 1)
                <!-- Carousel -->
                <div class="col align-items-center">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($destinationDetail['image'] as $index => $image)
                                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                                    <img src="{{ $image }}" class="d-block w-100" alt="Image">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            @else
                <!-- Single Image -->
                <div class="col align-items-center">
                    <img src="{{ $destinationDetail['image'][0] }}" alt="Image" class="img-fluid rounded-4">
                </div>
            @endif
            <!-- Destination Details -->
            <div class="col">
{{--                Keterangan Start--}}
                <div class="d-flex m-4">
                  <h2 class="display-6"> <i class="bi bi-info-circle px-4"></i>Keterangan</h2>
                </div>
                <p class="mb-3 lh-lg" style="text-align: justify">{{ $destinationDetail['destinasi']['deskripsi'] }}</p>
{{--                Keterangan End--}}
{{--                Harga Tiket Start--}}
                <div class="d-flex m-4 mt-5">
                  <h2 class="display-6"> <i class="bi bi-currency-exchange px-4"></i>Harga Tiket</h2>
                </div>
                <div class="text-center">
                    <table class="table table-bordered border-secondary table-hover" style="width: 80%">
                        <thead>
                            <tr class="table-secondary">
                                <th style="width: 10%">HARGA</th>
                                <th style="width: 20%">TIKET LOKAL</th>
                                <th style="width: 20%">TIKET INTERNASIONAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-secondary"><strong>WEEKDAY</strong></td>
                                <td>
                                    IDR {{ ($destinationDetail['destinasi']['tiket']) ?: '0' }}

                                </td>
                                <td>
                                    IDR {{ (float) $destinationDetail['destinasi']['tiket_internasional'] ? number_format($destinationDetail['destinasi']['tiket_internasional'], 0, ',', '.') : '0' }}
                                </td>

                            </tr>
                            <tr>
                                <td class="table-secondary"><strong>WEEKEND</strong></td>
                                <td>
                                    IDR {{ (float) $destinationDetail['destinasi']['tiket_weekend_local'] ?  number_format($destinationDetail['destinasi']['tiket_weekend_local'], 0, ',', '.') : '0' }}
                                </td>
                                <td>
                                    IDR {{ (float) $destinationDetail['destinasi']['tiket_weekend_internasional'] ? number_format($destinationDetail['destinasi']['tiket_weekend_internasional'], 0, ',', '.') : '0' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
{{--                Harga Tiket End--}}
                <div class="d-flex m-4 mt-5 py-2">
                    <h2 class="display-6"> <i class="bi bi-compass px-4"></i>Informasi Lokasi</h2>
                </div>
                <table class="table table-striped-columns table-hover" style="width: 60%">
                    <tbody>
                        <tr>
                            <td class="table-info">Kecamatan</td>
                            <td><h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['kecamatan'] }}</h6></td>
                        </tr>
                        <tr>
                            <td class="table-info">Alamat</td>
                            <td><h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['alamat'] }}</h6></td>
                        </tr>
                        <tr>
                            <td class="table-info">Desa</td>
                            <td><h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['desa'] }}</h6></td>
                        </tr>
                        <tr>
                            <td class="table-info" style="width: 30%">Jenis Wisata</td>
                            <td>
                                @foreach($destinationDetail['jenis_wisata'] as $jenis)
                                    <span class="badge rounded-pill text-bg-success px-2">{{$jenis}}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="map" class="d-flex gap-3 m-4 w-100 border border-info-subtle"></div>

            </div>
        </div>
    </section>

        <script>

            const position = {lat: {{$destinationDetail['destinasi']['koordinat_x']}}, lng: {{$destinationDetail['destinasi']['koordinat_y']}}}
            var map;

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: position,
                    zoom: 18
                });
                const marker = new google.maps.Marker({
                    map: map,
                    position: position,
                    title: '{{$destinationDetail['destinasi']['nama_destinasi']}}'
                });
                marker.addListener("click", () => {
                    // make an info window with a google map link to the location
                    const infoWindow = new google.maps.InfoWindow({
                        content: `<h6>${marker.getTitle()}</h6><a href="https://www.google.com/maps/search/?api=1&query=${position.lat},${position.lng}" target="_blank">Dapatkan Rute</a>`
                    });
                    infoWindow.open(map, marker);
                });
            }
        </script>
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.8/mapsJavaScriptAPI.js" async defer></script>

@endsection
