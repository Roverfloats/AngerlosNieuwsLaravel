<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header-style.css') }}">
</head>

<body>
    <header class="red-bg container normal-header">
        <a class="site-titel" href="/">
            Angerlo's Nieuws
        </a>
        <div class="flex1"></div>
        <nav class="container">
            <a class="nav-element" href="{{ route('article-admin') }}">
                Artikel Beheer
            </a>
            <a class="nav-element" href="{{ route('archive') }}">
                Krant Beheer
            </a>
            <a class="nav-element" href="#">
                Agenda Beheer
            </a>
            <a class="nav-element" href="#">
                Blog & Vlogs Beheer
            </a>
            <a class="nav-element" href="{{ route('home') }}">
                Terug naar site
            </a>
        </nav>
    </header>
</body>

</html>
