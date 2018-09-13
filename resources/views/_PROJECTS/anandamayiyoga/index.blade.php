@extends('_PROJECTS/anandamayiyoga/app')

@section('head')
<script src="{{ asset('_PROJECTS/anandamayiyoga/js/pace.min.js') }}"></script>
@endsection

@section('content')
<div id="app">
  <div class="container-fluid">
    <div id="intro" class="w-100 h-100 bg-white" style="position: fixed; top: 0; left: 0; z-index: 10000">
      <div class="d-flex align-items-center justify-content-center h-100 flex-column rotate" style="animation-duration: 1.25s">
        
        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="108.667px" height="76.215px" viewBox="0 0 108.667 76.215" enable-background="new 0 0 108.667 76.215"
        xml:space="preserve">
        <g opacity="0.8" class="fade-in" style="animation-duration: 1s">
          <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="27.3613" y1="76.2153" x2="27.3613" y2="22.1963">
            <stop  offset="0" style="stop-color:#FFBBCA"/>
            <stop  offset="1" style="stop-color:#EB5286"/>
          </linearGradient>
          <path fill="url(#SVGID_3_)" d="M54.371,76.088c-0.052,0.052-0.078,0.078-0.127,0.127C21.523,73.811,2.755,55.043,0.351,22.323
          c0.05-0.05,0.075-0.075,0.127-0.127C33.2,24.601,51.962,43.37,54.371,76.088z"/>
        </g>
        <g opacity="0.8" class="fade-in" style="animation-duration: 2s">
          <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="35.7305" y1="76.1704" x2="35.7305" y2="9.6445">
            <stop  offset="0" style="stop-color:#FFBBCA"/>
            <stop  offset="1" style="stop-color:#EB5286"/>
          </linearGradient>
          <path fill="url(#SVGID_5_)" d="M54.483,76.083c-0.063,0.035-0.094,0.053-0.156,0.088C23.47,65.018,10.464,41.891,16.977,9.732
          c0.062-0.035,0.094-0.053,0.157-0.088C47.991,20.791,61,43.924,54.483,76.083z"/>
        </g>
        <g opacity="0.8" class="fade-in" style="animation-duration: 2.75s">
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="54.334" y1="76.2153" x2="54.334" y2="4.882813e-004">
            <stop  offset="0" style="stop-color:#FFBBCA"/>
            <stop  offset="1" style="stop-color:#EB5286"/>
          </linearGradient>
          <path fill="url(#SVGID_1_)" d="M54.423,76.215c-0.072,0-0.108,0-0.18,0C32.806,51.377,32.809,24.839,54.243,0
          c0.072,0,0.108,0,0.18,0C75.858,24.841,75.861,51.375,54.423,76.215z"/>
        </g>
        <g opacity="0.8" class="fade-in" style="animation-duration: 3.25s">
          <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="72.7681" y1="76.3032" x2="72.7681" y2="9.5244">
            <stop  offset="0" style="stop-color:#FFBBCA"/>
            <stop  offset="1" style="stop-color:#EB5286"/>
          </linearGradient>
          <path fill="url(#SVGID_4_)" d="M54.401,76.303c-0.063-0.035-0.094-0.053-0.157-0.088c-6.733-32.11,6.108-55.334,36.893-66.691
          c0.063,0.034,0.094,0.052,0.157,0.087C98.025,41.722,85.183,64.944,54.401,76.303z"/>
        </g>
        <g opacity="0.8" class="fade-in" style="animation-duration: 3.75s">
          <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="81.2534" y1="76.3442" x2="81.2534" y2="22.3237">
            <stop  offset="0" style="stop-color:#FFBBCA"/>
            <stop  offset="1" style="stop-color:#EB5286"/>
          </linearGradient>
          <path fill="url(#SVGID_2_)" d="M54.37,76.344c-0.052-0.053-0.077-0.078-0.127-0.127c2.406-32.721,21.17-51.489,53.893-53.894
          c0.051,0.05,0.074,0.075,0.127,0.127C105.856,55.172,87.091,73.937,54.37,76.344z"/>
        </g>
      </svg>
    </div>
  </div>        <div class="row">
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
        <div reveal-origin="bottom" reveal-delay="0" reveal-duration="500" class="reveal p-4 t-2 h-100">
          <img class="highlight-icon" src="{{asset('_PROJECTS/anandamayiyoga/images/icons/meditation.svg')}}">
          <h5 class="text-muted mb-3"><strong>Spiritual Growth</strong></h5>
          <p class="text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing. Donec pulvinar aliquam ante. Curabitur quis libero tincidunt, finibus nunc sit amet, molestie risus.</p>
          <div class="text-right">
            <a href="#" class="link-default">learn more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div reveal-origin="bottom" reveal-delay="200" reveal-duration="500" class="reveal p-4 t-2 h-100">
          <img class="highlight-icon" src="{{asset('_PROJECTS/anandamayiyoga/images/icons/health.svg')}}">
          <h5 class="text-muted mb-3"><strong>Emotional Balance</strong></h5>
          <p class="text-muted mb-2">Etiam eu metus molestie ligula convallis gravida sed nec felis. Praesent tristique massa. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <div class="text-right">
            <a href="#" class="link-default">learn more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div reveal-origin="bottom" reveal-delay="100" reveal-duration="500" class="reveal p-4 t-2 h-100">
          <img class="highlight-icon" src="{{asset('_PROJECTS/anandamayiyoga/images/icons/fitness.svg')}}">
          <h5 class="text-muted mb-3"><strong>Fitness & Health</strong></h5>
          <p class="text-muted mb-2">Duis convallis, lorem id fringilla dapibus, metus enim ornare felis, vel viverra. Donec pulvinar aliquam ante, aliquam vel condimentum ipsum.</p>
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
              <a href="{{route('anandamayi/register')}}" class="btn btn-lg btn-outline-blue-empty"><strong>GET STARTED</strong></a>
              <p class="mb-0 mt-1">$12/month - that's all!</p>
            </div>
          </div>
        </div>
      </section> 
    <section class="row">
    <div class="container mt-5">
        <div class="row align-items-center pt-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-right books-display">
                <img class="reveal back" reveal-origin="right" reveal-delay="100" reveal-duration="750" src="{{asset('_PROJECTS/anandamayiyoga/images/books/saudacao_do_sol.jpg')}}">
                <img class="reveal front" reveal-origin="left" reveal-delay="200" reveal-duration="750" src="{{asset('_PROJECTS/anandamayiyoga/images/books/saudacao_da_lua.jpg')}}">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="mt-4">Pellentesque neque enim, tempus eget tincidunt non, suscipit in velit. Fusce diam est, sollicitudin vitae pretium quis, porttitor quis tortor. Etiam sollicitudin porttitor tristique.</p>
                <p>Vestibulum mauris odio, finibus non eleifend ac, aliquam id tellus. Etiam vitae neque enim. Phasellus ac velit sed eros volutpat accumsan at ut dolor.</p>
                <a href="" class="btn btn-red"><strong>Learn more about our publications</strong></a>
            </div>
        </div>
    </div>
