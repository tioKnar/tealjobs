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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Kaushan+Script|Lato" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

            <div class="container">

                <a class="navbar-brand" href="/"><img src="images/logo.png"></a>
  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        
                    @guest
                    
                    <ul class="navbar-nav">

                        <li class="nav-item linknavbar">
                            <a class="nav-link nav-lien" href="/">Accueil</a>
                        </li>

                        <li class="nav-item linknavbar">
                            <a class="nav-link nav-lien" href="#" id="register" data-toggle="modal" data-target="#modalregister">Inscription</a>
                        </li>
                        @include('modal.inscription')

                        <li class="nav-item linknavbar" id="connect">
                            <a class="nav-link nav-lien" href="#" data-toggle="modal" data-target="#modalconnect">Connexion</a>
                        </li>
                        @include('modal.connexion')

                    </ul>

                    @else

                    <ul class="navbar-nav">

                        <li class="nav-item linknavbar">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>

                        <li class="nav-item linknavbar">
                            <a class="nav-link" href="historychart">Historique</a>
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

        <footer class="footer-distributed">

            <div class="footer-right">

                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.github.com"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">

                <p class="footer-links">

                    <a href="contact">Contact </a>
                    / 
                    <a href="partners"> Partenaires </a>
                    / 
                    <a href="legalnotice"> Mentions légales</a>
                </p>

                <p>Company TealJobs &copy; 2018</p>
            </div>

        </footer>

    </div>

</body>

<script>

    $(function(){
        @if($errors->first('connectfail'))
            @if($errors->has('email') || $errors->has('password'))
                    $('#modalconnect').modal('show');
            @endif
        @else
            @if($errors->has('email') || $errors->has('password') || $errors->has('firstname') || $errors->has('lastname') )
                    $('#modalregister').modal('show');
            @endif
        @endif
    });
    
</script>

</html>

