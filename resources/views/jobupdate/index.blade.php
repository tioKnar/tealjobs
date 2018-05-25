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

			<h2 style="text-align: center">Modifier un métier</h2><br>

			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="name" class="form form-group form-control" value="{{ $job->name }}">

				<textarea name="description" class="form form-group form-control" rows="5">{{ $job->description }}</textarea>

				<button class="btn btn-info form-control">Modifier</button>

			</form>

			@include('flash::message')

			<a href="jobs">Liste des métiers</a>

		</div>

	</div>

</div>

@endif

@endsection