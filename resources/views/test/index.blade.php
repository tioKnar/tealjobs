@extends('layouts.app')


@section('content')
	
	@include('modal.history_job')

	<div class="container-fluid" id="testtest">
		<div id="test-bg"></div>
		<div class="fireflies">@include('fireflies.index')</div>

		<div class="row justify-content-center text-center align-end centrage" id="test">

			<div class="col col-md-5 centrage">
			
				@foreach($resultats as $resultat)

					<div class="col- test @if($resultat->question_id != $first) {{ 'completed' }} @endif">

						<br><h3>{{ $resultat->question }}</h3>
								
							@if(! empty($resultat->answer1))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="1">{{ $resultat->answer1 }}</p></a>@endif

							@if(! empty($resultat->answer2))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="2">{{ $resultat->answer2 }}</p></a>@endif

							@if(! empty($resultat->answer3))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="3">{{ $resultat->answer3 }}</p></a>@endif

							@if(! empty($resultat->answer4))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="4">{{ $resultat->answer4 }}</p></a>@endif

							@if(! empty($resultat->answer5))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="5">{{ $resultat->answer5 }}</p></a>@endif

							@if(! empty($resultat->answer6))<a href="" class="under-line"><p class="rounded bouton wrap-answers" data-id="6">{{ $resultat->answer6 }}</p></a>@endif

					</div>

				@endforeach
				
				<form action="" method="POST" id="formtest">
					@csrf
					<input name="result_tree" type="text" hidden id="result_tree">
					<input name="result_chart" type="text" hidden id="result_chart">
					<p id="endtest" hidden>Félicitations, vous avez terminé le test !</p>
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


@endsection


