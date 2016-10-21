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


        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Google Fonts
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>-->
        <!-- Awesome Fonts -->
        <!-- <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"> -->
        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Template Styles -->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
        <!-- Layer Slider -->
        <link rel="stylesheet" href="{{ asset('layerslider/css/layerslider.css') }}" type="text/css">

        <!-- Switcher Only -->
        <!-- <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('switcher/css/switcher.css') }}" media="all" />-->
        <!-- END Switcher Styles -->

        <!-- Demo Examples
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/orange.css') }}" title="orange" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/turquoise.css') }}" title="orange" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/yellow.css') }}" title="yellow" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/blue.css') }}" title="blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/red.css') }}" title="red" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/green.css') }}" title="green" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/brown.css') }}" title="brown" media="all" />-->
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/dark.css') }}" title="dark" media="all" />
        <!-- <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/rose.css') }}" title="rose" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/pink.css') }}" title="pink" media="all" />-->
        <!-- END Demo Examples -->

        <!-- http://www.456bereastreet.com/archive/201209/tell_css_that_javascript_is_available_asap/ -->
        <script>
            document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
        </script>

        <!-- Support for HTML5 -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Enable media queries on older browsers -->
        <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
        <![endif]-->

        <script src="{{ asset('js/modernizr.js') }}"></script>
    </head>

    <body>
        <div class="topbar clearfix">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 text-left">
                    <div class="social_buttons">
                        <!-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 social_buttons text-right">
                    Bienvenido {{ Auth::user()->name }} | {{ Auth::user()->email }}
                </div>
                <div class="col-md-offset-6 col-lg-6 col-md-6 col-sm-12 text-right social_buttons">
                    <div class="col-md-2">
                        <a href="http://cepe.com.mx/franslux/tienda" target="_blank">Tienda</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ url('/admin') }}">Administración</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ url('/logout') }}">Logout</a>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end topbar -->

        <header class="header">
            <div class="container">
                <div class="site-header clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-12 title-area pull-left">
                        <div class="site-title" id="title">
                            <a href="/" title="">
                                <img src="{{ url('images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div><!-- title area -->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse container">
                                <ul class="nav navbar-nav">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Identidad Corporativa</a>
                                    </li>
                                    <li class="{{ Request::is('politicas') ? 'active' : '' }}"><a href="/politicas">Politicas y Procedimientos</a>
                                    </li>
                                    <li class="{{ Request::is('recursoshumanos') || Request::is('recursoshumanos/recibos') || Request::is('recursoshumanos/vacaciones') ? 'active' : '' }}"><a href="/recursoshumanos">RH +</a>
                                    </li>
                                    <li class="{{ Request::is('sistemas') ? 'active' : '' }}"><a href="/sistemas">Sistemas</a>
                                    </li>
                                    <li class="{{ Request::is('comunicacion') ? 'active' : '' }}"><a href="/comunicacion">Contáctanos</a>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div><!-- title area -->
                </div><!-- site header -->
            </div><!-- end container -->
        </header><!-- end header -->
        <div id="content">
            @yield('content')
        </div>
        <footer class="footer">
            <!--<div class="container">
                <div class="widget col-lg-3 col-md-3 col-sm-12">
                    <h4 class="title">About us</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
                    <a class="button small" href="#">read more</a>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-12">
                    <h4 class="title">Recent Posts</h4>
                    <ul class="recent_posts">
                        <li>
                            <a href="#">
                                <img src="demos/01_recent_post.png" alt="" />Mockup Design PSD Template
                            </a>
                            <a class="readmore" href="#">read more</a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="demos/02_recent_post.png" alt="" />App Screen Mockup Template
                            </a>
                            <a class="readmore" href="#">read more</a>
                        </li>
                    </ul>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-12">
                    <h4 class="title">Get In Touch</h4>
                    <ul class="contact_details">
                        <li><i class="fa fa-envelope-o"></i> support@yoursite.com</li>
                        <li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
                        <li><i class="fa fa-phone-square"></i> +90 04 333 02 22</li>
                        <li><i class="fa fa-home"></i> Istanbul Universitesi Iletisim Fakultesi, Istanbul, TURKEY</li>
                        <li><a href="#"><i class="fa fa-map-marker"></i> View large map</a></li>
                    </ul>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-12">
                    <h4 class="title">Flickr Stream</h4>
                    <ul class="flickr">
                        <li><a href="#"><img alt="" src="demos/01_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/02_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/03_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/04_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/05_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/06_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/07_flickr.jpg"></a></li>
                        <li><a href="#"><img alt="" src="demos/08_flickr.jpg"></a></li>
                    </ul>
                </div>
            </div> -->

            <div class="copyrights">
                <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 columns">
                        <p>Copyright © 2016 - All right reserved.
                            <br>
                            Contacto: sistemas@franslux.com info@franslux.com +52 55763200 , Boulevard Toluca No 119 Col San Andrés Atoto, Naucalpan Edo de Mex.
                        </p>
                    </div><!-- end widget -->
                    <div class="col-lg-6 col-md-6 col-sm-12 columns text-right">
                        <div class="footer-menu right">
                            <ul class="menu">
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Identidad Coorporativa</a>
                                </li>
                                <li class="{{ Request::is('politicas') ? 'active' : '' }}"><a href="/politicas">Politicas y Procedimientos</a>
                                </li>
                                <li class="{{ Request::is('comunicacion') ? 'active' : '' }}"><a href="/comunicacion">Comunicación a la fuerza de ventas</a>
                                </li>
                                <li class="{{ Request::is('recursoshumanos') || Request::is('recursoshumanos/recibos') || Request::is('recursoshumanos/vacaciones') ? 'active' : '' }}"><a href="/recursoshumanos">RH +</a>
                                </li>
                                <li class="{{ Request::is('sistemas') ? 'active' : '' }}"><a href="/sistemas">Sistemas</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end large-6 -->
                </div><!-- end container -->
            </div><!-- end copyrights -->
        </footer><!-- end footer -->
        <div class="dmtop">Scroll to Top</div>
        <!-- /#all -->

        <!-- *** SCRIPTS TO INCLUDE ***
      <!-- Main Scripts-->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.unveilEffects.js') }}"></script>
        <script src="{{ asset('js/retina-1.1.0.js') }}"></script>
        <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
        <script src="{{ asset('js/hovermenu.js') }}"></script>
        <script src="{{ asset('js/jquery.hoverex.min.js') }}"></script>
        <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('js/jquery.jigowatt.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        <!-- LayerSlider script files -->
        <script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>
        <script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
        <script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
        <!-- Initializing the slider -->
        <script type="text/javascript">
            jQuery("#layerslider").layerSlider({
                pauseOnHover: false,
                autoPlayVideos: false,
                responsive: false,
                responsiveUnder: 1280,
                layersContainer: 1280,
                skin: 'v5',
                skinsPath: "{{ asset('layerslider/skins/')}}"
            });
        </script>

        <!--<script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#popularposts").owlCarousel({
                    items : 3,
                    lazyLoad : true,
                    navigation : false
                });
            });
        </script>-->

        <script src="{{ asset('js/jquery.animate-enhanced.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
        <script type="text/javascript">
            $('.chart').easyPieChart({
                easing: 'easeOutBounce',
                size : 200,
                animate : 2000,
                lineWidth : 10,
                lineCap : 'square',
                lineWidth : 19,
                barColor : false,
                trackColor : '#F5F5F5',
                scaleColor : false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent)+'%');
                }
            });
        </script>

        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script type="text/javascript">
            (function($) {
                "use strict";
                var $container = $('.portfolio'),
                        $items = $container.find('.portfolio-item'),
                        portfolioLayout = 'fitRows';

                if( $container.hasClass('portfolio-centered') ) {
                    portfolioLayout = 'masonry';
                }

                $container.isotope({
                    filter: '*',
                    animationEngine: 'best-available',
                    layoutMode: portfolioLayout,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                    masonry: {
                    }
                }, refreshWaypoints());

                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);
                }

                $('nav.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });

                function getColumnNumber() {
                    var winWidth = $(window).width(),
                            columnNumber = 1;

                    if (winWidth > 1200) {
                        columnNumber = 5;
                    } else if (winWidth > 950) {
                        columnNumber = 4;
                    } else if (winWidth > 600) {
                        columnNumber = 3;
                    } else if (winWidth > 400) {
                        columnNumber = 2;
                    } else if (winWidth > 250) {
                        columnNumber = 1;
                    }
                    return columnNumber;
                }

                function setColumns() {
                    var winWidth = $(window).width(),
                            columnNumber = getColumnNumber(),
                            itemWidth = Math.floor(winWidth / columnNumber);

                    $container.find('.portfolio-item').each(function() {
                        $(this).css( {
                            width : itemWidth + 'px'
                        });
                    });
                }

                function setPortfolio() {
                    setColumns();
                    $container.isotope('reLayout');
                }

                $container.imagesLoaded(function () {
                    setPortfolio();
                });

                $(window).on('resize', function () {
                    setPortfolio();
                });
            })(jQuery);
        </script>

        <script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                $(".player").mb_YTPlayer();
            });
        </script>

        <!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{{ asset('js/jquery.gmap.js') }}"></script>
        <script type="text/javascript">
            var mapMarkers = [{
                address: "Saskatoon, SK S7V 0A4 Canada",
                html: "<strong>We Are ENVATO!</strong><br>Saskatoon, SK S7V 0A4 Canada<br><br><a href='#' onclick='mapCenterAt({latitude: 52.100343, longitude: -106.551482, zoom: 16}, event)'>[+] View Original Map</a>",
                icon: {
                    image: "images/pin.png",
                    iconsize: [100, 100],
                    iconanchor: [64, 45]
                }
            }];
            var initLatitude = 52.100343;
            var initLongitude = -106.551482;
            var mapSettings = {
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 5
            };
            var map = $("#googlemaps").gMap(mapSettings);
            var mapCenterAt = function(options, e) {
                e.preventDefault();
                $("#googlemaps").gMap("centerAt", options);
            }
        </script>-->

        <!-- ADD Switcher -->
        <!--<div class="demo_changer text-center">
            <div class="demo-icon"></div>
            <div class="form_holder">
                <div class="line"></div>
                <div class="col-lg-12">
                    <p>Elige tu color favorito</p>
                    <div class="predefined_styles">
                        <a href="#" rel="turquoise" class="styleswitch"><img src="{{ asset('switcher/images/turquoise.jpg') }}" alt=""></a>
                        <a href="#" rel="orange" class="styleswitch"><img src="{{ asset('switcher/images/orange.jpg') }}" alt=""></a>
                        <a href="#" rel="yellow" class="styleswitch"><img src="{{ asset('switcher/images/yellow.jpg') }}" alt=""></a>
                        <a href="#" rel="blue" class="styleswitch"><img src="{{ asset('switcher/images/blue.jpg') }}" alt=""></a>
                        <a href="#" rel="red" class="styleswitch"><img src="{{ asset('switcher/images/red.jpg') }}" alt=""></a>
                        <a href="#" rel="green" class="styleswitch"><img src="{{ asset('switcher/images/green.jpg') }}" alt=""></a>
                        <a href="#" rel="brown" class="styleswitch"><img src="{{ asset('switcher/images/brown.jpg') }}" alt=""></a>
                        <a href="#" rel="dark" class="styleswitch"><img src="{{ asset('switcher/images/dark.jpg') }}" alt=""></a>
                        <a href="#" rel="rose" class="styleswitch"><img src="{{ asset('switcher/images/rose.jpg') }}" alt=""></a>
                        <a href="#" rel="pink" class="styleswitch"><img src="{{ asset('switcher/images/pink.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="line"></div>
                <div class="col-lg-12 clearfix">
                    <p>Elige una imagen<br>
                        (Select boxed layout)</p>
                    <div class="predefined_styles">
                        <a id="bg1"><img src="{{ asset('switcher/images/bg1.png') }}" alt="" /></a>
                        <a id="bg2"><img src="{{ asset('switcher/images/bg2.png') }}" alt="" /></a>
                        <a id="bg3"><img src="{{ asset('switcher/images/bg3.png') }}" alt="" /></a>
                        <a id="bg4"><img src="{{ asset('switcher/images/bg4.png') }}" alt="" /></a>
                        <a id="bg5"><img src="{{ asset('switcher/images/bg5.png') }}" alt="" /></a>
                    </div>

                    <div class="line"></div>

                    <p>SELECT LAYOUT</p>
                    <select class="form-control" name="forma" onchange="location = this.options[this.selectedIndex].value;">
                        <option value="">-- Select --</option>
                        <option value="index.html">Wide</option>
                        <option value="index-boxed.html">Boxed</option>
                    </select>

                    <div class="line"></div>

                    <a rel="stylesheet" class="button styleswitch" href="indexc392.html?default=true">RESET STYLE</a>

                    <div class="line"></div>

                </div>
            </div>
        </div>-->

        <!-- Demo Switcher JS -->
        <script type="text/javascript" src="{{ asset('switcher/js/fswit.js') }}"></script>
        <script type="text/javascript" src="{{ asset('switcher/js/jquery.backstretch.js') }}"></script>
        <!-- <script>
            $("#bg1").click(function(e) {
                e.preventDefault();
                $.backstretch("{{ asset('switcher/images/b1-big.png') }}");
            });

            $("#bg2").click(function(e) {
                e.preventDefault();
                $.backstretch("{{ asset('switcher/images/b2-big.png') }}");
            });

            $("#bg3").click(function(e) {
                e.preventDefault();
                $.backstretch("{{ asset('switcher/images/b3-big.png') }}");
            });
            $("#bg4").click(function(e) {
                e.preventDefault();
                $.backstretch("{{ asset('switcher/images/b4-big.png') }}");
            });
            $("#bg5").click(function(e) {
                e.preventDefault();
                $.backstretch("{{ asset('switcher/images/b5-big.png') }}");
            });
        </script>-->
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