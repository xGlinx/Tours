<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top maine-menu">
        <div class="container">
            <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item"> <a class="nav-link" href="{{url('')}}">Inicio</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{url('tours')}}" tabindex="-1" aria-disabled="true">Tours</a></li>
                        
                    @if (Route::has('login'))                    
                                @auth
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                </li>
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" tabindex="-1">Iniciar Sesion</a> </li>

                                @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" tabindex="-1">Registrarse</a> </li>
                                @endif
                                @endauth
                        @endif
                    </ul>
            </div>
        </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>


    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}" ></script>
    <script src="{{ asset('js/popper.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" ></script>

</body>
</html>
