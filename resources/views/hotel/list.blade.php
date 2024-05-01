@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">List Hotel</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4" id="hotelList">
            <!-- Hotel items will be appended here -->
        </div>
    </div>

    <script>
        // Make AJAX request to the API endpoint for hotels
        fetch('http://serverapi.test/api/v1/hotels')
            .then(response => response.json())
            .then(hotels => {
                const hotelListDiv = document.getElementById('hotelList');

                // Iterate over the hotel list returned by the API
                hotels.forEach(hotel => {
                    const hotelCardDiv = document.createElement('div');
                    hotelCardDiv.classList.add('card', 'mb-3', 'card-hotel');
                    hotelCardDiv.addEventListener('click', function() {
                        window.location.href = `/hotel/${hotel.id}/detail`;
                    });

                    hotelCardDiv.innerHTML = `
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="${hotel.image}" class="img-fluid" alt="${hotel.nama_hotel}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">${hotel.nama_hotel}</h5>
                                        <p class="card-text"><small class="text-body-secondary">Kelas: ${hotel.kelas}</small></p>
                                    </div>
                                    <p class="card-text">Alamat: ${hotel.alamat}</p>
                                </div>
                            </div>
                        </div>
                    `;

                    hotelListDiv.appendChild(hotelCardDiv);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
@endsection
