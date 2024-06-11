<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws | Artikel Beheer</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/general-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/article-editor-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/css/all.css') }}">
</head>

<body>
    <x-admin-header />

    <div class="container content-article-admin">
        <div class="spacer">
            <div class="article-list">
                <input placeholder="Artikel Zoeken..." class="article-search" type="text">
                {{-- <x-small-article> --}}
            </div>
        </div>
        <div class="spacer">
            <div class="article-list">
                <input placeholder="Artikel Zoeken..." class="article-search" type="text">
                {{-- <x-small-article> --}}
            </div>
        </div>
        <div class="spacer">
            <div class="row-50 featured-margin">
                <div class="article-list featured">
                    {{-- Loop here: --}}
                    <div class="article-item">
                        <p>10:00</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <button class="button-icon"><i class="fa-solid fa-star"></i></button>
                        <button class="button-icon"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
            </div>
            <div class="row-50">
                <p style="height: 10%">Actueel Nieuws</p>
                <textarea maxlength="100" class="relevent-input" name="" id=""></textarea>
                <div class="relevent-buttons-container">
                    <button class="relevent-submit">Post</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
