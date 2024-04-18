<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top bg-black bg-opacity-50" id="navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-dark" href="#">
            <img src="{{ asset('images/logos/logo.png') }}" alt="logo">
        </a>
        <div class="gap-3 d-lg-none d-flex">
            <div class="logo-right">
                <img src="{{ asset('images/logos/logodinas.png') }}" alt="logodinas">
            </div>
            |
            <div class="logo-right">
                <img src="{{ asset('images/logos/logo2.png') }}" alt="logo2">
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white fw-bold">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="/event">Event</a>
                </li>
            </ul>
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
