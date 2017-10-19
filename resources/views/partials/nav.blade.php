<div id="nav">
    <div class="d-flex align-items-center justify-content-center">
        <a href="/music" class="{{ $music }}"><img src="/images/nav-icons/music.svg" class="nav-icon bw"></a>
        <a href="/code" class="{{ $code }}"><img src="/images/nav-icons/code.svg" class="nav-icon bw"></a>
        <a href="/contact" class="{{ $contact }}"><img src="/images/nav-icons/contact.svg" class="nav-icon bw"></a>
        @if(auth()->check())
	        <a href="/home" class="profile {{ $user }}"><img src="/images/nav-icons/user.svg" class="nav-icon"></a>
        @else
        	<a href="/login" class="{{ $login }}"><img src="/images/nav-icons/login.svg" class="nav-icon bw"></a>
        @endif
    </div>
</div>