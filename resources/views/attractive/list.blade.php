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
        fetch('https://wotic.id/api/v2/wonosobo/getAllAttractiveDestination')
            .then(response => response.json())
            .then(destinasiList => {
                console.log('Data from API:', destinasiList); // Log the data from the API
                const destinationListDiv = document.getElementById('destinationList');

                // Iterate over the destination list returned by the API
                destinasiList.forEach(destinasi => {
                    console.log('Destination:', destinasi); // Log each destination object

                    const cardDiv = document.createElement('div');
                    cardDiv.classList.add('col', 'destination-card'); // Add 'destination-card' class


                    // Check if the image exists, if not, set it to the default image
                        cardDiv.innerHTML = `
                            <div class="card-content">

                                    <div class="card h-100 w-100 card-list-wisata rounded-4 card-bg shadow p-3 mb-2">
                                        <div class="card-body">
                                            <div class="row row-cols-md-2 row-cols-1 g-3">
                                                <div class="col">
                                                    <img src="${destinasi.image}" alt="Image" class="img-fluid rounded-4">
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
                                </a>
                            </div>
                        `;
                    destinationListDiv.appendChild(cardDiv);
            })
            .catch(error => console.error('Error fetching data:', error));},)
    </script>
@endsection
