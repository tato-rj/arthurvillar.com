<?php
	$isFirstPage = true;
?>
<!doctype html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Psicanálise</title>
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="/css/layout.css"> -->
	<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700);
@import url(http://fonts.googleapis.com/css?family=Prata);
@import url(https://fonts.googleapis.com/css?family=Pacifico);

html {
	width: auto;
}
body {
	font-family: 'Noto Sans', sans-serif;
	font-weight: 350;
	font-size: 16px;
	margin: 0;
	width: auto;
	overflow-y: scroll;
}
* {
	list-style: none;
	text-decoration: none;
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
textarea {
	font-family: inherit;
}
header {
	height: 100vh;
  background-image: url('_PROJECTS/psicanalise/images/index1.jpg');
  background-position: top;
	background-size: cover;
	width: 100%;
	text-align: center;
	position: relative;
	-webkit-box-shadow: inset 0px 153px 83px -87px rgba(0,0,0,0.25);
	-moz-box-shadow: inset 0px 153px 83px -87px rgba(0,0,0,0.25);
	box-shadow: inset 0px 153px 83px -87px rgba(0,0,0,0.25);
}
.bio {
	    width: 100%;
    padding: 140px;
    background: white;
}
hr {
	border: 1px solid lightgrey;
	margin: 60px;
}
nav {
	width: 100%;
	z-index: 10000;
}
nav a {
	color: white;
	cursor: pointer;
}
.link {
	margin-top: 200px;
}
#logo-grande {
	display: inline-block;
	width: 400px;
	margin: 10px;
	margin-left: 20px;
	margin-top: 5px;
	float: left;
}
#logo-pequeno {
	display: none;
	width: 50px;
	margin: 20px;
	margin-left: 40px;
	float: left;
}
nav ul {
	float: right;
	margin: 25px;
	position: relative;
}
nav > ul > li {
	color: white;
	display: inline;
	transition: 0.5s;
	font-size: 100%;
	font-weight: 700;
	margin: 6px;
	padding: 12px;
	position: relative;
}
nav ul a:hover, nav ul li:hover {
	transition: 0.5s;
	color: rgba(255, 255, 255, 0.6);
}
.current {
	color: rgba(255, 255, 255, 0.6);
	cursor: default;
}
ul.sub-menu {
	position: absolute;
	right: 0;
	text-align: right;
	background: white;
	font-weight: lighter;
	padding: 10px;
	margin: 0;
	display: none;
	border-radius: 3px;
}
.sub-menu.first {
	width: 155px;
}
.sub-menu.second {
	width: 170px;
}
.sub-menu.third {
	width: 80px;
}

ul.sub-menu a {
	color: #d7ab8e;
}
.has-sub-menu {
	cursor: default;
}
.has-sub-menu:hover ul.sub-menu {
	display: block;
}
ul.sub-menu li {
	position: relative;
	color: #d7ab8e;
	font-size: 80%!important;
	margin-bottom: 5px;
	margin-top: 5px;
}
ul.sub-menu a:hover {
	color: #d7ab8e;
}
.title {
	width: 40%;
	margin: auto;
  margin-right: 0;

	padding: 40px;
}
.title p {
	display: none;
	margin: 0;
	padding: 5px;
	font-weight: normal;
	font-size: 160%;
	color: grey;
  text-align: right;
}
h1 {
	display: none;
  color: #d7ab8e;
  text-align: right;
	font-size: 360%;
	font-weight: bold;
}
h1 span:first-of-type {
	color: #5484a3;
}
#text-change button {
  padding: 10px 20px;
  background: #e9ea84;
  border: 0;
  color: rgba(255, 255, 255, 0.7);
  font-size: 60%;
  margin-right: 0;
}
h2 {
	font-family: 'Prata', serif;
	color: white;
	text-align: center;
	font-size: 300%!important;
}
h4 {
	text-align: center;
	margin: 20px;
	margin-top: 40px;
}
header button {
	margin: auto;
	padding: 20px 40px;
	background: #286284;
	border: 2px solid #286284;
	color: white;
	font-weight: bold;
	margin: 20px;
	border-radius: 5px;
	font-size: 120%;
	outline: 0;
	cursor: pointer;
}
header button:hover {
	background: white;
	color: #70b2be;
	transition: 0.5s;
}
a {
	text-decoration: none;
	color: #377ba2;
	cursor: pointer;
}
p.clique-aqui {
	display: block;
	float: right;
	font-weight: bold;
	margin: 20px;
}
main {
	padding-top: 60px;
}
.barra1 {
	text-align: right;
	font-size: 120%;
	padding: 120px;
  padding-left: 20%;
  padding-right: 20%;
	width: 100%;
	margin: auto;
	line-height: 2;
	color: black;
	font-weight: 200;
	background: white;
}
.barra1 img {
	float: left;
	width: 180px;
}
.barra1 a:hover {
	opacity: 0.6;
	transition: 0.5s;
}
.connect span {
	font-size: 140%;
	color: black;
}
.barra2 {
	text-align: center;;
	padding: 80px;
	width: 100%;
	line-height: 2;
	color: grey;
	font-weight: 200;
	background: rgba(250, 230, 230, 0.4);
}
.barra2 ul {
	margin: auto;
	width: 1100px;
	max-width: 90%;
}
.barra2 ul li {
	vertical-align: top;
	padding: 15px;
	font-size: 90%;
	text-align: center;
	width: 45%;
	display: inline-block;
}
.barra2 img {
	margin: auto;
	width: 60px;
	display: block;
}
.barra2 span {
	font-weight: bold;
	font-size: 130%;
	display: block;
	padding: 5px;
}
.barra3 {
	background-image: url('_PROJECTS/psicanalise/images/therapy-online.jpg');
	background-size: cover;
	width: 100%;
	padding: 60px;
	text-align: center;
}
.barra3 ul {
	text-align: left;
	width: 90%;
	max-width: 800px;
	margin: auto;
}
.barra3 ul li {
	font-weight: 200;
	color: white;
	font-size: 120%;
	margin: 20px;
	list-style-type: circle;
}
.barra3 button {
	padding: 20px 40px;
	background: white;
	border: 2px solid white;
	color: #87533d;
	font-weight: bold;
	margin: 20px;
	border-radius: 5px;
	font-size: 120%;
	outline: 0;
	cursor: pointer;
}
.barra4 {
	text-align: center;
	color: grey;
	font-size: 120%;
	padding: 80px;
	width: 100%;
	margin: auto;
	line-height: 2;
  background: white;
}
.barra5 {
	text-align: center;
	padding: 80px;
	width: 100%;
	line-height: 2;
	color: grey;
	font-weight: 200;
	background: #f2f2f2;
}
.barra5 ul {
	margin: auto;
	width: 1100px;
	max-width: 100%;
}
.barra5 ul li {
	vertical-align: top;
	padding: 15px;
	font-size: 90%;
	text-align: left;
	width: 24%;
	display: inline-block;
	cursor: pointer;
}
.barra5 ul li:hover {
	transform: scale(1.05);
	transition: 0.5s;
}
.barra5 img {
	margin: auto;
	width: 100%;
	display: block;
}
.barra5 span {
	font-weight: bold;
	font-size: 120%;
	display: block;
	margin-top: 5px;
	margin-bottom: 5px;
	color: #286284;
}
.barra5 a {
	color: inherit;
}
.barra6 {
	background-image: url('_PROJECTS/psicanalise/images/register-today.jpg');
	background-position: left;
	background-repeat: no-repeat;
	background-size: cover;
	height: 530px;
	text-align: center;
	color: grey;
	font-size: 120%;
	padding: 80px;
	width: 100%;
	margin: auto;
	line-height: 2;
}
.barra6 button {
	padding: 20px 40px;
	background: rgba(255, 255, 255, 0.2);
	border: 1px solid lightgrey;
	color: grey;
	font-weight: lighter;;
	margin: 40px;
	border-radius: 5px;
	font-size: 100%;
	outline: 0;
	cursor: pointer;
}
.duvida {
	color: black;
	font-weight: lighter;
	width: 50%;
	margin: auto;
	margin-top: 50px;
}

