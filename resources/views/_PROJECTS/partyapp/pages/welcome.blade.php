@extends('_PROJECTS/partyapp/app')

@section('content')
	@include('_PROJECTS/partyapp/pages/welcome/intro')
	@include('_PROJECTS/partyapp/pages/welcome/video')
	@include('_PROJECTS/partyapp/pages/welcome/icons')
	@include('_PROJECTS/partyapp/pages/welcome/faces')
	@include('_PROJECTS/partyapp/pages/welcome/faq')
@endsection

@section ('footer')
	@include('_PROJECTS/partyapp/components/partials/footer')
@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('_PROJECTS/partyapp/js/vendor/parallax.min.js')}}"></script>
@endsection


