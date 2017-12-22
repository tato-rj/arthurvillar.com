@extends('_PROJECTS/partyapp/app')

@section('content')
	@component('_PROJECTS/partyapp/components/partials/head')
	Host your party
	@endcomponent
	@include('_PROJECTS/partyapp/pages/host/steps')
	@include('_PROJECTS/partyapp/pages/host/squares')
	@include('_PROJECTS/partyapp/pages/welcome/faq')
@endsection

@section('footer')
@include('_PROJECTS/partyapp/components/partials/footer')
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('_PROJECTS/partyapp/js/vendor/parallax.min.js')}}"></script>
@endsection
