<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="nyFO0tnJ4vPP13WtkZyLRfewqWZoM1EhD4Ugcdhj">
        
        <title>TheScienceBreaker</title>
        <link href="{{ asset('_PROJECTS/tsb/css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('_PROJECTS/tsb/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">

    <header class="pt-4">
	<div class="container">
		<div id="title-container" class="mb-3">
			<div class="row">
				<div class="col-10">
					<div class="d-flex align-items-center">
						<img src="{{ asset('_PROJECTS/tsb/images/logo.svg') }}" id="title">
						<div id="buttons-container" class="ml-5">
							<a href="/contact/submit-your-break" class="btn btn-block"><i class="fa fa-upload mr-2" aria-hidden="true"></i><span>SUBMIT YOUR BREAK</span></a>
							<a href="/contact/ask-a-question" class="btn btn-block"><i class="fa fa-question-circle-o mr-2" aria-hidden="true"></i><span>ASK A QUESTION</span></a>
						</div>
					</div>					
				</div>
				<div class="col-2" id="partner-container">
					<a href="http://www.unige.ch/" target="_blank">
						<img src="{{ asset('_PROJECTS/tsb/images/university-partner.svg') }}">
					</a>
				</div>				
			</div>
		</div>

	<nav class="navbar navbar-expand-lg navbar-toggleable-md p-0">
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/users/{{ auth()->user()->username }}/thesciencebreaker">HOME</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
					PRESENTATION
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/about">ABOUT</a>
					<a class="dropdown-item" href="/mission">MISSION</a>
					<a class="dropdown-item" href="/the-team">THE TEAM</a>
					<a class="dropdown-item" href="/partners">PARTNERS</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
					BREAKS
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item d-flex align-items-center" href="/breaks/earth-space">EARTH &amp; SPACE<span class="badge badge-warning ml-2">9</span></a>
											<a class="dropdown-item d-flex align-items-center" href="/breaks/evolution-behaviour">EVOLUTION &amp; BEHAVIOUR<span class="badge badge-warning ml-2">21</span></a>
											<a class="dropdown-item d-flex align-items-center" href="/breaks/health-physiology">HEALTH &amp; PHYSIOLOGY<span class="badge badge-warning ml-2">15</span></a>
											<a class="dropdown-item d-flex align-items-center" href="/breaks/maths-physics-chemistry">MATHS, PHYSICS &amp; CHEMISTRY<span class="badge badge-warning ml-2">2</span></a>
											<a class="dropdown-item d-flex align-items-center" href="/breaks/microbiology">MICROBIOLOGY<span class="badge badge-warning ml-2">6</span></a>
											<a class="dropdown-item d-flex align-items-center" href="/breaks/neurobiology">NEUROBIOLOGY<span class="badge badge-warning ml-2">4</span></a>
											<a class="dropdown-item d-flex align-items-center" href="/breaks/plant-biology">PLANT BIOLOGY<span class="badge badge-warning ml-2">7</span></a>
									</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
					FOR BREAKERS
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/information">INFORMATION</a>
					<a class="dropdown-item" href="/faq">FAQ</a>
					<a class="dropdown-item" href="/available-articles">AVAILABLE ARTICLES</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
					CONTACT
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/contact/ask-a-question">ASK A QUESTION</a>
					<a class="dropdown-item" href="/contact/break-inquiry">BREAK INQUIRY</a>
					<a class="dropdown-item" href="/contact/submit-your-break">SUBMIT YOUR BREAK</a>
				</div>
			</li>
		</ul>
		<form method="GET" action="/search" class="form-inline my-2 my-lg-0">
			<div class="input-group" id="search-form">
				<input type="text" name="for" class="form-control border-0 input-sm" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn border-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</span>
			</div>
		</form>
	</div>
</nav>
	</div>	
</header>
    <main>
        
        
