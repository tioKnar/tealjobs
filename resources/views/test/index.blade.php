@extends('layouts.app')


@section('content')

	<div class="container-fluid" >

		<div class="row justify-content-center text-center" id="test">

			<div class="col-md-4" id="id1">
				
				<br><h3>Question 1</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton" data-id=1>Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=2>Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=3>Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=4>Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=5>Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=6>Réponse 6</button>

			</div>

			<div class="col-md-4 completed" id="id2">
	
				<br><h3>Question 2</h3><br>

				<button type="button" class="form-control form-group btn btn-info boutn" data-id=1>Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=2>Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=3>Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=4>Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=5>Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=6>Réponse 6</button>

			</div>

			<div class="col-md-4 completed" id="id3">
				
				<br><h3>Question 3</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton" data-id=1>Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=2>Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=3>Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=4>Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=5>Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=6>Réponse 6</button>

			</div>

			<div class="col-md-4 completed" id="id4">
				
				<br><h3>Question 4</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton" data-id=1>Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=2>Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=3>Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=4>Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=5>Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=6>Réponse 6</button>

			</div>

			<div class="col-md-4 completed" id="id5">
				
				<br><h3>Question 5</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton" data-id=1>Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=2>Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=3>Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=4>Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=5>Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton" data-id=6>Réponse 6</button>

			</div>

		</div>

	</div>

<br><br>

<button id="previous">previous</button>
<button id="next">next</button>


<script>
	
$(function() {

	$tab = [];

	$('.bouton').on('click', function() {

		$(this).parent().addClass('completed');
			
		$(this).parent().next().removeClass('completed');

		$tab.push($(this).attr('data-id'));

		console.log($tab);	
	})

	$('#next').on('click', function() {

		
	})
});

</script>


@endsection