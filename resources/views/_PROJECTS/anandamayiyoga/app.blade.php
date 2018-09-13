<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="Groq1BcFVw79THYvZW8S310yfWdKK7tgF3iXHBad">

  <title>AnandamayiYoga</title>

  <!-- Styles -->

  <link href="{{ asset('_PROJECTS/anandamayiyoga/css/vendor/fontawesome-all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('_PROJECTS/anandamayiyoga/css/app.css') }}?version=7" rel="stylesheet">
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

  @yield('head')
</head>
<body>
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content pb-4 p-2">
        <div class="modal-header">
          <h4 class="modal-title text-blue" id="exampleModalLabel"><strong><i class="fas fa-user mr-3" style="color:lightgrey"></i>Log In</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="col-lg-11 col-sm-12 mx-auto">
          <div class="modal-body">
            <form method="POST" action="">
              <input type="hidden" name="_token" value="Groq1BcFVw79THYvZW8S310yfWdKK7tgF3iXHBad">
              <div class="form-group">
                <input class="form-control bg-light border-0" 
                name="email" 
                placeholder="E-mail"
                value="">
              </div>
              <div class="form-group">
                <input class="form-control bg-light border-0" 
                type="password" 
                name="password" 
                placeholder="Password">
              </div>
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="form-group m-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Remember me
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div>
                  <small>
                    <a href="">Forgot password?</a>
                  </small>
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-red mt-4"><strong>Continue</strong></button>

            </div>
            <div class="modal-body">
              <div class="text-center text-muted mb-4">
                <span>OR</span>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <a href="/login/facebook" class="btn btn-block m-1 btn-facebook">Log in with Facebook</a>
                <a href="/login/twitter" class="btn btn-block m-1 btn-twitter">Log in with Twitter</a>
              </div>
            </div>
            <div class="modal-footer flex-column">
              <small>Don't have an account yet? <a href="{{route('anandamayi/register')}}">Click here</a> to sign up</small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>    <div class="modal fade" id="classes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content pb-4 p-2">
        <div class="modal-header">
          <h4 class="modal-title text-blue" id="exampleModalLabel"><strong><i class="fas fa-fire mr-3" style="color:lightgrey"></i>Let's get started!</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="col-lg-11 col-sm-12 mx-auto">
          <div class="modal-body text-center">
            <div class="row">
              <div class="col-10 mx-auto text-center">
                <p>Pick one or more and we will build a yoga practice for you</p>
              </div>
              <div class="col-lg-6 col-sm-12">
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Classical Hatha</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Relaxation</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Flexibility</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Strength</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Core</strong></button>    
              </div>
              <div class="col-lg-6 col-sm-12">
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Morning classes</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Balance</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Back pain</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Breathing</strong></button>
                <button class="btn select-class btn-block btn-light text-muted m-2"><strong>Meditation</strong></button>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between my-4">
            <a href="{{route('anandamayi/help')}}" class="btn btn-outline-warning"><strong>Need help?</strong></a>
            <a href="{{route('anandamayi/register')}}" class="btn btn-red"><strong>Start your 15 day Free Trial<i class="ml-2 fas fa-angle-right"></i></strong></a>
          </div>
          <div class="text-muted text-center mb-4">
            <small>Interdum et malesuada fames ac ante. Quisque tristique <a href="#">dictum justo</a>. Nullam erat est, suscipit vitae finibus in, blandit <a href="#">sed tortor</a>. Donec vitae porttitor tortor. Maecenas a venenatis tellus, id rutrum magna.</small>
          </div>
        </div>
      </div>
    </div>
  </div>    <nav class="navbar fixed-top t-2 navbar-expand-lg p-4 px-5">
    <a class="navbar-brand d-flex align-items-center" href="{{route('anandamayi/home')}}">
      <div>
        <img src="{{asset('_PROJECTS/anandamayiyoga/images/logo.svg')}}">
        <img src="{{asset('_PROJECTS/anandamayiyoga/images/logo-pink.svg')}}" style="display:none; opacity:0.8">
      </div>
      <div>
        <h4 class="mb-0 ml-2 text-white"><strong>Anandamayi<span style="color:lightgrey"> Yoga</span></strong></h4>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            about us
          </a>
          <div class="shadow dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('anandamayi/introduction')}}">introduction to Yoga</a>
            <a class="dropdown-item" href="{{route('anandamayi/about')}}">about anandamayi</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            publications
          </a>
          <div class="shadow dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">articles</a>
            <a class="dropdown-item" href="#">books</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">yoga poses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('anandamayi/help')}}">help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#login" href="">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link signup" href="{{route('anandamayi/register')}}"><strong>sign up</strong></a>
        </li>
      </ul>
    </div>
  </nav> 

  @yield('content')

        <footer class="bg-light">
  <div class="d-flex align-items-center justify-content-center border-bottom">
    <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-facebook-f"></i></a></h3>
    <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-youtube"></i></a></h3>
    <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-twitter"></i></a></h3>
    <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-instagram"></i></a></h3>
    <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-google-plus-g"></i></a></h3>
  </div>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="d-flex align-items-center mb-4">
          <img src="{{asset('_PROJECTS/anandamayiyoga/images/logo-pink.svg')}}" style="width:2.2em">   
          <h5 class="mb-0 ml-2 text-muted"><strong>Anandamayi <span style="color:lightgrey">Yoga</span></strong></h5> 
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
            <p class="m-0 text-muted"><strong>about</strong></p>
            <ul class="p-0">
              <li>
                <a class="text-muted" href="introduction-to-yoga">
                  <small>introduction to yoga</small>
                </a>                
              </li>
              <li>
                <a class="text-muted" href="/about-anandamayi">
                  <small>about anandamayi</small>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
            <p class="m-0 text-muted"><strong>our library</strong></p>
            <ul class="p-0">
              <li>
                <a class="text-muted" href="#">
                  <small>guideline for practice</small>
                </a>                
              </li>
              <li>
                <a class="text-muted" href="#">
                  <small>library poses</small>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
            <p class="m-0 text-muted"><strong>services</strong></p>
            <ul class="p-0">
              <li>
                <a class="text-muted" href="#">
                  <small>terms & conditions</small>
                </a>                
              </li>
              <li>
                <a class="text-muted" href="#">
                  <small>privacy policy</small>
                </a>
              </li>
              <li>
                <a class="text-muted" href="#">
                  <small>security</small>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
            <p class="m-0 text-muted"><strong>support</strong></p>
            <ul class="p-0">
              <li>
                <a class="text-muted" href="/support">
                  <small>resources</small>
                </a>                
              </li>
              <li>
                <a class="text-muted" href="#">
                  <small>FAQ</small>
                </a>
              </li>
              <li>
                <a class="text-muted" href="/support/contact">
                  <small>contact</small>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <p class="text-muted m-0"><strong>Subscribe to our Newsletter</strong></p>
        <form>
          <div class="form-group">
            <input required type="text" name="subscription" placeholder="Your email here" class="form-control border-top-0 border-left-0 border-right-0  border rounded-0" style="background:transparent; border-color: lightgrey!important; color: grey;">
          </div>
          <button type="submit" class="btn btn-block btn-blue btn-sm p-2"><strong>Subscribe me</strong></button>
        </form>
      </div>
    </div>
  </div>
  <div class="bg-dark text-muted">
    <div class="container py-2">
      <div class="d-flex justify-content-between">
        <p class="m-0 text-left"><small>Copyright ©2017 Anandamayi Yoga</small></p>
        <div>
          <a href="" class="badge badge-dark">EN</a>
          <a href="" class="badge badge-dark">PT</a>
        </div>
      </div>
    </div>
  </div>
</footer>
    </div>

    <!-- Scripts -->
    <script src="{{asset('_PROJECTS/anandamayiyoga/js/app.js')}}"></script>
    @yield('script')
    </body>
    </html>