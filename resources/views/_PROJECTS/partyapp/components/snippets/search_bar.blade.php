<form id="party-form" method="GET" action="/partyapp/search">
	{{-- {{csrf_field()}} --}}
	<div class="input-group {{$location}}">
		<div class="input-group-addon pl-3 lh-1 bg-light border-0 rounded-0 text-pink">
			<h5 class="m-0">
				<i class="fa fa-search" aria-hidden="true"></i>
			</h5>
		</div>
		<input 
		id="find-party"
		name="location" 
		class="form-control bg-light p-3 form-control-lg border-0 rounded-0" 
		type="text"
		onFocus="geolocate()"
		placeholder="{{$placeholder or 'Find a house party near...'}}"
		value="{{$slot}}">
	</div>
	{{$filters or null}}
</form>