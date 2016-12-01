@extends('layouts.app')

@section('meta')
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   

    <title>Qruzh</title>  

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    {{ Html::style('template/vendor/bootstrap/css/bootstrap.css') }}
    {{ Html::style('template/vendor/font-awesome/css/font-awesome.css') }}
    {{ Html::style('template/vendor/simple-line-icons/css/simple-line-icons.css') }}
    {{ Html::style('template/vendor/owl.carousel/assets/owl.carousel.min.css') }}
    {{ Html::style('template/vendor/owl.carousel/assets/owl.theme.default.min.css') }}
    {{ Html::style('template/vendor/magnific-popup/magnific-popup.css') }}

    <!-- Theme CSS -->
    {{ Html::style('template/css/theme.css') }}
    {{ Html::style('template/css/theme-elements.css') }}
    {{ Html::style('template/css/theme-blog.css') }}
    {{ Html::style('template/css/theme-shop.css') }}
    {{ Html::style('template/css/theme-animate.css') }}

    <!-- Current Page CSS -->
    {{ Html::style('template/vendor/rs-plugin/css/settings.css') }}
    {{ Html::style('template/vendor/rs-plugin/css/layers.css') }}
    {{ Html::style('template/vendor/rs-plugin/css/navigation.css') }}
    {{ Html::style('template/vendor/circle-flip-slideshow/css/component.css') }}

    <!-- Skin CSS -->
    {{ Html::style('template/css/skins/default.css') }}

    <!-- Theme Custom CSS -->
    {{ Html::style('template/css/custom.css') }}

    <!-- Head Libs -->
    {{ Html::script('template/vendor/modernizr/modernizr.js') }}
@endsection

