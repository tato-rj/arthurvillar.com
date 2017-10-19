<nav class="navbar-toggleable-md navbar-light bg-faded ">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars text-success" aria-hidden="true"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav justify-content-between">
			<li class="nav-item hvr-underline-from-center">
				<a class="nav-link @yield('chi-siamo')" href="/{{ $base_uri }}">Chi Siamo, Cosa Offriamo</a>
				<div class="@yield('chi-siamo')"></div>
			</li>
			<li class="nav-item hvr-underline-from-center">
				<a class="nav-link @yield('come-raggiungerci')" href="/{{ $base_uri }}/come-raggiungerci">Come Raggiungerci</a>
				<div class="@yield('come-raggiungerci')"></div>
			</li>
			<li class="nav-item hvr-underline-from-center">
				<a class="nav-link @yield('turni')" href="/{{ $base_uri }}/turni">Orari e Turni</a>
				<div class="@yield('turni')"></div>
			</li>
{{-- 			<li class="nav-item dropdown @yield('reparti-della-farmacia')">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					I Reparti della Farmacia
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="reparti-della-farmacia/dietetica">Dietetica</a>
					<a class="dropdown-item" href="reparti-della-farmacia/geriatria">Geriatria</a>
					<a class="dropdown-item" href="reparti-della-farmacia/infanzia">Infanzia</a>
					<a class="dropdown-item" href="reparti-della-farmacia/articoli-sanitari">Articoli Sanitari</a>
					<a class="dropdown-item" href="reparti-della-farmacia/cosmetica">Cosmetica</a>
					<a class="dropdown-item" href="reparti-della-farmacia/veterinaria">Veterinaria</a>
					<a class="dropdown-item" href="reparti-della-farmacia/omeopatia">Omeopatia</a>
					<a class="dropdown-item" href="reparti-della-farmacia/integratori-nutrizionali">Integratori Nutrizionali</a>
				</div>
			</li> --}}
			<li class="nav-item hvr-underline-from-center">
				<a class="nav-link @yield('informazioni')" href="/{{ $base_uri }}/informazioni">Informazioni Varie</a>
				<div class="@yield('informazioni')"></div>
			</li>
			<li class="nav-item bg-danger">
				<a class="nav-link text-white" href="/{{ $base_uri }}/contatti"><strong>Contatti</strong></a>
			</li>
		</ul>
	</div>
</nav>