<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('/') }}/img/ico/icon.ico" rel="shortcut icon">
        <meta name="description" content="Isaac Alejandro López Castrejón">
        <meta name="keywords" content="Isaac Alejandro López Castrejón">
        <title>@yield('title') :: Isaac Alejandro López Castrejón</title>
        <!--Seguimiento Google AdSense-->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2451124035234387",
            enable_page_level_ads: true
          });
        </script>
        <!--Seguimiento Google AdSense-->
        <!--jQuery-->
        <script src="{{ url('/') }}/jquery/jquery.v3.2.1.min.js"></script>
        <!--jQuery-->
        <!--jQuery TOP-->
        <script src="{{ url('/') }}/jquery/scrollTo-2.1.2/jquery.scrollTo.min.js"></script>
        <script type="text/javascript">
            jQuery(function( $ ){
                    $('a.nav-link').click(function(){
                        var href = $(this).attr('href');
                        $.scrollTo(href, {duration:1500} );
                    });
            });
	</script>
        <!--jQuery TOP-->
        <!--Normalize-->
        <link rel="stylesheet" href="{{ url('/') }}/normalize/normalize.css">
        <!--Normalize-->
        <!--Tether-->
        <link rel="stylesheet" href="{{ url('/') }}/tether-1.3.3/css/tether.min.css">
        <script src="{{ url('/') }}/tether-1.3.3/js/tether.min.js"></script>
        <!--Tether-->
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ url('/') }}/glyphicons/css/glyphicons.css">
        <link rel="stylesheet" href="{{ url('/') }}/bootstrap/bootstrap-4.0.0-alpha/css/bootstrap.min.css">
        <script src="{{ url('/') }}/bootstrap/bootstrap-4.0.0-alpha/js/bootstrap.min.js"></script>
        <!--Bootstrap-->
        <!--Scroll Top-->
        <link rel="stylesheet" href="{{ url('/') }}/scrolltop/css/scroll.top.css">
        <script src="{{ url('/') }}/scrolltop/js/scroll.top.js"></script>
        <!--Scroll Top-->
        <!--Animate-->
        <!--<link rel="stylesheet" href="{{ url('/') }}/animate/animate.css">-->
        <!--Animate-->
        <!--Sweet Alert 2-->
        <link rel="stylesheet" href="{{ url('/') }}/sweetalert2/css/sweetalert2.min.css">
        <script src="{{ url('/') }}/sweetalert2/js/sweetalert2.all.min.js"></script>
        <!--Sweet Alert 2-->
        <!--input-custom-->
        <link rel="stylesheet" href="{{ url('/') }}/input-custom/css/input-custom.css">
        <script src="{{ url('/') }}/input-custom/js/input-custom.js"></script>
        <!--input-custom-->
        <!--Fuente Raleway-->
        <link rel="stylesheet" href="{{ url('/') }}/Raleway/Raleway.css">
        <!--Fuente Raleway-->
        <!--Estilos-->
        <!--<link href="{{ url('/') }}/company/css/estilos.css" rel="stylesheet" type="text/css">-->
        <!--Estilos-->
        <!--JavaScript-->
        <!--<script src="{{ url('/') }}/company/js/script.base.js"></script>-->
        <!--JavaScript-->
        <script>
            var path = {!! json_encode(url('/')) !!};
        </script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}/inicio">Logo</a>
            <div class="collapse navbar-collapse" id="navbarCollapse" aria-expanded="false">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#biografia">BIOGRAFÍA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#conocimientos">CONOCIMIIENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#curriculum">CURRICULUM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trabajos">TRABAJOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
<!--        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
        </footer>-->
        <!--Snowfall-->
        <script src="{{ url('/') }}/snowfall/js/snowfall.jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
            var dia = new Date().getDate();
            var mes = new Date().getMonth();
            if(mes == 10 && dia >= 15)
            {
                navidad();
            }
            else if(mes > 10)
            {
                navidad();
            }
            
            function navidad()
            {
                $(document).snowfall({flakeCount:20,flakeColor:'#ffffff',minSize:3,maxSize:8,round:true,shadow:true});
            }
        });
        </script>
        <!--Snowfall-->
    </body>
</html>