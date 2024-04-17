@extends('layouts.layout')

@section('content')
    <section class="container mt-3">
        <h1 class="text-center fs-4 mt-3">List Wisata</h1>

        <div class="row row-cols-md-2 row-cols-1 mt-3 g-4" id="destinationList">
            <!-- Destination items will be appended here -->
        </div>
    </section>
    <script>
        // Make AJAX request to the API endpoint
        fetch('{{ route('api.destination.type', ['jenis_wisata' => $jenis_wisata]) }}')
            .then(response => response.json())
            .then(destinasiList => {
                console.log('Data from API:', destinasiList); // Log the data from the API
                const destinationListDiv = document.getElementById('destinationList');

                // Iterate over the destination list returned by the API
                destinasiList.forEach(destinasi => {
                    console.log('Destination:', destinasi); // Log each destination object

                    const cardDiv = document.createElement('div');
                    cardDiv.classList.add('col');

                    const imageSrc = destinasi.image;
                    console.log('Image source:', imageSrc); // Log the image source

                    const defaultImageSrc = "{{ asset('storage/default.jpg') }}";

                    // Check if the image exists, if not, set it to the default image
                    const img = new Image();
                    img.src = imageSrc;
                    img.onload = function() {
                        const detailUrl = `{{ route('destination.detail', ['jenis_wisata' => $jenis_wisata, 'id' => ':destinasiId']) }}`;
                        const urlWithId = detailUrl.replace(':destinasiId', destinasi.id);
                        cardDiv.innerHTML = `
                            <div class="card-content">
                                <a href="${urlWithId}">
                                <div class="card h-100 w-100 card-list-wisata rounded-4 card-bg shadow p-3 mb-4">
                                    <div class="card-body">
                                        <div class="row row-cols-md-2 row-cols-1 g-3">
                                            <div class="col">
                                                <img src="${imageSrc}" alt="Image" class="img-fluid rounded-4">
                                            </div>
                                            <div class="col">
                                                <h5 class="card-title mb-3">${destinasi.nama_destinasi}</h5>
                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <i class="bi bi-map"></i>
                                                    <h6 class="card-subtitle text-body-secondary">${destinasi.desa}</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <i class="bi bi-cash fs-6"></i>
                                                    <h6 class="card-subtitle text-body-secondary">${destinasi.tiket_weekend_local ? 'IDR ' + parseInt(destinasi.tiket_weekend_local).toLocaleString('id-ID') : ''}</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <i class="bi bi-geo-alt fs-6"></i>
                                                    <h6 class="card-subtitle text-body-secondary">${destinasi.jenis_wisata}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    };
                    img.onerror = function() {
                        const detailUrl = `{{ route('destination.detail', ['jenis_wisata' => $jenis_wisata, 'id' => ':destinasiId']) }}`;
                        const urlWithId = detailUrl.replace(':destinasiId', destinasi.id);
                        cardDiv.innerHTML = `
                            <div class="card-content">
                                <a href="${urlWithId}">
                            <div class="card h-100 w-100 card-list-wisata rounded-4">
                                <div class="card-body">
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <img src="${defaultImageSrc}" alt="Default Image" class="img-fluid rounded-4">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title mb-3">${destinasi.nama_destinasi}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-2">
                                                <i class="bi bi-map"></i>
                                                <h6 class="card-subtitle text-body-secondary">${destinasi.desa}</h6>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-2">
                                                <i class="bi bi-cash fs-6"></i>
                                                <h6 class="card-subtitle text-body-secondary">${destinasi.tiket_weekend_local ? 'IDR ' + parseInt(destinasi.tiket_weekend_local).toLocaleString('id-ID') : ''}</h6>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-2">
                                                    <i class="bi bi-geo-alt fs-6"></i>
                                                    <h6 class="card-subtitle text-body-secondary">${destinasi.jenis_wisata}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    };

                    destinationListDiv.appendChild(cardDiv);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
@endsection

