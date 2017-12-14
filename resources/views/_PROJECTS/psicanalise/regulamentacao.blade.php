<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Psicanálise Online</title>
    <!-- Fonts -->
    <link href="{{asset('_PROJECTS/psicanalise/css/theme/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('_PROJECTS/psicanalise/css/theme/spectrum-pink.css')}}" rel="stylesheet">
    <link href="{{asset('_PROJECTS/psicanalise/css/app.css')}}" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="wrapper">

        <nav class="navbar navbar-gradient justify-content-between navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid z-10">
        <div class="d-flex align-items-center">
            <h4 class="m-0"><a class="text-white" href="/psicanalise">
                <img id="logo" class="mr-2" src="{{asset('_PROJECTS/psicanalise/images/brand-logo.svg')}}">psicanálise<span class="text-pink">online</span></a>
            </h4>
        </div>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/psicanalise">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="info" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="info">
                        <a class="dropdown-item" href="/psicanalise/o-que-e-psicanalise">O que é psicanálise</a>
                        <a class="dropdown-item" href="#">Os grandes mestres</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="psicanalise" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Psicanálise
                    </a>
                    <div class="dropdown-menu" aria-labelledby="psicanalise">
                        <a class="dropdown-item" href="/psicanalise/como-funciona">Como funciona</a>
                        <a class="dropdown-item" href="/psicanalise/regulamentacao">Regulamentação</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Publicações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/psicanalise/contato">Contato</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>



        <div class="container-fluid">
    <div class="row" style="background-image: url(/_PROJECTS/psicanalise/images/regulation.jpg); background-size: cover;">
        <div class="col-8 mx-auto page-header">
            <h1>Regulamentação</h1>
        </div>
    </div>
</div>
<div class="container my-6">
    <div class="row mb-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="mx-1">
                <a href="#" class="btn btn-block btn-outline">
                    <h1><i class="fa fa-balance-scale d-block mb-2" aria-hidden="true"></i></h1>
                    Condições de serviço
                </a>
            </div>  
            <div class="mx-1">
                <a href="#" class="btn btn-block btn-outline">
                <h1><i class="fa fa-book d-block mb-2" aria-hidden="true"></i></h1>
                Condições de serviço
                </a>
            </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-8 mb-4 mx-auto text-center">
            <p>Se você tiver qualquer dúvida sobre o nossos serviços e regulamentação preencha o formulário abaixo.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-6 col-xs-12">
            <div class="d-flex align-items-baseline text-muted">
                <i class="fa fa-building mr-3 text-pink" aria-hidden="true"></i>
                <p>Península, Rua dos Jacarandás<br>
                    1160 bloco 2 apt 901<br>
                    CEP 22776050<br>
                Rio de Janeiro, Brasil</p>
            </div>
            <div class="d-flex align-items-baseline text-muted">
                <i class="fa fa-phone mr-3 text-pink" aria-hidden="true"></i>
                <p>+55 (21) 9169-1535</p>
            </div>
            <div class="d-flex align-items-baseline text-muted">
                <i class="fa fa-envelope-open mr-3 text-pink" aria-hidden="true"></i>
                <p>email@exemplo.com</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome completo">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Escreva aqui a sua mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-pink">Enviar mensagem</button>
            </form>
        </div>
    </div>
</div>




        <footer class="footer p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="small text-muted">Copyright &copy; 2017 - Psicanálise Online. Todos os direitos reservados.</span>
                        </div>
                    </div>
                </div>
        </footer>
    </div>

    <!-- Core JavaScript Files -->
    <script src="{{asset('_PROJECTS/psicanalise/js/app.js')}}"></script>
    <script src="{{asset('_PROJECTS/psicanalise/js/theme/plugins/scrollReveal/scrollReveal.js')}}"></script>
    <script type="text/javascript">
        $(window).on('scroll', function() {
        scrollPosition = $(this).scrollTop();
        if (scrollPosition >= 300) {
            $('.navbar').removeClass('navbar-gradient').addClass('navbar-solid');
        } else {
            $('.navbar').addClass('navbar-gradient').removeClass('navbar-solid');
        }
    });
    </script>
    </body>

</html>