<div class="container mt-4">
	<div class="row" id="author">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="mt-4 jumbotron">
				<div class="d-flex align-items-baseline">
					<h4><i class="fa fa-user mr-2" aria-hidden="true"></i><strong>Nicholas A. Isley</strong></h4>
					<small class="ml-2"><em>joined in Apr 30, 2016</em></small>
				</div>
				<div class="">
					<p class="mb-1">Postdoctoral Research Fellow at The Scripps Research Institute, BCC-483, 10550 N. Torrey Pines Rd. La Jolla, CA 92037.</p>
					<p class="mb-0">Isley has <strong>1</strong> break published.</p>
									</div>
			</div>
			<div>
								<div class="p-3">
					<h5><a href="/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance"><i class="fa fa-file-text mr-2" aria-hidden="true"></i><strong>Red in Tooth and Claw: another weapon against antibiotic resistance</strong></a></h5>

											<small class="text-muted"><em><strong>Isley is also an author of the original article</strong></em></small>
										
					<p class="mt-3">Bacteria are an integral part of human life. These organisms are on your skin, in your mouth, your ears, and your gut. After birth, a diverse population is acquired by the age of three and remarkably the population is quite similar and just as diverse in adulthood, practically remaining unchanged. Although the microbiome is essential to our survival, the world of bacteria is incredibly complex. While most bacteria do not harm us and they often protect us, pathogenic bacteria cause harm of their hosts. By understanding how these organisms function and interact with their surroundings is critical to identifying new ways to treat harmful bacterial infections and has been one of the most important scientific advances in achieving a long... <a href="/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance">click to read more</a></p>
					<ul class="authors">
												<small><li><strong><a href="/breakers/nicholas-a-isley" class="breaker">Nicholas A. Isley</a></strong> | Postdoctoral Research Fellow at The Scripps Research Institute, BCC-483, 10550 N. Torrey Pines Rd. La Jolla, CA 92037</li></small>
											</ul>
					<div class="d-flex justify-content-between align-items-center reading-time">
	<div>
		<i class="fa fa-eye" aria-hidden="true"></i>
		<small>Views 206</small>
	</div>
	<div class="flex-grow ml-2">
		<i class="fa fa-clock-o" aria-hidden="true"></i>
		<small>Reading time 3.5 min</small>
	</div>
	<div>
		<small>published on Oct 3, 2017</small>
	</div>
</div>				</div>
							</div>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
	<div id="side-bar">
		<div>
			<strong><p class="mb-3">Editor's picks</p></strong>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/neurobiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/neurobiology/where-is-the-engram">Where is the Engram?</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Susumu Tonegawa
																	, 
									Tomás Ryan
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/microbiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/microbiology/fighting-back-antibiotic-resistance-a-new-hope-from-the-soil">Fighting back antibiotic resistance: a new hope from the soil</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Dan Kramer
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/evolution-behaviour.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/evolution-behaviour/who-is-really-really-smart-early-differences-in-boys-and-girls-assumptions-about-intelligence">“Who is really, really smart?”  Early differences in boys’ and girls’ assumptions about intelligence</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Lin Bian
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/health-physiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/health-physiology/driving-down-malaria">Driving down malaria</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Andrew  Hammond
																	, 
									Xenia Karlsson
																	, 
									Ziyin Wang
															</em>
						</small>
					</div>
				</div>
					</div>
		<div>
			<strong><p class="mb-3">Most popular</p></strong>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/microbiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance">Red in Tooth and Claw: another weapon against antibiotic resistance</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Nicholas A. Isley
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/health-physiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/health-physiology/one-run-a-day-keeps-thecancer-away">One run a day keeps the...cancer away!</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Manja Idorn
																	, 
									Per thor Straten
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/earth-space.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/earth-space/tara-oceans-expedition-sequences-the-ocean">Tara Oceans Expedition sequences the ocean</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Chris Bowler
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/health-physiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/health-physiology/the-colour-beige-heating-up-the-fat">The colour beige: heating up the fat</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Caterina Da Rè
															</em>
						</small>
					</div>
				</div>
							<div class="d-flex align-items-center mb-3">
					<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/health-physiology.svg') }}" class="mr-3">
					<div>
						<small class="d-block mb-1">
							<span><a href="/breaks/health-physiology/a-weekend-camping-is-just-what-the-doctor-ordered">A Weekend Camping is Just What the Doctor Ordered</a></span>
						</small>
						<small class="d-block">
							<em class="text-muted">by 
																	
									Ellen R. Stothard
																	, 
									Hannah Kent  Ritchie
																	, 
									Kenneth P.  Wright 
															</em>
						</small>
					</div>
				</div>
			
		</div>
	</div>
