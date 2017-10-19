@extends($root.'_core')

@section('content')

<section class="container">
    <div class="page-header hidden-lg-up">
        <p>Contatti</p>
    </div>
    <div class="row">
    	<div class="col-lg-4 offset-lg-2 col-md-6 col-sm-12 col-xs-12">
			  <div class="text-center">
			       	<a href="https://goo.gl/SP4UXQ"><p class="mb-1 text-danger"><strong>Via Roma, 13 - 31020 Tarzo (TV)</strong></p></a>
			    	<a href="mailto:contatti@farmaciaditarzo.com" target="_blank"><p class="mb-1">contatti@farmaciaditarzo.com</p></a>
			    	<a href="tel:+390438586597"><p class="mb-1">Tel: (+39) 0438 586 597</p></a>
			         <p class=" text-muted mt-3">Vuoi ricevere maggiori informazioni su CRIT e i suoi sevizi? Compila il modulo qui di seguito e sarai ricontattato al più presto.</p>
			  </div>
    	</div>
    	<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    		<form method="POST" action="/contatti">
                {{csrf_field()}}
    			<div class="form-group">
    				<input type="text" class="form-control" name="first_name" placeholder="Nome" required value="{{ old('first_name') }}">
    			</div>
    			<div class="form-group">
    				<input type="text" class="form-control" name="last_name" placeholder="Cognome" required value="{{ old('last_name') }}">
    			</div>
    			<div class="form-group">
    				<input type="email" class="form-control" name="email" placeholder="E-mail" required value="{{ old('email') }}">
    			</div>
    			<div class="form-group">
    				<textarea class="form-control" rows="6" name="message" placeholder="Messaggio" required>{{ old('message') }}</textarea>
    			</div>
    			<div class="form-check mb-4">
                    <a class="btn btn-sm btn-link p-0 mb-1" href="" data-toggle="modal" data-target="#exampleModal">Normativa sulla Privacy</a>
    				<label class="form-check-label">
    					<input type="checkbox" name="policy" class="form-check-input" required>
    					Ho letto ed accetto l'informativa sulla privacy
    				</label>
    			</div>
    			<button type="submit" class="btn btn-block btn-primary"><strong>Invia</strong></button>
    		</form>
    	</div>
    </div>
</section>

@include($root.'partials.privacy_policy')

@if($flash = session('email_sent'))
    @include($root.'partials.alerts.success')
@endif

@if(!$errors->isEmpty())
    @include($root.'partials.alerts.error')
@endif

@endsection
