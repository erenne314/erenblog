<!DOCTYPE html>
<html lang=tr>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Gostil Sanat')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('front/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('front/')}}/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="homepage.blade.php">Gostil Sanat</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <br class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Yazılar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Saksılar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">Tuvaller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">İletişim</a>
                </li>
            </ul>

           <br> <ul id="topMenu" class="nav pull-right">

                @auth
                    <li class=""><a href="{{route('logout')}}">Logout</a></li>
                @endauth

                @guest
                    <li class=""><a href="{{route('login')}}">Login</a></li>
                    <li class=""><a href="{{route('register')}}">Register</a></li>
                @endguest

        </ul></br>

        </div>
    </div>
</nav>

<header class="masthead" style="background-image: url('{{asset('front/')}}/img/home-bg2.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Gostil Sanat</h1>
                    <span class="subheading"> <h3>her türlü halı kilim travel<h3/> </span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">

    </div>
</div>
