<section id="page-{{$id}}" class="page container py-4">
	<div class="page-content">
		@include('pages.welcome.components.title', 
			[
				'title' => 'Musiceasy', 
				'url' => '#',
				'types' => ['iOS', 'Android'], 
				'icon' => 'https://is4-ssl.mzstatic.com/image/thumb/Purple127/v4/37/9b/76/379b765a-280a-50c5-abda-74990c1b9f80/pr_source.jpg/246x0w.jpg', 'styles' => 'rounded-circle', 'frameIcon' => false])

		<div class="row">
			@include('pages.welcome.components.technologies', [
				'platform' => 'Unity',
				'language' => 'C#'])

			@include('pages.welcome.components.description')
		</div>
	</div>
</section>