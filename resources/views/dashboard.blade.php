@extends('_app')

@section('header')
    @component('partials.header')
        {{ auth()->user()->first_name }}'s dashboard
    @endcomponent
@endsection

@section('menu')
    @component('partials.nav')
        @slot('music')
        @endslot
        @slot('code')
        @endslot
        @slot('login')
        @endslot
        @slot('user')
            active
        @endslot
        @slot('contact')
        @endslot
    @endcomponent
@endsection

@section('content')
<div class="container-fluid" id="code-container">
    @component('partials.title')
        @slot('icon')
            user
        @endslot
    projects
    @endcomponent
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 offset-lg-1 offset-md-1">
            <p>Hi <strong>{{ Auth::user()->first_name }}</strong>! Here you can find the projects we are currently working on. See below a list of those projects and quick links to edit your account. To interact with your website just open a tab and click on the <span class="text-red">preview</span> button. Inside each tab you will also find a short description of the project, current task I am working on and its deadline.</p>
        </div>
    </div>
    {{-- Dashboard --}}
    <div class="container mb-8" id="dashboard">
        <div class="row">
            <div class="col-lg-9 col-md-6 col-sm-12 col-sm-12">
                @include('snippets/dashboard/projects')
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12" id="profile">
                @include('snippets/dashboard/profile')
            </div>
        </div>
    </div>
</div>
@endsection