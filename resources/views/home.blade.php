@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="row justify-content-center text-center">
        
        <h2>Bienvenue {{ Auth::user()->firstname }} !</h2>

    </div> 

</div>
@endsection
