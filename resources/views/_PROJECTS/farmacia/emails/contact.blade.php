@component('mail::message')

Ciao! <strong>{{ $data['first_name'] }} {{ $data['last_name'] }}</strong> ha inviato il seguente messaggio:

@component('mail::panel')
{{ $data['message'] }}
@endcomponent

L'email di {{ $data['first_name'] }} è<strong> {{ $data['email'] }}</strong>

@component('vendor.mail.custom.button')
	@slot('url')
	mailto:{{ $data['email'] }}
	@endslot

	@slot('color')
	red
	@endslot

	@slot('text')
	<strong>Clicca qui per rispondere</strong>
	@endslot
@endcomponent

@endcomponent
