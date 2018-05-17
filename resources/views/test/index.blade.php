@extends('layouts.app')

@section('content')

	<div class="container-fluid" >

		<div class="row justify-content-center text-center" id="test">

				@foreach($resultats as $resultat)

					<div class="col-md-4 test @if($resultat->question_id != 1) {{ 'completed' }} @endif">

						<br><h3>{{ $resultat->question }}</h3>
							
								<button type="button" class="form-control form-group btn btn-info bouton" data-id="1">{{ $resultat->answer1 }}</button>
								<button type="button" class="form-control form-group btn btn-info bouton" data-id="2">{{ $resultat->answer2 }}</button>
								<button type="button" class="form-control form-group btn btn-info bouton" data-id="3">{{ $resultat->answer3 }}</button>
								<button type="button" class="form-control form-group btn btn-info bouton" data-id="4">{{ $resultat->answer4 }}</button>
								<button type="button" class="form-control form-group btn btn-info bouton" data-id="5">{{ $resultat->answer5 }}</button>
								<button type="button" class="form-control form-group btn btn-info bouton" data-id="6">{{ $resultat->answer6 }}</button>
				

							@if($resultat->question_id != 1)

								<button class="previous">previous</button>

							@endif
					</div>

				@endforeach

				
	
		</div>

	</div>

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

		$(this).parent().addClass('completed');
			
		$(this).parent().next().removeClass('completed');

		$tab.push($(this).attr('data-id'));

		console.log($tab);	
	});

	$('.previous').on('click', function() {

		$(this).parent().addClass('completed');
			
		$(this).parent().prev().removeClass('completed');

		$tab.pop();

		console.log($tab);
	});
});

</script>

@endsection