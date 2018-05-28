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

		<a href="jobs" class="col-md-2 administration">Gestion métiers</a>

		<a href="classes" class="col-md-2 administration" id="pageactive">Gestion formations</a>

	</div>

</div>


<div class="container-fluid" id="tableadmin">

	<div class="row">

		<div class="col-md-6">

			<div class="offset-md-3 col-md-8">

			<h2 style="text-align: center;">Ajouter une formation</h2><br>
			
			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="classes_name" class="form form-group form-control {{ $errors->has('classes_name') ? 'border border-danger' : '' }}" value="{{ old('classes_name') }}" placeholder="Nom">

				<input type="number" name="duration" class="form form-group form-control {{ $errors->has('duration') ? 'border border-danger' : '' }}" value="{{ old('duration') }}" placeholder="Durée (nombre de mois)">

				<input type="number" name="cost" class="form form-group form-control {{ $errors->has('cost') ? 'border border-danger' : '' }}" value="{{ old('cost') }}" placeholder="Coût">

				<input type="text" name="contact" class="form form-group form-control {{ $errors->has('contact') ? 'border border-danger' : '' }}" value="{{ old('contact') }}" placeholder="Contact">

				<input type="text" name="city" class="form form-group form-control {{ $errors->has('city') ? 'border border-danger' : '' }}" value="{{ old('city') }}" placeholder="Ville">

				<input type="text" name="address" class="form form-group form-control {{ $errors->has('address') ? 'border border-danger' : '' }}" value="{{ old('address') }}" placeholder="Adresse">

				<input type="number" name="cp" class="form form-group form-control {{ $errors->has('cp') ? 'border border-danger' : '' }}" value="{{ old('cp') }}" placeholder="Code postal">

				<input type="email" name="mail" class="form form-group form-control {{ $errors->has('mail') ? 'border border-danger' : '' }}" value="{{ old('mail') }}" placeholder="Email">

				<input type="tel" name="tel" class="form form-group form-control {{ $errors->has('tel') ? 'border border-danger' : '' }}" value="{{ old('tel') }}" placeholder="Téléphone">

				<select multiple name="job_id[]" class="form form-group form-control {{ $errors->has('job_id') ? 'border border-danger' : '' }}">
					
					<option>-- Séléctionner un métier --</option>

				@foreach($jobs as $job)

					<option value="{{ $job->id }}">{{ $job->name }}</option>

				@endforeach

				</select>

				<input type="url" name="link" class="form form-group form-control {{ $errors->has('link') ? 'border border-danger' : '' }}" value="{{ old('link') }}" placeholder="Site web">

				<button class="btn btn-info form-control">Ajouter</button>

			</form>

			@include('flash::message')

		</div>

		</div>
	
		<div class="col-md-6">

			<div class="offset-md-1 col-md-8">

				<h2 style="text-align: center;">Liste des formations</h2><br>
			
				<ul class="list-group col">

				@foreach($classes as $classe)
					
						<li class="list-group-item">

							<h4>{{ $classe->classes_name }}</h4><hr>
							<p>{{ $classe->description}}</p>
							<strong>Durée :</strong> {{ $classe->duration }} mois<br>
							<strong>Coût :</strong> {{ $classe->cost }} €<br>
							<strong>Contact :</strong> {{ $classe->contact }}<br>
							<strong>Adresse :</strong> {{ $classe->address }}, {{ $classe->cp }}, {{ $classe->city }}<br>
							<strong>Email :</strong> {{ $classe->mail }}<br>
							<strong>Téléphone :</strong> {{ $classe->tel }}<br>
							
							@foreach($jobs as $job)

								@if($job->id == $classe->job_id)

									<strong>Métier :</strong> {{ $job->name }}<br>

								@endif

							@endforeach

							<strong>Site :</strong><a href="{{ $classe->link }}"> {{ $classe->link }} </a><hr>

							<a href="classeupdate?id={{ $classe->id }}">Modifier</a>
							<a href="classedelete?id={{ $classe->id }}" class="supp">/ Supprimer</a>

						</li><br>

				@endforeach

				<br>

				{{ $classes->links() }}
				
				</ul>

			</div>

		</div>

	</div>

</div>

@endif

@endsection