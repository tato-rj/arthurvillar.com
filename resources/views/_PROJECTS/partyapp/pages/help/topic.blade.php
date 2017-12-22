@extends('_PROJECTS/partyapp/app')

@section('content')
	@component('_PROJECTS/partyapp/components/partials/head')
	Help for Hosts
	@endcomponent
	<section class="container-fluid">
		<div class="row">
			<div class="col-default">
				<a href="/partyapp/help" class="link-blue"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> return to help page</a>
			</div>
		</div>
	</section>
	<section class="container-fluid">
		<div class="row">
			<div class="col-default">
				<div class="row">
					@include('_PROJECTS/partyapp/pages/help/menu')

					@if (isset($article))
						@include('_PROJECTS/partyapp/pages/help/article')	
					@endif

				</div>
			</div>
		</div>
	</section>
	
	@include('_PROJECTS/partyapp/pages/help/contact')

@endsection

@section('footer')
@include('_PROJECTS/partyapp/components/partials/footer')
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('_PROJECTS/partyapp/js/vendor/parallax.min.js')}}"></script>
@endsection
