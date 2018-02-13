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
    <section class="col-12 h-40vh bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/covers/register.jpg')}})">
        <div class="overlay w-100 h-100 bg-blue z-0"></div>
    </section>
</div>    <section class="container py-5">
    <div class="row my-3">
        <div class="col-12 mb-5 text-center">
            <h1 class="font-lg">Let's get started</h1>
            <div class="line-shape"></div>
            <p class="m-0">You are just a few steps away</p>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
          <article id="scroll-mark">
                <form method="POST" action="">
                    <input type="hidden" name="_token" value="6jBvtHNfxGDKmKNrsrcBeRTax9E4f1qNSlX2mOEY">

                    <div class="form-group">
                        <input id="first_name" type="text" class="form-control bg-light border-0" name="first_name" placeholder="First name" value="" required autofocus>

                                            </div>

                    <div class="form-group">
                        <input id="last_name" type="text" class="form-control bg-light border-0" name="last_name" placeholder="Last name" value="" required autofocus>

                                            </div>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control bg-light border-0" name="email" placeholder="E-mail" value="" required>

                                            </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control bg-light border-0" placeholder="Password" name="password" required>

                                            </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control bg-light border-0" placeholder="Confirm your passowrd" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input " name="agreement" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                I agree to the <a class="link-default" href="">Terms & Conditions</a>
                            </label>
                                                    </div>
                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-red btn-block">
                            <strong>Create my account</strong>
                        </button>
                    </div>
                    <div class="form-group text-muted">
                        <small>You will receive a confirmation email. After confirming your contact you can start customizing your profile and finish your registration to start your 15-day trial. Once you start the trial your credit card will not be charged. The card will be charged $12/month only after the 15-day free period, unless you cancel before the trial ends. <a href="#" class="link-default">Click here</a> if you need more information.</small>
                    </div>
                </form>
            </article>
        </div>
    </div>
</section>
    <section class="row position-relative p-8 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/class.jpg')}});">
    <div class="overlay-dark w-100 h-100 bg-light z-0"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h2><strong>IMPROVE YOUR LIFE STYLE</strong></h2>
                <a href="{{route('anandamayi/about')}}" class="btn btn-blue mt-4 mb-2"><strong>LEARN MORE</strong></a>
                <p class="m-0">Learn more about the many benefits of practicing yoga</p>
            </div>
        </div>
    </div>
</section>    <section class="container py-5">
    <div class="row text-center my-5">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide reveal" reveal-duration="500" reveal-origin="bottom" reveal-delay="0"  data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-12 text-center">
                        <h1 class="font-lg text-blue"><i class="fas fa-quote-left"></i></h1>
                    </div>
                    <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                        <p>"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed mi risus, pharetra quis tincidunt sit amet, convallis ac nunc. Curabitur tempor accumsan tellus, nec maximus arcu porttitor in. Proin sed laoreet felis. Ut luctus turpis non rhoncus sollicitudin."</p>
                    </div>
                    <div class="col-12 d-flex align-items center justify-content-center">
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>            
                    </div>
                    <div class="col-12">
                        <p class="lead text-center">Meaghan Brennan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-12 text-center">
                        <h1 class="font-lg text-blue"><i class="fas fa-quote-left"></i></h1>
                    </div>
                    <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                        <p>"Nullam vestibulum mollis ornare. Integer eget elit eu felis varius efficitur facilisis eu massa. Pellentesque tempor eros sit amet purus venenatis porttitor. Cras congue viverra molestie. Vivamus efficitur libero vitae ex interdum, ut lacinia lorem rutrum. Cras massa felis, gravida ac egestas at, congue quis augue."</p>
                    </div>
                    <div class="col-12 d-flex align-items center justify-content-center">
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>            
                    </div>
                    <div class="col-12">
                        <p class="lead text-center">Lois Redinger</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-12 text-center">
                        <h1 class="font-lg text-blue"><i class="fas fa-quote-left"></i></h1>
                    </div>
                    <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                        <p>"Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris arcu justo, venenatis a enim vel, sagittis porttitor massa. Sed scelerisque erat eget blandit gravida. Suspendisse potenti."</p>
                    </div>
                    <div class="col-12 d-flex align-items center justify-content-center">
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>
                        <i class="fas fa-star text-warning m-1 mb-2"></i>            
                    </div>
                    <div class="col-12">
                        <p class="lead text-center">Agustin Cropper</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <h2 class="text-red" aria-hidden="true"><i class="fas fa-angle-right mirror"></i></h2>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <h2 class="text-red" aria-hidden="true"><i class="fas fa-angle-right"></i></h2>
            </a>
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