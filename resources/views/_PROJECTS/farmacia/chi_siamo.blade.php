@extends($root.'_core')

@section('chi-siamo')
link-active
@endsection

@section('content')

    {{-- Introduction --}}
    <section class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <figure class="figure">
                    <img src="{{ asset($root.'images/pharmacy-inside.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption">Farmacia Di Tarzo</figcaption>
                </figure>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <p>La <strong>Farmacia Di Tarzo</strong> é stata inaugurata il 5 Novembre 2011, col principale obiettivo di garantire la salute ed il benessere dei cittadini, senza mai perdere di vista la profonda conoscenza del farmaco e del consiglio ad esso legato.</p>
                <p>In concreto ciò si traduce in un impegno quotidiano teso a:</p>
                <ul>
                    <li>consigliare farmaci ed ascoltare i problemi dei nostri clienti;</li>
                    <li>consigliare disposizioni igieniche e comportamentali che aiutino nella prevenzione delle malattie e valorizzino le difese immunitarie che dispone il nostro organismo;</li>
                    <li>garantire l’immediata o tempestiva disponibilità di farmaci e rimedi richiesti dalle cure mediche prescritte.</li>
                </ul>
            </div>
        </div>
    </section>
    
    {{-- Brands --}}
    <section class="container hidden-xs-down">
        <div class="page-header">
            <p>I nostri prodotti</p>
        </div>
        <div id="brands" class="text-center">
            <a href="http://www.giustogiuliani.com/celiaci/" target="_blank">
                <img src="{{ asset($root.'images/brands/giusto.png') }}" class="d-inline grayscale">
            </a>
            <a href="http://www.polident.com/it_IT/home.html" target="_blank">
                <img src="{{ asset($root.'images/brands/polident.png') }}" class="d-inline grayscale">
            </a>
            <a href="https://www.kukident.it/it-it" target="_blank">
                <img src="{{ asset($root.'images/brands/kukident.gif') }}" class="d-inline grayscale">
            </a>
            <a href="http://www.nutrifree.it/" target="_blank">
                <img src="{{ asset($root.'images/brands/nutri.jpg') }}" class="d-inline grayscale">
            </a>
            <a href="https://www.schaer.com/" target="_blank">
                <img src="{{ asset($root.'images/brands/schar.jpg') }}" class="d-inline grayscale">
            </a>
            <a href="http://www.multicentrum.it/" target="_blank">
                <img src="{{ asset($root.'images/brands/multicentrum.png') }}" class="d-inline grayscale">
            </a>
            <a href="http://www.supradyn.it/" target="_blank">
                <img src="{{ asset($root.'images/brands/supradyn.jpg') }}" class="d-inline grayscale">
            </a>
            <a href="https://www.tenafarma.es/login-tenafarma/?ReturnUrl=/es-es/" target="_blank">
                <img src="{{ asset($root.'images/brands/tena.jpg') }}" class="d-inline grayscale">
            </a>
        </div>
        <a href="" class="btn btn-sm btn-warning pull-right">Vedi tutti i marchi<i class="fa fa-caret-right mr-0 ml-2" aria-hidden="true"></i></a>
        <div class="clearfix"></div>
    </section>

    {{-- Description --}}
    <section class="container">
    <div class="page-header">
        <p>I nostri servizi</p>
    </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset($root.'images/our-service.jpg') }}">
            <div class="card-body">
              <ol class="card-text">
                <li>Misurazione della pressione</li>
                <li>Valutazione della glicemia nel sangue</li>
                <li>Bilancia pesa persone</li>
                <li>Analisi del colesterolo</li>
                <li>Servizio a domicilio in caso di urgenza</li>
                <li>Fornitura per celiaci</li>
                <li>Ritiro referti analisi</li>
                <li>Distributore esterno di profilattici Durex</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <p>Per offrire un servizio costantemente all'altezza delle esigenze dei nostri clienti, la dotazione di farmaci e prodotti all'interno del nostro magazzino è notevolmente ampia e comunque supportata dalla possibilità di reperire e procurare qualsiasi rimedio o parafarmaco non disponibile al momento della richiesta.</p>
          <p>La Farmacia di Tarzo effettua, in caso di particolare necesita', servizio di consegna a domicilio dei farmaci, per quanto riguarda il comune di Tarzo e dintorni (comuni confinanti).</p>
          <p>Per apprendere con certezza modalità e funzionamento del nostro servizio a domicilio, preghiamo i nostri clienti di consultare la pagina ad esso dedicata.</p>
          <div id="contact-buttons">
            <button type="button" class="btn btn-danger btn-lg btn-block">
              <i class="fa fa-phone" aria-hidden="true"></i><strong>Chiamata</strong>
            </button>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block">
              <i class="fa fa-paper-plane" aria-hidden="true"></i><strong>Email</strong>
            </button>
          </div>
        </div>
      </div>
    </section>

@endsection

