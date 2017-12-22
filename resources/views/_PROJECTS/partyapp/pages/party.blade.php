@extends('_PROJECTS/partyapp/app')

@section('content')
	@include('_PROJECTS/partyapp/pages/party/gallery')
	@include('_PROJECTS/partyapp/pages/party/description')
@endsection

@section('footer')
	@include('_PROJECTS/partyapp/components/partials/footer_small')
@endsection

@section('scripts')
	<script src="{{asset('_PROJECTS/partyapp/js/google/map-simple.js')}}"></script>
@endsection
