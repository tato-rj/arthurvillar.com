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
	<div class="row">
		
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
	<div class="d-flex flex-column justify-content-center" id="side-social">
		<a href="mailto:max.caine@gmail.com">
			<i class="fa fa-envelope-open" aria-hidden="true"></i>
		</a>
		<a href="https://www.facebook.com/sciencebreaker/?fref=ts">
			<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="https://twitter.com/sciencebreaker">
			<i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
		<a href="">
			<i class="fa fa-google" aria-hidden="true"></i>
		</a>
		<a href="/storage/breaks/pdf/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance.pdf">
			<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
		</a>
	</div>
</div>
		
		<div id="break" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="tags mb-3">
								<a href="/tags/biology">
					<span class="badge badge-pill">biology</span>
				</a>
								<a href="/tags/cells">
					<span class="badge badge-pill">cells</span>
				</a>
								<a href="/tags/bacteria">
					<span class="badge badge-pill">bacteria</span>
				</a>
								<a href="/tags/health">
					<span class="badge badge-pill">health</span>
				</a>
							</div>
			
			
			<h5>
				<a href="/breaks/microbiology">Microbiology</a>
			</h5>
			
			<h3><strong>Red in Tooth and Claw: another weapon against antibiotic resistance</strong></h3>
			
			<div class="d-flex justify-content-between mt-4">
				<div class="d-flex align-items-baseline">
					<a href="https://en.wikipedia.org/wiki/Open_access" target="_blank">
						<img src="/images/util-icons/open-access.svg">
					</a>
					<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">
						<img src="/images/util-icons/cc.svg" class="ml-2">
					</a>
				</div>
				<div>
					<a href="https://doi.org/10.25250/thescbr.brk064"><small>https://doi.org/10.25250/thescbr.brk064</small></a>
				</div>
			</div>
			
			<div>
				<div id="author_info">
					<p></p>
				</div>
				<small><p id="author">by 
											
						<a href="/breakers/nicholas-a-isley">Nicholas A. Isley</a> | Postdoctoral Research Fellow
									</p></small>
			</div>
			
			<div class="d-flex justify-content-between align-items-center reading-time">
	<div>
		<i class="fa fa-eye" aria-hidden="true"></i>
		<small>Views 237</small>
	</div>
	<div class="flex-grow ml-2">
		<i class="fa fa-clock-o" aria-hidden="true"></i>
		<small>Reading time 3.5 min</small>
	</div>
	<div>
		<small>published on Oct 3, 2017</small>
	</div>
</div>			
			
			<div class="mt-4">
				<p>Bacteria are an integral part of human life. These organisms are on your skin, in your mouth, your ears, and your gut. After birth, a diverse population is acquired by the age of three and remarkably the population is quite similar and just as diverse in adulthood, practically remaining unchanged. Although the <a href="https://simple.wikipedia.org/wiki/Human_microbiome" target="_blank" rel="noopener">microbiome</a> is essential to our survival, the world of bacteria is incredibly complex. While most bacteria do not harm us and they often protect us, pathogenic bacteria cause harm of their hosts. By understanding how these organisms function and interact with their surroundings is critical to identifying new ways to treat harmful bacterial infections and has been one of the most important scientific advances in achieving a long healthy life for members of society.</p>

<p>Competition and natural selection in nature are rampant, and bacteria as well have their own means of outcompeting other organisms: one is through the production of natural products (or small molecules). A notable and well-known natural product is <a href="https://simple.wikipedia.org/wiki/Penicillin" target="_blank" rel="noopener">penicillin</a>. Penicillin was the very first antibiotic discovered when <a href="https://en.wikipedia.org/wiki/Alexander_Fleming" target="_blank" rel="noopener">Alexander Fleming</a> noticed that mold had contaminated his colonies of Staphylococcus aureus inhibiting their growth. Shortly following, he identified penicillin, resulting in a new family of compounds that have been undeniably one of the most important discoveries of the twentieth century. Commonly encountered infections could be treated simply by use of this antibiotic.</p>

