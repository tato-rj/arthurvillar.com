@extends('_PROJECTS/anandamayiyoga/app')

@section('content')
   <div id="app">


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
</section>    <section class="row">
    <div class="container">
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
</div>

@endsection