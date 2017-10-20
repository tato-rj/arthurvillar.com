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
            <p>Hi <strong>{{ Auth::user()->first_name }}</strong>! Here you can find the projects we are currently working on. See below a list of those projects and quick links to edit your account. To interact with your website just open a tab and click on the <span class="text-info">preview</span> button. Inside each tab you will also find a short description of the project, current task I am working on and its deadline.</p>
        </div>
    </div>
    {{-- Dashboard --}}
    <div class="container mb-8" id="dashboard">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                <h6 class="bg-info"><i class="fa fa-folder-open" aria-hidden="true"></i><strong>Projects</strong></h6>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @forelse ($projects as $project)
                        <div class="card">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
                                <div class="card-header" role="tab" id="heading{{$loop->iteration}}">
                                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>{{$project->name}}
                                </div>
                            </a>
                            <div id="collapse{{$loop->iteration}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$loop->iteration}}">
                                <div class="card-block">
                                    <a href="{{$project->path()}}" class="btn btn-sm btn-info pull-right"><i class="fa fa-external-link-square" aria-hidden="true"></i>preview</a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-address-card" aria-hidden="true"></i><strong>Name:</strong></strong> {{$project->user->fullName()}}
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i><strong>Contact:</strong> {{$project->user->email}}
                                        </li>
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><strong>Project started</strong> {{$project->created_at->diffForHumans()}}
                                        </li>
                                        <li>
                                            <i class="fa fa-wrench" aria-hidden="true"></i><strong>Current task:</strong> {{$project->current_task}}
                                        </li>
                                        <li>
                                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i><strong>Task deadline:</strong> 
                                            <span class="{{ ($project->deadlinePassed()) ? 'text-danger' : 'text-success' }}">{{ $project->task_deadline->toFormattedDateString() }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-book" aria-hidden="true"></i><strong>Description:</strong> {{$project->description}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>You have no projects</p>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12" id="account">
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