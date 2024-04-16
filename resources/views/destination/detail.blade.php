@extends('layouts.layout')

@section('content')
    <section class="mt-3 container">
        <div class="row row-cols-md-2 row-cols-1 g-3 mt-3 align-items-center" id="destinationDetail">

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
    <script>
        // Make AJAX request to fetch destination detail
        fetchDestinationDetail();

        function fetchDestinationDetail() {
            const jenisWisata = '{{ $jenis_wisata }}';
            const destinationId = '{{ $id }}';

            fetch('{{ route('api.destination.detail', ['jenis_wisata' => $jenis_wisata, 'id' => $id]) }}')
                .then(response => response.json())
                .then(data => {
                    const destinationDetailDiv = document.getElementById('destinationDetail');
                    const defaultImageSrc = '{{ asset('storage/default.jpg') }}';

                    const destinasi = data.destinasi;
                    const images = data.image;

                    // Function to check if the image exists
                    function checkImage(imageSrc) {
                        return new Promise((resolve, reject) => {
                            fetch(imageSrc, { method: 'HEAD' })
                                .then(response => {
                                    if (response.ok) {
                                        resolve(true); // Image exists
                                    } else {
                                        resolve(false); // Image doesn't exist
                                    }
                                })
                                .catch(error => {
                                    console.error('Error checking image:', error);
                                    reject(error);
                                });
                        });
                    }

                    // Check if any image exists
                    const imageSrcPromise = images.length > 0 ? checkImage(`{{ asset('storage/') }}/${images[0].image_path}`) : Promise.resolve(false);

                    // Resolve the promise to determine the image source
                    imageSrcPromise
                        .then(imageExists => {
                            const imageSrc = imageExists ? `{{ asset('storage/') }}/${images[0].image_path}` : defaultImageSrc;

                            destinationDetailDiv.innerHTML = `
                                <div class="col">
                            <img src="${imageSrc}" alt="Image" class="img-fluid rounded-4">
                        </div>
                        <div class="col">
                            <h1>${destinasi.nama_destinasi}</h1>
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <i class="bi bi-map"></i>
                                <h6 class="mb-0 text-body-secondary">${destinasi.desa}</h6>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <i class="bi bi-cash fs-6"></i>
                                <h6 class="mb-0 text-body-secondary">${destinasi.tiket_weekend_local ? 'IDR ' + parseInt(destinasi.tiket_weekend_local).toLocaleString('id-ID') : ''}</h6>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <i class="bi bi-geo-alt fs-6"></i>
                                <h6 class="mb-0 text-body-secondary">${destinasi.jenis_wisata}</h6>
                            </div>
                            <p style="text-align: justify">${destinasi.deskripsi}</p>
                            <button type="button" class="btn btn-success px-3 py-2 btn-sm rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Pesan Sekarang
                            </button>
                        </div>
                            `;
                        })
                        .catch(error => console.error('Error checking image:', error));
                })
                .catch(error => console.error('Error fetching destination detail:', error));
        }
    </script>
@endsection
