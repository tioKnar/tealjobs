@extends('layouts.app')


@section('content')

	<div class="container-fluid" >
		<div id="test-bg"></div>
		<div class="fireflies">@include('fireflies.index')</div>

		<div class="row justify-content-center text-center" id="test">

			<div class="col- col-md-4">
			
				@foreach($resultats as $resultat)

					<div class="col- test @if($resultat->question_id != $first) {{ 'completed' }} @endif">

						<br><h3>{{ $resultat->question }}</h3>
								
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="1" @if(empty($resultat->answer1)) 'hidden' @endif>{{ $resultat->answer1 }}</button>

							<button type="button" class="form-control form-group btn btn-info bouton" data-id="2" @if(empty($resultat->answer2)) 'hidden' @endif>{{ $resultat->answer2 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="3" @if(empty($resultat->answer3)) 'hidden' @endif>{{ $resultat->answer3 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="4" @if(empty($resultat->answer4)) 'hidden' @endif>{{ $resultat->answer4 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="5" @if(empty($resultat->answer5)) 'hidden' @endif>{{ $resultat->answer5 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="6" @if(empty($resultat->answer6)) 'hidden' @endif>{{ $resultat->answer6 }}</button>
					
							@if($resultat->question_id != $first)

								<button class="previous">previous</button>

							@endif

					</div>

				@endforeach

			</div>

			<div class="col- col-md-4 offset-col-md-1 align-baseline" id="growing"></div>

			<a id="resultat" href="results?profile=" hidden>Résultats</a>

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

	$('.bouton').on('click', function() {

		$(this).parent().fadeOut({queue:false, duration:450}).animate({left: "-=100"}, 450);
			
		$(this).parent().next().delay(440).animate({opacity:"toggle", left: "-=100"}, 450);

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

		if($tab.length == 0){
			$('#growing').html('<img src="images/grow01.png" alt="grow01">');
		}
		else if($tab.length >= 1 && $tab.length <= 2) {
			$('#growing').html('<img src="images/grow02.png" alt="grow02">');
		}
		else if($tab.length >= 3 && $tab.length <= 6) {
			$('#growing').html('<img src="images/grow03.png" alt="grow03">');
		}
		else if($tab.length >= 7 && $tab.length <= 11) {
			$('#growing').html('<img src="images/grow04.png" alt="grow04">');
		}
		else if($tab.length >= 12 && $tab.length <= 14) {
			$('#growing').html('<img src="images/grow05.png" alt="grow05">');
		}
		else {
			$('#growing').html('<img src="images/grow06.png" alt="grow06">');
			$('#resultat').removeAttr('hidden');
		}

		console.log($tabOcc);

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));
		console.log(Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[0]);
		$a = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[0];

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));
		console.log(Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[1]);
		$b = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; })[1];

		$c = $a + $b;
		console.log($c);

		console.log($('#resultat').attr('href', 'results?profile=' + $c));

	});

	$('.previous').on('click', function() {

		$(this).parent().fadeOut({queue:false, duration:450}).animate({left: "+=100"}, 450);
			
		$(this).parent().prev().delay(440).animate({opacity:"toggle", left: "+=100"}, 450);

		$tab.pop();

		console.log($tab);
	});
	
});

</script>

@endsection