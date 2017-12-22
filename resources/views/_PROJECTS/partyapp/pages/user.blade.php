@extends('_PROJECTS/partyapp/app')

@section('content')
<section class="container-fluid mt-6">
	<div class="row">
		<div class="col-default">
			<div class="row">
				<div class="col-lg-8 col-md-7 col-sm-6 col-12 mb-4">

					@include('_PROJECTS/partyapp/pages/user/description')
					@include('_PROJECTS/partyapp/pages/user/badges')
			
				</div>
				<div class="col-lg-4 col-md-5 col-sm-6 col-12">
			
					@component('_PROJECTS/partyapp/components/snippets/carousel')
						@slot('id'){{$user['username']}}_pictures
						@endslot
						
						@slot('indicators')
							@for ($i = 0; $i < $user['img_count']; $i++)
								<li data-target="#{{$user['username']}}_pictures" data-slide-to="{{$i}}" 
								@if($i == 0)
								class="active"
								@endif></li>
							@endfor
						@endslot
						
						@slot('images')
							@for ($i = 0; $i < $user['img_count']; $i++)
								<div class="carousel-item 
									@if($i == 0)
									active
									@endif">
									<img src="{{asset('_PROJECTS/partyapp/images/user'.$i.'.jpg')}}" class="img-fluid w-100">
								</div>
							@endfor
						@endslot
					@endcomponent

				@include('_PROJECTS/partyapp/pages/user/certificates')
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footer')
@include('_PROJECTS/partyapp/components/partials/footer_small')
@endsection