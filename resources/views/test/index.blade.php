@extends('layouts.app')


@section('content')

	<div class="container-fluid" >

		<div class="row justify-content-center text-center" id="test">


			@foreach($resultats as $resultat)

				<div class="col-md-4 test @if($resultat->question_id != $first) {{ 'completed' }} @endif">

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

			<a id="resultat" href="results?profile=">clic</a>

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