@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4">
            <div class="col">
                <img src="{{ asset('storage/' . $hotel->image) }}" alt="Hotel Image" class="rounded-4 image-detail">
                <h4 class="mt-3 fw-medium">{{ $hotel->nama_hotel }}</h4>
                <div class="d-flex gap-3 align-items-center mt-3">
                    <div class="logo-detail">
                        <img src="{{ asset('images/logos/mapslogo.png') }}" alt="Location Logo">
                    </div>
                    <h6 class="m-0">{{ $hotel->alamat}}</h6>
                </div>
            </div>
            <div class="col">
                <p class="text-justify">
                    {{ $hotel->kelas}}
                </p>
                <button type="button" class="btn btn-success px-3 py-2 btn-sm rounded-5" data-bs-toggle="modal"
                        data-bs-target="#exampleModal1">
                    Pesan Sekarang
                </button>
                {{-- Modal Pesan --}}
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Aplikasi Pemesanan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row row-cols-4 g-4 justify-content-center align-items-center">
                                    <div class="col">
                                        <a href="#" class="d-flex justify-content-center">
                                            <img src="{{ asset('images/logos/logotraveloka.png') }}" alt="Traveloka Logo"
                                                 class="img-fluid rounded-4">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="d-flex justify-content-center">
                                            <img src="{{ asset('images/logos/logotiketcom.png') }}" alt="Tiket.com Logo"
                                                 class="img-fluid rounded-4">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="d-flex justify-content-center">
                                            <img src="{{ asset('images/logos/logoaccesskai.png') }}" alt="Access Kai Logo"
                                                 class="img-fluid rounded-4">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
