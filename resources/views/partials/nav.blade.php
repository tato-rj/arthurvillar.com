<div id="nav">
    <div class="d-flex align-items-center justify-content-center">
        <a href="/music" class="{{ $music }}"><i class="fa fa-ticket" aria-hidden="true"></i></a>
        <a href="/code" class="{{ $code }}"><i class="fa fa-code" aria-hidden="true"></i></a>
        <a href="/contact" class="{{ $contact }}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        @if(auth()->check())
	        <a href="/home" class="profile {{ $user }}"><i class="fa fa-user" aria-hidden="true"></i></a>
        @else
        	<a href="/login" class="{{ $login }}"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
        @endif
    </div>
</div>
{{-- <img src="/images/nav-icons/login.svg" class="nav-icon bw"> --}}