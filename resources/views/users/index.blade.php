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

<div class="container-fluid" id="boutonadmin">
	
	<div class="row justify-content-center text-center">
		
		<a href="users" class="col-md-2 administration" id="pageactive">Gestion utilisateurs</a>

		<a href="jobs" class="col-md-2 administration">Gestion métiers</a>

		<a href="classes" class="col-md-2 administration">Gestion formations</a>

	</div>

</div>

<div class="container-fluid" id="tableadmin">

	<div class="row">

		<div class="col-md-6">

			<div class="offset-md-3 col-md-8">

			<h2 style="text-align: center;">Ajouter un utilisateur</h2><br>
			
			<form method="post" class="form-group">
				@csrf
				
				<input type="text" name="firstname" class="form form-group form-control {{ $errors->has('firstname') ? 'border border-danger' : '' }}" value="{{ old('firstname') }}" placeholder="Prénom">

				<input type="text" name="lastname" class="form form-group form-control {{ $errors->has('lastname') ? 'border border-danger' : '' }}" value="{{ old('lastname') }}" placeholder="Nom">

				<input type="email" name="email" class="form form-group form-control {{ $errors->has('email') ? 'border border-danger' : '' }}" value="{{ old('email') }}" placeholder="Email">

				<input type="password" name="password" class="form form-group form-control {{ $errors->has('password') ? 'border border-danger' : '' }}" value="{{ old('password') }}" placeholder="Mot de passe">

				<select name="role" class="form form-group form-control {{ $errors->has('role') ? 'border border-danger' : '' }}">
					
					<option value="user">User</option>
					<option value="admin">Admin</option>

				</select>

				<button class="btn btn-info form-control">Ajouter</button>

			</form>

			@include('flash::message')

		</div>

		</div>
	
		<div class="col-md-6">

			<div class="offset-md-1 col-md-8">

				<h2 style="text-align: center;">Liste des utilisateurs</h2><br>
			
				<ul class="list-group col">

				@foreach($users as $user)
					
						<li class="list-group-item">

							<h4>{{ $user->firstname }} {{ $user->lastname }} </h4>
							<p>Email : {{ $user->email}}</p>
							<p>Role : {{ $user->role }}</p>
							<a href="userupdate?id={{ $user->id }}">Modifier</a>
							<a href="userdelete?id={{ $user->id }}" class="supp">/ Supprimer</a>

						</li>

				@endforeach

				<br>

				{{ $users->links() }}
				
				</ul>

			</div>

		</div>

	</div>

</div>

@endif

@endsection