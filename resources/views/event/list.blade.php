@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center fw-medium">Kalender Event 2024</h1>
        <div class="d-flex flex-column align-items-center mt-4 gap-4" id="eventList">
            <!-- Event items will be appended here -->
        </div>
    </div>

    <script>
        // Make AJAX request to the API endpoint
        fetch('http://wootic.test/api/v2/wonosobo/getAllEvent')
            .then(response => response.json())
            .then(events => {
                const eventListDiv = document.getElementById('eventList');

                // Iterate over the event list returned by the API
                events.forEach(event => {
                    const eventCardDiv = document.createElement('div');
                    eventCardDiv.classList.add('card', 'mb-3', 'card-event');
                    eventCardDiv.addEventListener('click', function() {
                        window.location.href = `/event/${event.id}/detail`;
                    });

                    eventCardDiv.innerHTML = `
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="${event.image}" class="img-fluid" alt="${event.nama_event}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">${event.nama_event}</h5>
                                        <p class="card-text"><small class="text-body-secondary">Tanggal Mulai: ${event.tanggal_mulai}</small></p>
                                    </div>
                                    <p class="card-text">${event.deskripsi}</p>
                                </div>
                            </div>x     x
                        </div>
                    `;

                    eventListDiv.appendChild(eventCardDiv);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
@endsection
