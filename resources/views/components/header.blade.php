<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header-style.css') }}">
</head>
<body>
    <header class="red-bg container desktop">
        <a class="site-titel"  href="/">
        Angerlo's Nieuws
        </a>
        <div class="flex1"></div>
        <nav class="container">
        <a class="nav-element" href="./archive.html">
            De krant
        </a>
        <a class="nav-element">
            Aanlevering
        </a>
        <a class="nav-element"> <!-- maak een dropdown -->
            An-agenda
        </a>
        <a class="nav-element">
            Blog & Vlogs
        </a>
        <a class="nav-element">
            Contact
        </a>
        <a class="nav-element">
            Login
        </a>

        </nav>
    </header>

    <header class="red-bg phone">
        <a class="site-titel" href="/">
        Angerlo's Nieuws
        </a>
        <div class="dropdown">
        <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <nav class="col dropdown-content">
            <a class="nav-element" href="./archive.html">
            De krant
            </a>
            <a class="nav-element">
            Aanlevering
            </a>
            <a class="nav-element"> <!-- maak een dropdown -->
            An-agenda
            </a>
            <a class="nav-element">
            Blog & Vlogs
            </a>
            <a class="nav-element">
            Contact
            </a>
            <a class="nav-element">
            Login
            </a>
        </nav>
        </div>
    </header>
</body>
</html>