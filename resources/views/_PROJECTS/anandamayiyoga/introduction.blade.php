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
    <section class="col-12 h-40vh bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/covers/introduction.jpg')}})">
        <div class="overlay w-100 h-100 bg-blue z-0"></div>
    </section>
</div>    <section class="container py-5">
    <div class="row my-3">
        <div class="col-12 mb-5 text-center">
            <h1 class="font-lg">Introduction to Yoga</h1>
            <div class="line-shape"></div>
        </div>
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
          <article id="scroll-mark">
            <h4 class="text-red mb-4">
              <span class="badge mr-2 rounded-circle bg-blue-light text-white">1</span>Duis pretium quam sapien
            </h4>
            <p>Pellentesque sit amet mollis velit. Donec nisi massa, efficitur sed fringilla ut, vulputate sed ipsum. Ut accumsan varius augue, et lacinia velit condimentum dapibus. Suspendisse et mi eleifend, tincidunt libero a, hendrerit mauris. Donec laoreet nulla eu suscipit venenatis. Nulla rhoncus, diam fermentum pulvinar consectetur, mi nisl condimentum metus, a pellentesque lacus neque eget sem. Praesent pulvinar purus lacinia justo pharetra varius. In facilisis sit amet arcu ut iaculis. Vestibulum aliquet dolor sed massa blandit, a tempor ipsum vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tempus nisl fringilla, efficitur leo in, iaculis dui. Maecenas eget erat luctus, ullamcorper sem vel, mattis sapien. Praesent tristique turpis ac laoreet eleifend. Pellentesque vitae porttitor nisi.</p>
            <p>Nullam hendrerit tellus arcu, a euismod neque blandit id. Ut tempor scelerisque luctus. Sed consectetur malesuada odio at finibus. Cras malesuada nisl et sem pharetra, et pharetra dolor faucibus. Sed et aliquam libero. Vivamus massa mi, semper eu dapibus sed, tristique sit amet erat. Nam blandit bibendum molestie. Donec nec tellus nec magna consequat commodo at in nulla.</p>
          </article>
          <article class="mt-5">
            <h4 class="text-red mb-4">
              <span class="badge mr-2 rounded-circle bg-blue-light text-white">2</span>Praesent tristique
            </h4>
            <p>Aliquam erat volutpat. Curabitur aliquam vehicula ipsum et pretium. Maecenas et est id lorem sollicitudin sollicitudin ac ut justo. Nunc ex leo, vestibulum vitae nisl non, porttitor egestas metus. Mauris at erat at lorem fringilla accumsan. Nullam euismod pulvinar quam, ac laoreet ligula mattis nec. Nulla ultricies, massa in fringilla malesuada, tellus orci mattis augue, in laoreet elit risus quis lorem. Sed vitae nunc nisi. Duis diam mi, aliquam in purus ut, vehicula placerat enim. Duis pretium quam sapien, nec iaculis ipsum aliquet rhoncus. Etiam dignissim tellus et vulputate volutpat. Nunc sed viverra nibh. Nunc ullamcorper dui in massa faucibus facilisis. Nullam orci nulla, mattis sed enim venenatis, semper hendrerit dui. Aliquam lacus sem, placerat quis ex non, mattis euismod enim.</p>
            <p>Cras condimentum massa sed suscipit tempus. Aenean molestie imperdiet enim, tristique dignissim ante feugiat in. Aliquam tempor nisl nec ipsum blandit scelerisque. Duis iaculis nisl velit, in commodo leo finibus eu. Nam vehicula ligula non orci mattis, lobortis aliquam turpis euismod. Vivamus nec fermentum lectus, pellentesque bibendum sem. Suspendisse lacinia ac mauris maximus feugiat. Nullam at justo pulvinar, blandit quam elementum, vestibulum lectus. Aliquam dictum vehicula magna, id maximus arcu iaculis sit amet. Maecenas quis rutrum odio. In erat tellus, porttitor in gravida eu, vehicula quis nulla.</p>
          </article>
          <article class="mt-5">
            <h4 class="text-red mb-4">
              <span class="badge mr-2 rounded-circle bg-blue-light text-white">3</span>Quisque non eros turpis
            </h4>
            <p>Vestibulum ac sem turpis. Nulla facilisi. Curabitur ac euismod arcu, id pellentesque nibh. Integer maximus vehicula odio consectetur rutrum. Mauris quam lorem, pulvinar in neque a, congue congue est. Mauris tempor fermentum mi, sit amet sagittis sem. Phasellus nunc odio, cursus nec ligula vel, volutpat bibendum enim. Nam ac mauris mauris. Integer tempor ornare massa, ac sagittis lacus finibus ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean viverra, felis sit amet mattis luctus, nisl ante tincidunt leo, non dictum tellus velit id eros. Donec elementum, nulla id mollis vehicula, sem tortor consectetur leo, nec rhoncus turpis enim vel risus. Proin suscipit leo ligula, nec porta ex laoreet a. Maecenas a fermentum nisi. Suspendisse euismod elementum iaculis. Fusce in augue mattis, viverra nisl non, vestibulum eros.</p>
            <p>Nulla tempor maximus nisl, ut porttitor ipsum vehicula vitae. Quisque non eros turpis. Quisque est ligula, vestibulum cursus lacus id, dapibus euismod mi. Proin consectetur, urna sed consequat ornare, ex dolor consequat sem, id feugiat leo diam ac ligula. Quisque rutrum cursus massa vitae aliquam. Integer lacinia ac neque vel vehicula. Cras rutrum turpis eros, id convallis lacus rhoncus ac. Donec nec accumsan massa, quis efficitur est. Nam sollicitudin orci quis orci tempus, a pharetra urna sodales. Quisque ut bibendum justo, at scelerisque ligula.</p>
          </article>
        </div>
    </div>
</section>    <section class="row position-relative p-8 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/join.jpg')}});">
    <div class="overlay-dark w-100 h-100 bg-red z-0"></div>
    <div class="container">
        <div class="row text-white align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-12 reveal" reveal-duration="800" reveal-origin="left" reveal-delay="0">
                <h2>INVEST IN YOURSELF</h2>
                <a href="{{route('anandamayi/register')}}" class="btn btn-outline-red-empty mt-4 mb-2"><strong>START YOUR 15-DAY TRIAL TODAY</strong></a>
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