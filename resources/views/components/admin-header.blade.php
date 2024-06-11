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
            <a class="nav-element" href="#">
                Artikel Beheer
            </a>
            <a class="nav-element" href="#">
                Krant Beheer
            </a>
            <a class="nav-element" href="#">
                Agenda Beheer
            </a>
            <a class="nav-element" href="#">
                Blog & Vlogs Beheer
            </a>
            <a class="nav-element" href="/">
                Terug naar site
            </a>
        </nav>
    </header>

    <header class="red-bg dropdown-header">
        <a class="site-titel" href="/">
            Angerlo's Nieuws
        </a>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">Artikel Beheer</a>
                <a href="#">Krant Beheer</a>
                <a href="#">Agenda Beheer</a>
                <a href="#">Blog & Vlogs Beheer</a>
                <a href="#">Terug naar site</a>
            </div>
        </div>
    </header>
</body>

</html>
