@extends('layouts.layout')

@section('content')
    <section class="mt-3 container">
        <div class="row row-cols-md-2 row-cols-1 g-3 mt-3 align-items-center" id="destinationDetail">
            <!-- Destination detail will be replaced here -->
        </div>
    </section>
    <script>
        // Make AJAX request to the API endpoint for destination detail
        fetch('{{ route('api.destination.detail', $id) }}')
            .then(response => response.json())
            .then(destination => {
                console.log('Destination Detail:', destination); // Log the destination detail

                const destinationDetailDiv = document.getElementById('destinationDetail');

                // Create HTML structure for destination detail
                const destinationDetailHTML = `
                    <div class="col">
                        <img src="${destination.image}" alt="" class="img-fluid rounded-4">
                    </div>
                    <div class="col">
                        <h1>${destination.nama_destinasi}</h1>
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <i class="bi bi-map"></i>
                            <h6 class="mb-0 text-body-secondary">${destination.desa}</h6>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <i class="bi bi-cash fs-6"></i>
                            <h6 class="mb-0 text-body-secondary">${destination.tiket_weekend_local ? 'IDR ' + parseInt(destination.tiket_weekend_local).toLocaleString('id-ID') : ''}</h6>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-geo-alt fs-6"></i>
                            <h6 class="mb-0 text-body-secondary">${destination.lokasi}</h6>
                        </div>
                        <p style="text-align: justify">${destination.deskripsi}</p>
                        <button type="button" class="btn btn-success px-3 py-2 btn-sm rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            Pesan Sekarang
                        </button>
                    </div>
                `;

                // Append destination detail HTML to destinationDetailDiv
                destinationDetailDiv.innerHTML = destinationDetailHTML;
            })
            .catch(error => console.error('Error fetching destination detail:', error));
    </script>
@endsection
