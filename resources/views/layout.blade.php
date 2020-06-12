<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>beroepsbeeld</title>
    <link rel="stylesheet" href="/../style.css">
    <link rel="stylesheet" href="/../css/app.css">
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<h1 class="title">Portfolio Evan Verdoorn</h1>

<body>
<div class="topnav">
    <a class="{{Request::path() === 'index' ? 'active' : ''}}" href="/index">Hoofdpagina</a>
    <a class="{{Request::path() === 'dashboard' ? 'active' : ''}}" href="/dashboard">Dashboard</a>
    <a class="{{Request::path() === 'profile' ? 'active' : ''}}" href="/profile">Profielpagina</a>
    <a class="{{Request::path() === 'motivation' ? 'active' : ''}}"  href="/motivation">Mijn Motivatie</a>
    <a class="{{Request::path() === 'beroepsbeeld' ? 'active' : ''}}"  href="/beroepsbeeld">Beroepsbeeld</a>
    <a class="{{Request::path() === 'blog' ? 'active' : ''}}"  href="/blog">Blog</a>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

@yield ('content');
</body>

</html>
