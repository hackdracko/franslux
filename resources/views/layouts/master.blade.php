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
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li><a href="register.html">Register</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Login">Customer login</h4>
                        </div>
                        <div class="modal-body">
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email-modal" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-modal" placeholder="password">
                                </div>

                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </p>

                            </form>

                            <p class="text-center text-muted">Not registered yet?</p>
                            <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand home" href="/" data-animate-hover="bounce">
                        <img src="{{ asset('img/logo.png') }}" alt="Obaju logo" class="hidden-xs">
                        <img src="{{ asset('img/logo-small.png') }}" alt="Franslux" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle search</span>
                            <i class="fa fa-search"></i>
                        </button>
                        <a class="btn btn-default navbar-toggle" href="basket.html">
                            <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                        </a>
                    </div>
                </div>
                <!--/.navbar-header -->

                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Identidad Coorporativa</a>
                        </li>
                        <li class="{{ Request::is('politicas') ? 'active' : '' }}"><a href="/politicas">Politicas y Procedimientos</a>
                        </li>
                        <li class="{{ Request::is('comunicacion') ? 'active' : '' }}"><a href="/comunicacion">Comunicación a la fuerza de ventas</a>
                        </li>
                        <li class="{{ Request::is('recursoshumanos') || Request::is('recursoshumanos/recibos') || Request::is('recursoshumanos/vacaciones') ? 'active' : '' }}"><a href="/recursoshumanos">R H</a>
                        </li>
                    </ul>

                </div>
                <!--/.nav-collapse -->

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
            <!-- /#content -->
            <div id="footer" data-animate="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-9">
                            <h4>Franslux</h4>

                            <ul>
                                <li><a href="/">Identidad Coorporativa</a>
                                </li>
                                <li><a href="/politicas">Políticas y Procedimientos</a>
                                </li>
                                <li><a href="/comunicacion">Comunicacion a la Fuerza de Ventas</a>
                                </li>
                                <li><a href="/recursoshumanos">Recursos Humanos</a>
                                </li>
                            </ul>
                            <hr class="hidden-md hidden-lg hidden-sm">

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <h4>Contacto</h4>

                            <p><strong>Obaju Ltd.</strong>
                                <br>13/25 New Avenue
                                <br>New Heaven
                                <br>45Y 73J
                                <br>England
                                <br>
                                <strong>Great Britain</strong>
                            </p>

                            <a href="contact.html">Go to contact page</a>

                            <hr class="hidden-md hidden-lg">

                        </div>
                        <!-- /.col-md-3 -->

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->
            </div>
            <!-- /#footer -->
            <div id="copyright">
                <div class="container">
                    <div class="col-md-6">
                        <p class="pull-left">© 2016 Franslux</p>

                    </div>
                    <div class="col-md-6">
                        <p class="pull-right">Template by <a href="http://www.bootstrapious.com">Responsive Templates</a> with support from <a href="http://kakusei.cz">Designové předměty</a>
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