.duvida span {
	font-size: 140%;
	color: black;
	font-weight: bold;
}
footer {
	border-top: 1px solid lightgrey;
	background-color: rgba(255,255,255,0.94);
	text-align: center;
	padding: 20px;
	position: relative;
}
footer img {
	width: 100px;
	opacity: 0.5;
	margin: 20px;
	margin-bottom: 30px;
}
ul#foot-contact {
	display: block;
	width: 1100px;
	max-width: 100%;
	margin: auto;
	position: relative;
	}
#foot-contact li {
	vertical-align: top;
	display: inline-block;
	width: 48%;
	text-align: right;
}
#foot-contact input, #foot-contact textarea{
	width: 60%;
	margin: 1px;
	border: 0;
	padding: 10px;
	background: rgba(200, 110, 110, 0.1);
	color: grey;
	outline: 0;
	margin-right: 10px;
}
#foot-contact input[type="submit"] {
	font-weight: bold;
	background-color: rgba(40, 98, 132, 0.2);
	padding: 20px;
	cursor: pointer;
}
#foot-contact textarea {
	height: 100px;
}
ul#foot-info {
	width: 100%;
	text-align: left;
	margin-left: 10px;
}
#foot-info li {
	margin-bottom: 6px;
	text-align: left;
	display: block;
	color: grey;
}
#foot-info li:nth-child(1) {
	font-weight: bold;
	font-size: 110%;
}
#foot-info li:nth-child(2), li:nth-child(7), li:nth-child(9) {
	text-decoration: underline;
}
footer ul#foot-links li {
	display: inline;
	margin: 20px;
	margin-bottom: 0;
	color: rgba(0, 0, 0, 0.3);
	font-weight: bold;
}
footer p {
	color: grey;
	border-top: 1px solid lightgrey;
	padding-top: 10px;
	margin-top: 20px;
	font-size: 80%;
}
.social {
	margin: 20px;
}
.social img {
	opacity: 0.5;
	margin: 10px;
	width: 40px;
	cursor: pointer;
}
.social img:hover {
	opacity: 0.8;
	transition: 0.5s;
}

