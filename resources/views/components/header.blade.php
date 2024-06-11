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
            <a class="nav-element" href="./archive.html">
                De krant
            </a>
            <a class="nav-element" href="./article-admin.html">
                Aanlevering
            </a>
            <a class="nav-element" href="#">
                Agenda
            </a>
            <a class="nav-element" href="#">
                Blog & Vlogs
            </a>
            <a class="nav-element" href="#">
                Contact
            </a>
            <a class="nav-element" href="#">
                Login
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
                <a href="./archive.html">De krant</a>
                <a href="#">Aanlevering</a>
                <a href="#">An-agenda</a>
                <a href="#">Blog & Vlogs</a>
                <a href="#">Contact</a>
                <a href="#">Login</a>
            </div>
        </div>
    </header>
</body>

</html>
