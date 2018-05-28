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
                            <label for="lastname_contact">Votre Nom <span class="etoile" >*</span></label>
                            <input type="text" value="{{ old('lastname_contact') }}" class="form-control {{ $errors->has('lastname_contact') ? ' has-error' : '' }}" name="lastname_contact" >
                        </div>
                        @if ($errors->has('lastname_contact'))
                            <span class="errors-contact">
                                <strong class="alert alert-danger" >{{ $errors->first('lastname_contact') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="name_contact">Votre Prénom <span class="etoile" >*</span></label>
                            <input type="text" value="{{ old('name_contact') }}" class="form-control {{ $errors->has('name_contact') ? ' has-error' : '' }}" name="name_contact"_contact >
                        </div>
                        @if ($errors->has('name_contact'))
                            <span class="errors-contact">
                                <strong class="alert alert-danger" >{{ $errors->first('name_contact') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="email_contact">Votre Email <span class="etoile" >*</span></label>
                            <input type="email" value="{{ old('email_contact') }}" class="form-control {{ $errors->has('email_contact') ? ' has-error' : '' }}" name="email_contact" >
                        </div>
                        @if ($errors->has('email_contact'))
                            <span class="errors-contact">
                                <strong class="alert alert-danger" >{{ $errors->first('email_contact') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="object_contact">Objet de la demande <span class="etoile" >*</span></label>
                            <input type="text" value="{{ old('object_contact') }}" class="form-control {{ $errors->has('_contactobject_contact') ? ' has-error' : '' }}" name="object_contact" >
                        </div>
                        @if ($errors->has('object_contact'))
                            <span class="errors-contact">
                                <strong class="alert alert-danger" >{{ $errors->first('object_contact') }}</strong>
                            </span>
                        @endif
                     </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="message_contact">Votre Message <span class="etoile" >*</span></label>
                            <textarea type="text" value="{{ old('message_contact') }}" class="form-control {{ $errors->has('message_contact') ? ' has-error' : '' }}" name="message_contact" rows="5"></textarea>
                        </div>
                        @if ($errors->has('message_contact'))
                            <span class="errors-contact">
                                <strong class="alert alert-danger" >{{ $errors->first('message_contact') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info form-control">Envoyer</button>
                    </div>
                </form>
                @include('flash::message')

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