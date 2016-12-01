@section('meta_source')
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

@section('js_source')
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