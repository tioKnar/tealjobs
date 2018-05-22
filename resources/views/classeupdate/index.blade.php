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
				
				<input type="text" name="classes_name" class="form form-group form-control" value="{{ $classe->classes_name }}">

				<textarea name="description" class="form form-group form-control" rows="5">{{ $classe->description }}</textarea>

				<input type="number" name="duration" class="form form-group form-control" value="{{ $classe->duration }}">

				<input type="number" name="cost" class="form form-group form-control" value="{{ $classe->cost }}">

				<input type="text" name="contact" class="form form-group form-control" value="{{ $classe->contact }}">

				<input type="text" name="city" class="form form-group form-control" value="{{ $classe->city }}">

				<input type="text" name="address" class="form form-group form-control" value="{{ $classe->address }}">

				<input type="number" name="cp" class="form form-group form-control" value="{{ $classe->cp }}">

				<input type="email" name="mail" class="form form-group form-control" value="{{ $classe->mail }}">

				<input type="tel" name="tel" class="form form-group form-control" value="{{ $classe->tel }}">

				<select name="job_id" class="form form-group form-control {{ $errors->has('job_id') ? 'border border-danger' : '' }}">
					
					<option>-- Séléctionner un métier --</option>

				@foreach($jobs as $job)

					 @if($classe->job_id == $job->id)

						<option value="{{ $job->id }}" selected>{{ $job->name }}</option>
					
					@else

						<option value="{{ $job->id }}">{{ $job->name }}</option>

					@endif



				@endforeach

				</select>

				<input type="url" name="link" class="form form-group form-control" value="{{ $classe->link }}">

				<button class="btn btn-info form-control">Modifier</button>

			</form>

			@include('flash::message')

			<a href="classes">Liste des formations</a>

		</div>

	</div>

</div>

@endif

@endsection