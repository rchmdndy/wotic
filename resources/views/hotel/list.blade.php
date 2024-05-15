@extends('layouts.custom_layout')
@section('head_content')
    <link rel="stylesheet" type="text/css" href="css/hotel-card.css">
@endsection
@section('custom-content')

<section class="light">
    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div>
        @foreach($hotelList as $hotel)
            @if($hotel['is_important'] == 'yes')
                <article class="postcard light yellow">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="{{ $hotel['image'] }}" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title yellow"><a href="#">{{ $hotel['nama_hotel'] }}</a></h1>
                        <div class="postcard__subtitle small">
                                <i class="fas fa-calendar-alt mr-2"></i>{{ $hotel['kelas'] }}
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            {{ $hotel['alamat'] }}
                        </div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Rekomendasi</li>
                            
                            <li class="tag__item play blue">
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#mapModal"><i class="fas fa-play mr-2">Lihat Lokasi</i></button>
                            </li>
                        </ul>
                    </div>
                </article>
            @else
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="{{ $hotel['image'] }}" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue"><a href="#">{{ $hotel['nama_hotel'] }}</a></h1>
                        <div class="postcard__subtitle small">
                                <i class="fas fa-calendar-alt mr-2"></i>{{ $hotel['kelas'] }}
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            {{ $hotel['alamat'] }}
                        </div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item play blue">
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#mapModal" data-lat="{{$hotel['koordinat']}}" data-lng="{{$hotel['koordinat_y']}}" id="locationButton"><i class="fas fa-play mr-2">Lihat Lokasi</i></button>
                            </li>
                        </ul>
                    </div>
                </article>
            @endif
        @endforeach
                <!-- Modal -->
                <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModal" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-black" id="mapModalLabel">Peta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body align-items-center">
                    <div id="map" class="d-flex gap-3 m-4 border border-info-subtle"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="getLocationButton">Dapatkan Lokasi</button>
                  </div>
                </div>
                </div>
                </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Get the button element
                const locationButton = document.getElementById("locationButton");
                const getLocationButton = document.getElementById("getLocationButton");

                // Add event listener for opening Google Maps in a new tab
                getLocationButton.addEventListener("click", function() {
                    // Get the latitude and longitude from data attributes
                    const lat = locationButton.getAttribute("data-lat");
                    const lng = locationButton.getAttribute("data-lng");

                    // Create the Google Maps URL
                    const googleMapsUrl = `https://www.google.com/maps?q=${lat},${lng}`;

                    // Open the URL in a new tab
                    window.open(googleMapsUrl, '_blank');
                });
            });
        </script>


        <script>
                document.getElementById('locationButton').addEventListener('click', function() {
                    const lat = this.getAttribute('data-lat');
                    const lng = this.getAttribute('data-lng');

                    const position = {
                        lat: parseFloat(lat), // Parse the latitude string to a float
                        lng: parseFloat(lng)  // Parse the longitude string to a float
                    };
                    var map;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: position,
                            zoom: 18
                        });
                        const marker = new google.maps.Marker({
                            map: map,
                            position: position,
                        });
                    }
                })

            </script>
            <script src='/js/map.js' async defer></script>
    </div>
</section>
@endsection
