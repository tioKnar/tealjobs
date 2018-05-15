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
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-laravel">
  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    
                    <ul class="navbar-nav">
                        
                        @guest

                        <li class="nav-item" style="width: 100px">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>

                        <li class="nav-item" style="width: 100px">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        
                        <li class="nav-item" style="width: 120px">
                            <a class="navbar-brand" href="/"><img src="img/logo.png" style="width: 120px; height: 60px"></a>
                        </li>

                        <li class="nav-item" style="width: 100px">
                            <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                        </li>

                        <li class="nav-item" style="width: 100px">
                            <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                        </li>

                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    
                    </ul>
            
                </div>
            
            </nav>
        

        <main>
            @yield('content')
        </main>

        <footer>
            
            <div class="row align-items-center text-center">
                <div class="col">
                    <a href="" class="footerlink">Contactez nous</a><br>

                    <a href=""><img class="logofooter" src="img/facebook.png"></a>
                    <a href=""><img class="logofooter" src="img/twitter.png"></a>
                    <a href=""><img class="logofooter" src="img/instagram.png"></a>
                    <a href=""><img class="logofooter" src="img/linkedin.png"></a>
                    <a href=""><img class="logofooter" src="img/googleplus.png"></a><br>

                    <a href="" class="footerlink">Mentions légales</a>
                </div>
            </div>

        </footer>

    </div>
</body>
</html>
