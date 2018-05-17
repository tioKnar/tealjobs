@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<img src="images/result_page_pano.jpg" class="img-fluid" id="result-tree" alt="result_tree">

				@foreach()

				@endforeach

				<div class="fireflies">@include('fireflies.index')</div>
			</div>
		</div>
	</div>

@endsection