@extends('layouts.app')

@section('content')


<?php

	$tests = [
		[  
			'nom' =>  'Romain',
			'job' =>  'Drag Queen'							
		],
		[
			'nom' => 'Caroline',
			'job' => 'Pompier'
		]
	];
// dd($tests);
?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="result-bg" alt="result_tree">
					<div id="foliage-square">
						@foreach($tests as $test)
							<div class="job" >{{$test['job']}}</div>
							<div class="fruit"></div>
						@endforeach
					</div>				
				</div>

				{{-- <div class="fireflies">@include('fireflies.index')</div> --}}
			</div>
		</div>
	</div>

{{-- <script>
	
	$(function() {

		let $width = $('#foliage').width();
		let $height = $('#foliage').height();
			
		@foreach($tests as $test) {
			 var $left = Math.floor(Math.random() * (width-100));
			 var $top = Math.floor(Math.random() * (height-100));

			 $("<div class='job'>{{$test['job']}}</div> <img class='fruit' src='images/fruit.png'>").appendTo("#foliage-square").css({
			 	left: $left;
			 	top: $top;
			 })
		}

		@endforeach

	};
	
</script> --}}

@endsection