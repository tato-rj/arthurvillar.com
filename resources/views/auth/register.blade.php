@extends('_app')

@section('menu')
    @component('partials.nav')
        @slot('music')
        @endslot
        @slot('code')
        @endslot
        @slot('login')
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
    register
    @endcomponent
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 offset-lg-4 offset-md-2 offset-sm-1">
            <form class="mt-5 p-5" method="POST" action="{{ route('register') }}">
                <p class="form-title">Fill out this form to <strong class="text-warning">create a new user</strong></p>
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="first_name" value="{{ old('first_name') }}" required class="form-control" id="first_name" placeholder="First name">
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" value="{{ old('last_name') }}" required class="form-control" id="last_name" placeholder="Last name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Comfirm password" required>
                </div>
                <button type="submit" class="btn btn-block">Register</button>
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