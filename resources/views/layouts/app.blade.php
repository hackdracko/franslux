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



    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <!-- Layer Slider -->
    <link rel="stylesheet" href="{{ asset('layerslider/css/layerslider.css') }}" type="text/css">

    <!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('switcher/css/switcher.css') }}" media="all" />
    <!-- END Switcher Styles -->

    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/orange.css') }}" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/turquoise.css') }}" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/yellow.css') }}" title="yellow" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/blue.css') }}" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/red.css') }}" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/green.css') }}" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/brown.css') }}" title="brown" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/dark.css') }}" title="dark" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/rose.css') }}" title="rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/pink.css') }}" title="pink" media="all" />
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
        <div class="col-lg-6 col-md-6 col-sm-12 text-left">
            <div class="social_buttons">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end topbar -->

<header class="header">
    <div class="container">
        <div class="site-header clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 title-area text-center">
                <div class="site-title" id="title">
                    <a href="/" title="">
                        <img src="{{ url('images/logo.png') }}" alt="">
                    </a>
                </div>
            </div><!-- title area -->
        </div><!-- site header -->
    </div><!-- end container -->
</header><!-- end header -->
<div id="content">
    @yield('content')
</div>
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

<script src="{{ asset('js/jquery.animate-enhanced.min.js') }}"></script>
<script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
<!-- ADD Switcher -->
<div class="demo_changer text-center">
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
        <!--<div class="col-lg-12 clearfix">
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

                </div>-->
    </div><!-- END Switcher -->
</div>

<!-- Demo Switcher JS -->
<script type="text/javascript" src="{{ asset('switcher/js/fswit.js') }}"></script>
<script type="text/javascript" src="{{ asset('switcher/js/jquery.backstretch.js') }}"></script>
<script>
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
</script>
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

</body>
</html>