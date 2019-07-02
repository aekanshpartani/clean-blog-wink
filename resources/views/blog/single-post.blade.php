<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ env('WEBSITE_TITLE') }} - {{ env('WEBSITE_TAGLINE') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">

    <style>
        .embedded_image > img{
            max-width: 100%;
        }
    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            {!! $menu !!}
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('https://picsum.photos/1900/1267/?blur')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{$post->title}}</h1>
                    <h2 class="subheading">{{$post->excerpt}}</h2>
                    <span class="meta">Posted by {{$post->author->name}}
            on {{date("F d, Y", strtotime($post->publish_date))}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $post->body !!}
            </div>
        </div>
    </div>
</article>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item">
                                        <a href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                                        </a>
                                    </li>
                                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/clean-blog.js') }}"></script>

<script>
    $(document).ready(function(){
        $(".masthead").css("background-image", "url('https://source.unsplash.com/random/1900x1267/?city,night')");
    });
</script>

</body>

</html>
