<?php 
// TODO Uncomment this when users exist
// session_start();

// if ($role != 'admin') {

//     return view('index');
// } 
?>

<!DOCTYPE html>
<html lang="nl">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpel Formulier</title>
    <link rel="stylesheet" href="/">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/article-upload.css') }}">

</head>

<body>
    <div class="form-container">

        <h2>Vul het formulier in</h2>
        <form action="{{route('createArticle')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="featured">Featured:</label>
                <input type="checkbox" id="featured" name="featured">
            </div>
            <div class="form-group">
                <label for="description">Beschrijving:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Afbeelding:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <button type="submit">Versturen</button>
        </form>
 
    </div>
</body>

</html>