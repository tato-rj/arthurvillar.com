@extends('_app')

@section('header')
    @component('partials.header')
    Arthur Villar - Login
    @endcomponent
@endsection

@section('menu')
    @component('partials.nav')
        @slot('music')
        @endslot
        @slot('code')
        @endslot
        @slot('login')
            active
        @endslot
        @slot('user')
        @endslot
        @slot('contact')
        @endslot
    @endcomponent
@endsection

@section('content')
<div class="container-fluid" id="login-container">
    @component('partials.title')
        @slot('icon')
            login
        @endslot
    login
    @endcomponent
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 offset-lg-4 offset-md-2 offset-sm-1">
            <form class="mt-5 p-5" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <p class="form-title">Fill out this form to <strong class="text-warning">log in</strong></p>
                <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" required class="form-control" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-block">Log in</button>
                <div class="d-flex align-items-center justify-content-between foot">
                    <label class="custom-control custom-checkbox align-items-center m-0">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" target="_blank">Forgot password?</a>
                </div>
            </form>
            @if ($errors->has('email'))
            <div class="alert-container">
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Ops!</strong> Something went wrong...
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection