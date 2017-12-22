<section class="container-fluid">
	<div class="row">
		<div class="col-default">
			<ul class="nav nav-pills sm-block">
				<li class="nav-item">
					<a class="nav-link 
					@if(!app('request')->input('audience'))
					active
					@endif
					" href="/partyapp/help">General topics</a>
				</li>
				<li class="nav-item">
					<a class="nav-link 
					@if(app('request')->input('audience') == 'hosts')
					active
					@endif
					" href="/partyapp/help?audience=hosts">Help for Hosts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link
					@if(app('request')->input('audience') == 'guests')
					active
					@endif
					" href="/partyapp/help?audience=guests">Help for Guests</a>
				</li>
			</ul>
		</div>
	</div>
</section>