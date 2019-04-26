<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <a class="" href="{{route('primer.index')}}">
    <img src="{{asset('images/projects/primer.svg')}}" width="30" height="30" class="d-inline-block align-top">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Dependencies</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Support</a>
      </li>
    </ul>
    <div class="mr-3">
      <a href="" class="link-none"><span style="font-size: 1.2em" class="icon-github text-grey hover-grayscale-out"></span></a>
      <a href="" class="link-none"><span style="font-size: 1.2em" class="icon-slack text-grey hover-grayscale-out"></span></a>
      <a href="" class="link-none"><span style="font-size: 1.2em" class="icon-twitter text-grey hover-grayscale-out"></span></a>
    </div>
    <a class="btn btn-indigo-outline my-2 my-sm-0" href="{{asset('css/primer.css')}}" download>Download</a>
  </div>
</nav>