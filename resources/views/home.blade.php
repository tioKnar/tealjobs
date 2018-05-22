@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="row justify-content-center text-center">
        
        <h2>Bienvenue {{ Auth::user()->firstname }} !</h2>

    </div> 

    @if( Auth::user()->role == 'admin')

		<a href="users">Accéder à l'espace admin</a>

    @else

		<a href="/">Accéder à l'accueil</a>

    @endif

</div>
@endsection