/*

P S I C A N A L I S E

*/
.inner-pages {
	background: black;
}
.inner-pages nav {
	position: fixed;
	top: 0;
	transition: 0.5s;
	background: rgba(110, 167, 200, 0.8);
}
.inner-pages #logo-pequeno {
	display: block!important;
}
.bg-top {
	position: fixed;
	top: 0;
	width: 100%;
}
.etica ul {
	width: 100%;
	margin-top: 100px;
}
.etica li {
    width: 50%;
    margin: 0 auto;
    margin-bottom: 40px;
    border: 1px solid rgba(0,0,0,0.2);
    color: rgba(0,0,0,0.5);
    text-align: center;
    padding: 100px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.2s;
}
.etica li:hover {

    border: 1px solid rgba(0,0,0,0.6);
    color: rgba(0,0,0,0.8);

}
.main-foot-wrapper {
	width: 100%;
	position: absolute;
	top: 0;
	margin-top: 27%;
}
.inner-pages main {
	background: #fff8f5;
}
.content, .etica {
	width: 1200px;
	max-width: 90%;
	background: #fff8f5;
	padding: 40px;
	margin: auto;
	padding-bottom: 120px;
	padding-top: 0;
}
.content .bio-pic {
	float: left;
	margin: 50px;
	width: 20%;
}
.artigos {
    width: 60%;
    border-top: 1px solid rgba(0, 0, 0, 0.2);
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    background: rgba(0, 0, 0, 0.02);
    margin: 0 auto;
    margin-top: 80px;
    text-align: right;
    padding: 20px;
}
#overlay {
	/*TRANSPARENT OVERLAY THAT DISPLAYS THE PDF FORMS OVER THE CURRENT SCREEN*/
	background-color: rgba(0, 0, 0, 0.7);
	z-index: 1000;
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	bottom: 0;
	display: none;
	text-align: center;
}
	#overlay iframe {
		/*WINDOW THAT HOLDS THE PDF FILE*/
		margin-top: 2%;
		width: 50%;
		height: 90%;
		-moz-box-shadow: 0 0 28px rgba(0, 0, 0, 0.5);
		-webkit-box-shadow: 0 0 28px rgba(0, 0, 0, 0.5);
		box-shadow: 0px 0px 28px rgba(0, 0, 0, 0.5);
		border: 0;
	}
	#overlay img {
		width: 30px;
		position: absolute;
		top: 2%;
		right:2%;
		cursor: pointer;
	}

