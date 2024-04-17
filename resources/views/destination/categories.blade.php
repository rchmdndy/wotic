@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">Kalender Event 2024</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4">
            <!-- CARD START -->
            <div class="card mb-3 card-event shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/events/event1.jpeg') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="" class="btn btn-primary btn-sm rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD END -->
            <div class="card mb-3 card-event shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/events/event1.jpeg') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="" class="btn btn-primary btn-sm rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-event shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/events/event1.jpeg') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="" class="btn btn-primary btn-sm rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-event shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/events/event1.jpeg') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="" class="btn btn-primary btn-sm rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
