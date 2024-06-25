<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws | Artikel</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/article-style.css') }}">
    
</head>
<body>
    <x-header/>

  


    <div class="container content">
        <div class="flex1">
            <div class="article">
                <h1 class="article-titel">{{ $article->title }}</h1>
                <div class="replacement-png article-item">
                    replacement png
                </div>
                <div class="article-item">
                    {{ $article->description }}
                </div>
                <div class="contenent-comments-split">
                    Reactie
                </div>
                
                <div class="col comments">
                    @auth
                    <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <div class="form-group">
                        <label for="content">Add a Comment:</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endauth

                    <h2>Comments</h2>

                    @isset($article->comments)
                        @foreach($article->comments as $comment)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comment->user->name }}</h5>
                                    <p class="card-text">{{ $comment->content }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small></p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No comments yet.</p>
                    @endisset
                    
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar-element">
                <div class="time">10:34</div>
                <div class="side-artical">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="replacement-png-small">replacement png</div>
            </div>
            <div class="sidebar-element">
                <div class="time">10:34</div>
                <div class="side-artical">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="replacement-png-small">replacement png</div>
            </div>
            <div class="sidebar-element">
                <div class="time">10:34</div>
                <div class="side-artical">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="replacement-png-small">replacement png</div>
            </div>
            <div class="sidebar-element">
                <div class="time">10:34</div>
                <div class="side-artical">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="replacement-png-small">replacement png</div>
            </div>
        </div>
    </div>
    <footer class="dark-red-bg"></footer>
</body>
</html>

<script>
    window.addEventListener('resize', setCommontWidth);
    window.addEventListener('load', setCommontWidth)
    function setCommontWidth(){
        var element = document.getElementById('foo');
        var positionInfo = element.getBoundingClientRect();
        var width = positionInfo.width;
        console.log(width);
        document.getElementById("reactie").style.width = width + "px";
    }
</script>

<script>
    if (!(window.chrome)){
        document.getElementById("reactie").rows = "3";
    }
</script>