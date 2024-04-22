@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="section-title my-4">Jelajahi Berbagai Destinasi Wonosobo</h2>
    
    <div class="row row-cols-md-3 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xl-3 g-4">

       <div class="col highlight-item onpagination-load ">
          <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'alam']) }}">
              <img src="{{ asset('storage/destination-images/TelagaMenjer.jpg') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Wisata Alam" loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white fs-2 pb-2 mb-4">Wisata Alam</h6>
             </div>
          </a>
       </div>

       <div class="col highlight-item onpagination-load onhide">
          <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'petualangan']) }}">
              <img src="{{ asset('storage/destination-images/fgUKNEOY4iYnNEAN0bh4ok7o6Jg6PtlMq8k7zarl.jpg') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Bali" loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white fs-2 pb-2 mb-4">Wisata Petualangan</h6>
             </div>
          </a>
       </div>

       <div class="col highlight-item onpagination-load onhide">
          <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'perbelanjaan']) }}">
              <img src="{{ asset('images/destinationlogos/logodestinasibelanja.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Maluku & Papua" loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white fs-2 pb-2 mb-4">Wisata Perbelanjaan</h6>
             </div>
          </a>
       </div>

       <div class="col highlight-item onpagination-load onhide">
          <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'kuliner']) }}">
              <img src="{{ asset('storage/destination-images/vRKLpjZm3cko7C3L0rXYN9flsVU3qKQtbOAdeexI.webp') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Kalimantan" loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white fs-2 pb-2 mb-4">Wisata Kuliner</h6>
             </div>
          </a>
       </div>

       <div class="col highlight-item onpagination-load onhide">
          <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'industri']) }}">
              <img src="{{ asset('images/destinationlogos/logodestinasiindustri.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sulawesi" loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white fs-2 pb-2 mb-4">Wisata Industri</h6>
             </div>
          </a>
       </div>

       <div class="col highlight-item onpagination-load onhide">
          <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'budaya']) }}">
              <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white fs-2 pb-2 mb-4">Wisata Budaya</h6>
             </div>
          </a>
       </div>
       <div class="col highlight-item onpagination-load onhide">
        <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'pertanian']) }}">
            <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
           <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
              <h6 class="text-white fs-2 pb-2 mb-4">Wisata Pertanian</h6>
           </div>
        </a>
     </div>
     <div class="col highlight-item onpagination-load onhide">
        <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'perdesaan']) }}">
            <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
           <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
              <h6 class="text-white fs-2 pb-2 mb-4">Wisata Perdesaan</h6>
           </div>
        </a>
     </div>
     <div class="col highlight-item onpagination-load onhide">
        <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'religi']) }}">
            <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
           <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
              <h6 class="text-white fs-2 pb-2 mb-4">Wisata Religi</h6>
           </div>
        </a>
     </div>
     <div class="col highlight-item onpagination-load onhide">
        <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'industri kecil']) }}">
            <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
           <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
              <h6 class="text-white fs-2 pb-2 mb-4">Wisata Industri Kecil</h6>
           </div>
        </a>
     </div>
     <div class="col highlight-item onpagination-load onhide">
        <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'edukasi']) }}">
            <img src="{{ asset('images/destinationlogos/logodestinasiperdesaan.png') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
           <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
              <h6 class="text-white fs-2 pb-2 mb-4">Wisata Edukasi</h6>
           </div>
        </a>
     </div>
     <div class="col highlight-item onpagination-load onhide">
        <a style="--bs-aspect-ratio: 100%" class="ratio d-block rounded-3 overflow-hidden" href="{{ route('destination.fetch', ['jenis_wisata' => 'buatan']) }}">
            <img src="{{ asset('storage/destination-images/wadaslintang.jpg') }}" class="bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Sumatra" loading="lazy">
           <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
              <h6 class="text-white fs-2 pb-2 mb-4">Wisata Buatan</h6>
           </div>
        </a>
     </div>

    </div>
    
 </div>
@endsection
