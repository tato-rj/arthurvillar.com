<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/primer.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('header')
</head>
<body>
    <div id="app">
        @include('layouts.primer.header')
        
        <main>
            @yield('content')
        </main>

        {{-- @include('layouts.primer.footer') --}}
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    @stack('footer')
</body>
</html>
