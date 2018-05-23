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
								
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="1">{{ $resultat->answer1 }}</button>

							<button type="button" class="form-control form-group btn btn-info bouton" data-id="2">{{ $resultat->answer2 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="3">{{ $resultat->answer3 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="4">{{ $resultat->answer4 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="5">{{ $resultat->answer5 }}</button>
							
							<button type="button" class="form-control form-group btn btn-info bouton" data-id="6">{{ $resultat->answer6 }}</button>
					
							@if($resultat->question_id != $first)

								<button class="previous">previous</button>

							@endif

					</div>

				@endforeach

			</div>

			<div class="col- col-md-4 offset-col-md-1" id="growing"></div>

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

		$(this).parent().fadeOut({queue:false, duration:650}).animate({left: "-=100"}, 650);
			
		$(this).parent().next().delay(640).animate({opacity:"toggle", left: "-=100"}, 650);

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

		if($tab.length >= 0 && $tab.length <= 3){
			$('#growing').append('<img src="images/grow01.png" alt="grow01">');
		}
		else if($tab.length >= 4 && $tab.length <= 6) {
			$('#growing').html('<img src="images/grow02.png" alt="grow02">');
		}
		else if($tab.length >= 7 && $tab.length <= 9) {
			$('#growing').html('<img src="images/grow03.png" alt="grow03">');
		}
		else if($tab.length >= 10 && $tab.length <= 12) {
			$('#growing').html('<img src="images/grow04.png" alt="grow04">');
		}
		else if($tab.length >= 13 && $tab.length <= 15) {
			$('#growing').html('<img src="images/grow03.png" alt="grow03">');

			if($tab.length == 15) {
				$('#resultat').removeAttr('hidden');
			}
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

		$(this).parent().fadeOut({queue:false, duration:650}).animate({left: "+=100"}, 650);
			
		$(this).parent().prev().delay(640).animate({opacity:"toggle", left: "+=100"}, 650);

		$tab.pop();

		console.log($tab);
	});
	
});

</script>

@endsection