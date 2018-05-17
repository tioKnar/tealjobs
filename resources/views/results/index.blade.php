@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<img src="images/result_page_pano.jpg" class="img-fluid" id="result-tree" alt="result_tree">
					<div id="foliage-square">	
						<div id="foliage"></div>
					</div>

				{{-- <div class="fireflies">@include('fireflies.index')</div> --}}
			</div>
		</div>
	</div>

{{-- <script>
	
	$(function() {

		let $width = $('#foliage').width();
		let $height = $('#foliage').height();
			
		@foreach($results as $result) {
			 var $left = Math.floor(Math.random() * (width-100));
			 var $top = Math.floor(Math.random() * (height-100));

			 $("<div id='fruit'>{{$result->name}}</div>").appendTo("#foliage").css({
			 	left: $left;
			 	top: $top;
			 })
		}

		@endforeach

	};
	
</script> --}}

@endsection