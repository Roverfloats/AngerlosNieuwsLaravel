<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws Article</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/article-style.css') }}">
    
</head>
<body>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    @csrf
    <script>
        var javascriptVariable = 3;

        $.ajax({
            url: "/convert-variable",
            type: "POST",
            data: {
                javascript_variable: javascriptVariable,
                _token: $('input[name="_token"]').val()
            },
            success: function(response) {
                var phpVariable = response.php_variable;
                $('#hier_komt_iets').append(phpVariable);
                // Now you can use phpVariable in your Blade template
            }
        });
    </script> -->

    <x-header/>

    <div class="container content">
        <div class="flex1">
            <div class="article">
                <h1 class="article-titel">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                <div class="replacement-png article-item">
                    replacement png
                </div>
                <div class="article-item">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet viverra quam, id eleifend dolor. Maecenas ullamcorper nibh nulla, sed molestie tortor auctor at. Sed blandit a ex eu dapibus. Phasellus vitae sem condimentum, finibus dui quis, euismod est. Nullam dapibus augue mauris, ac dapibus ante efficitur vel. Vivamus eget lobortis lorem. Quisque ut arcu facilisis ipsum sollicitudin convallis. Suspendisse rutrum, lorem quis venenatis viverra, mi urna maximus lectus, sit amet aliquam metus lorem vitae arcu. Vivamus placerat malesuada euismod. Donec quis mi dolor. Sed sit amet libero a magna gravida placerat dictum a dolor. Curabitur blandit id ipsum rutrum sollicitudin. Ut augue est, elementum eget dapibus in, pellentesque ut neque. Aliquam in scelerisque est. Morbi at lorem dignissim mauris feugiat auctor eget mattis tellus.
                    <hr>
                    Nunc aliquam at tellus non varius. Aenean tempor, nisi hendrerit malesuada tempus, neque diam lacinia est, eget ornare elit sem sit amet tortor. Aenean efficitur velit scelerisque justo interdum ultrices. Phasellus vel gravida tellus, sit amet rutrum sapien. Mauris maximus metus ac porta pulvinar. Nulla id congue arcu. In maximus turpis quis lorem tincidunt pretium. Phasellus et fringilla risus. Maecenas aliquam velit ut sapien facilisis mattis. Curabitur eu libero imperdiet, molestie lectus eu, convallis orci. In fermentum, felis varius lobortis congue, massa erat bibendum eros, sed auctor nisl ex ut enim. Praesent vel velit tristique, sagittis nibh ultricies, hendrerit arcu.
                </div>
                <div class="replacement-png article-item">
                    replacement png
                </div>
                <div class="article-item">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet viverra quam, id eleifend dolor. Maecenas ullamcorper nibh nulla, sed molestie tortor auctor at. Sed blandit a ex eu dapibus. Phasellus vitae sem condimentum, finibus dui quis, euismod est. Nullam dapibus augue mauris, ac dapibus ante efficitur vel. Vivamus eget lobortis lorem. Quisque ut arcu facilisis ipsum sollicitudin convallis. Suspendisse rutrum, lorem quis venenatis viverra, mi urna maximus lectus, sit amet aliquam metus lorem vitae arcu. Vivamus placerat malesuada euismod. Donec quis mi dolor. Sed sit amet libero a magna gravida placerat dictum a dolor. Curabitur blandit id ipsum rutrum sollicitudin. Ut augue est, elementum eget dapibus in, pellentesque ut neque. Aliquam in scelerisque est. Morbi at lorem dignissim mauris feugiat auctor eget mattis tellus.
                    <hr>
                    Nunc aliquam at tellus non varius. Aenean tempor, nisi hendrerit malesuada tempus, neque diam lacinia est, eget ornare elit sem sit amet tortor. Aenean efficitur velit scelerisque justo interdum ultrices. Phasellus vel gravida tellus, sit amet rutrum sapien. Mauris maximus metus ac porta pulvinar. Nulla id congue arcu. In maximus turpis quis lorem tincidunt pretium. Phasellus et fringilla risus. Maecenas aliquam velit ut sapien facilisis mattis. Curabitur eu libero imperdiet, molestie lectus eu, convallis orci. In fermentum, felis varius lobortis congue, massa erat bibendum eros, sed auctor nisl ex ut enim. Praesent vel velit tristique, sagittis nibh ultricies, hendrerit arcu.
                </div>
                <div class="contenent-comments-split">
                    comments
                </div>
                <div class="col comments">
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
            @foreach($articles as $article)
                <div class="sidebar-element">
                    <div class="time">10:34</div>
                    <div class="side-artical">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <div class="replacement-png-small">replacement png</div>
                    <!-- <h3>{{ $article->title }}</h3>
                    <p>{{ $article->content }}</p> -->
                </div>
            @endforeach
            
        </div>
    </div>
    <footer class="dark-red-bg"></footer>
        

</body>
</html>


