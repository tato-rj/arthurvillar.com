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
            <div class="d-flex align-items-center nav justify-content-center">
                <div>
                    <a href="/music"><i class="fa fa-ticket" aria-hidden="true"></i></a>
                    <small class="d-block">music</small>
                </div>
                <div>
                    <a href="/code"><i class="fa fa-code" aria-hidden="true"></i></a>
                    <small class="d-block">code</small>
                </div>
                
                @if(auth()->check())
                    <div>
                        <a href="{{ auth()->user()->path() }}/dashboard"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <small class="d-block text-red">logged in!</small>
                    </div>   
                @else
                    <div>
                        <a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                        <small class="d-block">login</small>
                    </div>
                @endif
            </div>
            @include('snippets.social')
        </div>
    </div>
</div>
@endsection