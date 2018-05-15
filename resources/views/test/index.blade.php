@extends('layouts.app')

	@section ('content')

		<div class="container">
			<div class="row">
				<div class="col">
					<div id="content">
							@if(! empty($question))
							{{ $question->question }} <br>
								@foreach($reponses as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
				
							<button id="back" disabled>Back</button>
							<button id="next">Next</button>
			        </div> 
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$('#next').on('click', function(){
					var profile = [];
					var item = {{ $item }};
					var totalQuestions = {{ $totalQuestions }}; 
					$('#content').fadeOut(500, function(){
						if(item < totalQuestions){
							
						}

					});
					$('#content').fadeIn(500);
				});
			});
		</script>

	@endsection



