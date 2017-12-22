<section class="container-fluid">
	<div class="row">
		<div class="col-default">
			<p class="mt-4">Making money hosting your own parties isn't only <span class="text-pink"><strong>awesome</strong></span>, it's also <span class="text-pink"><strong>safe</strong></span>. We work hard to protect our community and that you will always have a great experience! Just follow the three steps below to get started.</p>
		</div>
	</div>
</section>
<section class="container-fluid">
	<div class="row">
		<div class="col-default">
			<h2 class="mb-5"><strong class="">How to become a party host</strong></h2>
			<div class="row mb-5">
				<div class="col-lg-6 col-sm-12 sm-last">
					<h3 class="mb-4"><strong><span class="text-pink mr-2">1</span>Create your party</strong></h3>
					<p>Praesent quis faucibus arcu. Quisque vestibulum lobortis diam. Aliquam ac convallis neque, vel mattis leo.</p>
					<p>Curabitur fringilla euismod nunc. Quisque lacus est, porta non ullamcorper eget, ultrices sed leo.</p>
					<p>Etiam dolor sem, elementum sed libero in, ultricies vulputate nisi. Donec malesuada volutpat ante sed consectetur.</p>
				</div>
				<div class="col-lg-6 col-sm-12 sm-first mb-2">
					<img src="{{asset('_PROJECTS/partyapp/images/steps/step1.jpg')}}" class="img-fluid">
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-6 col-sm-12 order-last">
					<h3 class="mb-4"><strong><span class="text-pink mr-2">2</span>Have fun</strong></h3>
					<p>Pellentesque tellus massa, tempus eu turpis non, porta hendrerit nibh.</p>					
					<p>Nulla non metus elit. Praesent non posuere odio, sed elementum ipsum.</p>
					<p>Malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					<p>Nulla velit urna, congue nec pellentesque at, tincidunt et neque. Ut tempor nisi dui, non fermentum.</p>
				</div>
				<div class="col-lg-6 col-sm-12 order-first mb-2">
					<img src="{{asset('_PROJECTS/partyapp/images/steps/step2.jpg')}}" class="img-fluid">
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-6 col-sm-12 sm-last">
					<h3 class="mb-4"><strong><span class="text-pink mr-2">3</span>Get <u>paid</u></strong></h3>
					<p>Etiam neque purus, tincidunt at faucibus egestas, tincidunt non diam.</p>
					<p>Donec sagittis, turpis id tristique suscipit, elit nibh sagittis tellus, sed dictum nisl lacus et ligula.</p>
					<p>Cras erat nibh, venenatis nec dapibus sit amet, congue id lacus. Cras sit amet neque quis nisl euismod blandit eu lobortis leo.</p>
				</div>
				<div class="col-lg-6 col-sm-12 sm-first mb-2">
					<img src="{{asset('_PROJECTS/partyapp/images/steps/step3.jpg')}}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-12 my-4">
			@component('_PROJECTS/partyapp/components/snippets/button-full')
			GET STARTED
			@slot('action')
			data-toggle="modal" data-target="#signup-box"
			@endslot
			@endcomponent
		</div>
	</div>
</section>