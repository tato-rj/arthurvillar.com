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
        {{-- Feedback Messages --}}
        @if($flash = session('email'))
            @include('snippets.alerts.success')
        @elseif($flash = session('feedback'))
            @include('snippets.alerts.success')
        @endif
        {{-- Error Messages --}}
        @if(!$errors->isEmpty())
            @include('snippets.alerts.error')
        @endif
        {{-- Imports JS libraries and scripts shared between all pages --}}
        @include('partials.footer')
        {{-- Any specific JS script for a single page goes here --}}
        @yield('script')
    </body>
</html>
