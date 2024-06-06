<nav class="navbar navbar-expand-lg navbar-dark py-2 {{ request()->routeIs('index') ? 'bg-black bg-opacity-50 fixed-top' : 'bg-my-primary sticky-top' }}" id="navbar">
    <div class="container">
        {{-- GAMBAR --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logos/wotic.png') }}" alt="logo" width="300" height="80">
        </a>
        <div class="gap-3 d-lg-none d-flex">
            <div class="logo-right">
                <img src="{{ asset('images/logos/logodinas.png') }}" alt="logodinas">
            </div>
            <div class="logo-right">
                <img src="{{ asset('images/logos/logo2.png') }}" alt="logo2">
            </div>
        </div>
        {{-- END GAMBAR --}}
        {{-- TENGAH --}}
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link me-3 {{\Illuminate\Support\Facades\Route::currentRouteName()=='index' ? 'text-warning' : 'text-white'}}" href="/"><strong>BERANDA</strong></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{str_contains(request()->route()->getPrefix(), 'destinasi_wisata') ? 'text-warning' : 'text-white'}} me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                        <strong>DESTINASI WISATA</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('destination.all')}}" class="dropdown-item">SEMUA WISATA</a></li>
                        <li><a href="{{ route('destination.categories')}}" class="dropdown-item">KATEGORI WISATA</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}" class="dropdown-item">WISATA ALAM</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}" class="dropdown-item">WISATA PETUALANGAN</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'perbelanjaan']) }}" class="dropdown-item">WISATA PERBELANJAAN</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'kuliner']) }}" class="dropdown-item">WISATA KULINER</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'industri']) }}" class="dropdown-item">WISATA INDUSTRI</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'budaya']) }}" class="dropdown-item">WISATA BUDAYA</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'pertanian']) }}" class="dropdown-item">WISATA PERTANIAN</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'perdesaan']) }}" class="dropdown-item">WISATA PERDESAAN</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'religi']) }}" class="dropdown-item">WISATA RELIGI</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'industri kecil']) }}" class="dropdown-item">WISATA INDUSTRI KECIL</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'edukasi']) }}" class="dropdown-item">WISATA EDUKASI</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'buatan']) }}" class="dropdown-item">WISATA BUATAN</a></li>
                    </ul>
                </li>
                <li><a class="nav-link {{str_contains(request()->route()->getPrefix(), 'promo') ? 'text-warning' : 'text-white'}} me-3" href="{{route('promo.index')}}"><strong>PROMO</strong></a></li> <!-- Tambahkan margin kanan -->
            <li><a class="nav-link {{str_contains(request()->route()->getPrefix(), 'hotel') ? 'text-warning' : 'text-white'}} me-3" href="{{route('hotel.index')}}"><strong>HOTEL</strong></a></li> <!-- Tambahkan margin kanan -->
        <li><a class="nav-link {{str_contains(request()->route()->getPrefix(), 'event') ? 'text-warning' : 'text-white'}} me-3" href="{{route('event.fetch_all')}}"><strong>EVENT</strong></a></li> <!-- Tambahkan margin kanan -->
        <li><a class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='about' ? 'text-warning' : 'text-white'}}" href="{{ route('about') }}"><strong>TENTANG</strong></a></li>
            </ul>
        </div>
        {{-- END TENGAH --}}
        <div class="gap-3 d-none d-lg-flex">
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

<style>
    .nav-link:hover {
        color: #ffcc00 !important; /* Contoh warna hover: kuning */
    }
</style>
