@extends('layouts.layout')

@section('content')
    <div class="container mt-3 event">
        <h1 class="text-center fw-medium">Kalender Event 2024</h1>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 mt-3">
            <!-- Event cards will be dynamically added here -->
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetchEvents();

            function fetchEvents() {
                fetch('http://localhost:8000/api/v1/events')
                    .then(response => response.json())
                    .then(events => {
                        const eventListDiv = document.querySelector('.row.row-cols-lg-3.row-cols-md-2.row-cols-1.g-4.mt-3');

                        events.forEach(event => {
                            const eventCardDiv = document.createElement('div');
                            eventCardDiv.classList.add('col');
                            eventCardDiv.innerHTML = `
                                <div class="card rounded-4">
                                    <h5 class="card-header text-center bg-my-primary text-white">${event.month}</h5>
                                    <div class="card-body d-flex flex-column gap-3 px-5">
                                        <a href="#" class="d-flex align-items-center text-decoration-none text-black">
                                            <i class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                <span class="position-absolute fs-6">${event.date}</span>
                                            </i>
                                            ${event.name}
                                        </a>
                                    </div>
                                </div>
                            `;
                            eventListDiv.appendChild(eventCardDiv);
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }
        });
    </script>
@endsection
