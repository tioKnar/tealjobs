@extends('layouts/app')

@section('content')

 @if( Auth::user()->role == 'user')

	<p>Vous n'avez pas accès à cette page</p>
	<a href="/">Retour à l'accueil</a>

 @else

<div class="container-fluid" id="tableupdateadmin">

	<div class="row justify-content-center">

		<div class="col-md-4">

			<h2 style="text-align: center">Modifier une formation</h2><br>

			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="classes_name" class="form form-group form-control" value="{{ $classes[0]->classes_name }}">

				<input type="number" name="duration" class="form form-group form-control" value="{{ $classes[0]->duration }}">

				<input type="number" name="cost" class="form form-group form-control" value="{{ $classes[0]->cost }}">

				<input type="text" name="contact" class="form form-group form-control" value="{{ $classes[0]->contact }}">

				<input type="text" name="city" class="form form-group form-control" value="{{ $classes[0]->city }}">

				<input type="text" name="address" class="form form-group form-control" value="{{ $classes[0]->address }}">

				<input type="number" name="cp" class="form form-group form-control" value="{{ $classes[0]->cp }}">

				<input type="email" name="mail" class="form form-group form-control" value="{{ $classes[0]->mail }}">

				<input type="tel" name="tel" class="form form-group form-control" value="{{ $classes[0]->tel }}">

				<select multiple name="job_id[]" class="form form-group form-control {{ $errors->has('job_id') ? 'border border-danger' : '' }}">
					
					<option>-- Séléctionner un métier --</option>

				
				@foreach($jobs as $job)

				@foreach($classes as $classe)

				 	@if($classe->jobs_id == $job->id)

						<option value="{{ $job->id }}" selected>{{ $job->name }}</option>

					@endif
				
				@endforeach
		

					@if($classes->jobs_id != $job->id)

						<option value="{{ $job->id }}">{{ $job->name }}</option>

					@endif


				@endforeach
				

				</select>

				<input type="url" name="link" class="form form-group form-control" value="{{ $classes[0]->link }}">

				<button class="btn btn-info form-control">Modifier</button>

			</form>

			@include('flash::message')

			<a href="classes">Liste des formations</a>

		</div>

	</div>

</div>

@endif

@endsection