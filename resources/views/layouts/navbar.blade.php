<nav class="navbar navbar-expand-lg navbar-dark py-3 {{ request()->routeIs('index') ? 'bg-black bg-opacity-50 fixed-top' : 'bg-my-primary sticky-top' }}" id="navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logos/logo.png') }}" alt="logo" width="400" height="auto">
        </a>
        <div class="gap-3 d-lg-none d-flex">
            <div class="logo-right">
                <img src="{{ asset('images/logos/logodinas.png') }}" alt="logodinas">
            </div>
            <div class="logo-right">
                <img src="{{ asset('images/logos/logo2.png') }}" alt="logo2">
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link text-white me-3" href="/">Beranda</a> <!-- Tambahkan margin kanan -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Destinasi Wisata
                    </a>
                    <ul class="dropdown-menu">
                    <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}" class="dropdown-item">Wisata Alam</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}" class="dropdown-item">Wisata Petualangan</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'perbelanjaan']) }}" class="dropdown-item">Wisata Perbelanjaan</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'kuliner']) }}" class="dropdown-item">Wisata Kuliner</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'industri']) }}" class="dropdown-item">Wisata Industri</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'budaya']) }}" class="dropdown-item">Wisata Budaya</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'pertanian']) }}" class="dropdown-item">Wisata Pertanian</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'perdesaan']) }}" class="dropdown-item">Wisata Perdesaan</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'religi']) }}" class="dropdown-item">Wisata Religi</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'industri kecil']) }}" class="dropdown-item">Wisata Industri Kecil</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'edukasi']) }}" class="dropdown-item">Wisata Edukasi</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'buatan']) }}" class="dropdown-item">Wisata Buatan</a></li>
                    </ul>
                </li>
                <a class="nav-link text-white me-3" href="{{route('promo.index')}}">Promo</a> <!-- Tambahkan margin kanan -->
                <a class="nav-link text-white me-3" href="{{route('hotel.index')}}">Hotel</a> <!-- Tambahkan margin kanan -->
                <a class="nav-link text-white me-3" href="{{route('event.fetch_all')}}">Event</a> <!-- Tambahkan margin kanan -->
                <a class="nav-link text-white" href="{{ route('about') }}">About</a>
            </div>
        </div>
        <div class=" gap-3 d-none d-lg-flex">
            <div class="logo-right">
                <img src="{{ asset('images/logos/logodinas.png') }}" alt="logodinas">
            </div>
            <div class="logo-right">
                <img src="{{ asset('images/logos/logo2.png') }}" alt="logo2">
            </div>
        </div>
    </div>
</nav>

@if (request()->routeIs('index'))
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.getElementById("navbar");
            if (window.scrollY > window.innerHeight / 4) {
                navbar.classList.remove("bg-black");
                navbar.classList.remove("bg-opacity-50");
                navbar.classList.add("bg-my-primary");
            } else {
                navbar.classList.remove("bg-my-primary");
                navbar.classList.add("bg-black");
                navbar.classList.add("bg-opacity-50");
            }
        });
    </script>
@endif
