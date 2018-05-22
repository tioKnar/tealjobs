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

		<ul class="list-group list-group-flush col" id="joblistbtn">
  			
  			<?php $i = 1 ?>
  			@foreach($jobs as $job)
				
				<button type="button" data-toggle="collapse" data-target="#{{ $i }}" aria-expanded="false" aria-controls="{{ $i }}">

					<li class="list-group-item">

						<h5>{{ $job->name}}</h5>
						{{ $job->description }}

					</li>

				</button>

				<div class="collapse" id="{{ $i }}">
    					
    				@foreach($classes as $classe)

						@if($classe->job_id == $job->job_id)

							<div class="card card-body">

								<div>
   								 
									<h4>{{ $classe->classes_name }}</h4><hr>
									<p>{{ $classe->description}}</p>
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

    				@endforeach

				</div><br>
			
			<?php $i++ ?>
  			@endforeach

		</ul>

	</div>

</div>

@endsection