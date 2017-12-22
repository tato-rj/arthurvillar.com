<section class="container-fluid bg-image parallax-window" data-parallax="scroll" data-image-src="{{asset('_PROJECTS/partyapp/images/faces-bg.jpg')}}">
	<div class="overlay-blue"></div>
	<div class="row py-4">
		<div class="col-lg-6 col-md-8 col-xs-10 mx-auto text-white text-center">
			<h4>Imagine if you could make money hosting parties... </h4>
			<h2><strong>Now you can do that!</strong></h2>
			<p class="text-white my-4">Phasellus ultrices purus non nibh finibus pulvinar. Nulla malesuada lacus eu ullamcorper feugiat.</p>
			@component('_PROJECTS/partyapp/components/snippets/button-open')
			FIND OUT MORE
			@slot('link')/host-your-party
			@endslot
			@endcomponent
		</div>
	</div>
</section>