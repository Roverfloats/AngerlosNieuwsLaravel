<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws Archive</title>
    <link rel="stylesheet" href="./css/general-style.css">
    <link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/archive-style.css">
</head>
<body>
    <header class="red-bg container desktop">
        <a class="site-titel" href="../index.html">
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
        <a class="site-titel" href="../index.html">
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

    <div class="container content-archive">
        <div class="wrap">
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2050
                </h3>
            </div>
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2050
                </h3>
            </div>
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2050
                </h3>
            </div>
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2050
                </h3>
            </div>
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2069
                </h3>
            </div>
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2050
                </h3>
            </div>
            <div class="col item-archive">
                <div class="news-paper-archive">

                </div>
                <h3 class="center-text">
                    maart 2050
                </h3>
            </div>
        </div>
    </div>

    <script>
      function updateColumnGap() {
        const container = document.querySelector('.wrap');
        const containerWidth = container.clientWidth;
        const itemWidth = 315;
        const minGap = 20;
        const itemsPerRow = Math.floor(containerWidth / (itemWidth + minGap));
        const totalItemsWidth = itemsPerRow * itemWidth;
        const remainingSpace = containerWidth - totalItemsWidth;
        const newGap = remainingSpace / (itemsPerRow - 1);
        container.style.columnGap = `${Math.max(newGap, minGap)}px`;
      }
  
      window.addEventListener('resize', updateColumnGap);
      document.addEventListener('DOMContentLoaded', updateColumnGap);
    </script>
</body>
</html>