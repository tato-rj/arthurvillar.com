@extends('layouts.app')

@push('header')

<style type="text/css">

.show {
	display: block !important;
}
body {
	font-family: 'Varela Round', sans-serif;
	font-size: 1rem;
}
</style>
@endpush

@section('content')
<div class="container h-100vh d-flex flex-center">
	<div>
		<h1 class="display-1">Hello</h1>
		<h1 class="mb-5">My name is Arthur and I am a full stack web developer.</h1>
		<div class="d-flex justify-content-center text-grey">
			<a href="#" class="t-2 link-inherit"><i class="fab fa-github fa-2x mx-3"></i></a>
			<a href="#" class="t-2 link-inherit"><i class="fab fa-linkedin fa-2x mx-3"></i></a>
			<a href="#" class="t-2 link-inherit"><i class="fab fa-twitter fa-2x mx-3"></i></a>
			<a href="#" class="t-2 link-inherit"><i class="fas fa-envelope fa-2x mx-3"></i></a>
		</div>
	</div>
</div>
<section id="page-1" style="height: 800px">
	<h1 style="display: none;">First page</h1>
</section>
<section id="page-2" style="height: 400px">
	<h1 style="display: none;">Second page</h1>
</section>
<section id="page-3" style="height: 1200px">

</section>
<section id="page-4" style="height: 980px">

</section>
<section id="page-5" style="height: 700px">

</section>
<section id="page-6" style="height: 2000px">

</section>

@endsection

@push('footer')
<script>
$(function () { // wait for document ready
	// init controller
	var controller = new ScrollMagic.Controller();

	// build scenes
	new ScrollMagic.Scene({triggerElement: "#page-1"})
					.setClassToggle("#page-1 h1", "show") // add class toggle
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);

	new ScrollMagic.Scene({triggerElement: "#page-2"})
					.setClassToggle("#page-2 h1", "show") // add class toggle
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
});
</script>
@endpush
