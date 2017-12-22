<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PARTYAPP</title>
    <link href="{{ asset('_PROJECTS/partyapp/css/app.css') }}" rel="stylesheet">
</head>

<body google-key="AIzaSyAW8kBdRoSfT255OEaclmeZWQJuwCt9lTI">

    @include('_PROJECTS/partyapp/components/partials/nav')

    @yield('content')

    @yield('footer')

    @include('_PROJECTS/partyapp/components/partials/modals/signup')
    @include('_PROJECTS/partyapp/components/partials/modals/login')
    @include('_PROJECTS/partyapp/components/partials/modals/report')

    <script src="{{asset('_PROJECTS/partyapp/js/app.js')}}"></script>
    <script src="{{asset('_PROJECTS/partyapp/js/helpers.js')}}"></script>
    <script src="{{asset('_PROJECTS/partyapp/js/listeners.js')}}"></script>
    <script src="{{asset('_PROJECTS/partyapp/js/vendor/redirect.js')}}"></script>
    <script src="{{asset('_PROJECTS/partyapp/js/google/autocomplete.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW8kBdRoSfT255OEaclmeZWQJuwCt9lTI&libraries=places&callback=initialize"></script>

    @yield('scripts')

</body>
</html>
