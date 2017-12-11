<!doctype html>
<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Psicanálise</title>
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>

<a name="top"></a>
<body class="inner-pages">
<nav>
	<a href="index.php"><img  id="logo-pequeno" src="images/logo-pequeno.png"></a>
	<?php
		include('inc/header.php');
	?>
</nav>
<main id="contact" class="no-img">
	<h3>Contato</h3>
	<ul>
		<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.9519133962817!2d-43.35892641628877!3d-22.988795684664737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xb345d362b9ce5452!2sCondom%C3%ADnio+Pen%C3%ADnsula+Way+Office!5e0!3m2!1sen!2sus!4v1459452973034" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></li>
		<li>
			<form action="php/contato-completo.php" method="post" class='ajaxform'>
				<label>Nome completo</label>
				<input autocomplete="off" type="text" name="name" size="50" maxlength="100" class="fields required">
				<label>Email</label>
				<input id="emailContact" autocomplete="off" type="text" name="email" size="50" maxlength="100" class="fields required">
				<label>Assunto</label>
				<select>
					<option selected disabled></option>
					<option>Consulta online</option>
					<option>Consulta presencial</option>
					<option>Dúvida</option>
				<textarea name="message" rows="10" cols="80" id="project" class="fields required"></textarea><br>
				<div id='shake_button'><input type="submit" value="Enviar" class="submit-button" disable></div>
			</form>
		</li>
	</ul>
	<div style="clear:both"></div>

</main>
<footer>
	<img src="images/logo-pequeno-foot.png">
		<ul id="foot-contact">
		<li>
			<form action="#" method="post">
				<input type="text" name="name" maxlength="100" placeholder="Nome">
					<input type="text" name="email" maxlength="100" placeholder="E-mail">
					<input type="text" name="pais" maxlength="100" placeholder="País">
					<textarea name="message" placeholder="Escreva a sua mensagem aqui..."></textarea>
					<input type="submit" value="Enviar" class="submit-button" disable>
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
var navHeight = $('nav').height();
var contactHeight = $('.content textarea').offset().top;
var screenHeight = $(window).height();
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
		$('.bg-top').css('opacity', 1 - scroll/600);
    if (scroll > navHeight) {
			//$('nav ul').css('font-size', '80%');
			//$('nav').css('background-color', "rgba(110, 167, 200, 0.8)");
			//$('nav').css('position', 'fixed');
			//$('nav ul li').css('color', 'white');
			//... ajusta a posição da frase "O que esperar da terapia online?"
			//$('header h1').css('padding-top', navHeight + 150);
			//$('nav ul').css('margin', '50px');
			//$('#logo-grande').hide();
			//$('#logo-pequeno').show();
			//$('header').children().not('nav').css('opacity', 1-(scroll-50)/800 );
		} else {
			$('nav ul').css('font-size', '100%');
			//$('nav').css('background-color', "transparent");
			//$('nav').css('position', 'relative');
			//$('nav ul li').css('color', '#286284');
			//$('header h1').css('padding-top', '150px');
			//$('#logo-grande').show();
			//$('#logo-pequeno').hide();
			//$('header').children().not('nav').css('opacity', '1');
		}
});

$(document).ready(function(){
	//$('.title h1').delay(800).fadeIn(800);
	//$('.title p').delay(1200).fadeIn(1200);

});
//var contentHeight = $('.content').height();
//$('main').height(contentHeight + 400);
//var mainHeight = $('main').height()
//$('footer').css('margin-top', contentHeight + $('footer').height() + 200);
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
<script>
$('')
</script>

</body>
</html>
