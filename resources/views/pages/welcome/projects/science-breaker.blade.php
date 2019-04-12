<section id="page-1" class="page container py-4">
	<div class="page-content"> 
		@include('pages.welcome.components.title', 
			[
				'title' => 'The Science Breaker',
				'url' => 'https://thesciencebreaker.org',
				'types' => ['website', 'front-end', 'back-end', 'cms', 'api'], 
				'icon' => 'https://thesciencebreaker.org/images/logo-small.svg', 'frameIcon' => true])
		
		<div class="row">
			@include('pages.welcome.components.technologies', [
				'phpFramework' => 'Laravel',
				'cssFramework' => 'Bootstrap',
				'database' => 'MySQL and Redis'])

			@include('pages.welcome.components.description', [
				'content' => [
					'This project was developed between September and December of 2016. The Science Breaker is a scientific web journal sponsored by the Universtiy of Geneve in Switzerland. What sets this journal apart from other scientific websites is what got me interested in working with their team from the start: all the articles are written by scientists and researchers, instead of journalists. <a href="https://thesciencebreaker.org" target="_blank">Click here</a> to view the project.',
					'I worked in collaboration with the team in Geneve to understand the project, their needs and how to best communicate their vision to their audience. I developed both the front end and back end to the website and a <strong>Content Management System</strong>. The CMS allows the team to study their content through <strong>data analysis and graphs</strong>, as well as to create and update every piece of information in the site, from articles, tags and categories to email subscriptions. I also created a <strong>RESTful API</strong> for the developers of the iOS app for the same platform.',
					'This project includes SEO optimization.']])
		</div>
	</div>
</section>