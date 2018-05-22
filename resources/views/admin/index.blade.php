@extends('layouts/app')

@section('content')

	<div class="container-fluid">
		
		<div class="row justify-content-center">

			<div class="col-md-4" id="adminform">

				<div class="row text-center">

					<div class="col" id="adminformup">
						Administration de Tealjobs
					</div>

				</div>
			
				<div class="row">

					<form method="POST" action="{{ route('login') }}" class="col form-group" id='admininfo'>
						@csrf
							
						<label for="email">Votre adresse email</label>
						<input type="email" name="email" id="email" class="form-group form-control" placeholder="Email">

						<label for="password">Votre mot de passe</label>
						<input type="password" name="password" id="password" class="form-group form-control" placeholder="Mot de passe">
							
						<div class="row justify-content-center">
								
							<button class="col-3 btn btn-info">Valider</button>

						</div>

					</form>

				</div>

			</div>	

		</div>

	</div>

@endsection