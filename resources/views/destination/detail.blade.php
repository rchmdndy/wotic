@extends('layouts.layout')

@section('content')
    <section class="mt-3 container">
        <div class="row row-cols-md-2 row-cols-1 g-3 mt-3 align-items-center">
            <div class="col">
                <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="" class="img-fluid rounded-4">
            </div>
            <div class="col">
                <h1>Bukit Cinta</h1>
                <div class="d-flex align-items-center gap-3 mb-2">
                    <i class="bi bi-map"></i>
                    <h6 class="mb-0 text-body-secondary">Ds Dieng</h6>
                </div>
                <div class="d-flex align-items-center gap-3 mb-2">
                    <i class="bi bi-cash fs-6"></i>
                    <h6 class="mb-0 text-body-secondary">Rp. 22.000 / Orang</h6>
                </div>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <i class="bi bi-geo-alt fs-6"></i>
                    <h6 class="mb-0 text-body-secondary">Water Spot</h6>
                </div>
                <p style="text-align: justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, labore eius quisquam possimus expedita
                    neque quibusdam magnam corporis aut eos ullam cupiditate, facilis suscipit aspernatur itaque vel ipsum
                    aliquam adipisci illo corrupti veritatis cum deleniti recusandae nobis? Aliquid totam mollitia nihil
                    ducimus? Neque perspiciatis voluptates ullam aperiam iste maiores consequatur reiciendis quam quis saepe
                    itaque asperiores eaque, aliquid repellat laudantium quaerat libero explicabo! Ipsum officia hic libero
                    magnam ea doloribus porro vero corrupti maxime eaque commodi quam culpa, dolores veritatis voluptas
                    voluptates quis aperiam. Accusantium, similique veritatis fugit dolorum earum doloremque ex cumque
                    aliquid tempore fuga doloribus ipsum, porro laborum?
                </p>
                <button type="button" class="btn btn-success px-3 py-2 btn-sm rounded-5" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">
                    Pesan Sekarang
                </button>
            </div>
        </div>
        {{-- Modal Peta --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peta</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8265648879797!2d109.92031437528301!3d-7.26057017133355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b6b00281b81%3A0x2ab039fe685b1b36!2sBukit%20Cinta%20Lembah%20Seroja!5e0!3m2!1sid!2sid!4v1711798107171!5m2!1sid!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Pesan --}}
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Aplikasi Pemesanan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
    </section>
@endsection
