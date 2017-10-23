@component('mail::message')
# A message from {{ $data['name'] }}

{{ $data['message'] }}

My email is <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
@endcomponent