@extends('layouts/app')

@section('content')

 @if( Auth::user()->role == 'user')

	<div class="container-fluid">
    
    	<div class="row justify-content-center text-center" id="welcomename">
        
        	<h4>Vous n'avez pas accès à cette page !</h4>
	
    	</div> 

		<div id="accessuser">

			<div class="row justify-content-center text-center accessaccueilbtn">

				<a href="/" class="col-md-4 homebtn">Retour à l'accueil</a>

			<div>

		</div>

	</div>

 @else

<div class="container-fluid" id="tableupdateadmin">

	<div class="row justify-content-center">

		<div class="col-md-4">

			<h2 style="text-align: center">Modifier une formation</h2><br>

			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="classes_name" class="form form-group form-control" value="{{ $classes[0]->classes_name }}">

				<input type="number" name="duration" class="form form-group form-control" value="{{ $classes[0]->duration }}" placeholder=" @if(empty($values['duration']))Durée de la formation (mois) @endif">

				<input type="number" name="cost" class="form form-group form-control" value="{{ $classes[0]->cost }}">

				<input type="text" name="contact" class="form form-group form-control" value="{{ $classes[0]->contact }}">

				<input type="text" name="city" class="form form-group form-control" value="{{ $classes[0]->city }}">

				<input type="text" name="address" class="form form-group form-control" value="{{ $classes[0]->address }}">

				<input type="number" name="cp" class="form form-group form-control" value="{{ $classes[0]->cp }}">

				<input type="email" name="mail" class="form form-group form-control" value="{{ $classes[0]->mail }}">

				<input type="tel" name="tel" class="form form-group form-control" value="{{ $classes[0]->tel }}">
				
				<!-- Métiers correspondants :
				<ul>
				@foreach($classes as $classe)

					<li>{{ $classe->name }}</li>

				@endforeach
				</ul>

				<select multiple name="job_id[]" class="form form-group form-control {{ $errors->has('job_id') ? 'border border-danger' : '' }}">
					
					<option>-- Séléctionner un métier --</option>

				@foreach($jobs as $job)

						<option value="{{ $job->id }}">{{ $job->name }}</option>

				@endforeach -->
				

				<!-- </select> -->

				<input type="url" name="link" class="form form-group form-control" value="{{ $classes[0]->link }}" placeholder=" @if(empty($values['link']))Site web @endif">

				<button class="btn btn-info form-control">Modifier</button>

			</form>

			@include('flash::message')

			<a href="classes">Liste des formations</a>

		</div>

	</div>

</div>

@endif

@endsection