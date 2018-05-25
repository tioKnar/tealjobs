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

		<?php $e=1 ?>
		@foreach($jobs as $job)
			
			<div class="card-deck col-md-4" data-toggle="modal" data-target="#modaljob{{$e}}">
						
				<div class="card border-primary" style="max-width: 18rem;">
						
					<div class="card-header">

						{{$job->name}}

					</div>
							
					<div class="card-body text-primary">
								 
						<h5 class="card-title"></h5>
						<p class="card-text">{{$job->description}}</p>

					</div>

				</div>

			</div>
		
		@include('modal.job')
		<?php $e++ ?>
		@endforeach

	</div>

</div>

@endsection