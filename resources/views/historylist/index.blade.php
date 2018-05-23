@extends('layouts.app')

@section('content')

<div class="container-fluid" id="boutonadmin">
	
	<div class="row justify-content-center text-center">
		
		<a href="historychart" class="col-md-2 administration">Diagramme</a>

		<a href="historytree" class="col-md-2 administration">Arbre à métier</a>

		<a href="historylist" class="col-md-2 administration" id="pageactive">Liste des métiers</a>

	</div>

</div>

<div class="container joblist">

	<div class="row justify-content-center">



				  	@foreach($jobs as $job)
				<div class="card-deck col-lg-4">
							  <div class="card border-primary" style="max-width: 18rem;">
							  <div class="card-header">{{$job->name}}</div>
							  <div class="card-body text-primary">
							    <h5 class="card-title"></h5>
							    <p class="card-text">{{$job->description}}</p>
							  </div>
							  </div>
				</div>
					@endforeach


		{{-- @foreach($classes as $classe)

			@if($classe->jobs_id == $job->job_id)

				<div class="card card-body">

					<div>
						 
						<h4>{{ $classe->classes_name }}</h4><hr>
						<strong>Durée :</strong> {{ $classe->duration }} mois<br>
						<strong>Coût :</strong> {{ $classe->cost }} €<br>
						<strong>Contact :</strong> {{ $classe->contact }}<br>
						<strong>Adresse :</strong> {{ $classe->address }}, {{ $classe->cp }}, {{ $classe->city }}<br>
						<strong>Email :</strong> {{ $classe->mail }}<br>
						<strong>Téléphone :</strong> {{ $classe->tel }}<br>
						<strong>Site :</strong><a href="{{ $classe->link }}"> {{ $classe->link }} </a>

					</div>

					</div>

			@endif

		@endforeach --}}

	</div>

</div>

@endsection