<section id="page-{{$id}}" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'Primer', 
				'url' => route('primer.index'),
				'types' => ['css extensions', 'website', 'front-end'], 
				'icon' => asset('images/projects/primer.svg'), 'styles' => 'py-2', 'frameIcon' => false
			])

		<div class="row">
			@include('pages.welcome.components.technologies', [
				'phpFramework' => 'Laravel',
				'cssFramework' => 'Bootstrap',
				'server' => 'LEMP stack'
			])

			@include('pages.welcome.components.description', [
				'content' => [
					'For the past few years I have been using css frameworks like Bootstrap and accumulated tons of extra classes that extend Bootstrap\'s behavior in order to make my front end development faster and more managable. Primer is the result of that, containing all the extra stylings and classes I use throughout my projects. Fell free to check it out and use it yourself, no questions asked!',
					'This small project includes not only classes that extend Bootstrap\'s own classes but also some that wrap and contain multiple styles in one place. I have also included a custom set of colors ideal for use in the web. Bootstrap itself is not included in the css file you find there for download, so you will need to have the framework installed in your project for this extension to work.'
				]
			])
		</div>
	</div>
</section>