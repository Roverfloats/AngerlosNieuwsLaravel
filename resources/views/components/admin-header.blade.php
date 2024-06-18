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
            <a class="nav-element" style="cursor: not-allowed" title="deze functie werkt nog niet." href="#">
                Artikel Beheer
            </a>
            <a class="nav-element" style="cursor: not-allowed" title="deze functie werkt nog niet."
                href="{{ route('archive') }}">
                Krant Beheer
            </a>
            <a class="nav-element" style="cursor: not-allowed" title="deze functie werkt nog niet." href="#">
                Agenda Beheer
            </a>
            <a class="nav-element" style="cursor: not-allowed" title="deze functie werkt nog niet." href="#">
                Blog & Vlogs Beheer
            </a>
            <a class="nav-element" href="{{ route('home') }}">
                Terug naar site
            </a>
        </nav>
    </header>
</body>

</html>