@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="result-bg" alt="result_tree">
					<div id="foliage-square">
						@foreach($results as $result)
							<div class="job">{{'result.name'}}</div>
							<div class="fruit"></div>
						@endforeach
					</div>				
				</div>

				{{-- <div class="fireflies">@include('fireflies.index')</div> --}}
			</div>
		</div>
	</div>

@endsection