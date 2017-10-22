<ul class="text-red">
    <li>
        <a href="/users/{{ Auth::user()->username }}">
            <i class="fa fa-cog" aria-hidden="true"></i>Profile settings
        </a>
    </li>
    <li>
        <a href="#" data-toggle="modal" data-target="#delete-account">
            <i class="fa fa-trash" aria-hidden="true"></i>Delete account
        </a>
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

<!-- Modal -->
<div class="modal fade" id="delete-account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash" aria-hidden="true"></i><strong>Are you sure?</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="" method="POST" action="{{ auth()->user()->path() }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <label for="password">Please type your password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-block btn-red">Yes, remove my account</button>
                    <p class="mt-2 text-center text-red no-indent"><small>(This action cannot be undone)</small></p>
                </form>
            </div>
        </div>
    </div>
</div>