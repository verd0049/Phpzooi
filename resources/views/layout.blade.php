<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>beroepsbeeld</title>
    <link rel="stylesheet" href="/../style.css">
    <link rel="stylesheet" href="/../css/app.css">
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
</div>

@yield ('content');
</body>

</html>
