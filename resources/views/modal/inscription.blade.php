<!-- Modal Inscription -->

<div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">
        
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
      
            </div>
      
            <div class="modal-body">

                <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <input  type="text" class="form-group form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" placeholder="Prénom" required autofocus>

                        @if ($errors->has('firstname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif

                    <input  type="text" class="form-group form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" placeholder="Nom" required autofocus>

                        @if ($errors->has('lastname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif

                    <input  type="email" class="form-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    <input  type="password" class="form-group form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de passe" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
  
                    <input  type="password" class="form-group form-control" name="password_confirmation" placeholder="Confirmation du mot de passe" required>
   
                    <button type="submit" class="btn btn-info form-group form-control">
                                    S'inscrire
                    </button>

                </form>

            </div>
        
        </div>
      
    </div>

</div>