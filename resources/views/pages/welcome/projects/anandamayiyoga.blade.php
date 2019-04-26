<section id="page-{{$id}}" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'AnandamayiYoga', 
				'url' => 'https://anandamayiyoga.com',
				'types' => ['website', 'front-end', 'back-end', 'cms'], 
				'icon' => 'https://anandamayiyoga.s3.amazonaws.com/app/brand/logo-pink.svg', 'styles' => 'py-2', 'frameIcon' => false])

		<div class="row">
			@include('pages.welcome.components.technologies', [
				'phpFramework' => 'Laravel',
				'cssFramework' => 'Bootstrap',
				'database' => 'MySQL',
				'payment' => 'Stripe',
				'server' => 'LEMP stack'])

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>