.artigos p {
	cursor: pointer;
	color: rgba(110, 167, 200, 1);
}
.artigos h3 {
	text-align: right;
	color: rgba(110, 167, 200, 1);
	margin-bottom: 20px;
}
.artigos img {
	transition: 0.5s;
	margin: 0 auto;
	width: 200px;
	display: block;
	margin-top: 20px;
}
.artigos img:hover {
	filter: gray; /* IE6-9 */
-webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
opacity: 0.5;
cursor: pointer;
}

.inner-pages h2:not(.different) {
	width: 1200px;
	max-width: 90%;
	color: #fff8f5;
	font-family: inherit;
	position: absolute;
	top: -100px;
	right: 0;
	left: 0;
	margin: auto;
	text-align: left;
	font-size: 400%;
	border-bottom: 40px solid #fff8f5;
}
h3 {
	color: grey;
	font-family: inherit;
	font-size: 140%;
	text-align: center;
	margin-bottom: 40px;
}
.content p {
	text-align: left;
}
.content p, .bio p {
	line-height: 1.8;
	margin-bottom: 20px;
	text-indent: 36px;
}
.bio img {
	float: left;
    padding: 30px;
}
.content ul {
	width: 100%;
	text-align: center;
	margin-bottom: 120px;
}
.content > ul > li:first-of-type {

}
.content > ul > li:not(:first-of-type) {
	vertical-align: top;
	display: inline-block;
	background: rgba(255, 255, 255, 0.7);
	border-radius: 10px;
	padding: 40px;
	margin: 5px;
	text-align: left;
	border: 1px solid rgba(0, 0, 0, 0.1);
	border-bottom: 6px solid rgba(0, 0, 0, 0.1);
	width: 45%!important;
}
.content ul li img.trabalho {
	padding: 20px;
	width: 100%;
}
.content ul li img.escritorio {
	width: 60%;
	float: right;
	padding: 20px;
}
.quick-contact {
	margin-top: 80px;
	padding: 60px;
	text-align: center;
	position: relative;
}
.quick-contact textarea {
	display: inline;
	height: 160px;
	width: 450px;
	background: #fff8f5;
	border: 22px solid #c3ddea;
	resize: none;
	font-size: 100%;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
}
.quick-contact span {
	top: 15px;
	color: #c3ddea;
	font-family: inherit;
	font-size: 240%;
	font-weight: bold;
	position: absolute;
}
.quick-contact img {
	height: 160px;
	display: inline;
	background: #c3ddea;
	margin-right: 0;
	margin-bottom: 1px;
	border: 22px solid #c3ddea;
	border-top-left-radius: 50%;
	border-bottom-left-radius: 50%;
}
.quick-contact input[type="submit"] {
	border: 8px solid rgba(255, 255, 255, 0.2);;
	background-color: #d7ab8e;
	outline: 0;
	cursor: pointer;
	font-weight: bold;
	color: white;
	margin-top: 20px;
	font-size: 140%;
	vertical-align: top;
	height: 120px;
	width: 120px;
	border-radius: 50%;
	transition: 0.5s;
}
.quick-contact input[type="submit"]:hover {
	background: #c89878;
}
.quick-contact input[type="submit"]:active {
	transform: scale(0.95);
}

