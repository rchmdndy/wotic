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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan disini</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-4 g-4 justify-content-center align-items-center">
                            <div class="col">
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('images/logos/logotraveloka.png') }}" alt="" class="img-fluid rounded-4">
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('images/logos/logotiketcom.png') }}" alt="" class="img-fluid rounded-4">
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('images/logos/logoaccesskai.png') }}" alt="" class="img-fluid rounded-4">
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

                    // Check if the image array has more than one item
                    if (images.length > 1) {
                        // If there are multiple images, generate carousel HTML
                        let carouselItemsHtml = '';
                        images.forEach((image, index) => {
                            const imageSrc = `{{ asset('storage/') }}/${image.image_path}`;
                            carouselItemsHtml += `
                                <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                    <div class="destination-image">
                                        <img src="${imageSrc}" class="d-block w-100" alt="Image">
                                    </div>
                                </div>`;
                        });

                        // Generate the carousel HTML
                        destinationDetailDiv.innerHTML = `
                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    ${carouselItemsHtml}
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>`;
                    } else {
                        // If there's only one image, display it without the carousel
                        const imageSrc = images.length > 0 ? `{{ asset('storage/') }}/${images[0].image_path}` : defaultImageSrc;
                        destinationDetailDiv.innerHTML = `
                            <div class="col destination-image">
                                <img src="${imageSrc}" alt="Image" class="img-fluid rounded-4">
                            </div>`;
                    }

                    // Display other destination details (name, description, etc.)
                    destinationDetailDiv.innerHTML += `
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
                        </div>`;
                })
                .catch(error => console.error('Error fetching destination detail:', error));
        }
    </script>
@endsection
