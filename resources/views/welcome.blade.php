@extends('layouts.layout')

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <div id="carouselExampleAutoplaying" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/wisata/dieng kulon.jpg') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/wisata/balonudarafes.jpg') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/events/dieng.jpg') }}" alt="...">
                </div>
            </div>
        </div>
        <div class="text-wrapper w-100 d-flex flex-column align-items-center">
            <h1 class="text-white text-center">SELAMAT DATANG DI WEBSITE</h1>
            <p class="text-white text-center">WONOSOBO TOURISM INFORMATION CENTER</p>
            <a href="/destination" class="btn btn-primary rounded-pill">Cari Sekarang</a>
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Informasi --}}
    <section class="information-wrapper">
        <div class="information w-100 d-flex flex-column align-items-center">
            <h1 class="information-title">
                Informasi apa yang anda cari ?
            </h1>
            <div class="d-flex gap-3 mt-3 justify-content-center w-100">
                <a href="{{ route('destination.categories') }}"
                   class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/destinasilogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Destinasi wisata
                    </p>
                </a>
                <a href="{{route('promo.index')}}" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/promologo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Promo wisata
                    </p>
                </a>
                <a href="#" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/umkmlogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        UMKM wisata
                    </p>
                </a>
                <a href="#" class="d-flex flex-column gap-1 align-items-center text-decoration-none text-black">
                    <div class="information-image">
                        <img src="{{ asset('images/logos/lainnyalogo.png') }}" alt="" />
                    </div>
                    <p class="information-text">
                        Lainnya
                    </p>
                </a>
            </div>
        </div>
    </section>
    {{-- End Informasi --}}
{{--    Wisata Unik--}}
    <section class="wisata-wrapper">
        <div class="container">
            <h1 class="wisata-title text-center">Wisata Unik</h1>
            <div class="wisata d-none d-lg-flex">
                <a href="" class="text-decoration-none text-black w-100 h-100">
                    <div class="card h-100 rounded-5 shadow">
                        <div class="card-img-top rounded-top-5">
                            <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1" class="rounded-top-5">
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Rome, Italy</h5>
                                <h5 class="text-secondary">$ 500</h5>
                            </div>
                            <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none text-black w-100 h-100">
                    <div class="card h-100 rounded-5 shadow">
                        <div class="card-img-top rounded-top-5">
                            <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1" class="rounded-top-5">
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Rome, Italy</h5>
                                <h5 class="text-secondary">$ 500</h5>
                            </div>
                            <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none text-black w-100 h-100">
                    <div class="card h-100 rounded-5 shadow">
                        <div class="card-img-top rounded-top-5">
                            <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                 class="rounded-top-5">
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Rome, Italy</h5>
                                <h5 class="text-secondary">$ 500</h5>
                            </div>
                            <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none text-black w-100 h-100">
                    <div class="card h-100 rounded-5 shadow">
                        <div class="card-img-top rounded-top-5">
                            <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                 class="rounded-top-5">
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Rome, Italy</h5>
                                <h5 class="text-secondary">$ 500</h5>
                            </div>
                            <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none text-black w-100 h-100">
                    <div class="card h-100 rounded-5 shadow">
                        <div class="card-img-top rounded-top-5">
                            <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                 class="rounded-top-5">
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Rome, Italy</h5>
                                <h5 class="text-secondary">$ 500</h5>
                            </div>
                            <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none text-black w-100 h-100">
                    <div class="card h-100 rounded-5 shadow">
                        <div class="card-img-top rounded-top-5">
                            <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                 class="rounded-top-5">
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Rome, Italy</h5>
                                <h5 class="text-secondary">$ 500</h5>
                            </div>
                            <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                        </div>
                    </div>
                </a>
            </div>
            <div id="wisataunik" class="carousel slide d-lg-none d-sm-block" data-bs-ride="carousel">
                <div class="carousel-inner py-3">
                    <div class="carousel-item active">
                        <a href="" class="text-decoration-none text-black w-100 h-100">
                            <div class="card h-100 rounded-5 shadow">
                                <div class="card-img-top rounded-top-5">
                                    <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                         class="rounded-top-5">
                                </div>
                                <div class="card-body d-flex flex-column gap-5">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Rome, Italy</h5>
                                        <h5 class="text-secondary">$ 500</h5>
                                    </div>
                                    <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="" class="text-decoration-none text-black w-100 h-100">
                            <div class="card h-100 rounded-5 shadow">
                                <div class="card-img-top rounded-top-5">
                                    <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                         class="rounded-top-5">
                                </div>
                                <div class="card-body d-flex flex-column gap-5">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Rome, Italy</h5>
                                        <h5 class="text-secondary">$ 500</h5>
                                    </div>
                                    <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="" class="text-decoration-none text-black w-100 h-100">
                            <div class="card h-100 rounded-5 shadow">
                                <div class="card-img-top rounded-top-5">
                                    <img src="{{ asset('images/wisata/bukitcinta.webp') }}" alt="wisata1"
                                         class="rounded-top-5">
                                </div>
                                <div class="card-body d-flex flex-column gap-5">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Rome, Italy</h5>
                                        <h5 class="text-secondary">$ 500</h5>
                                    </div>
                                    <p class="card-text"><i class="bi bi-send-fill me-4"></i> 10 Days Trip</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#wisataunik" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#wisataunik" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
{{--    End Wisata Unik--}}

    {{-- Rekomendasi --}}
    <section class="rekomendasi-wrapper">
        <div class="rekomendasi">
            <h1 class="text-center fw-normal rekomendasi-title mb-5">Kalender Event</h1>
            <div id="carouselCalender" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card rounded-4">
                            <h5 class="card-header text-center bg-my-primary text-white">January</h5>
                            <div class="card-body d-flex flex-column gap-3 px-4">
                                <a href="" class="d-flex align-items-center text-decoration-none text-black">
                                    <i
                                        class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                        <span class="position-absolute fs-6">5</span>
                                    </i>
                                    Grebeg Sudiro Tahun
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded-4">
                            <h5 class="card-header text-center bg-my-primary text-white">February</h5>
                            <div class="card-body d-flex flex-column gap-3 px-4">
                                <a href="" class="d-flex align-items-center text-decoration-none text-black">
                                    <i
                                        class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                        <span class="position-absolute fs-6">10</span>
                                    </i>
                                    Cap Go Meh Singkawang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded-4">
                            <h5 class="card-header text-center bg-my-primary text-white">March</h5>
                            <div class="card-body d-flex flex-column gap-3 px-4">
                                <!-- Isi kartu acara di sini -->
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCalender"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCalender"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    {{-- End Rekomendasi --}}
@endsection

<script>
    // Make AJAX request to the API endpoint
    fetch('https://wotic.id/api/v2/wonosobo/getAllAttractiveDestination')
        .then(response => response.json())
        .then(promos => {
            const promoListDiv = document.getElementById('promoList');

            // Iterate over the promo list returned by the API
            promos.forEach(promo => {
                const promoCardDiv = document.createElement('div');
                promoCardDiv.classList.add('mb-3', 'card-promo');
                promoCardDiv.addEventListener('click', function() {
                    window.location.href = `/promo/${promo.id}/detail`;
                });

                promoCardDiv.innerHTML = `
                <div class="container">
                    <h1 class="wisata-title text-center">${promo.title}</h1>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <a href="" class="text-decoration-none text-black">
                                <div class="h-100 rounded-5 shadow">
                                    <img src="${promo.image}" alt="${promo.title}" class="card-img-top rounded-top-5 img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title">${promo.location}</h5>
                                        <h5 class="text-secondary">$ ${promo.price}</h5>
                                        <p class="card-text"><i class="bi bi-send-fill me-2"></i> ${promo.duration}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            `;

                promoListDiv.appendChild(promoCardDiv);
            });
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
        });
</script>
