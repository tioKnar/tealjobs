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

								<button class="previous btn btn-warning">Retour</button>

							@endif


					</div>

				@endforeach
				<!-- <a id="resultat" href="results?profile=" class="completed" >Résultats</a> -->
				<form action="" method="POST">
					@csrf
					<input name="result_tree" type="text" hidden id="result_tree">
					<input name="result_chart" type="text" hidden id="result_chart">
					
					<button type="submit" class="btn btn-warning" id="resultat" hidden>Résultats</button>
				</form>
		
			</div>

			<div class="col-md-3" id="land">
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

	var collection = $(".bouton").get();

	collection.sort(function() {

		return Math.random()*10 > 5 ? 1 : -1; 
	});

	$.each(collection, function(i, el) {

		$(el).appendTo($(el).parent());
	});

	$tab = [];

	$('.bouton').on('click', function(e) {

		e.preventDefault();

		$(this).parent().parent().fadeOut(450);
			
		$(this).parent().parent().next().delay(430).fadeIn(450);

		$tab.push($(this).attr('data-id'));

		console.log($tab);

		$tabOcc = { };

		for(i=0; i < $tab.length; i++){
			if($tabOcc[$tab[i]]){
				$tabOcc[$tab[i]] ++;
			}
			else{
				$tabOcc[$tab[i]] = 1;
			}
		}

		if($tab.length >= 1 && $tab.length <= 2) {
			$('#grow').html('<img src="images/grow02.png" alt="grow02">');
		}
		else if($tab.length >= 3 && $tab.length <= 6) {
			$('#grow').html('<img src="images/grow03.png" alt="grow03">');
		}
		else if($tab.length >= 7 && $tab.length <= 11) {
			$('#grow').html('<img src="images/grow04.png" alt="grow04">');
		}
		else if($tab.length >= 12 && $tab.length <= 14) {
			$('#grow').html('<img src="images/grow05.png" alt="grow05">');
		}
		else {
			$('#grow').html('<img src="images/grow06.png" alt="grow06">');
			$('#resultat').delay(200).fadeIn(400).removeAttr('hidden');
		}

		// console.log($tabOcc);

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));
		console.log(Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[0]);
		$a = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[0];

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));
		console.log(Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[1]);
		$b = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[1];

		$c = $a + $b;
		console.log($c);

		$tableauOcc = Object.keys($tabOcc).map(function(x) {return $tabOcc[x]});


		console.log($('#result_tree').attr('value', $c));
		console.log($('#result_chart').attr('value', $tableauOcc));
		console.log($tableauOcc);

	});

	$('.previous').on('click', function(e) {

		e.preventDefault();

		$(this).parent().fadeOut(450);
			
		$(this).parent().prev().delay(440).fadeIn(450);

		$tab.pop();

		// console.log($tab);
	});
	
});

</script>

@endsection