<p>Although penicillin paved the way for antibiotic development, another highly important family of antibiotics came with the discovery of <a href="https://en.wikipedia.org/wiki/Vancomycin" target="_blank" rel="noopener">vancomycin</a> in 1956. Vancomycin is unique as it targets fundamental <a href="https://en.wikipedia.org/wiki/Cell_wall#Bacterial_cell_walls" target="_blank" rel="noopener">cell wall</a> building blocks (unlike penicillin) present across bacteria that affects the integrity of their cell wall. Think of stones required to build a castle. Without a proper castle wall, the insides are compromised. For bacteria, this results in death. Because of how vancomycin works, it is highly difficult for bacteria to develop a resistance. This makes vancomycin quite efficacious and it is employed when penicillin cannot get the job accomplished, resulting in it being a "last-resort" drug for nearly 50 years in the clinic.</p>

<p>Despite vancomycin's efficaciousness and long-standing utility in the clinic, there has been a rise in resistant bacterial strains towards vancomycin. Hospitals are now confronted with the frightening reality that drugs to treat such infections are sometimes not only ineffective, but might also result in breeding pathogenic bacteria that are even more resistant to any prescribed drug. Particular strains of bacteria are now a major threat and hospitals need a general solution. Thus, it is not surprising that vancomycin-resistant strains have recently been identified by the World Health Organization among those that pose the greatest threat to worldwide human health.</p>

