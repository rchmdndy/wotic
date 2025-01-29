@extends('layouts.layout')

@section('content')

<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="images/logos/balon.png" alt="About 1" width="500" height="500">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3">Tentang Kami</h2>
            <p class="lead fs-4 text-secondary mb-3">Selamat datang di Wotic - pusat informasi pariwisata terkemuka untuk destinasi wisata di Wonosobo,
                Indonesia!
            </p>
            <p class="mb-5 text-justify">Kami bertekad untuk memberikan pengalaman tak terlupakan kepada para wisatawan yang ingin menjelajahi keindahan alam, petualangan seru, perbelanjaan, kuliner lezat, budaya yang kaya, serta acara menarik sepanjang tahun dikota ini.Dengan informasi lengkap dan terpercaya tentang destinasi wisata di Wonosobo, foto-foto yang memukau, dan kalender acara yang terus diperbarui, Wotic menjadi teman setia Anda dalam merencanakan petualangan yang tak terlupakan. Jelajahi keberagaman destinasi wisata kami, mulai dari alam yang memukau hingga kuliner yang lezat, dan tetap terhubung dengan event - event spesial melalui fitur pencarian yang mudah digunakan.Mari temukan keindahan dan kekayaan Wonosobo bersama Wotic! Selamat menikmati perjalanan Anda dan ciptakan
                pengalaman tak terlupakan di kota ini!</p>

            <!-- Visitor Count Card -->
            <div class="card shadow-sm bg-light border-primary">
              <div class="card-body">
                <h5 class="card-title">
                    <i class="bi bi-people-fill me-2"></i>Jumlah Pengunjung Website
                </h5>
                <div class="center">
                    <p class="card-text display-2 my-5 text-center">{{ $visitCount }}</p>
                </div>
                <p class="card-text text-muted">Terima kasih telah mengunjungi Wotic!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

@endsection
