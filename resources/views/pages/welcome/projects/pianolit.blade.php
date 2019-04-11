<section id="page-2" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'PianoLIT', 
				'types' => ['website', 'front-end', 'back-end', 'cms', 'api'], 
				'icon' => 'https://pianolit.com/images/brand/app-icon.svg', 'styles' => 'rounded-circle', 'frameIcon' => false])

		<div class="row">
			@include('pages.welcome.components.technologies')

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>