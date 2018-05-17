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

								
								<button class="previous">previous</button>
								<!-- <button class="next">next</button> -->
					</div>
				@endforeach


			
		</div>


	</div>

<br><br>




<script>
	
$(function() {

	$tab = [];

	$('.bouton').on('click', function() {

		$(this).parent().addClass('completed');
			
		$(this).parent().next().removeClass('completed');

		$tab.push($(this).attr('data-id'));

		console.log($tab);	
	})


	// $('.next').on('click', function() {

	// 	$(this).parent().addClass('completed');
			
	// 	$(this).parent().next().removeClass('completed');
		
	// })

	$('.previous').on('click', function() {

		$(this).parent().addClass('completed');
			
		$(this).parent().prev().removeClass('completed');

		$tab.pop();
		
		console.log($tab);
	});
});

</script>


@endsection