<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Kaushan+Script|Lato" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

            <div class="container">

                <a class="navbar-brand" href="/"><img src="img/logo.png"></a>
  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        
                    @guest
                    
                    <ul class="navbar-nav">

                        <li class="nav-item linknavbar">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>

                        <li class="nav-item linknavbar">
                            <a class="nav-link" href="#" id="register" data-toggle="modal" data-target="#modalregister">Inscription</a>
                        </li>
                        @include('modal.inscription')

                        <li class="nav-item linknavbar" id="connect">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalconnect">Connexion</a>
                        </li>
                        @include('modal.connexion')

                    </ul>

                    @else

                    <ul class="navbar-nav">

                        <li class="nav-item linknavbar">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>

                        <li class="nav-item linknavbar">
                            <a class="nav-link" href="{{ route('register') }}">Historique</a>
                        </li>

                        <li class="nav-item dropdown linknavbar">
                                
                            <a class="nav-link" href="#"  
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Déconnexion
                                    
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>

                        </li>

                    </ul>

                        @endguest
            
                    </div>
                
                </div>

            </nav>
        
        <main>
            @yield('content')
        </main>

        <footer>
            
            <div class="container-fluid">

                <div class="row align-items-center text-center">

                    <div class="col">

                        <a href="contact" class="footerlink">Contactez nous</a><br>

                        <a href=""><img class="logofooter" src="img/facebook.png"></a>
                        <a href=""><img class="logofooter" src="img/twitter.png"></a>
                        <a href=""><img class="logofooter" src="img/instagram.png"></a>
                        <a href=""><img class="logofooter" src="img/linkedin.png"></a>
                        <a href=""><img class="logofooter" src="img/googleplus.png"></a><br>

                        <a href="" class="footerlink">Mentions légales</a>

                    </div>

                </div>

            </div>

        </footer>

    </div>

</body>

<script>
    $(function(){

        @if($errors->has('email') || $errors->has('password'))

                $('#modalconnect').modal('show');

        @endif

        @if($errors->has('email') || $errors->has('password') || $errors->has('firstname') || $errors->has('lastname') )

                $('#modalregister').modal('show');

        @endif

    });
</script>

</html>

