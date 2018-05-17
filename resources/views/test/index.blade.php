@extends('layouts.app')

@section ('content')


@section('content')

	<div class="container-fluid" >

		<div class="row justify-content-center" id="test">

			<div class="col-md-4" id="id1">
				
				<br><h3>Question 1</h3><br>

				<button type="button1" class="form-control form-group btn btn-info bouton1">Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton1">Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton1">Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton1">Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton1">Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton1">Réponse 6</button>

			</div>

		</div>

	</div>

			<div class="col-md-4" id="id2" style="display: none">
				
				<br><h3>Question 2</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton2">Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton2">Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton2">Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton2">Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton2">Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton2">Réponse 6</button>

			</div>

			<div class="col-md-4" id="id3" style="display: none">
				
				<br><h3>Question 3</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton3">Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton3">Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton3">Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton3">Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton3">Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton3">Réponse 6</button>

			</div>

			<div class="col-md-4" id="id4" style="display: none">
				
				<br><h3>Question 4</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton4">Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton4">Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton4">Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton4">Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton4">Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton4">Réponse 6</button>

			</div>

			<div class="col-md-4" id="id5" style="display: none">
				
				<br><h3>Question 5</h3><br>

				<button type="button" class="form-control form-group btn btn-info bouton5">Réponse 1</button>
				<button type="button" class="form-control form-group btn btn-info bouton5">Réponse 2</button>
				<button type="button" class="form-control form-group btn btn-info bouton5">Réponse 3</button>
				<button type="button" class="form-control form-group btn btn-info bouton5">Réponse 4</button>
				<button type="button" class="form-control form-group btn btn-info bouton5">Réponse 5</button>
				<button type="button" class="form-control form-group btn btn-info bouton5">Réponse 6</button>

			</div>


<br><br>

<script>
	
$(function() {

	$('.bouton1').on('click', function() {

		$('#test').html($('#id2').removeAttr('style'));
	})

	$('.bouton2').on('click', function() {

		$('#test').html($('#id3').removeAttr('style'));
	})

	$('.bouton3').on('click', function() {

		$('#test').html($('#id4').removeAttr('style'));
	})

	$('.bouton4').on('click', function() {

		$('#test').html($('#id5').removeAttr('style'));
	})

});

</script>

>>>>>>> c35639dd8077ed3ad94701a90d52801878a8bc06

@endsection