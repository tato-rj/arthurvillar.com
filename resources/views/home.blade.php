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
            active-profile
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
            <p>Hi <strong>{{ Auth::user()->first_name }}</strong>! Here you can find the projects we are currently working on. See below a list of those projects and quick links to edit your account. Don't hesitate to <a href="mailto:arthurvillar@gmail.com">let me know</a> if you need help with anything.</p>
        </div>
    </div>
    {{-- Dashboard --}}
    <div class="container" id="dashboard">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                <h6 class="bg-info"><i class="fa fa-folder-open" aria-hidden="true"></i><strong>Projects</strong></h6>
                <ul>
                    @forelse ($projects as $project)
                        <a href="{{ $project->path() }}">
                            <li class="d-flex justify-content-between">
                                <div>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>{{ $project->name }}
                                </div>
                                <div>
                                    <small>started {{ $project->created_at->diffForHumans() }}</small>  
                                </div>                             
                            </li>
                        </a>
                    @empty
                        <p>You have no projects</p>
                    @endforelse
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                <h6 class="bg-warning"><i class="fa fa-briefcase" aria-hidden="true"></i><strong>My Account</strong></h6>
                <ul>
                    <li>
                        <a href="/users/{{ Auth::user()->username }}"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection