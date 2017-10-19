@component('partials.alerts.alert')
	@slot('type')
		alert-success
	@endslot
	@slot('message')
		<strong>Grazie!</i></strong> {{ $flash }}
	@endslot
@endcomponent