@extends('layouts.app')

	@section ('content')

		<div class="container">
			<div class="row">
				<div class="col">
					<div id="content">
						<div id="1">
							@if(! empty($question1))
							{{ $question1->question }} <br>
								@foreach($reponses1 as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
						</div>
						<div id="2" hidden="true">
							@if(! empty($question2))
							{{ $question2->question }} <br>
								@foreach($reponses2 as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
						</div>
						<div id="2" hidden="true">
							@if(! empty($question3))
							{{ $question2->question }} <br>
								@foreach($reponses3 as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
						</div>
						<div id="2" hidden="true">
							@if(! empty($question4))
							{{ $question2->question }} <br>
								@foreach($reponses4 as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
						</div>
						<div id="2" hidden="true">
							@if(! empty($question5))
							{{ $question2->question }} <br>
								@foreach($reponses5 as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
						</div>
						<div id="2" hidden="true">
							@if(! empty($question6))
							{{ $question2->question }} <br>
								@foreach($reponses6 as $reponse)
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer1 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer2 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer3 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer4 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer5 }}</label><br>
									<input type="checkbox" id="{{ $reponse->id }}"><label for="{{ $reponse->id }}">{{ $reponse->answer6 }}</label><br>
								@endforeach
							@endif
						</div>
							<button id="back" disabled="true">Back</button>
							<button id="next">Next</button>
			        </div> 
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$('#next').on('click', function(){
					var profile = [];
					$('#1').fadeOut(500, function(){
						$('#back').attr('disabled', false);						
					}).replaceWith();
					$('#2').attr('hidden', false).fadeIn(500);

				});
			});
		</script>

	@endsection



