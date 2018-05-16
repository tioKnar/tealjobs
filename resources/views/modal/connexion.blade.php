<!-- Modal Connexion -->

<div class="modal fade" id="modalconnect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">
        
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
      
            </div>
      
            <div class="modal-body">

                <form method="POST" action="{{ route('login') }}" class="form-group">
                            @csrf
             
                    <input  type="email" class="form-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

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

                    <button type="submit" class="btn btn-info form-group form-control">
                                        Se connecter
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                              Mot de passe oublié ? 
                    </a>
                          
                </form>

            </div>
        
        </div>
      
    </div>

</div>