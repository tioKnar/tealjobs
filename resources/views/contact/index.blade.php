

@extends('layouts.app')



@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="map"></div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center address">
                <strong id="adress"><p>66 Rue Abbé de l'Épée, 33000 Bordeaux</p></strong>
            </div>
        </div>

        @if(!empty($successMessage) )
            <strong id="success-message">{{ $successMessage }}</strong>
        @endif
        <div class="row justify-content-center text-align">
            <div class="col-md-6 formulaire-contact">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="lastname">Votre Nom <span class="etoile" >*</span></label>
                            <input type="text" value="{{ old('lastname') }}" class="form-control {{ $errors->has('lastname') ? ' has-error' : '' }}" name="lastname" >
                        </div>
                        @if ($errors->has('lastname'))
                            <span class="errors-contact">
                                <strong class="alert alert-info" >{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Votre Prénom <span class="etoile" >*</span></label>
                            <input type="text" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" name="name" >
                        </div>
                        @if ($errors->has('name'))
                            <span class="errors-contact">
                                <strong class="alert alert-info" >{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="email">Votre Email <span class="etoile" >*</span></label>
                            <input type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="email" >
                        </div>
                        @if ($errors->has('email'))
                            <span class="errors-contact">
                                <strong class="alert alert-info" >{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="object">Objet de la demande <span class="etoile" >*</span></label>
                            <input type="text" value="{{ old('object') }}" class="form-control {{ $errors->has('object') ? ' has-error' : '' }}" name="object" >
                        </div>
                        @if ($errors->has('object'))
                            <span class="errors-contact">
                                <strong class="alert alert-info" >{{ $errors->first('object') }}</strong>
                            </span>
                        @endif
                     </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="message">Votre Message <span class="etoile" >*</span></label>
                            <textarea type="text" value="{{ old('message') }}" class="form-control {{ $errors->has('message') ? ' has-error' : '' }}" name="message" ></textarea>
                        </div>
                        @if ($errors->has('message'))
                            <span class="errors-contact">
                                <strong class="alert alert-info" >{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Envoyer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<script>
    function initMap() {
        var philomatique = {lat: 44.8422881, lng: -0.5828411999999616};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: philomatique
        });
        var marker = new google.maps.Marker({
            position: philomatique,
            map: map
        });
    }
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSJV2Kar5uvneTY7cRdu2gTRYxAiMQKnk&callback=initMap">
</script>

@endsection