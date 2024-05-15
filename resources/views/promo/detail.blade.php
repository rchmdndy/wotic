@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4">
            <div class="col">
                <img src="{{ $promoDetail['image'] }}" alt="image" class="rounded-4 image-detail">
            </div>
            <div class="col">
                <h4 class="mt-3 fw-medium">{{ $promoDetail['nama_promo'] }}</h4>
                <div class="d-flex gap-3 align-items-center mt-3">
                    <div class="logo-detail">
                        <img src="{{ asset('images/logos/mapslogo.png') }}" alt="mapslogo">
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center mt-3">
                    <div class="logo-detail">
                        <img src="{{ asset('images/logos/logocalander.png') }}" alt="logocalander">
                    </div>
                    <h6 class="m-0">Date: {{ $promoDetail['tanggal_mulai'] }} - {{ $promoDetail['tanggal_selesai'] }}</h6>
                </div>
                <p class="text-justify">
                    {{ $promoDetail['deskripsi'] }}
                </p>

                {{-- Order Modal --}}
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ordering Application</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row row-cols-4 g-4 justify-content-center align-items-center">
                                    <div class="col">
                                        <a href="" class="d-flex justify-content-center">
                                            <img src="{{ asset('images/logos/logotraveloka.png') }}" alt=""
                                                 class="img-fluid rounded-4">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="" class="d-flex justify-content-center">
                                            <img src="{{ asset('images/logos/logotiketcom.png') }}" alt=""
                                                 class="img-fluid rounded-4">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="" class="d-flex justify-content-center">
                                            <img src="{{ asset('images/logos/logoaccesskai.png') }}" alt=""
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
