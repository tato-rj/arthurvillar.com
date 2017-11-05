<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="nyFO0tnJ4vPP13WtkZyLRfewqWZoM1EhD4Ugcdhj">
        
        <title>TheScienceBreaker</title>
        <script src="{{ asset('_projects/tsb/js/pace.min.js') }}"></script>
        <link href="{{ asset('_projects/tsb/css/app.css') }}" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/266720d991.js"></script>
    </head>
    <body id="page-top">

    <header class="pt-4">
	<div class="container">
		<div id="title-container" class="mb-3">
			<div class="row">
				<div class="col-10">
					<div class="d-flex align-items-center">
						<img src="{{ asset('_projects/tsb/images/logo.svg') }}" id="title">
						<div id="buttons-container" class="ml-5">
							<a href="/contact/submit-your-break" class="btn btn-block"><i class="fa fa-upload mr-2" aria-hidden="true"></i><span>SUBMIT YOUR BREAK</span></a>
							<a href="/contact/ask-a-question" class="btn btn-block"><i class="fa fa-question-circle-o mr-2" aria-hidden="true"></i><span>ASK A QUESTION</span></a>
						</div>
					</div>					
				</div>
				<div class="col-2" id="partner-container">
					<a href="http://www.unige.ch/" target="_blank">
						<img src="{{ asset('_projects/tsb/images/university-partner.svg') }}">
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
        
<div id="overlay">
	<img src="{{ asset('_projects/tsb/images/logo-small.svg') }}">
