<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws | Artikel Beheer</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/general-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/article-admin-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/css/all.css') }}">
</head>

<body>
    <x-admin-header />

    <div class="container content-article-admin">
        <div class="spacer">
            <P>Politie, brandweer en overheid artikelen</P>
            <div class="article-list-and-search-container">
                <div class="article-search-container">
                    <input placeholder="Artikel Zoeken..." class="article-search" type="text">
                </div>
                <div class="article-list">
                    {{-- Loop here: --}}
                    <div class="article-item">
                        <p class="article-item-time">10:00</p>
                        <p class="article-item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <div class="article-item-buttons-container">
                            <button class="button-icon"><i class="fa-regular fa-star"></i></i></button>
                            {{-- on click: highlight item, UNLESS there are 4 highlights already --}}
                            <button class="button-icon"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer">
            <p>Overige artikelen</p>
            <div class="article-list-and-search-container">
                <div class="article-search-container">
                    <input placeholder="Artikel Zoeken..." class="article-search" type="text">
                </div>
                <div class="article-list">
                    {{-- Loop here: --}}
                    <div class="article-item">
                        <p class="article-item-time">10:00</p>
                        <p class="article-item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <div class="article-item-buttons-container">
                            <button class="button-icon"><i class="fa-regular fa-star"></i></i></button>
                            {{-- on click: highlight item, UNLESS there are 4 highlights already --}}
                            <button class="button-icon"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="spacer">
            <p>Uitgelicht</p>
            <div class="article-list-and-search-container">
                <div class="article-search-container">
                    <input placeholder="Artikel Zoeken..." class="article-search" type="text">
                </div>
                <div class="article-list col-50">
                    {{-- Loop here: --}}
                    <div class="article-item">
                        <p class="article-item-time">10:00</p>
                        <p class="article-item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <div class="article-item-buttons-container">
                            <button class="button-icon"><i class="fa-solid fa-star"></i></button>
                            {{-- on click: remove highlight from item --}}
                            <button class="button-icon"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-50">
                <p><br></p>
                <p style="height: 10%">Actueel Nieuws</p>
                <textarea maxlength="100" class="relevent-input" placeholder="..." name="" id=""></textarea>
                <div class="relevent-buttons-container">
                    <button class="relevent-submit">Post</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
