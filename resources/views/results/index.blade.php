@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<img src="images/result_page.jpg" id="result_tree" alt="result_tree">
				<div class="fireflies">@include('fireflies.index')</div>
			</div>
		</div>
	</div>

@endsection