@extends('_PROJECTS/partyapp/app')

@section('content')
<div id="margin-top"></div>
<section class="container-fluid px-0">
	<div class="row no-gutters">
		<div id="map-container" class="col-lg-4 col-md-6 col-sm-12 col-12">
			@include('_PROJECTS/partyapp/pages/search/map')
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12 col-12 offset-lg-4 offset-md-6">
			<div class="container-fluid mt-4">
				<div class="row">
					<div class="col-11 mx-auto">
						<p class="text-muted"><strong>We found <span class="text-pink">{{count($parties)}}</span> {{ str_plural('party', count($parties)) }} happening today</strong></p>
					</div>
				</div>
				<div class="row">
					<div class="col-11 mx-auto">
						@component('_PROJECTS/partyapp/components/snippets/search_bar')
							{{(request()->input('location')) ? request()->input('location') : null}}
							@slot('placeholder'){{$user_location}} (current location)
							@endslot
							@slot('location')local
							@endslot
							@slot('filters')
								<div class="form-row align-items-center mt-2">
									<div class="col-auto">
										<select name="max_dist" class="form-control rounded-0">
											<option value="any" selected disabled>Distance</option>
											<option value="3218" {{(request()->input('max_dist') == '3218') ? 'selected':null}}>2 miles</option>
											<option value="6437" {{(request()->input('max_dist') == '6437') ? 'selected':null}}>4 miles</option>
											<option value="16093" {{(request()->input('max_dist') == '16093') ? 'selected':null}}>10 miles</option>
											<option value="32186" {{(request()->input('max_dist') == '32186') ? 'selected':null}}>20 miles</option>
											<option value="any">I don't care</option>
										</select>
									</div>
									<div class="col-auto">
										<select name="fee_range" class="form-control rounded-0">
											<option value="any" selected disabled>Fee range</option>
											<option value="1-3" {{(request()->input('fee_range') == '1-3') ? 'selected':null}}>€1 - €3</option>
											<option value="3-5" {{(request()->input('fee_range') == '3-5') ? 'selected':null}}>€3 - €5</option>
											<option value="any">Show me all!</option>
										</select>
									</div>
								</div>
							@endslot
						@endcomponent
					</div>
				</div>
			</div>
			<div id="results-container" class="container-fluid pt-5">
				<div class="row">
					<div class="col-12 d-flex flex-wrap">
						@forelse ($parties as $party)
							@component('_PROJECTS/partyapp/pages/search/card')
								@slot('carousel')
									@component('_PROJECTS/partyapp/components/snippets/carousel')
										@slot('id')party-images-{{$loop->iteration}}
										@endslot
										
										@slot('height')h-100
										@endslot

										@slot('indicators')
											@for ($i = 0; $i < 3; $i++)
												<li data-target="#party-images-{{$loop->iteration}}" data-slide-to="{{$i}}" 
												@if($i == 0)
												class="active"
												@endif></li>
											@endfor
										@endslot
										
										@slot('images')
											@for ($i = 1; $i <= 3; $i++)
												<div class="carousel-item h-100  
													@if($i == 1)
													active
													@endif">
													<div class="d-block bg-image w-100 h-100" style="background-image: url(/_PROJECTS/partyapp/images/parties/example{{$loop->iteration}}/{{$i}}.jpg);" alt="First slide"></div>
												</div>
											@endfor
										@endslot
									@endcomponent
								@endslot
								@slot('title')
								{{$party['title']}}
								@endslot

								@slot('description')
								{{$party['description']}}
								@endslot

								@slot('time'){{$party['time']}}
								@endslot

								@slot('rating'){{$party['rating']}}
								@endslot

								@slot('rating_count'){{$party['rating_count']}}
								@endslot
								
								@slot('fee'){{$party['fee']}}
								@endslot

								@slot('lat'){{$party['coordinates'][0]}}
								@endslot

								@slot('lng'){{$party['coordinates'][1]}}
								@endslot
							@endcomponent
						@empty
						<div class="row justify-content-center align-items-center w-100">
							<div class="col-lg-4 col-md-6 col-sm-10 col-10 mx-auto">
								<img src="{{asset('_PROJECTS/partyapp/images/vectors/sad.svg')}}" class="w-100 ml-3" style="opacity: 0.1">
							</div>
						</div>
						@endforelse
	
					</div>
				</div>
			</div>
			@include('_PROJECTS/partyapp/components/partials/footer_small')
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script src="{{asset('_PROJECTS/partyapp/js/google/map-search.js')}}"></script>
@endsection
