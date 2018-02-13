<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="jBKvVJt7TKzGJiLhrnUT4lQqXiQSGdsdU7S2qPlW">

    <title>AnandamayiYoga</title>

    <!-- Styles -->
    
    <link href="{{ asset('_PROJECTS/anandamayiyoga/css/vendor/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('_PROJECTS/anandamayiyoga/css/app.css') }}?version=1" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
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
              <input type="hidden" name="_token" value="6jBvtHNfxGDKmKNrsrcBeRTax9E4f1qNSlX2mOEY">
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
                <a href="" class="btn btn-block m-1 btn-facebook">Log in with Facebook</a>
                <a href="" class="btn btn-block m-1 btn-twitter">Log in with Twitter</a>
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
            <button type="button" class="btn btn-outline-warning"><strong>Need help?</strong></button>
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
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('anandamayi/introduction')}}">introduction to Yoga</a>
            <a class="dropdown-item" href="{{route('anandamayi/about')}}">about anandamayi</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            our library
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">guidelines for practice</a>
            <a class="dropdown-item" href="#">library poses</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#login" href="">login</a>
        </li>
      </ul>
    </div>
  </nav>    <div id="app">


        <div class="container-fluid">

    <div class="row">
    <section class="col-12 h-40vh bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/covers/anandamayi.jpg')}})">
        <div class="overlay w-100 h-100 bg-blue z-0"></div>
    </section>
  <img src="{{asset('_PROJECTS/anandamayiyoga/images/alice/lead.jpg')}}" class="rounded-circle mx-auto d-block lead-profile-image">
</div>    <section class="container pb-5">
    <div class="row mb-5">
        <div class="col-12 mt-2 mb-5 text-center">
            <h1 class="font-lg">Anandamayi</h1>
            <div class="line-shape"></div>
        </div>
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
          <article id="scroll-mark">
            <p>Mauris elementum tristique nisi id maximus. Praesent rutrum quam posuere nisl egestas congue. Fusce tristique leo quis ante faucibus molestie. Vestibulum quis orci at neque euismod mattis nec in mauris. In at augue et erat ullamcorper finibus. Maecenas vehicula, sapien sit amet euismod congue, velit nibh sagittis magna, et mattis sapien nibh a nisi. In a ultrices ligula. Quisque eu congue lectus. Praesent id tempus lectus. Fusce posuere consequat purus. Duis aliquam congue viverra. Aliquam id libero accumsan, bibendum massa vitae, venenatis orci.</p>
            <p>Suspendisse fringilla ipsum eget nulla sollicitudin rhoncus. Donec ut vestibulum lectus, quis pellentesque libero. Aenean sit amet lacus tincidunt, congue nulla id, dignissim ligula. Quisque tellus velit, hendrerit ac eros vel, feugiat dictum enim. Nulla sit amet volutpat ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a purus lacus. Nunc nisl quam, interdum nec dictum quis, consectetur a nibh. Vivamus congue purus eget ligula lacinia, quis tempus purus tempor. Curabitur porta nec elit molestie pulvinar.</p>
          </article>
        </div>
    </div>
</section>    <section class="row">
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic1.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic2.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic3.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic4.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic5.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic6.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic7.jpg')}}); height: 260px">    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/alice/pic8.jpg')}}); height: 260px">    
  </div>
