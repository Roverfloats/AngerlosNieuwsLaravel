<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article editor</title>
</head>

<body>

    <!-- TODO Add the correct styling to the overview -->
    @foreach ($articles as $item)
        <div class="article-container">
            <p> ID:</p>
            <h1>{{$item->id}}</h1>
            <!-- <p> Title:</p> -->
            <!-- <h1>{{$item->title}}</h1> -->
            <p> Featured:</p>

            <h1 class="featured">{{$item->featured == '1' ? "yes" : "no"}}</h1>
            <!-- <h1>{{$item->img}}</h1> -->
            <!-- <h1>{{$item->description}}</h1> -->

            <a href="{{ route('deleteArticle', ['id' => $item->id]) }}">delete</a>

            <form>
                <button>Edit</button>
            </form>
        </div>
        <style>
            .article-container {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                margin: 10px;
                padding: 10px;
                border: 1px solid black;
            }
        </style>
    @endforeach
    <script>
//TODO Delete this code snippet
        const isfeatured = document.getElementById('featured').value;

        if (isfeatured == 1) {
            document.getElementById('featured').innerHTML = "Yes";
        } else {
            document.getElementById('featured').innerHTML = "No";
            console.log('test');
        }


    </script>
</body>

</html>