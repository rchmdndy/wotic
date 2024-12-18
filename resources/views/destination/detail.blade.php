@extends('layouts.layout')

@section('content')
    <section class="mt-3 container">
        <div id="destinationDetail" class="row row-cols-1 g-5 mt-3 align-items-center">
            <div class="text-center">
                <h1 class="display-2">{{ $destinationDetail['destinasi']['nama_destinasi'] }}</h1>
            </div>
            <div class="col-12">
                <div class="position-relative">
                    @if (count($destinationDetail['image']) > 1)
                        <!-- Carousel -->
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner rounded-4">
                                @foreach ($destinationDetail['image'] as $index => $image)
                                    <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                                        <img src="{{ $image }}" class="d-block w-100 h-75" alt="Image">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev"
                                style="top: 10px; left: 10px;">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next"
                                style="top: 10px; right: 10px;">
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <!-- Single Image -->
                        <div class="col align-items-center">
                            <img src="{{ $destinationDetail['image'][0] }}" alt="Image"
                                class="img-fluid mx-auto d-block rounded-4">
                        </div>
                    @endif
                </div>
            </div>
            <!-- Destination Details -->
            <div class="col">
                {{-- Keterangan Start --}}
                <div class="d-flex m-4">
                    <h2 class="display-6"><i class="bi bi-info-circle px-4"></i>Keterangan</h2>
                </div>
                <p class="mb-3 lh-lg" style="text-align: justify">{{ $destinationDetail['destinasi']['deskripsi'] }}</p>
                {{-- Keterangan End --}}
                {{-- Harga Tiket Start --}}
                <div class="d-flex m-4 mt-5">
                    <h2 class="display-6"><i class="bi bi-currency-exchange px-4"></i>Harga Tiket</h2>
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
                                    IDR {{ $destinationDetail['destinasi']['tiket'] ?: '0' }}
                                </td>
                                <td>
                                    IDR {{ $destinationDetail['destinasi']['tiket_internasional'] ?: '0' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="table-secondary"><strong>WEEKEND</strong></td>
                                <td>
                                    IDR {{ $destinationDetail['destinasi']['tiket_weekend_local'] ?: '0' }}
                                </td>
                                <td>
                                    IDR {{ $destinationDetail['destinasi']['tiket_weekend_internasional'] ?: '0' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan
                    Sekarang</button>
                {{-- Harga Tiket End --}}
            </div>
            <div class="col p-4 rounded">
                <div class="d-flex m-4 mt-1 py-1">
                    <h2 class="display-6"><i class="bi bi-compass px-4"></i>Informasi Lokasi</h2>
                </div>
                <table class="table table-striped-columns table-hover text-white" style="width: 50%">
                    <tbody>
                        <tr>
                            <td class="table-info">Kecamatan</td>
                            <td>
                                <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['kecamatan'] }}</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">Alamat</td>
                            <td>
                                <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['alamat'] }}</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">Desa</td>
                            <td>
                                <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['desa'] }}</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">Moda Transportasi</td>
                            <td>
                                @if ($destinationDetail['transportasiArray'][0])
                                    <i class="bi bi-airplane px-2"></i>
                                @endif
                                @if ($destinationDetail['transportasiArray'][1])
                                    <i class="bi bi-bus-front px-2"></i>
                                @endif
                                @if ($destinationDetail['transportasiArray'][2])
                                    <i class="bi bi-train-front px-2"></i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">Jenis Wisata</td>
                            <td>
                                @foreach ($destinationDetail['jenis_wisata'] as $jenis)
                                    <span class="badge rounded-pill text-bg-success px-2">{{ $jenis }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">Contact Person</td>
                            <td>
                                <h6 class="mb-0 text-body-secondary">
                                    {{ $destinationDetail['destinasi']['contact_person'] }}</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">Email</td>
                            <td>
                                <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['email'] }}</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-info">No. Telephone</td>
                            <td>
                                <h6 class="mb-0 text-body-secondary">{{ $destinationDetail['destinasi']['telephone'] }}
                                </h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="map" class="w-100 border border-info-subtle mt-4" style="height: 300px;"></div>
            </div>
        </div>

        <div class="mt-5 mb-5" style="background: #F8F8F8;">
            <div class="d-flex m-4 mt-5">
                <h2 class="display-6"><i class="bi bi-buildings px-4"></i>Hotel Terdekat</h2>
            </div>
            <div class="overflow-auto">
                <div class="row flex-nowrap">
                    @foreach ($hotelList as $hotel)
                        <div class="col">
                            <a href="{{ route('map_redirect', ['lat' => $hotel['koordinat'], 'lng' => $hotel['koordinat_y']]) }}"
                                target="_blank" style="text-decoration: none">
                                @if ($hotel['is_important'] == 'yes')
                                    <div class="card mb-4 card-reccomendation rounded-3"
                                        style="width: 18rem; height: 25rem;">
                                        <img src="{{ $hotel['image'] }}" class="card-img-top img-fluid  w-100"
                                            style="height: 200px; " alt="Hotel Image" ">
                                                                        <div class="card-body text-white" style="margin-left: 10px; margin-right: 10px;">
                                                                            <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                                                                            <p class="card-subtitle mb-2 text-white">{{ $hotel['kelas'] }}</p>
                                                                            <span class="badge text-bg-warning mb-3">Rekomendasi 📍</span>
                                                                            <p class="card-text mb-3">📌 {{ $hotel['distance_to_destination'] }} KM</p>
                                                                        </div>
                                                                    </div>
