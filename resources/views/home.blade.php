@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="row justify-content-center text-center" id="welcomename">
        
        <h2>Bienvenue {{ Auth::user()->firstname }} !</h2>

    </div> 

    @if( Auth::user()->role == 'admin')
	
	<div id="accessadmin">

		<div class="row justify-content-center text-center">

			<a href="users" class="col-md-4 homebtn">Accéder à l'espace admin</a>

		</div>

		<div class="row justify-content-center text-center accessaccueilbtn">

			<a href="/" class="col-md-4 homebtn">Accéder à l'accueil</a>

		</div>

	</div>

    @else

    <div id="accessuser">

		<div class="row justify-content-center text-center accessaccueilbtn">

			<a href="/" class="col-md-4 homebtn">Accéder à l'accueil</a>

		<div>

	</div>

    @endif

</div>

@endsection