/*

E T I C A

*/
ol.etica {
	margin-top: 40px;
	margin-bottom: 40px;
}
/*

G R A N D E S  M E S T R E S

*/

#ajax {
	transition: 0.5s;
}
.bio-subtitle {
	font-weight: bold;
	color: grey;
	margin-top: 40px;
}
.mestres {
	margin-top: 36%!important;
}
.mestres .content, .mestres main {
	background: #f5ffff!important;
}
.mestres h2 {
	color: #f5ffff!important;
	border-color: #f5ffff!important;
}
figure img {
	width: 30%!important;
}
ol {
	margin: 20px;
}
ol li ol li {
	list-style-type: none;
}
ol li {
	margin-bottom: 20px;
	text-decoration: none!important;
	list-style: decimal;
	list-style-position: inside;
}
.mestres select {
	margin-bottom: 40px;
	padding: 5px;
	outline: 0;
}
.mestres-lista {
	margin: 10px!important;
}
.mestres-lista li {
	list-style-type: disc;
	list-style-position: inside;
	text-align: left;
	margin: 20px;
}
.obras li {
	margin: 0!important;
	margin-left: 10px!important;
}

/*

A R E A   D O   A N A L I S A N T E

*/

.online, .presencial {
	width: 100%;
}
.online img {
	width: 50%;
	float: left;
}
 .presencial img {
	 width: 50%;
	 float: right;
 }


/*

C O N T A T O

*/

main.no-img {
	padding-top: 140px;
}
.no-img h3 {
	font-size: 250%;
	margin: 0;
}
#contact ul {
	width: 80%;
	margin: 0 auto;
}
#contact ul li {
	width: 50%;
	float: left;
	padding: 40px;
}
#contact ul li iframe {
	width: 100%;
}
#contact label, #contact input, #contact textarea {
	display: block;
}
#contact input, #contact textarea {
	margin-bottom: 20px;
	padding: 10px;
	width: 100%;
}
#contact select {
	margin-bottom: 20px;
	padding: 10px;

}
#contact input[type="submit"] {
	width: 160px;
	cursor: pointer;
	border: 0;
	border-bottom: 6px solid rgba(0, 0, 0, 0.3);
	background: #5484a3;
	color: white;
	font-weight: bold;
	font-size: 120%;
	padding: 20px 40px;
}



@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

	</style>
</head>
<body>
	<a name="top"></a>
	<header>
		<nav>
			<img id="logo-grande" src="{{asset('_PROJECTS/psicanalise/images/logo.png')}}"><a href="#top"><img  id="logo-pequeno" src="{{asset('_PROJECTS/psicanalise/images/logo-pequeno.png')}}"></a>
			
<ul>
	<li><a href="index.php">Home</a></li>
	<li class="has-sub-menu">Psicanálise
		<ul class="sub-menu first">
			<li><a href="o_que_e.php">O que é psicanálise &middot;</a></li>
			<li><a href="mestres.php">Os grandes mestres &middot;</a></li>
		</ul>
	</li>
	<li class="has-sub-menu">Informações
		<ul class="sub-menu second">
			<li><a href="setting.php">Como funciona &middot;</a></li>
			<li><a href="etica.php">Regulamentação &middot;</a></li>
		</ul>
	</li>
	<li><a href="#">Publicações</li>
	<li><a href="contato.php">Contato</a></li>
