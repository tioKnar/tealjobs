

@extends('layouts.app')



@section('content')



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9823948706885!2d-0.5850352488184279!3d44.84229188264195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527e77936472d%3A0x2854ac5dbdd54926!2sSoci%C3%A9t%C3%A9+Philomathique+de+Bordeaux!5e0!3m2!1sfr!2sfr!4v1526303491767" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row justify-content-center text-align">
            <div class="col-md-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="lastname">Votre Nom</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Entrer votre nom">
                    </div>

                    <div class="form-group">
                        <label for="name">Votre Prénom</label>
                        <input type="text" class="form-control" name="name" placeholder="Entrer votre prénom">
                    </div>

                    <div class="form-group">
                        <label for="email">Votre Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Entrer votre email">
                    </div>

                    <div class="form-group">
                        <label for="object">Objet de la demande</label>
                        <input type="text" class="form-control" name="object" placeholder="Entrer votre demande">
                    </div>

                    <div class="form-group">
                        <label for="message">Votre Message</label>
                        <textarea type="text" class="form-control" name="lastname" placeholder="Entrer votre message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Envoyer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>






@endsection