</div>	</div>
</div>


    </main>

    
    
    <footer class="container-fluid mt-5 p-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
				<div class="d-flex align-items-center mb-4">
					<h5 class="m-0 mr-4"><strong>FOLLOW US</strong></h5>
					<div class="d-flex align-items-center justify-content-center social">
						<a href="https://www.facebook.com/sciencebreaker/?fref=ts" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a href="https://twitter.com/sciencebreaker" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="" target="_blank">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</div>	
				</div>
				<div class="d-flex align-items-top">
					<ul class="p-0">
						<p>PRESENTATION</p>
						<li>
							<a href="/about">about</a>
						</li>
						<li>
							<a href="/mission">mission</a>
						</li>
						<li>
							<a href="/the-team">the team</a>
						</li>
						<li>
							<a href="/partners">partners</a>
						</li>					
					</ul>
					<ul>
						<p>BREAKS</p>
												<li>
							<a href="/breaks/earth-space">
								earth &amp; space
							</a>
						</li>
												<li>
							<a href="/breaks/evolution-behaviour">
								evolution &amp; behaviour
							</a>
						</li>
												<li>
							<a href="/breaks/health-physiology">
								health &amp; physiology
							</a>
						</li>
												<li>
							<a href="/breaks/maths-physics-chemistry">
								maths, physics &amp; chemistry
							</a>
						</li>
												<li>
							<a href="/breaks/microbiology">
								microbiology
							</a>
						</li>
												<li>
							<a href="/breaks/neurobiology">
								neurobiology
							</a>
						</li>
												<li>
							<a href="/breaks/plant-biology">
								plant biology
							</a>
						</li>
											</ul>
					<ul>
						<p>FOR BREAKERS</p>
						<li>					
							<a href="/information">general information</a>
						</li>
						<li>
							<a href="/faq">F.A.Q</a>
						</li>
						<li>	
							<a href="/available-articles">available articles</a>
						</li>						
					</ul>
					<ul>
						<p>CONTACT US</p>
						<li>
							<a href="/contact/ask-a-question">ask a question</a>
						</li>
						<li>
							<a href="/contact/break-inquiry">break inquiry</a>
						</li>
						<li>
							<a href="/contact/submit-your-break">submit a break</a>
						</li>
						<li>
							<a href="https://www.iubenda.com/privacy-policy/7974803" target="_blank">privacy policy</a>
						</li>						
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				
				<div>
					<h5><strong>SUBSCRIBE</strong></h5> <p class="text-muted">Stay up-to-date with the latest published Breaks!</p>
					<form method="POST" action="/admin/subscriptions">
						<input type="hidden" name="_token" value="nyFO0tnJ4vPP13WtkZyLRfewqWZoM1EhD4Ugcdhj">
						<div class="form-group">
							<input required type="email" class="form-control" name="subscription" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<button type="submit" class="btn btn-theme-green btn-block">Submit</button>
					</form>
					
					<small class="form-text text-muted text-danger">
  
</small>
				</div>

			</div>
		</div>
		<div class="mt-4 text-center">
			<ul class="credits pt-4">
				<li>30, Quai Ernest-Ansermet 1211 Genève 4<i class="fa fa-circle" aria-hidden="true"></i></li>
				<li>© TheScienceBreaker 2015 - 2017. All rights reserved<i class="fa fa-circle" aria-hidden="true"></i></li>
				<li>powered by <a href="https://www.leftlaneapps.com" target="_blank">LeftLane</a><i class="fa fa-circle" aria-hidden="true"></i></li>
				<li><a href="/admin/dashboard">Admin Login</a></li>
			</ul>
		</div>
	</div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fa fa-angle-up"></i>
</a>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="http://thesciencebreaker.app/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="http://thesciencebreaker.app/js/admin/jquery.easing.min.js"></script>
    
    
</body>
</html>
