<!doctype html>
<html lang="{{ app()->getLocale() }}">
    {{-- Head of HTML, contaning meta, title and link tags --}}
    @yield('header')
    <body>
        <main class="hidden">
            {{-- Sets up the bottom menu bar --}}
            @yield('menu')
            {{-- Content of each page --}}
            @yield('content')
        </main>
        {{-- Imports JS libraries and scripts shared between all pages --}}
        @include('partials.footer')
        {{-- Any specific JS script for a single page goes here --}}
        @yield('script')
    </body>
</html>
