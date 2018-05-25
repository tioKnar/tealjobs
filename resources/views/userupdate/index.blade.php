@extends('layouts/app')

@section('content')

 @if( Auth::user()->role == 'user')

	<div class="container-fluid">
    
    	<div class="row justify-content-center text-center" id="welcomename">
        
        	<h4>Vous n'avez pas accès à cette page !</h4>
	
    	</div> 

		<div id="accessuser">

			<div class="row justify-content-center text-center accessaccueilbtn">

				<a href="/" class="col-md-4 homebtn">Retour à l'accueil</a>

			<div>

		</div>

	</div>

 @else

<div class="container-fluid" id="tableupdateadmin">

	<div class="row justify-content-center">

		<div class="col-md-4">

			<h2 style="text-align: center">Modifier un utilisateur</h2><br>

			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="firstname" class="form form-group form-control" value="{{ $user->firstname }}">

				<input type="text" name="lastname" class="form form-group form-control" value="{{ $user->lastname }}">

				<input type="email" name="email" class="form form-group form-control" value="{{ $user->email }}">

				<select name="role" class="form form-group form-control {{ $errors->has('role') ? 'border border-danger' : '' }}">
					
					@if($user->role == 'user')

						<option value="user" selected>User</option>

					@else

						<option value="user">User</option>

					@endif

					@if($user->role == 'admin')

						<option value="admin" selected>Admin</option>

					@else
						
						<option value="admin">Admin</option>

					@endif

				</select>

				<button class="btn btn-info form-control">Modifier</button>

			</form>

			@include('flash::message')

			<a href="users">Liste des utilisateurs</a>

		</div>

	</div>

</div>

@endif

@endsection