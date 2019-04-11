<div class="page-title shadow-light rounded-pill bg-white d-apart px-3 py-2 mb-5">
	<div class="d-flex align-items-center">
		<div class="p-2 mr-2">
			@if($frameIcon)
				<div class="bg-dark rounded-circle d-flex flex-center" style="width: 52px; height: 52px;">
					<img src="{{$icon}}" style="width: 28px; margin-bottom: 3px;">
				</div>
			@else
				<img src="{{$icon}}" style="height: 52px;" class="{{$styles ?? null}}">
			@endif
		</div>
		<h4 class="mb-0 mr-3 font-highlight" style="white-space: nowrap;">{{$title}}</h4>

		@foreach($types as $type)
		<span class="badge badge-pill badge-light px-3 py-2 text-grey mx-1">{{$type}}</span>
		@endforeach
	</div>
	<div class="text-grey mr-2" style="line-height: 0">
		<a href="#" class="link-inherit t-2"><i class="fas fa-link fa-2x"></i></a>
	</div>
</div>