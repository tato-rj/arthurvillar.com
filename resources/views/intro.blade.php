@extends('_app')

@section('header')
    @component('partials.header')
    Welcome to {{ config('app.name') }}.com
    @endcomponent
@endsection

@section('content')
<div class="container-fluid">
    <div class="row align-items-center" id="welcome-container">
        <div class="col-12 text-center">
            {{-- Title --}}
            <div class="d-flex align-items-center justify-content-center" id="title">
                <h1>arthurvillar<span class="text-warning">::welcome</span></h1>
            </div>
            {{-- Menu --}}
            <div class="d-flex mt-4 align-items-center nav justify-content-center">
                <div>
                    <a href="/music"><img src="/images/nav-icons/music.svg" class="nav-icon bw"></a>
                    <small class="d-block mt-2">music</small>
                </div>
                <div>
                    <a href="/code"><img src="/images/nav-icons/code.svg" class="nav-icon bw"></a>
                    <small class="d-block mt-2">code</small>
                </div>
                
                @if(auth()->check())
                    <div>
                        <a href="/home"><img src="/images/nav-icons/user.svg" class="nav-icon profile"></a>
                        <small class="d-block mt-2 text-info">logged in!</small>
                    </div>   
                @else
                    <div>
                        <a href="/login"><img src="/images/nav-icons/login.svg" class="nav-icon bw"></a>
                        <small class="d-block mt-2">login</small>
                    </div>
                @endif
            </div>
            @include('snippets.social')
        </div>
    </div>
</div>
@endsection