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

		<ul class="list-group list-group-flush col">
  			
  			@foreach($jobs as $job)

				<li class="list-group-item">

					<h5>{{ $job->name}}</h5>
					{{ $job->description }}

				</li>

  			@endforeach
		</ul>

	</div>

</div>

@endsection