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
                    <textarea id="reactie" name="reactie" class="reactie" rows="1" cols="" placeholder="voeg reactie toe"></textarea>

                    <div id="foo">
                        <button class="button-reactie">
                            Done
                        </button>
                    </div>
                    <div class="commment">
                        <div class="profile-data container">
                            <div class="user-profile-pic">
                                <!-- replacement png -->
                            </div>
                            <div class="user-name">
                                naam
                            </div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et laoreet felis. Donec ornare, urna non accumsan hendrerit, tortor sapien maximus dolor, eu efficitur enim diam id ligula. Vivamus lobortis feugiat vulputate. In enim sapien, lobortis sed facilisis et, tempor porttitor metus. Aliquam gravida varius semper. Praesent vitae turpis nunc. Aenean scelerisque ornare odio, nec tempor neque. Phasellus ex sem, placerat eget tristique id, pulvinar ut elit. Vivamus interdum efficitur vehicula.
                            Praesent fringilla odio a volutpat vestibulum. Nulla rhoncus sagittis ultricies. Aliquam turpis nisl, interdum non felis venenatis, aliquet aliquet tortor. Aliquam scelerisque pulvinar tortor, ut placerat elit auctor ut. Proin luctus diam vitae arcu posuere, in
                        </div>
                    </div>

                    <div class="commment">
                        <div class="profile-data container">
                            <div class="user-profile-pic">
                                <!-- replacement png -->
                            </div>
                            <div class="user-name">
                                naam
                            </div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et laoreet felis. Donec ornare, urna non accumsan hendrerit, tortor sapien maximus dolor, eu efficitur enim diam id ligula. Vivamus lobortis feugiat vulputate. In enim sapien, lobortis sed facilisis et, tempor porttitor metus. Aliquam gravida varius semper. Praesent vitae turpis nunc. Aenean scelerisque ornare odio, nec tempor neque. Phasellus ex sem, placerat eget tristique id, pulvinar ut elit. Vivamus interdum efficitur vehicula.
                            Praesent fringilla odio a volutpat vestibulum. Nulla rhoncus sagittis ultricies. Aliquam turpis nisl, interdum non felis venenatis, aliquet aliquet tortor. Aliquam scelerisque pulvinar tortor, ut placerat elit auctor ut. Proin luctus diam vitae arcu posuere, in
                        </div>
                    </div>
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