<h6 class="bg-red text-white"><i class="fa fa-folder-open" aria-hidden="true"></i><strong>MY PROJECTS</strong></h6>
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
                <a href="{{$project->path()}}" class="btn btn-sm btn-red pull-right"><i class="fa fa-external-link-square" aria-hidden="true"></i>preview</a>
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
    <p class="mt-2">You have no projects</p>
    @endforelse
</div>