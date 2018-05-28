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

<div class="container-fluid" id="boutonadmin">
	
	<div class="row justify-content-center text-center">
		
		<a href="users" class="col-md-2 administration">Gestion utilisateurs</a>

		<a href="jobs" class="col-md-2 administration" id="pageactive">Gestion métiers</a>

		<a href="classes" class="col-md-2 administration">Gestion formations</a>

	</div>

</div>

<div class="container-fluid" id="tableadmin">

	<div class="row">

		<div class="col-md-6">

			<div class="offset-md-3 col-md-8">

			<h2 style="text-align: center;">Ajouter un métier</h2><br>
			
			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="name" class="form form-group form-control {{ $errors->has('name') ? 'border border-danger' : '' }}" value="{{ old('name') }}" placeholder="Nom">

				<textarea name="description" class="form form-group form-control {{ $errors->has('description') ? 'border border-danger' : '' }}" placeholder="Description">{{ old('description') }}</textarea>

				<select multiple name="sector_id[]" class="form form-group form-control {{ $errors->has('sector_id') ? 'border border-danger' : '' }}">
					
					<option>-- Séléction de secteurs --</option>

				@foreach($sectors as $sector)

					<option value="{{ $sector->id }}">{{ $sector->name }}</option>

				@endforeach

				</select>

				<select multiple name="classes_id[]" class="form form-group form-control {{ $errors->has('classes_id') ? 'border border-danger' : '' }}">
					
					<option>-- Séléction de formations --</option>

				@foreach($classes as $classe)

					<option value="{{ $classe->id }}">{{ $classe->classes_name }}</option>

				@endforeach

				</select>

				<button class="btn btn-info form-control">Ajouter</button>

			</form>

			@include('flash::message')

		</div>

		</div>
	
		<div class="col-md-6">

			<div class="offset-md-1 col-md-8">

				<h2 style="text-align: center;">Liste des métiers</h2><br>
			
				<ul class="list-group col">

				@foreach($jobs as $job)
					
						<li class="list-group-item">

							<h4>{{ $job->name }}</h4>
							<p>{{ $job->description}}</p>
							<a href="jobupdate?id={{ $job->id }}">Modifier</a>
							<a href="jobdelete?id={{ $job->id }}" class="supp">/ Supprimer</a>

						</li>

				@endforeach

				<br>

				{{ $jobs->links() }}
				
				</ul>

			</div>

		</div>

	</div>

</div>

@endif

@endsection