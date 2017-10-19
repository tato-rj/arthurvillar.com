<header class="mt-4">
	<section class="container">
		<div class="d-flex align-items-center">
			<div class="d-flex d-flex-grow-1 align-items-center">
				<div>
					<img src="{{ asset($root.'images/logo.svg') }}" id="logo" class="img-fluid">
				</div>
				<div id="title">
					<p>{{ strtoupper('Farmacia Di Tarzo') }}</p>
					<div class="text-muted">
						<p>della Dott.ssa Elisabetta Da Rè & C. sas</p>
						<p class="hidden-md-down">Via Roma, 13 - 31020 Tarzo (TV)</p>
						<p class="hidden-md-down">Tel: (+39) 0438 586 597</p>
					</div>
				</div>
			</div>

			<ul id="turni" class="list-group">
				<li class="list-group-item list-group-item-warning"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>{{$today}}</strong></li>
				<li class="list-group-item d-flex justify-content-between">
					<span><strong>Mattina</strong></span>
					<span class=" 
					@if($schedule['matina'] == 'chiuso')
						text-danger
					@else
						text-success
					@endif
					">{{$schedule['matina']}}</span>
				</li>
				<li class="list-group-item d-flex justify-content-between">
					<span><strong>Pomeriggio</strong></span>
					<span class=" 
					@if($schedule['pomeriggio'] == 'chiuso')
						text-danger
					@else
						text-success
					@endif
					">{{$schedule['pomeriggio']}}</span>
				</li>
			</ul>
		</div>
	
	@include($root.'partials.nav')

	</section>
</header>
