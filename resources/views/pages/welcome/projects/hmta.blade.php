<section id="page-8" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'HMTA', 
				'url' => 'http://hartfordmusicteachers.org',
				'types' => ['website', 'front-end', 'back-end', 'cms'], 
				'icon' => 'http://hartfordmusicteachers.org/_files/images/logo.svg', 'styles' => 'py-1', 'frameIcon' => false])

		<div class="row">
			@include('pages.welcome.components.technologies', [
				'cssFramework' => 'Bootstrap',
				'database' => 'MySQL'])

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>