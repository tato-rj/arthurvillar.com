<div class="card m-2 rounded-0" style="transition:0.2s" data-time="{{$time}}" data-fee="{{$fee}}" data-title="{{$title}}" data-url="/partyapp/parties/{{str_slug($title)}}" data-lat="{{$lat}}" data-lng="{{$lng}}">
	<div class="card-head">
		{{$carousel}}
	</div>
	<div class="card-body">
		<h4 class="card-title clamp-1">{{$title}}</h4>
		<p class="card-text clamp-2">{{$description}}</p>
		<div class="mb-3 d-flex justify-content-between">
			<div>
				<div class="rating d-flex align-items-center" data-rating="{{$rating}}" data-rating-count="{{$rating_count}}">
					@include('_PROJECTS/partyapp/components/snippets/stars')
				</div>
				<small class="ml-2 text-muted">{{$rating_count}} reviews</small>				
			</div>
			<div>
				€{{$fee}}
			</div>
		</div>
		<a href="/partyapp/parties/{{str_slug($title)}}" class="btn btn-pink btn-block">Check it out!</a>
	</div>
</div>