</section>    
     <section class="row">
        <div class="container my-5">
          <div class="row align-items-center py-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h2>ON ALL YOUR DEVICES</h2>
              <p class="m-0 lead">Practice yoga anywhere, anytime and on any device - works on all platforms, we'll always be with you</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <img class="w-100" src="{{asset('_PROJECTS/anandamayiyoga/images/backgrounds/devices.png')}}">
            </div>
          </div>
        </div>
      </section>

        <div class="row bg-full position-relative" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/studio.jpg')}})">
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

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-10 mx-auto move-control">
                <div class="hover-shadow t-2 cursor-pointer move-item-up" data-toggle="modal" data-target="#classes">
                    <img class="w-100 rounded-top" src="{{asset('_PROJECTS/anandamayiyoga/images/backgrounds/easy.jpg')}}">
                    <button class=" btn btn-lg btn-block border-0" style="background: #edd6789c; border-top-right-radius: 0; border-top-left-radius: 0"><strong>Beginner</strong></button>                         
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-10 mx-auto move-control">
                <div class="hover-shadow t-2 cursor-pointer move-item-up" data-toggle="modal" data-target="#classes">
                    <img class="w-100 rounded-top" src="{{asset('_PROJECTS/anandamayiyoga/images/backgrounds/intermediate.jpg')}}">
                    <button class=" btn btn-lg btn-block border-0" style="background: #ecaf79ab; border-top-right-radius: 0; border-top-left-radius: 0"><strong>Intermediate</strong></button>                         
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-10 mx-auto move-control">
                <div class="hover-shadow t-2 cursor-pointer move-item-up" data-toggle="modal" data-target="#classes">
                    <img class="w-100 rounded-top" src="{{asset('_PROJECTS/anandamayiyoga/images/backgrounds/advanced.jpg')}}">
                    <button class=" btn btn-lg btn-block border-0" style="background: #ec7879b0; border-top-right-radius: 0; border-top-left-radius: 0"><strong>Advanced</strong></button>                         
                </div>
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
    @endsection

    @section('script')
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

    <script type="text/javascript">
      $(window).bind('load', function() {
        $('#intro').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
          setTimeout(function() {
            $('#intro > div').addClass('grow').fadeOut('fast', function() {
              $(this).remove();
              $('.pace').fadeOut('slow');
              $('#intro').fadeOut('slow');
            });
          }, 1250);
        });
      });
    </script>
    @endsection