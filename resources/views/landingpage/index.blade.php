@extends('layouts.app')

@section('content')
	{{-- JUMBOTRON --}}
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="jumbotron jumbotron-fluid">
					 <div class="container-fluid">
						<div id="landing-bg"></div>
					 	<div class="fireflies">@include('fireflies.index')</div>
					 	<div class="row">
							<div class="col- col-lg-6 offset-lg-6 text-right" id="learn">
						    	<p class="lead-subtitle">Orientation post bac, reconversion professionnelle ou indécisions de toujours,</p>
						    	<p class="lead-title">TealJobs vous oriente vers les métiers d'avenir qui vous correspondent.</p>
						    </div>
						    <div class="col-lg-4 offset-lg-4 col- text-align-center">
						    	<p class="lead text-center">
					    			<a class="btn btn-dark btn-lg" href="/test" role="button">Commencer</a>
					  			</p>
						    </div>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- EXPLICATIONS --}}

	<section class="explication container-fluid">

      <div class="row justify-content-center">
	        <div class="col-lg-4 context">
	          <span> <img src="images/landing_icons/network.png" id="landing-logo" alt="network" height="100" width="100" > </span>
	          <h2>Aujourd'hui</h2>
		          <p>Entre <span class="font-italic">turnover</span>, besoin de changer d'horizon et remises en questions personnelles, "faire carrière" est une option de moins en moins envisagée par les étudiant.e.s et salarié.e.s.</p>
		      	  <p>Seulement, trouver sa voie est un vrai défi quand le volume de ressources disponibles sur le sujet s'ajoute à la découverte de son potentiel.</p>
	        </div>
	        <div class="col-lg-4 potential">
	          <span> <img src="images/landing_icons/sprout.png" id="landing-logo" alt="sprout" height="100" width="100" > </span>
	          <h2>Potentiel</h2>
		          <p>C'est ce potentiel que TealJobs vous aide à faire germer à travers un test de personnalité ludique et gratuit.</p>
		          <p>En vous orientant vers des métiers qui vous animent, TealJobs pose les bases de votre (ré)orientation professionnelle.</p>
	        </div>
	        <div class="col-lg-4 success">
	          <span> <img src="images/landing_icons/success.png" id="landing-logo" alt="success" height="100" width="100" > </span>
	          <h2>Demain</h2>
		          <p>TealJobs vous permet également de choisir entre des centres de formation agréés, qui correspondent à vos choix de métiers.</p>
		          <p>Vous pourrez aussi créer un compte pour sauvegarder votre historique de test et revenir vers les centres de formation qui vous intéressent. C'est gratuit :)</p>
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