<section id="page-1" class="page container py-4">
	<div class="page-content"> 
		@include('pages.welcome.components.title', 
			[
				'title' => 'The Science Breaker', 
				'types' => ['website', 'front-end', 'back-end', 'cms', 'api'], 
				'icon' => 'https://thesciencebreaker.org/images/logo-small.svg', 'frameIcon' => true])
		
		<div class="row">
			@include('pages.welcome.components.technologies')

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>