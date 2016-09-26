<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Franslux">
    <meta name="author" content="Hackdracko">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Franslux
    </title>

    <meta name="keywords" content="">

    <!-- styles -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <link rel="shortcut icon" href="favicon.png">
</head>

<body>
<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="{{ url('/login') }}">Login</a>
                </li>
                <li><a href="{{ url('/register') }}">Registro</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="/" data-animate-hover="bounce">
                <img src="{{ asset('img/logo.png') }}" alt="Obaju logo" class="hidden-xs">
                <img src="{{ asset('img/logo-small.png') }}" alt="Franslux" class="visible-xs"><span class="sr-only">Franslux</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>
        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<div id="all">

    <div id="content">
        @yield('content')
    </div>
    <!-- /#footer -->
    <div id="copyright">
        <div class="container">
            <div class="col-md-6">
                <p class="pull-left">© 2016 Franslux</p>

            </div>
            <div class="col-md-6">
                <p class="pull-right">Support from <a href="http://ian.jeegox.com">Hackdracko</a>
                    <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                </p>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END *** -->
</div>
<!-- /#all -->

<!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->
<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/front.js') }}"></script>
</body>
</html>