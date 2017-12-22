@extends('_PROJECTS/partyapp/app')

@section('content')
	@component('_PROJECTS/partyapp/components/partials/head')
	How can we help?
	@endcomponent
	@include('_PROJECTS/partyapp/pages/help/audience')
	@if(app('request')->input('audience') == 'guests')
		@include('_PROJECTS/partyapp/pages/help/guests')
	@elseif(app('request')->input('audience') == 'hosts')
		@include('_PROJECTS/partyapp/pages/help/hosts')
	@else
		@include('_PROJECTS/partyapp/pages/help/general')
	@endif
	@include('_PROJECTS/partyapp/pages/help/contact')
	@include('_PROJECTS/partyapp/pages/welcome/faces')
	@include('_PROJECTS/partyapp/pages/welcome/faq')
@endsection

@section('footer')
@include('_PROJECTS/partyapp/components/partials/footer')
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('_PROJECTS/partyapp/js/vendor/parallax.min.js')}}"></script>
@endsection

