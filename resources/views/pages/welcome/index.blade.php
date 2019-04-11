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

.font-highlight {
	font-family: 'Poppins', sans-serif !important;
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

@include('pages.welcome.projects.science-breaker')

@include('pages.welcome.projects.pianolit')

<section id="page-3" class="page container py-4" style="height: 1200px">
	<div class="page-content">
	@include('pages.welcome.components.title', 
		[
			'title' => 'MetropolisRio', 
			'types' => ['website', 'front-end', 'back-end', 'cms'], 
			'icon' => 'https://www.metropolisrio.com.br/images/brand/logo.svg', 'styles' => 'py-2', 'frameIcon' => false])
	</div>
</section>

<section id="page-4" class="page container py-4" style="height: 700px">
	<div class="page-content">
	@include('pages.welcome.components.title', 
		[
			'title' => 'Quickreads', 
			'types' => ['back-end', 'cms', 'api'], 
			'icon' => 'https://leftlaneapps.com/images/icon.svg', 'frameIcon' => true])
	</div>
</section>

<section id="page-5" class="page container py-4" style="height: 700px">
	<div class="page-content">
	@include('pages.welcome.components.title', 
		[
			'title' => 'AnandamayiYoga', 
			'types' => ['website', 'front-end', 'back-end', 'cms'], 
			'icon' => 'https://anandamayiyoga.s3.amazonaws.com/app/brand/logo-pink.svg', 'styles' => 'py-2', 'frameIcon' => false])
	</div>
</section>

<section id="page-6" class="page container py-4" style="height: 700px">
	<div class="page-content">
	@include('pages.welcome.components.title', 
		[
			'title' => 'Musiceasy', 
			'types' => ['iOS', 'Android'], 
			'icon' => 'https://is4-ssl.mzstatic.com/image/thumb/Purple127/v4/37/9b/76/379b765a-280a-50c5-abda-74990c1b9f80/pr_source.jpg/246x0w.jpg', 'styles' => 'rounded-circle', 'frameIcon' => false])
	</div>
</section>

<section id="page-7" class="page container py-4" style="height: 700px">
	<div class="page-content">
	@include('pages.welcome.components.title', 
		[
			'title' => 'Acesso Fácil Brasil', 
			'types' => ['website', 'front-end'], 
			'icon' => 'https://portalacessofacil.com.br/images/brand/logo.svg', 'frameIcon' => false])
	</div>
</section>

<section id="page-8" class="page container py-4" style="height: 700px">
	<div class="page-content">
	@include('pages.welcome.components.title', 
		[
			'title' => 'HMTA', 
			'types' => ['website', 'front-end', 'back-end', 'cms'], 
			'icon' => 'http://hartfordmusicteachers.org/_files/images/logo.svg', 'styles' => 'py-1', 'frameIcon' => false])
	</div>
</section>
<footer style="height: 400px">
	
</footer>
@endsection

@push('footer')
<script>
$(function () {	
	let controller = new ScrollMagic.Controller();

	$('section.page').each(function() {
		let $page = $(this);

		new ScrollMagic.Scene({triggerElement: "#" + $page.attr('id'), duration: $page.height()})
						.triggerHook(0)
						.setPin("#" + $page.attr('id') + " .page-content")
						.addIndicators()
						.addTo(controller);
	});

});
</script>
@endpush
