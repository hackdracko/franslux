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

        <!-- ESTILOS DATEPICKER BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css') }}">
        <!-- ESTILOS SELEC2 BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="{{ asset('select2/css/select2.min.css') }}">
        <!-- ESTILOS SWEETALERT BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-sweetalert/css/sweetalert.css') }}">
        <link rel="shortcut icon" href="favicon.png">
    </head>

    <body>
        <div id="top">
            <div class="container">
                <div class="col-md-6 offer" data-animate="fadeInDown">
                </div>
                <div class="col-md-6" data-animate="fadeInDown">
                    <ul class="menu">
                        <li><a href="http://cepe.com.mx/franslux/tienda" target="_blank">Tienda</a>
                        </li>
                        <li><a href="{{ url('/admin') }}">Administrar Página</a>
                        </li>
                        <li><a href="{{ url('/logout') }}">Logout</a>
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
                        <img src="{{ asset('img/logo-small.png') }}" alt="Franslux" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
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
                        <li class="{{ Request::is('recursoshumanos') || Request::is('recursoshumanos/recibos') || Request::is('recursoshumanos/vacaciones') ? 'active' : '' }}"><a href="/recursoshumanos">RH +</a>
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
                                <li><a href="http://cepe.com.mx/franslux/tienda" target="_blank">Tienda</a>
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
        <!-- DATEPICKER PLUGIN -->
        <script src="{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
        <!-- SELECT2 PLUGIN -->
        <script src="{{ asset('select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('select2/js/i18n/es.js') }}"></script>
        <!-- SWEETALERT PLUGIN -->
        <script src="{{ asset('bootstrap-sweetalert/js/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script type="text/javascript">
            $('.calendario').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                autoclose: true
            });
            var token = $("#_token").val();
        </script>
        @yield('javascript')

    </body>
</html>