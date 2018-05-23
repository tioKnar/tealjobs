@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="result-bg" alt="result_tree">

				</div>
				<div class="fireflies">@include('fireflies.index')</div>
					<div class="row " id="foliage-square">
						<?php $e=1 ?>
						@foreach($jobs as $job)
								<a class="nav-link nav-lien fruit{{$e}}" href="#" id="modal-job" data-toggle="modal" data-target="#modaljob{{$e}}">

									<div id="job{{$e}}">
										<p class="font-weight-light text-center align-middle">{{$job->name}}</p>
									</div>
								</a>

						@include('modal.job')

						<?php $e++ ?>
						@endforeach
					</div>			
			</div>
		</div>
	</div>

@endsection