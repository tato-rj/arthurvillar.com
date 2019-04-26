<section id="page-{{$id}}" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'Quickreads',
				'url' => '#',
				'types' => ['back-end', 'cms', 'api'], 
				'icon' => 'https://leftlaneapps.com/images/icon.svg', 'frameIcon' => true])

		<div class="row">
			@include('pages.welcome.components.technologies', [
				'phpFramework' => 'Laravel',
				'database' => 'MySQL',
				'server' => 'LEMP stack'])

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>