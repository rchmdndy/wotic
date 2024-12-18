<nav class="navbar navbar-expand-sm navbar-dark py-2 {{ request()->routeIs('index') ? 'bg-black bg-opacity-50 fixed-top' : 'bg-my-primary sticky-top' }}"
    id="navbar">
    <div class="container">
        {{-- GAMBAR --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent"
            aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="collapse navbar-collapse" id="navbarSupportContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a
                        class="nav-link me-3 {{ Str::startsWith(Route::currentRouteName(), 'index') ? 'text-warning' : 'text-white' }}"
                        href="/"><strong>BERANDA</strong></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Str::startsWith(Route::currentRouteName(), 'destination.') ? 'text-warning' : 'text-white' }} me-3"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        aria-haspopup="true">
                        <strong>DESTINASI WISATA</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('destination.all') }}" class="dropdown-item">SEMUA WISATA</a></li>
                        <li><a href="{{ route('destination.categories') }}" class="dropdown-item">KATEGORI WISATA</a>
                        </li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}"
                                class="dropdown-item">WISATA ALAM</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'minat khusus']) }}"
                                class="dropdown-item">WISATA MINAT KHUSUS</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'budaya']) }}"
                                class="dropdown-item">WISATA BUDAYA</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'desa wisata']) }}"
                                class="dropdown-item">DESA WISATA</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'religi']) }}"
                                class="dropdown-item">WISATA RELIGI</a></li>
                        <li><a href="{{ route('destination.fetch', ['jenis_wisata' => 'buatan']) }}"
                                class="dropdown-item">WISATA BUATAN</a></li>
                        <li><a href="{{ route('destination.unik.all') }}" class="dropdown-item">WISATA UNIK</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a
                        class="nav-link me-3 {{ Str::startsWith(Route::currentRouteName(), 'promo.') ? 'text-warning' : 'text-white' }} me-3"
                        href="{{ route('promo.index') }}"><strong>EVENT</strong></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Str::startsWith(Route::currentRouteName(), 'hotel.') ? 'text-warning' : 'text-white' }} me-3"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        aria-haspopup="true">
                        <strong>PENGINAPAN</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('hotel.list', ['kelas_hotel' => 'hotel']) }}" class="dropdown-item">HOTEL</a></li>
                        <li><a href="{{ route('hotel.list', ['kelas_hotel' => 'villa']) }}" class="dropdown-item">VILLA</a></li>
                        <li><a href="{{ route('hotel.list', ['kelas_hotel' => 'homestay']) }}" class="dropdown-item">HOMESTAY</a></li>
                        <li><a href="{{ route('hotel.list', ['kelas_hotel' => 'pondok wisata']) }}" class="dropdown-item">PONDOK WISATA</a></li>
                        <li><a href="{{ route('hotel.list', ['kelas_hotel' => 'glamping']) }}" class="dropdown-item">GLAMPING</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init {{ Str::startsWith(Route::currentRouteName(), 'kuliner.') ? 'text-warning' : 'text-white' }} me-3"
                        href="#" role="button" data-bs-toggle="dropdown" data-mdb-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside" id="subdropdownMenu">
                        <strong>KULINER</strong>
                    </a>
                    <ul class="dropdown-menu data1" aria-labelledby="subdropdownMenu">
                        <li><a href="{{route("kuliner.list", ['jenis_kuliner' => 'restoran'])}}" class="dropdown-item">RESTORAN</a></li>
                        <li><a href="{{route("kuliner.list", ['jenis_kuliner' => 'kuliner'])}}" class="dropdown-item">KULINER</a></li>
                        <li><a href="{{route("kuliner.list", ['jenis_kuliner' => 'toko oleh oleh'])}}" class="dropdown-item">TOKO OLEH-OLEH</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init {{ Str::startsWith(Route::currentRouteName(), 'kuliner.') ? 'text-warning' : 'text-white' }} me-3"
                       href="#" role="button" data-bs-toggle="dropdown" data-mdb-toggle="dropdown"
                       aria-expanded="false" data-bs-auto-close="outside" id="subdropdownMenu">
                        <strong>LAYANAN</strong>
                    </a>
                    <ul class="dropdown-menu data1" aria-labelledby="subdropdownMenu">
                        <li><a href="{{ route('layanan.categories') }}" class="dropdown-item">KATEGORI LAYANAN</a>
                        </li>
                        <li>
                            <a class="dropdown-item dropdown-toggle " data-bs-auto-close="inside"
                               data-bs-toggle="dropdown" href="#">KESEHATAN</a>
                            <ul class="dropdown-menu dropdown-submenu data2 ">
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'rumah sakit'])}}">RUMAH SAKIT</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'puskesmas'])}}">PUSKESMAS</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'klinik'])}}">KLINIK</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'ambulance'])}}">AMBULANCE</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'apotik'])}}">APOTIK</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item dropdown-toggle " data-bs-auto-close="inside"
                               data-bs-toggle="dropdown" href="#">TRANSPORTASI</a>
                            <ul class="dropdown-menu dropdown-submenu data2 ">
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'bus'])}}">BUS</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'shuttle'])}}">SHUTTLE</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'jeep wisata'])}}">JEEP WISATA</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'ojek wisata'])}}">OJEK WISATA</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('layanan.list', ['jenis_layanan' => 'biro perjalanan wisata']) }}"
                               class="dropdown-item">BIRO PERJALANAN WISATA</a></li>
                        <li><a href="{{ route('layanan.list', ['jenis_layanan' => 'pemandu wisata']) }}"
                               class="dropdown-item">PEMANDU WISATA</a></li>
                        <li>
                            <a class="dropdown-item dropdown-toggle " data-bs-auto-close="inside"
                               data-bs-toggle="dropdown" href="#">BENGKEL</a>
                            <ul class="dropdown-menu dropdown-submenu data2 ">
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'bengkel motor'])}}">BENGKEL MOTOR</a></li>
                                <li><a class="dropdown-item " href="{{route('layanan.list', ['jenis_layanan' => 'bengkel mobil'])}}">BENGKEL MOBIL</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
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
<style>
    .dropdown-menu {
        overflow: visible;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        position: absolute;
        top: 0;
        left: 100%;
        margin-left: 10px;
        display: none;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .navbar .dropdown-menu {
        overflow: visible !important;
    }

    .dropdown-menu {
        min-height: 0;
        overflow-y: scroll;
        z-index: 1050;
        scrollbar-width: none;
    }

    .dropdown-menu::-webkit-scrollbar {
        display: none;
    }
</style>
