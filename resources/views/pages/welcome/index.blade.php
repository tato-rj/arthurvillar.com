@extends('layouts.app')

@push('header')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<style type="text/css">

.show {
	display: block !important;
}
body {
	font-family: 'Varela Round', sans-serif;
	font-size: 1rem;
}

.font-highlight {
	font-family: 'Poppins', sans-serif !important;
}

.typed-cursor {
	/*color: #b8c2cc!important;*/
}
</style>
@endpush

@section('content')
<div class="container h-100vh d-flex flex-center">
	<div class="">
		<h1 class="display-1">Hello</h1>
		<h1 class="mb-5"><span id="greeting"></span></h1>
		<div class="d-flex justify-content-center text-grey">
			<a href="#" class="t-2 link-inherit"><i class="fab fa-github fa-2x mx-3"></i></a>
			<a href="#" class="t-2 link-inherit"><i class="fab fa-linkedin fa-2x mx-3"></i></a>
			<a href="#" class="t-2 link-inherit"><i class="fab fa-twitter fa-2x mx-3"></i></a>
			<a href="#" class="t-2 link-inherit"><i class="fas fa-envelope fa-2x mx-3"></i></a>
		</div>
	</div>
</div>

@include('pages.welcome.projects.science-breaker')

@include('pages.welcome.projects.pianolit')

@include('pages.welcome.projects.metropolis')

@include('pages.welcome.projects.quickreads')

@include('pages.welcome.projects.anandamayiyoga')

@include('pages.welcome.projects.musiceasy')

@include('pages.welcome.projects.acesso-facil')

@include('pages.welcome.projects.hmta')

@endsection

@push('footer')
<script>
var typed = new Typed('#greeting', {
	strings: ['My name is Arthur^600, I am a full stack web developer.'],
	typeSpeed: 30,
	startDelay: 600
});
</script>
<script>
$(function () {	
	let controller = new ScrollMagic.Controller();

	$('section.page').each(function() {
		let $page = $(this);

		new ScrollMagic.Scene({triggerElement: "#" + $page.attr('id'), duration: $page.height()})
						.triggerHook(0)
						.setPin("#" + $page.attr('id') + " .page-content")
						// .addIndicators()
						.addTo(controller);
	});

});
</script>
@endpush
