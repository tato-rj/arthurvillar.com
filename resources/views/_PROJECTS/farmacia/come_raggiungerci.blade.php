@extends($root.'_core')

@section('come-raggiungerci')
link-active
@endsection

@section('content')

<section class="container">
    <div class="page-header hidden-lg-up">
        <p>Come Raggiungerci</p>
    </div>
    <div class="row">
    	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    		<div class="card">
    			<div class="card-body">
    				<h4 class="card-title text-danger"><i class="fa fa-car" aria-hidden="true"></i><strong>Arrivando in auto:</strong></h4>
    				<p class="card-text">Uscita Vittorio Veneto sud verso via del Bersagliere/SP103, alla rotonda seconda uscita verso via Francesco Saverio Grazioli/SP86, continuando sulla SP86 alla rotonda prima uscita verso Località Rive S.Pietro/SP635, continuando sulla SP635 la farmacia si trova sulla sinistra.</p>
    			</div>
    		</div>	  		
    	</div>
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
    		<div class="embed-responsive embed-responsive-16by9">
    			<i class="fa fa-spinner loading spin text-success" aria-hidden="true"></i>
    			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2772.9577782175757!2d12.231124915847357!3d45.97210280742936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47791100d94fba2f%3A0xd2f2caa127818d2!2sFarmacia+Di+Tarzo+Della+Dott.Ssa+Da+Re'+Elisabetta+%26+C.+S.A.S.!5e0!3m2!1sen!2sus!4v1446004259999" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    		</div>
    	</div>
    </div>
</section>

@endsection