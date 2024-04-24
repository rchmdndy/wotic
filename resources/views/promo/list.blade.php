@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">Kalender Promo 2024</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4" id="promoList">
            <!-- Promo items will be appended here -->
        </div>
    </div>

    <script>
        // Make AJAX request to the API endpoint
            fetch('http://serverapi.test/api/v1/promo')
            .then(response => response.json())
            .then(promos => {
                const promoListDiv = document.getElementById('promoList');

                // Iterate over the promo list returned by the API
                promos.forEach(promo => {
                    const promoCardDiv = document.createElement('div');
                    promoCardDiv.classList.add('card', 'mb-3', 'card-promo');
                    promoCardDiv.addEventListener('click', function() {
                        window.location.href = `/promo/${promo.id}/detail`;
                    });

                    promoCardDiv.innerHTML = `
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="${promo.image}" class="img-fluid" alt="${promo.nama_promo}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">${promo.nama_promo}</h5>

                                    </div>
                                     <p class="card-text"><small class="text-body-secondary">Start Date: ${promo.tanggal_mulai}</small></p>
                                        <p class="card-text"><small class="text-body-secondary">End Date: ${promo.tanggal_selesai}</small></p>
                                </div>
                            </div>
                        </div>
                    `;

                    promoListDiv.appendChild(promoCardDiv);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
@endsection
