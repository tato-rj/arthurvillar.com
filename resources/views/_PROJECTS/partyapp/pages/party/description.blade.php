<section class="container-fluid">
	<div class="row">
		<div class="col-default">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12 mb-4">
					<a href="/partyapp/search?location=Granada%2C+Spain" class="text-blue">
						<small><i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to search results</small>
					</a>
						<h4>
							<strong>First drink is on the house!!</strong>
						</h4>
						<div>
							<small>Hosted by <a href="/partyapp/users/andrea" target="_blank" class="link-pink">Alvaro</a></small>
							<div class="rating d-flex align-items-center" data-rating="4.5" data-rating-count="27">
								@include('_PROJECTS/partyapp/components/snippets/stars')
								<small class="ml-2">27 reviews</small>
							</div>
						</div>
					<p class="m-0"><small><i class="fa fa-clock-o mr-2" aria-hidden="true"></i><span id="m-time">23:00 to 4:30</span></small></p>
					<p><small><i class="fa fa-money mr-2" aria-hidden="true"></i>€<span id="m-fee">5</span></small></p>
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ornare, massa vel volutpat auctor, enim mauris mattis erat, non ultrices leo lorem accumsan ligula.</p>
					<div class="row">
						<div class="col-lg-4 col-sm-12">
							<p class="m-0"><strong>Languages</strong></p>
							<p><small>Spanish, English, Italian</small></p>
						</div>
						<div class="col-lg-4 col-sm-12">
							<p class="m-0"><strong>Response rate</strong></p>
							<p><small>100%</small></p>
						</div>
						<div class="col-lg-4 col-sm-12">
							<p class="m-0"><strong>Response time</strong></p>
							<p><small>less than 10 min</small></p>
						</div>
					</div>
					<p class="mb-0"><small>- Can I buy drinks at the party? <strong class="text-success">Yes</strong></small></p>
					<p><small>- Can I buy snacks at the party? <strong class="text-danger">No</strong></small></p>
					<div>
						<hr>
						<p class="text-blue mb-2"><strong>House rules</strong></p>
						<ol class="no-bullet pl-2">
							<li class="mb-1">Lorem ipsum dolor <strong>sit amet</strong>.</li>
							<li class="mb-1">Consectetur adipisicing elit.</li>
							<li class="mb-1">Ut enim ad minim veniam, quis <strong>nostrud exercitation</strong> ullamco.</li>
							<li class="mb-1">Excepteur <strong>sint</strong> occaecat cupidatat non proident.</li>
						</ol>
					</div>
					<div>
						<hr>
						<p class="text-blue mb-2"><strong>The party has</strong></p>
						<div class="d-flex flex-wrap">
							<span class="badge badge-pill badge-light p-2 m-2"><i class="fa fa-beer mr-2" aria-hidden="true"></i>Drinking games</span>
							<span class="badge badge-pill badge-light p-2 m-2"><i class="fa fa-paw mr-2" aria-hidden="true"></i>Pets</span>
							<span class="badge badge-pill badge-light p-2 m-2"><i class="fa fa-gamepad mr-2" aria-hidden="true"></i>Video games</span>	
							<span class="badge badge-pill badge-light p-2 m-2"><i class="fa fa-wifi mr-2" aria-hidden="true"></i>Wifi</span>
						</div>
					</div>
					<div>
						<hr>
						<p class="text-blue mb-2"><strong>Refund</strong></p>
						<p class="pl-2">If you don't like the party within 15 min you can leave and get a full refund! <a href="#" class="link-blue">Learn more</a> about our refund policy.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12">
					<p>This party is <strong>2.2 miles</strong> away from you, would you like to go?</p>
					@component('_PROJECTS/partyapp/components/snippets/button-full')
					Send a request
					@slot('style')btn-block
					@endslot

					@slot('action')data-toggle="modal" data-target="#login-box" 
					@endslot
					@endcomponent

					<p class="text-center text-muted"><small>You will see the party's address and more details if your request is accepted by the host</small></p>
					@component('_PROJECTS/partyapp/components/snippets/button-full')
					Share with a friend
					@slot('color')btn-blue
					@endslot
					
					@slot('style')btn-block
					@endslot

					@slot('link')
						mailto:?
							subject=Check out this party!&
							body=Hey, I found this party on {{config('app.name')}}, do you want to go?
							%0D%0A
							Here is the link with more info: {{Request::url()}}
					@endslot
					@endcomponent
					
					<div class="bg-light p-4 mt-3">
						<p class="text-muted">Is this party breaking  <a href="#" class="link-blue">our rules</a> or has innapropriate content?</p>
					<a href="" data-toggle="modal" data-target="#report-box" class="btn btn-block btn-outline-secondary"><i class="fa fa-flag-o mr-2" aria-hidden="true"></i>Report now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>