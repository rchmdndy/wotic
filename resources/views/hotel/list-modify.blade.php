@extends('layouts.custom_layout')
@section
	<link rel="stylesheet" type="text/css" href="css/hotel-card.css">
@endsection
@section('custom-content')
	
<section class="light">
	<div class="container py-2">
		<div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div>
		@foreach($hotelList as $hotel)

			<article class="postcard light blue">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="{{ $hotel['image'] }}" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark">
					<h1 class="postcard__title blue"><a href="#">{{ $hotel['nama_hotel'] }}</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>{{ $hotel['kelas'] }}
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">
						{{ $hotel['alamat'] }}
					</div>
					@if($hotel['is_important'] == 'true')
					<ul class="postcard__tagbox">
						<li class="tag__item play red">
							<i class="fas fa-play mr-2">Rekomendasi </i>
						</li>
					</ul>
					@endif
				</div>
			</article>
		@endforeach
	</div>
</section>
@endsection