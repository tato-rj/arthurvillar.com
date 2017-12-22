<section class="container-fluid">
	<div class="row">
		<div class="col-default">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-12 sm-last">
					<small class="text-muted">DISCOVER</small>
					<h4 class="mt-2"><strong>Turn your own parties into extra income!</strong></h4>
					<p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut vestibulum ex, quis aliquet enim. Donec eu consectetur elit, nam elementum posuere diam.</p>
					@component('_PROJECTS/partyapp/components/snippets/button-full')
					GET STARTED!
					@slot('action')data-toggle="modal" data-target="#signup-box"
					@endslot
					@endcomponent
				</div>
				<div class="col-lg-6 col-sm-12 sm-first">
					<div id="promo-video" class="embed-responsive embed-responsive-4by3">
						<i class="fa fa-play-circle-o" style="display: none;" aria-hidden="true"></i>
						<video class="embed-responsive-item" autoplay>
							<source src="{{asset('_PROJECTS/partyapp/images/video.mp4')}}" type="video/mp4">
							{{-- <img src="_PROJECTS/partyapp/images/video-cover.gif"> --}}
						</video>
					</div>	
				</div>
			</div>	
		</div>
	</div>
</section>