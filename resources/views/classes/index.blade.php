@extends('layouts/app')

@section('content')

<div class="container-fluid">
	
	<div class="row justify-content-center text-center">
		
		<a href="users" class="col-md-2 administration">Gestion utilisateurs</a>

		<a href="jobs" class="col-md-2 administration">Gestion métiers</a>

		<a href="classes" class="col-md-2 administration" id="pageactive">Gestion formations</a>

	</div>

	<br><br><br><h2 style="text-align: center;">Gestion des formations</h2><br><br><br>

</div>

@endsection