</ul>


			<div style="clear: both"></div>
		</nav>
		<div class="title">
			<h1>Terapia <span>online</span><br><span id="text-change">aonde você estiver</span></h1>
			
		</div>
	</header>

	<main>
		<div class="barra1">
			<img src="{{asset('_PROJECTS/psicanalise/images/pic.png')}}" class= "slide-bottom">
			<p class= "slide-bottom"><b>Maria Teresa Saldanha</b> é Psicanalista, Mestre em Psicanálise pela Universidade Veiga de Almeida do Rio de Janeiro e autora do livro “Winnicott para Pais e Professores”. Formada em Constelação Familiar pela Hellinger Sciencia é também certificada em Constelação Familiar pelo ISPAB – Institut für Systemische Psychotherapie, Aufstellung und Beratung – München.</p>
			<p class="clique-aqui slide-bottom"><a href="setting.php#bio">Clique aqui para saber mais</a></p>
		</div>
		<div class="barra2">
			<ul>
				<li class="slide-left">
					<img src="{{asset('_PROJECTS/psicanalise/images/globe.png')}}">
					<span>Terapia online em qualquer lugar do mundo</span>
					Com a terapia online via Skype você tem acesso à terapia psicanalítica de qualquer lugar do mundo, desde que você tenha uma boa e estável conexão com a internet de no mínimo 4Mbps.
				</li>
				<li class="slide-right">
					<img src="{{asset('_PROJECTS/psicanalise/images/home.png')}}">
					<span>Do conforto da sua casa</span>
					Leve a jornada psicoterapeutica para o conforto e segurança da sua casa, otimizando o seu tempo, sem se expôr ao estresse do trânsito no percurso entre a sua casa e o consultório.
				</li>
				<li class="slide-left">
					<img src="{{asset('_PROJECTS/psicanalise/images/video-call.png')}}">
					<span>Terapia em áudio e vídeo</span>
					Trabalhe com uma psicanalista e terapeuta sistêmica com experiência em atendimento online.
				</li>
				<li class="slide-right">
					<img src="{{asset('_PROJECTS/psicanalise/images/payment.png')}}">
					<span>Fácil pagamento</span>
					O pagamento pode ser feito pelo PayPal, boleto ou via transferência bancária.
				</li>
			</ul>
		</div>

		<div class="barra3">
			<h2>Vantagens da terapia online</h2>
			<ul>
				<li>Receber o atendimento no conforto e na segurança da sua casa sem se expôr ao estresse do trânsito.</li>
				<li>Privacidade para expressar suas questões sem inibição ou censura.</li>
				<li>Brasileiros que vivem no exterior podem usufruir deste tipo de terapia.</li>
				<li>Facilidade de pagamento online.</li>
			</ul>
			<a href="setting.php">
				<button>Entre outras!</button>
			</a>
		</div>
		<div class="barra4">
			<p class="connect slide-bottom"><span>Conecte-se de qualquer lugar do mundo!<br></span>
				Um espaço pensado para promover a saúde, o bem estar e a harmonia do meio em que estamos inseridos.
			</p>
			<img src="{{asset('_PROJECTS/psicanalise/images/map.png')}}" class= "slide-bottom">
		</div>

		<div class="barra5">
			<ul>
				<a href="mestres.html">
					<li>
						<img src="{{asset('_PROJECTS/psicanalise/images/article1.png')}}">
						<span>Os grandes mestres da psicanálise</span>
						A psicanálise é um campo clínico e de investigação teórica da psique humana independente da Psicologia, que tem origem na Medicina, desenvolvido por Sigmund Freud, médico que se formou em 1881, trabalhou no Hospital Geral de Viena e teve contato com o neurologista francês Jean Martin Charcot, que lhe mostrou o uso da hipnose.
					</li>
				</a>
				<li>
					<img src="{{asset('_PROJECTS/psicanalise/images/article2.png')}}">
					<span>Outro artigo, título aqui</span>
					Take your psychotherapeutic journey in the comfort and safety of your own home, giving yourself the space you need to process your online therapy session afterwards, without being exposed to the stresses of a bus, train or car ride on the way home.
				</li>
				<li>
					<img src="{{asset('_PROJECTS/psicanalise/images/article3.png')}}">
					<span>Mais um artigo, o título dessa vez um pouco mais longo vai aqui</span>
					Work with a licensed online psychologist and psychoanalytic psychotherapist with years of experience in psychotherapy and online therapy via Skype.
				</li>
				<li>
					<img src="{{asset('_PROJECTS/psicanalise/images/article4.png')}}">
					<span>O último título aqui sobre o último artigo</span>
					Payment can be made through Paypal with a few clicks or via bank transfer.
				</li>
			</ul>
			<div style="clear: both"></div>

		</div>

		<div class="barra6">
			<p class="duvida"><span>Faça uma pergunta<br></span>
				Você tem alguma dúvida sobre a terapia online e os benefícios desse tratamento? A sua resposta está a apenas um clique!
			</p>
			<button>ENVIE UMA MENSAGEM</button>
		</div>
