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
                fetch('http://serverapi.test/api/v1/events')
                    .then(response => response.json())
                    .then(events => {
                        // Sort events by tanggal_mulai
                        events.sort((a, b) => new Date(a.tanggal_mulai) - new Date(b.tanggal_mulai));

                        const eventListDiv = document.querySelector('.row.row-cols-lg-3.row-cols-md-2.row-cols-1.g-4.mt-3');

                        // Group events by month
                        const eventsByMonth = groupEventsByMonth(events);

                        // Create card for each month
                        Object.keys(eventsByMonth).forEach(month => {
                            const eventCardDiv = document.createElement('div');
                            eventCardDiv.classList.add('col');
                            eventCardDiv.innerHTML = `
                                <div class="card rounded-4">
                                    <h5 class="card-header text-center bg-my-primary text-white">${month}</h5>
                                    <div class="card-body d-flex flex-column gap-3 px-5">
                                        ${eventsByMonth[month].map(event => `
                                            <a href="/event/${event.id}/detail" class="d-flex align-items-center text-decoration-none text-black">
                                                <i class="bi bi-calendar d-flex align-items-center justify-content-center me-2 fw-bold fs-2 position-relative">
                                                    <span class="position-absolute fs-6">${event.hari_mulai}</span>
                                                </i>
                                                ${event.nama_event}
                                            </a>
                                        `).join('')}
                                    </div>
                                </div>
                            `;
                            eventListDiv.appendChild(eventCardDiv);
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }


            function groupEventsByMonth(events) {
                const eventsByMonth = {};
                events.forEach(event => {
                    const month = event.bulan_mulai;
                    if (!eventsByMonth[month]) {
                        eventsByMonth[month] = [];
                    }
                    eventsByMonth[month].push(event);
                });
                return eventsByMonth;
            }
        });
    </script>

@endsection
