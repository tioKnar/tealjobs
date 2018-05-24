@extends('layouts.app')


@section('content')

	<div class="container-fluid" id="testtest">
		<div id="test-bg"></div>
		<div class="fireflies">@include('fireflies.index')</div>

		<div class="row justify-content-center text-center align-end centrage" id="test">

			<div class="col- col-md-5 centrage">
			
				@foreach($resultats as $resultat)

					<div class="col- test @if($resultat->question_id != $first) {{ 'completed' }} @endif">

						<br><h3>{{ $resultat->question }}</h3>
								
							@if(! empty($resultat->answer1))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="1">{{ $resultat->answer1 }}</p></a>@endif

							@if(! empty($resultat->answer2))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="2">{{ $resultat->answer2 }}</p></a>@endif

							@if(! empty($resultat->answer3))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="3">{{ $resultat->answer3 }}</p></a>@endif

							@if(! empty($resultat->answer4))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="4">{{ $resultat->answer4 }}</p></a>@endif

							@if(! empty($resultat->answer5))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="5">{{ $resultat->answer5 }}</p></a>@endif

							@if(! empty($resultat->answer6))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="6">{{ $resultat->answer6 }}</p></a>@endif

					
							@if($resultat->question_id != $first)

								<button class="previous btn btn-warning">Précedent</button>

							@endif


					</div>

				@endforeach
				<form action="" method="POST">
					@csrf
					<input name="result_tree" type="text" hidden id="result_tree">
					<input name="result_chart" type="text" hidden id="result_chart">
					
					<button type="submit" class="btn btn-warning" id="resultat" hidden>Résultats</button>
				</form>
		
			</div>

			<div class="col-md-5 offset-md-1" id="land">
				<img src="images/land.png" alt="land">
				<div id="grow">
					<img src="images/grow01.png" alt="grow01">
				</div>
			</div>

			

		</div>
	
	</div>
	<br><br>

<script>


	
$(function() {

// Rangement random des différentes réponses

	var collection = $(".bouton").get();

	collection.sort(function() {

		return Math.random()*10 > 5 ? 1 : -1; 
	});

	$.each(collection, function(i, el) {

		$(el).appendTo($(el).parent());
	});


// Création d'un événement au clic sur une réponse 

	$tab = [];

	$('.bouton').on('click', function(e) {

		e.preventDefault();


		// Passage à la question suivante en Jquery

		$(this).parent().parent().fadeOut(450);
			
		$(this).parent().parent().next().delay(480).fadeIn(450);


		// Remplissage du tableau pour récupérer le profil psychologique

		$tab.push($(this).attr('data-id'));


		// Récupération des deux plus grandes valeurs du tableau

		$tabOcc = { };

		for(i=0; i < $tab.length; i++){
			if($tabOcc[$tab[i]]){
				$tabOcc[$tab[i]] ++;
			}
			else{
				$tabOcc[$tab[i]] = 1;
			}
		}

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));
		console.log(Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[0]);
		$a = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[0];

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));
		console.log(Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[1]);
		$b = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[1];

		$c = $a + $b;


		// Envoi des deux plus grandes valeurs vers la page résultats

		($('#result_tree').attr('value', $c));


		// Envoi du tableau des profils psychologique vers la base de données

		($('#result_chart').attr('value', $tab));


		// Affichage de l'image de progression du test d'orientation

		if($tab.length >= 1 && $tab.length <= 2) {
			$('#grow').html('<img src="images/grow02.png" alt="grow02">');
		}
		else if($tab.length >= 3 && $tab.length <= 5) {
			$('#grow').html('<img src="images/grow03.png" alt="grow03">');
		}
		else if($tab.length >= 6 && $tab.length <= 9) {
			$('#grow').html('<img src="images/grow04.png" alt="grow04">');
		}
		else if($tab.length >= 10 && $tab.length <= 13) {
			$('#grow').html('<img src="images/grow05.png" alt="grow05">');
		}
		else {
			$('#grow').html('<img src="images/grow06.png" alt="grow06">');
			$('#resultat').delay(200).fadeIn(400).removeAttr('hidden');
		}
	});

// Création d'un événement au clic sur précédent

	$('.previous').on('click', function(e) {

		e.preventDefault();

		$(this).parent().fadeOut(450);
			
		$(this).parent().prev().delay(480).fadeIn(450);

		$tab.pop();
	});
	
});

</script>

@endsection