@else
    <div class="card mb-4" style="width: 18rem; height: 25rem;">
                                                                        <img src="{{ $hotel['image'] }}" class="card-img-top img-fluid"
                                                                            alt="Hotel Image" style="width: auto; height: 200px">
                                                                        <div class="card-body" style="margin-left: 10px; margin-right: 10px;">
                                                                            <h5 class="card-title">{{ $hotel['nama_hotel'] }}</h5>
                                                                            <p class="card-subtitle mb-2 text-body-secondary">{{ $hotel['kelas'] }}</p>
                                                                            <p class="card-text">📌 {{ $hotel['distance_to_destination'] }} KM</p>
                                                                        </div>
                                                                    </div>
     @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Penyedia</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-4 g-4 justify-content-center align-items-center">
                            <div class="col">
                                <a href="https://www.traveloka.com/" style="text-decoration: none;" target="_blank">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('images/logos/logotraveloka.png') }}" alt=""
                                            class="img-modal rounded-4">
                                    </div>
                                    <div class="row mt-2 justify-content-center">
                                        <span class="text-center text-black">Traveloka</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="https://www.tiket.com/" style="text-decoration: none;" target="_blank">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('images/logos/logotiket.png') }}" alt=""
                                            class="img-modal rounded-4">
                                    </div>
                                    <div class="row mt-2 justify-content-center">
                                        <span class="text-center text-black">tiket.com</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="https://www.agoda.com/" style="text-decoration: none;" target="_blank">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('images/logos/logoagoda.png') }}" alt=""
                                            class="img-modal rounded-4">
                                    </div>
                                    <div class="row mt-2 justify-content-center">
                                        <span class="text-center text-black">Agoda</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="https://www.booking.com/" style="text-decoration: none;" target="_blank">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('images/logos/logobooking.png') }}" alt=""
                                            class="img-modal rounded-4">
                                    </div>
                                    <div class="row mt-2 justify-content-center">
                                        <span class="text-center text-black">Booking.com</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const position = {
            lat: {{ $destinationDetail['destinasi']['koordinat_x'] }},
            lng: {{ $destinationDetail['destinasi']['koordinat_y'] }}
        };
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: position,
                zoom: 18
            });
            const marker = new google.maps.Marker({
                map: map,
                position: position,
                title: '{{ $destinationDetail['destinasi']['nama_destinasi'] }}'
            });
            marker.addListener("click", () => {
                // make an info window with a google map link to the location
                const infoWindow = new google.maps.InfoWindow({
                    content: `<h6>${marker.getTitle()}</h6><a href="https://www.google.com/maps/search/?api=1&query=${position.lat},${position.lng}" target="_blank">Dapatkan rute</a>`
                });
                infoWindow.open(map, marker);
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.8/mapsJavaScriptAPI.js" async defer>
    </script>


@endsection
