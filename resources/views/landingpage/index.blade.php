@extends('layouts.app')

@section('content')
	{{-- JUMBOTRON --}}
	<div class="container-fluid">
		<div class="row">
			<div class="col- col-lg-12">
				<img src="images/result_page.jpg" alt="tree" class="img-fluid" id="jumbo-tree">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container-fluid jumbo-text">
					<p class="lead lead-title text-right">Il n'y a pas d'âge pour apprendre <br> <span class="lead-subtitle">[à se connaître.]</span> </p>
				  	{{-- <p class="jumbo-description text-center">Orientation post bac, reconversion professionnelle ou indécisions de toujours, <br> tealJobs vous oriente vers les métiers d'avenir qui correspondent le mieux à votre personnalité.</p> --}}
				  	<p class="lead text-center">
				    	<a class="btn btn-dark btn-lg" href="/test" role="button">Testez-vous</a>
				  	</p>
				  </div>
				</div>
			</div>
		</div>
	</div>

	{{-- EXPLICATIONS --}}
	<section class="grey container-fluid">

      <div class="row justify-content-center">
	        <div class="col-lg-4 context">
	          <span> <img src="img/landing_icons/network.png" id="landing-logo" alt="network" height="100" width="100" > </span>
	          <h2>Contexte</h2>
	          <p>Quam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere</p>
	        </div>
	        <div class="col-lg-4 potential">
	          <span> <img src="img/landing_icons/sprout.png" id="landing-logo" alt="sprout" height="100" width="100" > </span>
	          <h2>Potentiel</h2>
	          <p>Quam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere</p>
	        </div>
	        <div class="col-lg-4 success">
	          <span> <img src="img/landing_icons/success.png" id="landing-logo" alt="success" height="100" width="100" > </span>
	          <h2>Métiers</h2>
	          <p>Quam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere</p>
	        </div>

      </div>
      
    </section>

{{-- 
    <section class="explanations container">

      <div class="row row_white">
        <div class="col-lg-12">
           <h2>Bon à savoir</h2>  <hr>

            <div class="row aliens">

              <div class="col-lg-6">
                 <p>Silent and endless.  The stars shine like the love of
                God...cold and remote.  Against them drifts a tiny chip
                of technology. It is the NARCISSUS, lifeboat of the
                ill-fated star-freighter Nostromo.  Without interior
                or running lights it seems devoid of life.  The PING
                of a RANGING RADAR grows louder, closer.  A shadow
                engulfs the Narcissus.  Searchlights flash on, playing
                over the tiny ship, as a MASSIVE DARK HULL descends towards it.</p>
              </div>

              <div class="col-lg-6">
                  <p>Dark and dormant as a crypt.  The searchlights stream
                in the dusty windows.  Outside, massive metal forms can
                BE SEEN descending around the shuttle.  Like the tolling
                of a bell, a BASSO PROFUNDO CLANG reverberates through
                the hull. Light glares as a cutting torch bursts through the metal. 
                Sparks shower into the room. A second torch cuts through. They move with machine
                precision, cutting a rectangular path, converging. The
                torches meet.</p>
              </div>

            </div>
        </div>       
      </div>

    </section> --}}



@endsection