@section('header')
    <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                {{ Html::image('template/img/logo.png', '', array('width' => '141', 'height' => '74', 'data-sticky-width' => '82', 'data-sticky-height' => '40', 'data-sticky-top' => '33')) }}
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-search hidden-xs">
                                <form id="searchForm" action="page-search-results.html" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="Buscar..." required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="hidden-xs">
                                        <a href="{{ url('/login') }}"><i class="fa fa-angle-right"></i> Ingresa</a>
                                    </li>
                                    <li class="hidden-xs">
                                        <a href="{{ url('/register') }}"><i class="fa fa-angle-right"></i> Registrate</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-row">
                            <div class="header-nav">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="header-social-icons social-icons hidden-xs">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                    <nav>
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li @if(Session::get('button') == 1) class="active" @endif>
                                                <a href="{{ url('/') }}">
                                                    Inicio
                                                </a>
                                            </li>
                                            <li @if(Session::get('button') == 2) class="active" @endif>
                                                <a href="{{ url('/setting') }}">
                                                    Nosotros
                                                </a>
                                            </li>
                                            <li @if(Session::get('button') == 3) class="active" @endif>
                                                <a href="{{ url('/product') }}">
                                                    Productos
                                                </a>
                                            </li>
                                            <li @if(Session::get('button') == 4) class="active" @endif>
                                                <a href="{{ url('/wholesale') }}">
                                                    Mayoreo
                                                </a>
                                            </li>
                                            <li @if(Session::get('button') == 5) class="active" @endif>
                                                <a href="{{ url('/branch') }}">
                                                    Sucursales
                                                </a>
                                            </li>
                                            <li @if(Session::get('button') == 6) class="active" @endif>
                                                <a href="{{ url('/message') }}">
                                                    Contáctanos
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
                                                <a class="dropdown-toggle" href="page-login.html">
                                                    <i class="fa fa-shopping-cart"></i> Carro (1) - $299
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="dropdown-mega-content">
                                                            <table class="cart">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="product-thumbnail">
                                                                            <a href="shop-product-sidebar.html">
                                                                                <img width="100" height="100" alt="" class="img-responsive" src="img/products/product-1.jpg">
                                                                            </a>
                                                                        </td>
                                                                        <td class="product-name">
                                                                            <a href="shop-product-sidebar.html">Photo Camera
                                                                            <br>
                                                                            <span class="amount"><strong>$299</strong></span></a>
                                                                        </td>
                                                                        <td class="product-actions">
                                                                            <a title="Remove this item" class="remove" href="#">
                                                                                <i class="fa fa-times"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="actions" colspan="6">
                                                                            <div class="actions-continue">
                                                                                <button type="submit" class="btn btn-default">View All</button>
                                                                                <button type="submit" class="btn pull-right btn-primary">Proceed to Checkout <i class="fa fa-angle-right ml-xs"></i></button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="slider-container rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
            <ul>
                <li data-transition="fade">
                        {{ Html::image('template/img/slider1.jpg') }}

                        <div class="tp-caption top-label"
                        data-x="600"
                        data-y="180"
                        data-start="500"
                        data-transform_in="y:[-300%];opacity:0;s:500;"><em>Consigue todo para tu celular</em>
                    </div>

                    <div class="tp-caption main-label"
                        style="color: #FF7C0C;"
                        data-x="600"
                        data-y="210"
                        data-start="1500"
                        data-whitespace="nowrap"                         
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-mask_in="x:0px;y:0px;"><em>y mucho más...</em>
                    </div>

                    <div class="tp-caption bottom-label"
                        data-x="220"
                        data-y="280"
                        data-start="2000"
                        data-transform_in="y:[100%];opacity:0;s:500;">
                    </div>

                    <div class="tp-caption"
                        data-x="right" data-hoffset="0"
                        data-y="bottom" data-voffset="0"
                        data-start="1800"
                        data-transform_in="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;s:500;"><img src="img/slides/mobile-device.png" alt="">
                    </div>
                </li>
                <li data-transition="fade">
                        {{ Html::image('template/img/slider3.jpg') }}

                    <div class="tp-caption top-label"
                        style="color: #FF7C0C; font-weight: bolder;"
                        data-x="40"
                        data-y="180"
                        data-start="500"
                        data-transform_in="y:[-300%];opacity:0;s:500;">¡Estamos al alcance
                    </div>

                    <div class="tp-caption main-label"
                        style="color: #000000;"
                        data-x="40"
                        data-y="210"
                        data-start="1500"
                        data-whitespace="nowrap"                         
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-mask_in="x:0px;y:0px;">de tu mano!
                    </div>

                    <div class="tp-caption bottom-label"
                        data-x="220"
                        data-y="280"
                        data-start="2000"
                        data-transform_in="y:[100%];opacity:0;s:500;"> 
                    </div>

                    <div class="tp-caption"
                        data-x="right" data-hoffset="0"
                        data-y="bottom" data-voffset="0"
                        data-start="1800"
                        data-transform_in="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;s:500;"><img src="img/slides/mobile-device.png" alt=""></div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <hr class="tall">
        </div>
    </div>

    <div class="row center4">
        <div class="col-md-12">
            <h2 class="pt-sm"><strong class="semi-bold">DESTACADOS</strong></h2>
            <h4>Nuestros productos más solicitados</h4>
        </div>
    </div>

    <div role="main" class="main shop">

        <div class="container">

            <div class="row">
                <ul class="products product-thumb-info-list" data-plugin-masonry>
                    <li class="col-md-3 col-sm-6 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-cart.html" class="add-to-cart-product">
                                <span><i class="fa fa-shopping-cart"></i> Agregar al Carro</span>
                            </a>
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>Ver</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalles</em>
                                        </span>
                                    </span>
                                    {{ Html::image('template/img/products/product-1.jpg', '', array('class' => 'img-responsive')) }}
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Photo Camera</h4>
                                    <span class="price">
                                        <ins><span class="amount">$299</span></ins>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-cart.html" class="add-to-cart-product">
                                <span><i class="fa fa-shopping-cart"></i> Agregar al Carro</span>
                            </a>
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>Ver</em>
                                        </span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalles</em>
                                        </span>
                                    </span>
                                    {{ Html::image('template/img/products/product-2.jpg', '', array('class' => 'img-responsive')) }}
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Golf Bag</h4>
                                    <span class="price">
                                        <span class="amount">$72</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-cart.html" class="add-to-cart-product">
                                <span><i class="fa fa-shopping-cart"></i> Agregar al Carro</span>
                            </a>
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>Ver</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalles</em></span>
                                    </span>
                                    {{ Html::image('template/img/products/product-3.jpg', '', array('class' => 'img-responsive')) }}
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Workout</h4>
                                    <span class="price">
                                        <span class="amount">$60</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 product">
                        <span class="product-thumb-info">
                            <a href="shop-cart.html" class="add-to-cart-product">
                                <span><i class="fa fa-shopping-cart"></i> Agregar al carro</span>
                            </a>
                            <a href="shop-product-sidebar.html">
                                <span class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <span class="product-thumb-info-act-left"><em>Ver</em></span>
                                        <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalles</em></span>
                                    </span>
                                    {{ Html::image('template/img/products/product-4.jpg', '', array('class' => 'img-responsive')) }}
                                </span>
                            </a>
                            <span class="product-thumb-info-content">
                                <a href="shop-product-sidebar.html">
                                    <h4>Luxury bag</h4>
                                    <span class="price">
                                        <span class="amount">$199</span>
                                    </span>
                                </a>
                            </span>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <hr class="tall">
                </div>
            </div>
        </div>
    </div>
             

    <section class="parallax section section-text-light section-parallax section-center" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-none"><strong>Estamos localizados</strong></h1>
                    <h4 class="lead">en todo el territorio Mexicano</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-md-12">
            <hr class="tall">
        </div>
    </div>

    <div class="row center4">
        <div class="col-md-12">
            <h2 class="pt-sm"><strong class="semi-bold">ENVIOS</strong></h2>
            <h4>Trabajamos con las siguientes empresas de envios</h4>
        </div>
    </div>


    <div class="home-concept">
        <div class="container"> 
            <div class="row center">
                <div class="col-md-6 col-md-offset-6">
                    <div class="project-image">
                        <div id="fcSlideshow" class="fc-slideshow">
                            <ul class="fc-slides">
                                <li>{{ Html::image('template/img/projects/project-home-1.jpg', '', array('class' => 'img-responsive')) }}</li>
                                <li>{{ Html::image('template/img/projects/project-home-2.jpg', '', array('class' => 'img-responsive')) }}</li>
                            </ul>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    
