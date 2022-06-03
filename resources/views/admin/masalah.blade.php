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
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    
	<link href="css/templatemo-style.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">adsasd</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <style>
                .box{
                    width: 1000px;
                  
                }
            </style>        
                                        <center>
                                            <div class="box">
                                              <div class="card" style="border:none">
                                                <div class="accordion-body">
                                                    <div class="row g-0">
                                                        <div class="col-md-4" style="text-align: left">
                                                          <img src="{{ asset('images/download.png') }}" class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                          <div class="card-body">
                                                            <div class="card-header" style="text-align: left">asdas</div><br>
                                                            <div class="card-header" style="text-align: left">asdas</div><br>
                                                            <div class="card-header" style="text-align: left">asdas</div><br>
                                                          </div>
                                                        </div>
                                                      </div>
            
                                                      <nav class="navbar navbar-expand-md navbar-light bg-white" style="float: left">
                                                        <div class="container">
                                                            <a class="navbar-brand" href="{{ url('/') }}">
                                                            </a>
                                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                                <span class="navbar-toggler-icon"></span>
                                                            </button>
                                            
                                                            <div class="collapse navbar-collapse" id="menu">
                                                                <!-- Left Side Of Navbar -->
                                                                <ul class="navbar-nav me-auto">
                                            
                                                                </ul>
                                            
                                                                <!-- Right Side Of Navbar -->
                                                                <ul class="navbar-nav ms-auto">
                                                                    <li class="nav-item dropdown">
                                                                        <a style="float: left" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                           bina
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                            <a class="dropdown-item" href="{{ url('bina') }}">
                                                                                bina
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a style="float: left" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                           Permasalahan
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                            <a class="dropdown-item" href="{{ url('permasalahan') }}">
                                                                                Permasalahan
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a style="float: left" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                           habsdahbsd
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                            <a class="dropdown-item" href="{{ url('home') }}">
                                                                                asdasdasda
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a style="float: left" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                           habsdahbsd
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                            <a class="dropdown-item" href="{{ url('home') }}">
                                                                                asdasdasda
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </nav>
            
                                                    <main class="py-4">
                                                        @yield('content')
                                                    </main>
            
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
        </main>
        
    </div>
</body>
</html>
