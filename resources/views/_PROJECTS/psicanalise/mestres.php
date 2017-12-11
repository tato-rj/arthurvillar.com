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
<img src="images/article1a.jpg" class="bg-top">
<div class="main-foot-wrapper mestres">
<main>
	<h2>Os grandes mestres</h2>
	<div class="content">
				<h3>Sigmund Freud</h3>
				<select id="biography">
					<option name="sigmund-freud">Sigmund Freud</option>
					<option name="anna-freud">Anna Freud</option>
					<option name="jung">Carl Gustav Jung</option>
					<option name="winnicott">Donald Winnicott</option>
					<option name="klein">Melanie Klein</option>
					<option name="lacan">Jacques Lacan</option>
					<option name="erikson">Erik Erikson</option>
					<option name="dolto">Françoise Dolto</option>
					<option name="abraham">Karl Abraham</option>
					<option name="laplanche">Jean Laplanche</option>
					<option name="jones">Ernest Jones</option>
					<option name="miller">Jacques-Alain Miller</option>
					<option name="pontaoptions">Jean-Bertrand Pontaoptions</option>
					<option name="zizek">Slavoj Žižek</option>
					<option name="bion">Wilfred Bion</option>
					<option name="reich">Wilhelm Reich</option>
				</select>
				<div id="ajax"></div>
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
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
var navHeight = $('nav').height();
var contactHeight = $('.content textarea').offset().top;
var screenHeight = $(window).height();
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
		$('.bg-top').css('opacity', 1 - scroll/600);
    if (scroll > navHeight*4) {
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
//Makes an AJAX call to retreive biography
function getBio(name) {
	//Loads bio passed into the function
	$('#ajax').load('mestres/'+ name +'.html');

}
//Gets Freud's bio by default
getBio('sigmund-freud');
//Changes bio with select options
$('#biography').on('change', function(){
	var title = $('#biography option:selected').text();
	var name = $('#biography option:selected').attr('name');
	$('h3').text(title);
	getBio(name);
})
</script>

</body>
</html>