@endsection

@section('footer')   
    <footer id="footer" class="color color-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="newsletter">
                        <h4>Noticias</h4>
                        <p>Mantente actualizado en todo lo relacionado <br> a nuestros productos.</p>
            
                        <div class="alert alert-success hidden" id="newsletterSuccess">
                            <strong>Éxito!</strong> Has sido agregado a nuestra lista de correos electrónicos.
                        </div>
            
                        <div class="alert alert-danger hidden" id="newsletterError"></div>
                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                            <div class="input-group">
                                <input class="form-control" placeholder="Correo Electrónico" name="newsletterEmail" id="newsletterEmail" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="enviar">Ir!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-details">
                        <h4>Menú</h4>
                        <ul class="contact">
                            <a href="#"><li><p><strong>Inicio</strong></p></li></a>
                            <a href="#"><li><p><strong>Nosotros</strong></p></li></a>
                            <a href="#"><li><p><strong>Productos</strong></p></li></a>
                            <a href="#"><li><p><strong>Mayoreo</strong></p></li></a>
                            <a href="#"><li><p><strong>Sucursales</strong></p></li></a>
                            <a href="#"><li><p><strong>Contáctanos</strong></p></li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Siguenos</h4>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Aceptamos</h4>
                    <ul class="contact">
                        <li><a href="#" target="_blank">{{ Html::image('template/img/visa.png') }}</i></a></li>
                        <li><a href="#" target="_blank">{{ Html::image('template/img/mastercard.png') }}</i></a></li>
                        <li><a href="#" target="_blank">{{ Html::image('template/img/paypal.png') }}</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p>© {{ date('Y') }} MOBILEPHONE. Todos los derechos reservados.</p>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul>
                                <li>Powered by</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-1">
                        <nav id="sub-menu">
                            <a href="#" class="logo">
                                {{ Html::image('template/img/logo-footer.png') }}
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>               
@endsection

@section('js')
    <!-- Vendor -->
    {{ Html::script('template/vendor/jquery/jquery.js') }}
    {{ Html::script('template/vendor/jquery.appear/jquery.appear.js') }}
    {{ Html::script('template/vendor/jquery.easing/jquery.easing.js') }}
    {{ Html::script('template/vendor/jquery-cookie/jquery-cookie.js') }}
    {{ Html::script('template/vendor/bootstrap/js/bootstrap.js') }}
    {{ Html::script('template/vendor/common/common.js') }}
    {{ Html::script('template/vendor/jquery.validation/jquery.validation.js') }}
    {{ Html::script('template/vendor/jquery.stellar/jquery.stellar.js') }}
    {{ Html::script('template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}
    {{ Html::script('template/vendor/jquery.gmap/jquery.gmap.js') }}
    {{ Html::script('template/vendor/jquery.lazyload/jquery.lazyload.js') }}
    {{ Html::script('template/vendor/isotope/jquery.isotope.js') }}
    {{ Html::script('template/vendor/owl.carousel/owl.carousel.js') }}
    {{ Html::script('template/vendor/magnific-popup/jquery.magnific-popup.js') }}
    {{ Html::script('template/vendor/vide/vide.js') }}
        
    <!-- Theme Base, Components and Settings -->
    {{ Html::script('template/js/theme.js') }}
        
    <!-- Current Page Vendor and Views -->
    {{ Html::script('template/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}
    {{ Html::script('template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
    {{ Html::script('template/vendor/circle-flip-slideshow/js/jquery.flipshow.js') }}
    {{ Html::script('template/js/views/view.home.js') }}
        
    <!-- Theme Custom -->
    {{ Html::script('template/js/custom.js') }}
        
    <!-- Theme Initialization Files -->
    {{ Html::script('template/js/theme.init.js') }}

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-12345678-1', 'auto');
         ga('send', 'pageview');
    </script>
        -->
@endsection