</section>    <section class="container py-5">
    <div class="row my-5">
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
          <article id="scroll-mark">
            <p>Nunc cursus risus quis lobortis scelerisque. Nunc maximus, libero blandit sagittis ultricies, justo augue consequat leo, nec luctus risus risus vitae quam. Mauris quis odio eget quam molestie volutpat in eu sem. Aenean sapien justo, commodo vel sodales nec, volutpat eu odio. Cras eros diam, blandit in faucibus sit amet, interdum at dui. Suspendisse vel pretium enim. In id sodales justo. Suspendisse vulputate risus id ante lobortis eleifend. Proin semper sollicitudin eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec maximus augue pretium erat congue volutpat. Cras mattis sem eu velit accumsan aliquam.</p>
            <p>Sed ullamcorper a lectus ac hendrerit. Aliquam in porta dolor. Quisque ac aliquet ipsum. Phasellus blandit nulla at sem facilisis congue. Ut condimentum ex vitae justo semper ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi ligula libero, vestibulum non eleifend at, semper id lorem. Maecenas a elementum velit. Ut laoreet porttitor enim, ut suscipit risus dignissim a. Curabitur orci orci, pharetra quis ultrices in, mattis a sem. Vestibulum sit amet elementum ex.</p>
                <h5 class="text-red my-4"><strong>Duis pretium quam sapien</strong></h5>
                <p>Sed pellentesque dui massa. Proin sem ipsum, hendrerit eu purus nec, pellentesque sodales magna. Nullam scelerisque vestibulum tristique. Vivamus facilisis porta venenatis. Nam faucibus accumsan elementum. Vivamus placerat est et auctor tristique. Pellentesque ac dui in tortor maximus tempus et ut augue. Sed bibendum sem in velit convallis ornare. Etiam feugiat facilisis est, fringilla pellentesque leo. Maecenas lacinia orci odio, ullamcorper varius quam egestas eget. Pellentesque malesuada vitae enim sed congue.</p>
                <p>Phasellus sed suscipit sem. Nullam laoreet, ligula ut placerat porta, metus felis euismod justo, et semper lectus felis quis felis. Nulla quis ullamcorper felis. Etiam dignissim eros sed nunc fringilla convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
          </article>
        </div>
    </div>
</section>    <section class="row position-relative p-8 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/join.jpg')}}">
    <div class="overlay-dark w-100 h-100 bg-blue z-0"></div>
    <div class="container">
        <div class="row text-white align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h2>JOIN US TODAY</h2>
                <a href="{{route('anandamayi/register')}}" class="btn btn-outline-blue-empty mt-4 mb-2"><strong>START YOUR 15-DAY TRIAL TODAY</strong></a>
                <p class="m-0">Find the perfect plan for you — You can pause/cancel anytime, in less than 10 seconds</p>
            </div>
        </div>
    </div>
</section>    <section class="row bg-light-gradient">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>ON ALL YOUR DEVICES</h2>
                <p class="m-0">Practice yoga anywhere, anytime and on any device - works on all platforms, we'll always be with you</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img class="w-100" src="{{asset('_PROJECTS/anandamayiyoga/images/backgrounds/devices.png')}}">
            </div>
        </div>
    </div>
</section>
</div>

        <footer class="bg-dark">
    <div class="d-flex align-items-center justify-content-center bg-light">
      <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-facebook-f"></i></a></h3>
      <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-youtube"></i></a></h3>
      <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-twitter"></i></a></h3>
      <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-instagram"></i></a></h3>
      <h3 class="m-3 text-muted"><a href="#"><i class="t-2 fab fa-google-plus-g"></i></a></h3>
    </div>
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mx-auto py-5">
    <div class="d-flex justify-content-between py-2 align-items-start">
      <div>
        <div class="d-flex align-items-center mb-4">
          <img src="{{asset('_PROJECTS/anandamayiyoga/images/logo.svg')}}" style="width:2.2em">    
          <h5 class="mb-0 ml-2"><strong style="color:lightgrey">Anandamayi<span class="text-muted">Yoga</span></strong></h5>  
        </div>
        <div>
          <a class="m-2" href="#">about</a>
          <a class="m-2" href="#">terms & conditions</a>
          <a class="m-2" href="#">privacy policy</a>
          <a class="m-2" href="#">contact</a>
        </div>
      </div>

      <div>
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter your email">
            <span class="input-group-btn">
              <button class="btn btn-red" style="border-top-left-radius:0; border-bottom-left-radius:0;" type="button"><strong>Subscribe me</strong></button>
            </span>
          </div>
          <small class="text-muted">(We wil never share your email with anyone)</small>
        </form>
      </div>
    </div>
  </div>
  <div class="copyright pb-2">
    <small>Copyright ©2017 Anandamayi Yoga</small>
  </div>
</footer>

    </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('_PROJECTS/anandamayiyoga/js/app.js')}}"></script>

</body>
</html>