<!--
		<div class="barra4">
			<h2><i>"É uma alegria estar escondido, mas um desastre não ser achado"</i></h2>
			<p>Winnicott</p>
		</div>
-->
	</main>

	<footer>
		<img src="{{asset('_PROJECTS/psicanalise/images/logo-pequeno-foot.png')}}">

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
			<img src="{{asset('_PROJECTS/psicanalise/images/facebook.png')}}">
			<img src="{{asset('_PROJECTS/psicanalise/images/twitter.png')}}">
			<img src="{{asset('_PROJECTS/psicanalise/images/youtube.png')}}">
			<img src="{{asset('_PROJECTS/psicanalise/images/skype.png')}}">
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

<script src="js/jquery.fadethis.js"></script>
<script>
	$(window).fadeThis();
</script>

<script>
var navHeight = $('nav').height();
var screenHeight = $(window).height();
console.log(navHeight);
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > screenHeight) {
			$('nav').css('background-color', "rgba(110, 167, 200, 0.8)");
			//$('nav ul').css('font-size', '80%');
			$('nav').css('position', 'fixed');
			//$('nav ul li').css('color', 'white');
			//... ajusta a posição da frase "O que esperar da terapia online?"
			//$('header h1').css('padding-top', navHeight + 150);
			//$('nav ul').css('margin', '50px');
			$('#logo-grande').hide();
			$('#logo-pequeno').show();
			//$('header').children().not('nav').css('opacity', 1-(scroll-50)/800 );
		} else {
			//$('nav').css('padding-top', '20px');
			//$('nav ul').css('font-size', '100%');
			$('nav').css('background-color', "transparent");
			$('nav').css('position', 'relative');
			//$('nav ul li').css('color', '#286284');
			//$('header h1').css('padding-top', '150px');
			$('#logo-grande').show();
			$('#logo-pequeno').hide();
			$('header').children().not('nav').css('opacity', '1');
		}
});

$(document).ready(function(){
	$('.title h1').delay(800).fadeIn(800);
	$('.title p').delay(1200).fadeIn(1200);

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

<!-- Change text on title
<script>
window.setTimeout(function () {
	var $string = $('#text-change');
	$($string).fadeOut(function() {
		  $(this).text('do escritório').fadeIn();
		});
}, 3000);
window.setTimeout(function () {
	var $string = $('#text-change');
	$($string).fadeOut(function() {
		  $(this).text('da praia').fadeIn();
		});
}, 6000);
window.setTimeout(function () {
	var $string = $('#text-change');
	$($string).fadeOut(function() {
		  $(this).html('de qualquer<br>cidade do Brasil').fadeIn();
		});
}, 9000);
window.setTimeout(function () {
	var $string = $('#text-change');
	$($string).fadeOut(function() {
		  $(this).html('de qualquer<br>lugar do Mundo').fadeIn();
		});
}, 12000);
window.setTimeout(function () {
	var $string = $('#text-change');
	$($string).fadeOut(function() {
		  $(this).html('em áudio e vídeo<br>de alta definição').fadeIn();
		});
}, 15000);
window.setTimeout(function () {
	var $string = $('#text-change');
	$($string).fadeOut(function() {
		  $(this).html('<button>clique aqui para começar</button>').fadeIn();
		});
}, 18000);
-->
</script>

</body>
</html>
