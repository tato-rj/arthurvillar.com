@extends('_app')

@section('header')
    @component('partials.header')
    Arthur Villar - Reset Password
    @endcomponent
@endsection

@section('content')
<div class="container mt-8">
    <div class="row col-12 text-center align-items-center justify-content-center flex-column m-0">
        <h5 class="text-warning">Reset password</h5>
        <p class="no-indent">We will send you an email with a link to change your password.</p>
        <form class="mt-4" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Send Password Reset Link</button>
            </div>
        </form>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
</div>
@endsection
