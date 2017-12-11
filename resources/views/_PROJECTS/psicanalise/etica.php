<!doctype html>
<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Psicanálise</title>
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css?version=2">
</head>

<a name="top"></a>
<body class="inner-pages">
<nav>
	<a href="index.php"><img  id="logo-pequeno" src="images/logo-pequeno.png"></a>
	<?php
		include('inc/header.php');
	?>
</nav>
<main class="no-img">
	<div class="etica">
	<h3>Regulamentação</h3>
		<ul>
			<li alt="etica/etica.pdf">Código de ética</li>
			<li alt="etica/condicoes.pdf">Condições de serviço</li>
		</ul>

		<div style="clear:both"></div>
		<div class="quick-contact">
			<img src="images/pic.png">
			<span>Entre em contato</span>
			<textarea placeholder="Deixe a sua mensagem aqui"></textarea>
			<input type="submit" value="Enviar"></input>
		</div>
	</div>
</main>
<div class='fix-foot'></div>
<footer>
	<img src="images/logo-pequeno-foot.png">
		<ul id="foot-contact">
		<li>
			<form action="#" method="post">
				<input type="text" name="name" maxlength="100" placeholder="Nome">
					<input type="text" name="email" maxlength="100" placeholder="E-mail">
					<input type="text" name="pais" maxlength="100" placeholder="País">
					<textarea name="message" placeholder="Escreva a sua mensagem aqui..."></textarea>
					<input type="submit" value="Submit" class="submit-button" disable>
			</form>
		</li>
			<li>
				<ul id="foot-info">
					<li>CONTATO</li>
					<li>Localização:</li>
					<li>Península, Rua dos Jacarandás</li>
					<li>1160 bloco 2 apt 901</li>
					<li>CEP 22776050</li>
					<li>Rio de Janeiro, Brasil</li>
					<li>Telefone:</li>
					<li>+55 (21) 9169-1535</li>
					<li>E-mail:</li>
					<li>email@exemplo.com</li>
			</ul>
		</li>
	</ul>
		<div class="social">
		<img src="images/facebook.png">
		<img src="images/twitter.png">
		<img src="images/youtube.png">
		<img src="images/skype.png">
	</div>
	<ul id="foot-links">
		<li>agenda</li>
		<li>calendário</li>
		<li>livro</li>
		<li>consultas</li>
		<li>contato</li>
	</ul>
	<p>© 2015 Online-Therapy.com. All rights reserved.<br>
	Terms, conditions, features, availability, pricing, fees, service and support options subject to change without notice.</p>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
</script>

<script>
var navHeight = $('nav').height();
var contactHeight = $('.content textarea').offset().top;
var screenHeight = $(window).height();
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
		$('.bg-top').css('opacity', 1 - scroll/600);
    if (scroll > navHeight) {
			//$('nav ul').css('font-size', '80%');
		} else {
			$('nav ul').css('font-size', '100%');
		}
});

</script>

<!-- Scroll page to link -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

<!-- Display pdf form in an overlay -->
<script src="js/forms.js"></script>

</body>
</html>