</div>
<div class="container">
	
	<div class="row mt-5">
		<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 mb-4">
			<div class="box">
				<h4 class="title"><strong>Why TheScienceBreaker?</strong></h4>				<p>TheScienceBreaker promotes the dialogue and the dissemination of a scientific culture so that society-relevant opinions can be discussed and decisions may be taken accordingly. Discover our <a href="/mission">mission</a>.</p>
			</div>
			<div class="box">
				<h4 class="title"><strong>What is a Break?</strong></h4>				<p>We publish short lay summaries, called Breaks, where scientific papers are explained by scientists, called Breakers, directly involved in the field of research. <a href="/about">Learn more</a></p>
			</div>
			<div id="app-container" class="box row align-items-center justify-space-around jumbotron m-1 text-center">
			
				<h5 class="mb-2 mx-auto"><strong>TheScienceBreaker <span class="text-orange">APP</span></strong></h5>
		
				<div class="col-lg-6 col-md-12 mt-2 hidden-sm-down">
					<img src="{{ asset('_projects/tsb/images/ios-app/app.svg') }}">
				</div>
				<div class="p-2 col-lg-6 col-md-12">
					<p>Our iOS app is coming out soon, <strong>stay tuned</strong>!</p>
					<a href="https://www.facebook.com/sciencebreaker/?fref=ts" target="_blank">
						<img id="apple-store" src="{{ asset('_projects/tsb/images/ios-app/apple-store.svg') }}">
					</a>
				</div>
			</div>		
		</div>

		<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
			<div class="box">
				<div class="d-flex align-items-baseline justify-content-between">
					<h4>Latest published Breaks</h4>
					<span class="text-muted"><small>Today, Nov 4, 2017</small></span>
				</div>
				<div class="box">
					<table id="latest-breaks">
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/microbiology.svg') }}">
								</th>
								<td>
									<p>
										<a href="/users/{{auth()->user()->username}}/thesciencebreaker/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance">Red in Tooth and Claw: another weapon against antibiotic resistance</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/users/{{auth()->user()->username}}/thesciencebreaker/breakers/nicholas-a-isley" class="breaker">Nicholas A. Isley</a>
																			</strong></small></p>
									<p><small>Published 1 month ago in <a href="/breaks/microbiology">Microbiology</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/evolution-behaviour.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/evolution-behaviour/saving-the-injured-the-value-of-rescued-veterans-in-a-predatory-ant-species">Saving the injured: The value of rescued veterans in a predatory ant species</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/erik-frank" class="breaker">Erik Frank</a>
																			</strong></small></p>
									<p><small>Published 1 month ago in <a href="/breaks/evolution-behaviour">Evolution &amp; Behaviour</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/evolution-behaviour.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/evolution-behaviour/how-cats-conquered-the-ancient-world-a-9000-years-dna-tale">How cats conquered the Ancient world: a 9,000-years DNA tale</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/eva-maria-geigl" class="breaker">Eva-Maria Geigl</a>
																				, 
										<a href="/breakers/thierry-grange" class="breaker">Thierry Grange</a>
																			</strong></small></p>
									<p><small>Published 1 month ago in <a href="/breaks/evolution-behaviour">Evolution &amp; Behaviour</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/evolution-behaviour.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/evolution-behaviour/the-daily-life-of-neandertals">The daily life of Neandertals</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/andrew-farrer" class="breaker">Andrew Farrer</a>
																			</strong></small></p>
									<p><small>Published 1 month ago in <a href="/breaks/evolution-behaviour">Evolution &amp; Behaviour</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/plant-biology.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/plant-biology/one-root-for-every-soil-a-double-personality-tale">One root for every soil: a double-personality tale </a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/laura-lorenzo" class="breaker">Laura Lorenzo</a>
																			</strong></small></p>
									<p><small>Published 1 month ago in <a href="/breaks/plant-biology">Plant Biology</a></small></p>
								</td>
							</tr>					
											</table>
				</div>				
			</div>
			<div class="box">
				<div class="d-flex align-items-baseline justify-content-between">
					<h4>Most popular</h4>
				</div>
				<div>
					<table id="latest-breaks">
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/microbiology.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance">Red in Tooth and Claw: another weapon against antibiotic resistance</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/nicholas-a-isley" class="breaker">Nicholas A. Isley</a>
																			</strong></small></p>
									<p><small>Published 1 month ago in <a href="/breaks/microbiology">Microbiology</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/health-physiology.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/health-physiology/one-run-a-day-keeps-thecancer-away">One run a day keeps the...cancer away!</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/manja-idorn" class="breaker">Manja Idorn</a>
																				, 
										<a href="/breakers/per-thor-straten" class="breaker">Per thor Straten</a>
																			</strong></small></p>
									<p><small>Published 1 year ago in <a href="/breaks/health-physiology">Health &amp; Physiology</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/earth-space.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/earth-space/tara-oceans-expedition-sequences-the-ocean">Tara Oceans Expedition sequences the ocean</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/chris-bowler" class="breaker">Chris Bowler</a>
																			</strong></small></p>
									<p><small>Published 1 year ago in <a href="/breaks/earth-space">Earth &amp; Space</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/health-physiology.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/health-physiology/the-colour-beige-heating-up-the-fat">The colour beige: heating up the fat</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/caterina-da-re" class="breaker">Caterina Da Rè</a>
																			</strong></small></p>
									<p><small>Published 1 year ago in <a href="/breaks/health-physiology">Health &amp; Physiology</a></small></p>
								</td>
							</tr>					
													<tr>
								<th>
									<img src="{{ asset('_projects/tsb/images/categories-icons/health-physiology.svg') }}">
								</th>
								<td>
									<p>
										<a href="/breaks/health-physiology/a-weekend-camping-is-just-what-the-doctor-ordered">A Weekend Camping is Just What the Doctor Ordered</a>
									</p>
									<p><small><strong>Written by: 
																				
										<a href="/breakers/ellen-r-stothard" class="breaker">Ellen R. Stothard</a>
																				, 
										<a href="/breakers/hannah-kent-ritchie" class="breaker">Hannah Kent  Ritchie</a>
																				, 
										<a href="/breakers/kenneth-p-wright" class="breaker">Kenneth P.  Wright </a>
																			</strong></small></p>
									<p><small>Published 4 months ago in <a href="/breaks/health-physiology">Health &amp; Physiology</a></small></p>
								</td>
							</tr>					
											</table>
				</div>				
			</div>
		</div>
	</div>

	
	<div class="row mt-3">
		<div class="col-12">
				<h4 class="title"><strong>Breaks by subject</strong></h4>		</div>
		<div class="d-flex flex-row justify-content-center align-items-center flex-wrap" id="subject-icons">
							<a href="/breaks/earth-space">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/earth-space.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Earth &amp; Space</strong></h5>
						<h5><strong>9 Breaks</strong></h5>
					</div>
				</div>
				</a>
							<a href="/breaks/evolution-behaviour">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/evolution-behaviour.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Evolution &amp; Behaviour</strong></h5>
						<h5><strong>21 Breaks</strong></h5>
					</div>
				</div>
				</a>
							<a href="/breaks/health-physiology">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/health-physiology.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Health &amp; Physiology</strong></h5>
						<h5><strong>15 Breaks</strong></h5>
					</div>
				</div>
				</a>
							<a href="/breaks/maths-physics-chemistry">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/maths-physics-chemistry.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Maths, Physics &amp; Chemistry</strong></h5>
						<h5><strong>2 Breaks</strong></h5>
					</div>
				</div>
				</a>
							<a href="/breaks/microbiology">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/microbiology.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Microbiology</strong></h5>
						<h5><strong>6 Breaks</strong></h5>
					</div>
				</div>
				</a>
							<a href="/breaks/neurobiology">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/neurobiology.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Neurobiology</strong></h5>
						<h5><strong>4 Breaks</strong></h5>
					</div>
				</div>
				</a>
							<a href="/breaks/plant-biology">
				<div class="icon-wrapper">
					<img src="{{ asset('_projects/tsb/images/categories-icons/plant-biology.svg') }}">
					<div class="d-flex align-items-center justify-content-center flex-column text-center">
						<h5><strong>Plant Biology</strong></h5>
						<h5><strong>7 Breaks</strong></h5>
					</div>
				</div>
				</a>
					</div>
	</div>

	
	<div class="row hidden-sm-down mt-5" id="discussion-container">
		<div class="col-7">
			<h4 class="title"><strong>Join the discussion!</strong></h4>			<p>TheScienceBreaker is an open-access environment where everyone, scientists and laypeople, can meet and discuss about the latest scientific discoveries. For each and every Break, you may join the discussion-space below each published Break and help us build a better future with more dialogues and less walls!</p>
		</div>
		<div class="col-4 offset-1">
			<i class="fa fa-comments-o" aria-hidden="true"></i>
		</div>
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
