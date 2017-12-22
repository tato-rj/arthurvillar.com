<section class="container-cover d-flex align-items-center justify-content-center bg-image full-h" style="background-image: url(/_PROJECTS/partyapp/images/backgrounds/bg{{mt_rand(1,10)}}.jpg);">
	<div class="overlay-blue"></div>
	<div class="hero px-4">
		<h1>What are you doing tonight?</h1>
		<h2 class="mb-4"><strong>LET'S PARTY!</strong></h2>
		@component('_PROJECTS/partyapp/components/snippets/search_bar')
			@slot('location')main-search
			@endslot
		@endcomponent
	</div>
</section>
