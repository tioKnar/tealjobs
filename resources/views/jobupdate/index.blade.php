@extends('layouts/app')

@section('content')

<div class="container-fluid" id="tableupdateadmin">

	<div class="row justify-content-center">

		<div class="col-md-4">

			<h2 style="text-align: center">Modifier un métier</h2><br>

			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="name" class="form form-group form-control" value="{{ $job->name }}">

				<textarea name="description" class="form form-group form-control">{{ $job->description }}</textarea>

				<select name="note" class="form form-group form-control">
					
					@for($i = 1; $i <= 10; $i++)
	
						@if($job->note == $i)

							<option value="{{ $i }}" selected>{{ $i }}</option>

						@else

							<option value="{{ $i }}">{{ $i }}</option>

						@endif

					@endfor

				</select>

				<button class="btn btn-info form-control">Modifier</button>

			</form>

			@include('flash::message')

			<a href="jobs">Liste des métiers</a>

		</div>

	</div>

</div>

@endsection