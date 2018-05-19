@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="result-bg" alt="result_tree">
					{{-- <div id="test"></div> --}}
					<div id="foliage-square">
						@for($i=1; $i<16; $i++)
							<div id="fruit{{$i}}"></div>
						@endfor
					</div>			
				</div>

{{-- 				<div class="fireflies">@include('fireflies.index')</div> --}}
			</div>
		</div>
	</div>

@endsection