<p>Researchers within our lab sought to address this problem. How do we design an antibiotic that is not only potent against vancomycin-resistant strains, but that might also "stand" the test of time? That is, can we change vancomycin in such a way that results in an antibiotic not only effective against vancomycin-resistant strains, but are also not prone to bacteria developing resistance to the drug. Can we design a truly durable antibiotic? Through experimentation, we identified how to synthetically change vancomycin such that it can now attack bacteria on multiple fronts simultaneously. One change overcomes the molecular basis of vancomycin resistance. Two additional changes each introduced new independent ways in which the compound could prevent productive bacterial cell wall assemblage (the castle's wall). By employing such a strategy, these vancomycin-resistant strains were shown to be unable to create a counter-strategy (namely to develop resistance) towards our vancomycin analogue that can kill bacteria by three independent mechanisms of action. This concept was so effective, that we anticipate this being a general strategy in the future of antibiotic drug development.</p>

<p>Although still at an early stage of development, we are exceedingly excited about the potential. Our goals are to further study and understand if this new vancomycin analogue is efficacious and safe when given to an infected host. We also anticipate developing new ways to produce the new vancomycin analogues so that their cost and availability will not be a barrier to their use. There is still much to do and we are merely at the trail-head of our journey.</p>
			</div>
			<div class="mt-4">
				<hr>
				<p class="mb-0"><strong>Next read:</strong> <a href="/breaks/evolution-behaviour/how-humans-gave-acne-to-the-grapevine">How humans gave acne to the grapevine</a>
				<small>by 
											
						<a class="breaker" href="/breakers/carlos-j-rivera-rivera">Carlos J. Rivera-Rivera</a>
					</small></p>
			</div>
			<hr>
			
			<div id="credits" class="mt-4">
				<h5>Edited by:</h5>
				<p><strong><a href="/core-team/massimo-caine" class="breaker">Massimo Caine</a></strong>, Founder of TheScienceBreaker</p>
				<h5 class="mt-3">Original Article:</h5>
				<p><small>Okano A, Isley N, Boger D. <a href="https://doi.org/10.1073/pnas.1704125114" target="_blank" rel="noopener">Peripheral modifications of [Ψ[CH 2 NH]Tpg 4 ]vancomycin with added synergistic mechanisms of action provide durable and potent antibiotics</a>. <em>Proceedings of the National Academy of Sciences</em>. 2017:201704125. doi:10.1073/pnas.1704125114.</small></p>
			</div>
			
			<div id="disqus_thread" class="mt-4 mb-5"></div>
			
			<div class="">
				<h5 style="color: white;
    background: #06b2b8;
    padding: 6px 12px;">Also about <a href="/tags/biology">health</a></h5>
				<table id="latest-breaks" class="mt-4">
											<tr>
							<th>
								<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/earth-space.svg') }}">
							</th>
							<td>
								<p>
									<a href="/breaks/earth-space/why-some-forests-burn-better-than-others">Why some forests burn better than others</a>
								</p>
								<p><small><strong>Written by: 
																		
									Elisa  Dell&#039;Aglio
																	</strong></small></p>
								<p><small>Published 2 years ago in Earth &amp; Space</small></p>
							</td>
						</tr>					
											<tr>
							<th>
								<img src="{{ asset('_PROJECTS/tsb/images/categories-icons/microbiology.svg') }}">
							</th>
							<td>
								<p>
									<a href="/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance">Red in Tooth and Claw: another weapon against antibiotic resistance</a>
								</p>
								<p><small><strong>Written by: 
																		
									Nicholas A. Isley
																	</strong></small></p>
								<p><small>Published 1 month ago in Microbiology</small></p>
							</td>
						</tr>					
									</table>
			</div>
			<div class="mt-4">
				<h5 style="color: white;
    background: #06b2b8;
    padding: 6px 12px;">More from <a href="/breaks/microbiology">Microbiology</a></h5>
				<table id="latest-breaks" class="mt-4">
											<tr>
							<th>
								<i class="fa fa-flask text-muted" aria-hidden="true"></i>
							</th>
							<td>
								<p>
									<a href="/breaks/microbiology/red-in-tooth-and-claw-another-weapon-against-antibiotic-resistance">Red in Tooth and Claw: another weapon against antibiotic resistance</a>
								</p>
								<p><small><strong>Written by: 
																		
									Nicholas A. Isley
																	</strong></small></p>
								<p><small>Published 1 month ago in Microbiology</small></p>
							</td>
						</tr>					
											<tr>
							<th>
								<i class="fa fa-flask text-muted" aria-hidden="true"></i>
							</th>
							<td>
								<p>
									<a href="/breaks/microbiology/the-cutting-edge-bringing-genomics-to-everyone">The cutting EDGE: Bringing genomics to everyone</a>
								</p>
								<p><small><strong>Written by: 
																		
									Patrick Chain
																	</strong></small></p>
								<p><small>Published 4 months ago in Microbiology</small></p>
							</td>
						</tr>					
											<tr>
							<th>
								<i class="fa fa-flask text-muted" aria-hidden="true"></i>
							</th>
							<td>
								<p>
									<a href="/breaks/microbiology/invisible-allies-for-healthy-juvenile-growth">Invisible allies for healthy juvenile growth</a>
								</p>
								<p><small><strong>Written by: 
																		
									Martin Schwarzer
																	</strong></small></p>
								<p><small>Published 1 year ago in Microbiology</small></p>
							</td>
						</tr>					
											<tr>
							<th>
								<i class="fa fa-flask text-muted" aria-hidden="true"></i>
							</th>
							<td>
								<p>
									<a href="/breaks/microbiology/cold-adaptation-gut-bacteria-can-make-the-difference">Cold adaptation: gut bacteria can make the difference</a>
								</p>
								<p><small><strong>Written by: 
																		
									Daniele Guido
																	</strong></small></p>
								<p><small>Published 1 year ago in Microbiology</small></p>
							</td>
						</tr>					
											<tr>
							<th>
								<i class="fa fa-flask text-muted" aria-hidden="true"></i>
							</th>
							<td>
								<p>
									<a href="/breaks/microbiology/collateral-damage-antibiotics-disrupt-the-balance-in-the-gut">Collateral damage: antibiotics disrupt the balance in the gut</a>
								</p>
								<p><small><strong>Written by: 
																		
									Katri Korpela
																	</strong></small></p>
								<p><small>Published 1 year ago in Microbiology</small></p>
							</td>
						</tr>					
									</table>
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
