<section id="page-3" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'MetropolisRio', 
				'url' => 'https://metropolisrio.com.br',
				'types' => ['website', 'front-end', 'back-end', 'cms'], 
				'icon' => 'https://www.metropolisrio.com.br/images/brand/logo.svg', 'styles' => 'py-2', 'frameIcon' => false])

		<div class="row">
			@include('pages.welcome.components.technologies', [
				'phpFramework' => 'Laravel',
				'cssFramework' => 'Bootstrap',
				'jsFramework' => 'Vue',
				'database' => 'MySQL and Redis',
				'payment' => 'PagSeguro',
				'server' => 'LEMP stack'])

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>