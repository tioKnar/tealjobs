@extends('layouts.app')
<<<<<<< HEAD
@section ('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2>Test</h2>
				<form action="?step=1" id="step1" method="POST" class="form-group" name="step1" style="display:block;">
					@csrf
					<p>question1</p>
					<input type="radio" value="réponse1" id="1" name="1"><label for="1">réponse1</label><br>
					<input type="radio" value="réponse2" id="2" name="2"><label for="1">réponse2</label><br>
					<input type="radio" value="réponse3" id="3" name="3"><label for="1">réponse3</label><br>
					<input type="radio" value="réponse4" id="4" name="4"><label for="1">réponse4</label><br>
					<input type="radio" value="réponse5" id="5" name="5"><label for="1">réponse5</label><br>
					<input type="radio" value="réponse6" id="6" name="6"><label for="1">réponse6</label><br>
					<button type="submit">next</button>
				</form>
				<form action="?step=2" id="step2" method="POST" class="form-group" name="step2" style="display:none;">
					@csrf
					<p>question2</p>
					<input type="radio" value="id" id="7" name="1"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="8" name="2"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="9" name="3"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="10" name=4"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="11" name="5"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="12" name="6"><label for="1">réponse</label><br>
					<!-- <button type="submit">back</button> -->
					<button type="submit">next</button>
				</form>
				<form action="?step=3" id="step3" method="POST" class="form-group" name="step3" style="display:none;">
					@csrf
					<p>question3</p>
					<input type="radio" value="id" id="13" name="1"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="14" name="2"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="15" name="3"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="16" name="4"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="17" name="5"><label for="1">réponse</label><br>
					<input type="radio" value="id" id="18" name="6"><label for="1">réponse</label><br>
					<!-- <button type="submit">back</button> -->
					<button type="submit" readonly>next</button>
				</form>


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
	<script>
        $(function(){
            var current_url = $(location).attr('href');
            if(current_url.indexOf("step=") >= 0){
                var step_array = current_url.split('step=');
                var step = step_array[1];
                switch(Number(step)){
                    case 1:
                        $('#step1').css("display", "none");
                        $('#step2').css("display", "block");
                        $('#step3').css("display", "none");
                        break;


                    case 2:
                        $('#step1').css("display", "none");
                        $('#step2').css("display", "none");
                        $('#step3').css("display", "block");
                        break;
                }
            }
        })
	</script>
@endsection

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



@endsection