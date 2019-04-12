<div class="col-9">
	@if(!empty($content))
	@foreach($content as $paragraph)
	<p>{!! $paragraph !!}</p>
	@endforeach
	@else
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa deleniti vitae similique architecto eum culpa accusamus ad incidunt quasi, ex animi. Eum sapiente voluptas quidem id repudiandae sunt, magnam adipisci!</p>
	@endif
</div>