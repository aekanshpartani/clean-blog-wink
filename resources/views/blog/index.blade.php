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
        .post-img{
            width: 100%;
        }
        .post-preview{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            padding: 16px;
            border: 1px solid beige;
            border-radius: 5px; /* 5px rounded corners */
            margin: 10px;
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
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{ env('APP_NAME') }}</h1>
                    <span class="subheading">{{ env('WEBSITE_TAGLINE') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="col-md-12">

        <div class="row">
            @foreach($posts as $post)
                <div class="post-preview col-md-5">
                    <img src="{{sampleImageIfNull($post->featured_image)}}" alt="" class="post-img">
                    <a href="{{route('single-post', [$post->slug])}}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$post->excerpt}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by {{$post->author->name}}
                        on {{dateFormatter($post->publish_date)}}</p>
                </div>
                <hr>
          @endforeach
        <!-- Pager -->
            <div class="clearfix">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg- col-md-10 mx-auto">
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
                <p class="copyright text-muted">Copyright &copy; {{ env('WEBSITE_COPYRIGHT_TEXT') }}</p>
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
        $(".masthead").css("background-image", "url('https://images.unsplash.com/uploads/1413259835094dcdeb9d3/6e609595?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1900&q=1267')");
        //$(".post-img").attr('src','https://images.unsplash.com/photo-1526749837599-b4eba9fd855e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=600');
    });

</script>

</body>

</html>
