@extends('_app')

@section('header')
    @component('partials.header')
    Arthur Villar - Music
    @endcomponent
@endsection

@section('menu')
    @component('partials.nav')
        @slot('music')
            active
        @endslot
        @slot('code')
        @endslot
        @slot('login')
        @endslot
        @slot('user')
        @endslot
        @slot('contact')
        @endslot
    @endcomponent
@endsection

@section('content')
<div class="container-fluid" id="music-container">
    @component('partials.title')
        @slot('icon')
            music
        @endslot
    music
    @endcomponent
    {{-- Bio part 1 --}}
    <div class="row">
    	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 offset-lg-1 offset-md-1">
    		<p>Pianist Arthur Villar was born in Rio de Janeiro (Brazil) in June 1984. He started his studies in piano, chamber music, theory and conducting in 2004, at the age of 21, at the Federal University of Rio de Janeiro (UFRJ) and joined the piano studio of Miriam Grossman, a renowned Brazilian pianist and pedagogue. Among his achievements, he won the first prize in the Souza Lima National Piano Competition in São Paulo (Brazil), in 2007, for his piano performing and musical excellence and performed in 2009 Bach’s twenty-four preludes and fugues at the Forum Internacional del Piano de Barcelona. In February 2008 Arthur Villar was granted a scholarship to pursue	his Bachelor's degree in Piano Performance at the Hartt School (University of Hartford, CT) under the tutelage of Luiz de Moura Castro.</p>
    	</div>
    </div>
    {{-- CD --}}
    <div class="row">
    	<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 offset-lg-2 offset-md-1 text-center">
    		<figure class="figure">
    			<img src="/images/wtc.png" class="figure-img img-fluid rounded">
    			<figcaption class="figure-caption">
    				<a href="https://www.amazon.com/exec/obidos/ASIN/B00BJY9BZG/ref=nosim/musicontheweb02" target="_blank" class="btn btn-block btn-secondary"><img src="/images/amazon.svg" id="amazon-icon"></a>
    			</figcaption>
    		</figure>    		
    	</div>
    	<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
    		<blockquote class="blockquote">
    			"Arthur Villar’s recording is one which has the immediate appeal of a superb recording made on a fine sounding Steinway D, and I have to say I was intrigued by this performance from the outset. Arthur Villar seems to be very much his own man in steering a path away from any particular ‘school’ of Bach performing, appearing to be occupied as far as possible with the material in front of him and his own responses to it, rather than allowing himself to be swayed by the turbulent winds of fashion..."
    			<p class="blockquote-footer">Dominy Clements, UK | read <cite title="Click to read review"><a href="http://www.musicweb-international.com/classrev/2013/May13/Bach_WTC1_8087401.htm" target="_blank">full review</a></cite></p>
    		</blockquote> 		
    	</div>
    </div>
    {{-- Bio part 2 --}}
    <div class="row">
    	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 offset-lg-1 offset-md-1">
    		<p>Mr. Villar is recipient of the following scholarships and awards: E.B. Storrs Scholarship, Hartt Performing Arts Scholarship, SUNY Purchase Conservatoire of Music Merit Scholarship and F. Parker Scholarship. Mr. Villar participated in the following festivals and workshops: SIPO (Portugal), Forum Internacional del Piano in Barcelona (Spain), Performing Bach in Baroque Style in New York (US), Prague Music Performance Institute and Festival in Prague (Czech Republic) and Gijon International Piano Festival (Spain). Arthur Villar has attended both master classes and individual classes with renowned pianists throughout the world, such as Andrei Gavrilov (Russia), Paul Badura-Skoda (Austria), Martin Bally (Czech Republic), Yun Ha Huang (SouthKorea), Julian Martin (US), Boris Berman (Russia), among others.</p>
    	</div>
    </div>
    {{-- Gallery --}}
    <div class="row gal">
    	{{-- Big --}}
    	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    		<iframe src="http://www.youtube.com/embed/F8LTteB3BTQ?rel=0" frameborder="0" allowfullscreen></iframe>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<img src="/images/gallery/img01.jpg">
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<img src="/images/gallery/img02.jpg">
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<img src="/images/gallery/img03.jpg">
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<iframe src="http://www.youtube.com/embed/qiQpIkzZ8qQ?rel=0" frameborder="0" allowfullscreen></iframe>
    	</div>
    </div>
        {{-- Bio part 2 --}}
    <div class="row">
    	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 offset-lg-1 offset-md-1">
    		<p>Most recently he recorded the first book of The Well-Tempered Clavier by Johann Sebastian Bach. The twenty-four preludes and fugues album was recorded between September and November (2012) and was released in February 2013. Arthur Villar received a Masters degree in Piano Performance from SUNY Purchase University (NY), where he studied with pianist Paul Ostrovsky. Mr Villar is currently a piano faculty member of the Hartt School Community Division (University of Hartford, CT).</p>
    	</div>
    </div>
    <div class="row gal">
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <iframe src="http://www.youtube.com/embed/-DW7-BGXS6s?rel=0" frameborder="0" allowfullscreen></iframe>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<img src="/images/gallery/img04.jpg">
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<iframe src="http://www.youtube.com/embed/thpY0FmUzeA?rel=0" frameborder="0" allowfullscreen></iframe>
    	</div>
    	{{-- Big --}}
    	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    		<iframe src="http://www.youtube.com/embed/OiuXxNS6kjw?rel=0" frameborder="0" allowfullscreen></iframe>
    	</div>
    	{{-- Small --}}
    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<img src="/images/gallery/img05.jpg">
    	</div>
    </div>
</div>
@endsection
