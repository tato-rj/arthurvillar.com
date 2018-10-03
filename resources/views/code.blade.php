@extends('_app')

@section('header')
    @component('partials.header')
    Arthur Villar@Programming
    @endcomponent
@endsection

@section('menu')
	@component('partials.nav')
		@slot('music')
		@endslot
		@slot('code')
			active
		@endslot
		@slot('login')
		@endslot
        @slot('user')
        @endslot
		@slot('contact')
		@endslot
	@endcomponent
@endsection

@section('content')
<div class="container-fluid" id="code-container">
    @component('partials.title')
        @slot('icon')
            code
        @endslot
    code
    @endcomponent
    <div class="row">
    	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 offset-lg-1 offset-md-1">
    		<p>Hi! Below are some of my most recent projects. They include works in <strong class="text-warning">front-end</strong> and <strong class="text-warning">back-end web development</strong>, as well as <strong class="text-primary">iOS</strong> and <strong class="text-primary">Android apps</strong>. Thanks for stopping by and stay in touch!</p>
    	</div>
    </div>
    {{-- Gallery --}}
    <div class="row gal">
    	{{-- Big --}}
    	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="tsb">
            <div class="bg"></div>
    		<span class="label text-white bg-warning">website</span>
    		<div class="d-flex align-items-center justify-content-center flex-column overlay">
    			<h2><strong>TheScienceBreaker</strong></h2>
				<a target="_blank" href="https://thesciencebreaker.com" class="btn hvr-sweep-to-right"><strong>View project</strong></a>
    		</div>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="musiceasy">
            <div class="bg"></div>
    		<span class="label text-white bg-primary">mobile app</span>
    		<div class="d-flex align-items-center justify-content-center flex-column overlay">
    			<h2><strong>MusicEasy</strong></h2>
				<a target="_blank" href="#" class="btn-store"><img src="/images/portfolio/apple-store.svg"></a>
				<a target="_blank" href="#" class="btn-store"><img src="/images/portfolio/google-store.svg"></a>
    		</div>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="hmta">
            <div class="bg"></div>
    		<span class="label text-white bg-warning">website</span>
    		<div class="d-flex align-items-center justify-content-center flex-column overlay">
    			<h2><strong>HMTA</strong></h2>
				<a target="_blank" href="https://www.hartfordmusicteachers.org" class="btn hvr-sweep-to-right"><strong>View project</strong></a>
    		</div>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="coolflip">
            <div class="bg"></div>
    		<span class="label text-white bg-primary">mobile app</span>
    		<div class="d-flex align-items-center justify-content-center flex-column overlay">
    			<h2><strong>CoolFlip</strong></h2>
				<a target="_blank" href="#" class="btn-store"><img src="/images/portfolio/apple-store.svg"></a>
				<a target="_blank" href="#" class="btn-store"><img src="/images/portfolio/google-store.svg"></a>
    		</div>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="farmacia">
            <div class="bg"></div>
    		<span class="label text-white bg-warning">website</span>
    		<div class="d-flex align-items-center justify-content-center flex-column overlay">
    			<h2><strong>Farmacia Di Tarzo</strong></h2>
				<a target="_blank" href="https://farmaciaditarzo.net" class="btn hvr-sweep-to-right"><strong>View project</strong></a>
    		</div>
    	</div>
    </div>
    {{-- Frameworks and Libraries --}}
    <div class="row" id="libraries">
        <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 offset-lg-2 offset-md-1 mb-7">
            <h5>Some of the <span class="text-red">frameworks</span> and <span class="text-red">libraries</span> I use</h5>
            <div class="d-flex align-items-center justify-content-center flex-wrap">
                <a href="https://laravel.com/" target="_blank"><img src="/images/libraries/laravel.svg" title="Laravel" class="bw"></a>
                <a href="https://vuejs.org/" target="_blank"><img src="/images/libraries/vue.svg" title="Vue" class="bw"></a>
                <a href="https://getbootstrap.com/" target="_blank"><img src="/images/libraries/bootstrap.svg" title="Bootstrap" class="bw"></a>
                <a href="https://sass-lang.com/" target="_blank"><img src="/images/libraries/sass.svg" title="Sass" class="bw"></a>
                <a href="https://nodejs.org/en/" target="_blank"><img src="/images/libraries/node.svg" title="Node.js" class="bw"></a>
                <a href="https://redis.io/" target="_blank"><img src="/images/libraries/redis.svg" title="Redis" class="bw"></a>
                <a href="https://unity3d.com/" target="_blank"><img src="/images/libraries/unity.svg" title="Unity" class="bw"></a>
            </div>
        </div>
    </div>
</div>
@endsection