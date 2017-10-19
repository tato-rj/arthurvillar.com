<div class="col-12">
	<div class="d-flex align-items-center" id="title">
		<img src="/images/nav-icons/{{ $icon }}.svg" class="active nav-icon"><h1><span class="">{{ config('app.name') }}</span><span class="text-warning">::{{ $slot }}</span></h1>    
		@include('snippets.social')
	</div>
</div>
