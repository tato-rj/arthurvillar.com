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
        <section class="col-12 h-100vh bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/pier.jpg')}})">
          <div class="d-flex align-items-center h-100 justify-content-center text-white flex-column">
            <h1 class="z-10"><strong>Welcome to Anandamayi Yoga</strong></h1>
            <p class="lead z-10">Online yoga and meditation that is right for you</p>
            <a href="{{route('anandamayi/register')}}" class="z-10 btn btn-red btn-lg"><strong>START YOUR FREE TRIAL NOW</strong></a>
          </div>
          <div class="overlay w-100 h-100 bg-blue z-0"></div>
        </section>
      </div>    <section id="scroll-mark" class="container py-5">
        <div class="row text-center my-5">
          <div class="col-12 mb-5 text-center">
            <h1 class="font-lg">Why should I practice Yoga?</h1>
            <div class="line-shape"></div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div reveal-origin="bottom" reveal-delay="0" reveal-duration="500" class="reveal p-4 l-rounded shadow t-2 h-100">

              <img class="highlight-icon" src="{{asset('_PROJECTS/anandamayiyoga/images/icons/meditation.svg')}}">
              <h5 class="text-muted mb-3"><strong>Movement & Meditation</strong></h5>
              <p class="text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing. Donec pulvinar aliquam ante. Curabitur quis libero tincidunt, finibus nunc sit amet, molestie risus.</p>
              <div class="text-right">
                <a href="#" class="link-default">learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div reveal-origin="bottom" reveal-delay="100" reveal-duration="500" class="reveal p-4 l-rounded shadow t-2 h-100">

              <img class="highlight-icon" src="{{asset('_PROJECTS/anandamayiyoga/images/icons/fitness.svg')}}">
              <h5 class="text-muted mb-3"><strong>Fitness</strong></h5>
              <p class="text-muted mb-2">Duis convallis, lorem id fringilla dapibus, metus enim ornare felis, vel viverra. Donec pulvinar aliquam ante, aliquam vel condimentum ipsum.</p>
              <div class="text-right">
                <a href="#" class="link-default">learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div reveal-origin="bottom" reveal-delay="200" reveal-duration="500" class="reveal p-4 l-rounded shadow t-2 h-100">

              <img class="highlight-icon" src="{{asset('_PROJECTS/anandamayiyoga/images/icons/health.svg')}}">
              <h5 class="text-muted mb-3"><strong>Emotional health</strong></h5>
              <p class="text-muted mb-2">Etiam eu metus molestie ligula convallis gravida sed nec felis. Praesent tristique massa. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
              <div class="text-right">
                <a href="#" class="link-default">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </section>    <section class="container py-4">
        <div class="row">
          <div class="col-12">
            <video id="video-lead" reveal-delay="0" reveal-duration="500" reveal-origin="bottom" class="reveal video-area cursor-pointer w-100 h-100" poster="{{asset('_PROJECTS/anandamayiyoga/images/backgrounds/video.jpg')}}">
              <source src="{{asset('_PROJECTS/anandamayiyoga/videos/lead.mp4')}}" type="video/mp4">
                <source src="{{asset('_PROJECTS/anandamayiyoga/videos/lead.ogg')}}" type="video/ogg">
                </video>
                <div class="absolute-center z-10 cursor-pointer">
                  <i id="play-button" class="fas fa-play-circle text-red" style="font-size:7em; opacity:0.6;"></i>
                </div>
              </div>    
            </div>
          </section>

          <section class="row position-relative pb-5 bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/pier-bar.jpg')}}); padding-top: 200px; top:-160px; margin-bottom: -160px">
            <div class="overlay-dark w-100 h-100 bg-blue z-0"></div>
            <div class="container">

              <div class="row text-white align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-12">
                  <h2>Join our Membership</h2>
                  <p>Find the perfect plan for you — You can pause/cancel anytime, in less than 10 seconds</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                  <a href="http://anandamayiyoga.test/register" class="btn btn-lg btn-outline-blue-empty"><strong>GET STARTED</strong></a>
                  <p class="mb-0 mt-1">$12/month - that's all!</p>
                </div>
              </div>
            </div>
          </section>    <div class="row bg-full position-relative" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/level.jpg')}})">
            <div class="overlay-dark w-100 h-100 bg-light z-0"></div>
            <section class="container py-5">
              <div class="row text-center my-5">
                <div class="col-12 text-center">
                  <h1 class="font-lg">Choose the best practice for you</h1>
                  <div class="line-shape"></div>
                </div>
                <div class="col-12 my-4">
                  <p class="lead">Let us find you the right classes to start your <strong>15 day free trial.</strong></p>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
                  <button reveal-origin="bottom" reveal-duration="500" reveal-delay="0" class="reveal hover-shadow t-2 btn btn-lg btn-outline-red mx-5 mb-4" data-toggle="modal" data-target="#classes"><strong>Beginner</strong></button>
                  <button reveal-origin="bottom" reveal-duration="500" reveal-delay="100" class="reveal hover-shadow t-2 btn btn-lg btn-outline-red mx-5 mb-4" data-toggle="modal" data-target="#classes"><strong>Intermediate</strong></button>
                  <button reveal-origin="bottom" reveal-duration="500" reveal-delay="200" class="reveal hover-shadow t-2 btn btn-lg btn-outline-red mx-5 mb-4" data-toggle="modal" data-target="#classes"><strong>Advanced</strong></button>
                </div>
              </div>
            </section>
          </div>    <section class="container py-5">
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
    <script type="text/javascript">
      $('#video-lead, #play-button').on('click', function() {
        if ($('#video-lead').get(0).paused) {
          $('#video-lead').get(0).play();
        } else {
          $('#video-lead').get(0).pause();
        }
        $('#play-button').toggle();
      });
    </script>

    <script type="text/javascript">
      $('.select-class').on('click', function() {
        $(this).toggleClass('btn-light btn-red-light text-muted');
      });
    </script>

    <script type="text/javascript">
      window.sr = ScrollReveal();
      $('.reveal').each(function() {
        sr.reveal($(this), {
          distance: '60px',
          delay: $(this).attr('reveal-delay'),
          origin: $(this).attr('reveal-origin'),
          duration: $(this).attr('reveal-duration')
        });
      });

    </script>
  </body>
  </html>