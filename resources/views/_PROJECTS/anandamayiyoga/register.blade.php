@extends('_PROJECTS/anandamayiyoga/app')

@section('content')
  <div id="app">


        <div class="container-fluid">

    <div class="row">
    <section class="col-12 h-40vh bg-full" style="background-image:url({{asset('_PROJECTS/anandamayiyoga/images/backgrounds/covers/register.jpg')}})">
        <div class="overlay w-100 h-100 bg-blue z-0"></div>
    </section>
</div>    <section id="scroll-mark" class="container py-5">
    <div class="row my-3">
        <div class="col-12 mb-5 text-center">
            <h1 class="font-lg">Let's get started</h1>
            <div class="line-shape"></div>
            <p class="m-0">You are just a few steps away</p>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
          <article>
                <form method="POST" action="">
                    <input type="hidden" name="_token" value="Groq1BcFVw79THYvZW8S310yfWdKK7tgF3iXHBad">

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
                <a href="{{route('anandamayi/register')}}" class="btn btn-blue mt-4 mb-2"><strong>LEARN MORE</strong></a>
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
@endsection