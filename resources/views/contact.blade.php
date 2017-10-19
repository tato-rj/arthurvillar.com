@extends('_app')

@section('header')
    @component('partials.header')
    Arthur Villar - Contact
    @endcomponent
@endsection

@section('menu')
	@component('partials.nav')
		@slot('music')
		@endslot
		@slot('code')
		@endslot
		@slot('login')
		@endslot
		@slot('user')
		@endslot
		@slot('contact')
			active
		@endslot
	@endcomponent
@endsection

@section('content')
<div class="container-fluid" id="contact-container">
    @component('partials.title')
        @slot('icon')
        	contact
        @endslot
    contact
    @endcomponent

	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 offset-lg-1">
				<p><strong>Thank you for stopping by!</strong></p>
				<p>To get in touch with me just fill out the form or follow one of the addresses below:</p>
				<ul class="mt-4 p-0">
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{ config('app.email') }}">arthurvillar@gmail.com</a></li>
					<li><i class="fa fa-github" aria-hidden="true"></i><a href="{{ config('app.github') }}" target="_blank">Github</a></li>
					<li><i class="fa fa-twitter" aria-hidden="true"></i><a href="{{ config('app.twitter') }}" target="_blank">Twitter</a></li>
					<li><i class="fa fa-facebook" aria-hidden="true"></i><a href="{{ config('app.facebook') }}" target="_blank">Facebook</a></li>
					<li><i class="fa fa-youtube" aria-hidden="true"></i><a href="{{ config('app.youtube') }}" target="_blank">YouTube</a></li>
				</ul>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
				<form class="" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" name="name" value="{{ old('name') }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" name="email" value="{{ old('email') }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
					</div>
					<div class="form-group">
						<textarea class="form-control" id="message" name="message" rows="5" placeholder="Write something here"></textarea>
					</div>
					<button type="submit" class="btn btn-block">Send message</button>
				</form>
				@if ($errors->has('email'))
				<div class="alert-container">
					<div class="alert alert-danger" role="alert">
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Ops!</strong> Something went wrong...
					</div>
				</div>
				@endif				
			</div>
		</div>
	</div>
</div>
@endsection