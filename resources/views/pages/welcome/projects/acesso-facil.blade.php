<section id="page-{{$id}}" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'Acesso Fácil Brasil',
				'url' => 'https://portalacessofacil.com.br',
				'types' => ['website', 'front-end'], 
				'icon' => 'https://portalacessofacil.com.br/images/brand/logo.svg', 'frameIcon' => false])

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