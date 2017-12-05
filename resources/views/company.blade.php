<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Isaac Alejandro López Castrejón">
        <meta name="keywords" content="Isaac Alejandro López Castrejón">
        <link href="img/ico.ico" rel="shortcut icon">
        <title>Isaac Alejandro López Castrejó</title>
        <!--jQuery-->
        <script src="{{ url('/') }}/jquery/jquery.v3.1.1.min.js"></script>
        <!--jQuery-->
        <!--Normalize-->
        <link rel="stylesheet" href="{{ url('/') }}/normalize/normalize.css">
        <!--Normalize-->
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ url('/') }}/bootstrap/bootstrap-3.3.7/css/bootstrap.min.css">
        <script src="{{ url('/') }}/bootstrap/bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <!--Bootstrap-->
        <!--Animate-->
        <link rel="stylesheet" href="{{ url('/') }}/animate/animate.css">
        <!--Animate-->
        <!--Sweet Alert 2-->
        <link rel="stylesheet" href="{{ url('/') }}/sweetalert2/css/sweetalert2.min.css">
        <script src="{{ url('/') }}/sweetalert2/js/sweetalert2.all.min.js"></script>
        <!--Sweet Alert 2-->
        <!--input-custom-->
        <link rel="stylesheet" href="{{ url('/') }}/input-custom/css/input-custom.css">
        <script src="{{ url('/') }}/input-custom/js/input-custom.js"></script>
        <!--input-custom-->
        <!--Fonts-->
        <link href="{{ url('/') }}/company/css/Montserrat.css" rel="stylesheet" type="text/css">
        <link href="{{ url('/') }}/company/css/Lato.css" rel="stylesheet" type="text/css">
        <!--Fonts-->
        <!--Estilos-->
        <link href="{{ url('/') }}/company/css/estilos.css" rel="stylesheet" type="text/css">
        <!--Estilos-->
        <!--JavaScript-->
        <script src="{{ url('/') }}/company/js/script.base.js"></script>
        <!--JavaScript-->
        <script>
            var path = {!! json_encode(url('/')) !!};
            //alert(path);
        </script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#myPage">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#services">SERVICES</a></li>
                        <li><a href="#portfolio">PORTFOLIO</a></li>
                        <li><a href="#pricing">PRICING</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron text-center">
            <h1>Isaac Alejandro López Castrejón</h1> 
            <p>WEBMASTER<br/>
            <small>Programador Semi Senior</small></p>
            <div class="text-center">
                <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c506a39072e1d6"></script>
                <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_follow_toolbox"></div>
            </div>
            <!--<form>
                <div class="input-group">
                    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Subscribe</button>
                    </div>
                </div>
            </form>-->
        </div>
        <!-- Container (About Section) -->
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>About Company Page</h2><br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br><button class="btn btn-default btn-lg">Get in Touch</button>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo slideanim"></span>
                </div>
                <div class="col-sm-8">
                    <h2>Our Values</h2><br>
                    <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <!-- Container (Services Section) -->
        <div id="services" class="container-fluid text-center">
            <h2>SERVICES</h2>
            <h4>What we offer</h4>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-off logo-small"></span>
                    <h4>POWER</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-heart logo-small"></span>
                    <h4>LOVE</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-lock logo-small"></span>
                    <h4>JOB DONE</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
            <br><br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-leaf logo-small"></span>
                    <h4>GREEN</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-certificate logo-small"></span>
                    <h4>CERTIFIED</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench logo-small"></span>
                    <h4 style="color:#303030;">HARD WORK</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
        </div>
        <!-- Container (Portfolio Section) -->
        <div id="portfolio" class="container-fluid text-center bg-grey">
            <h2>Portfolio</h2><br>
            <h4>What we have created</h4>
            <div class="row text-center slideanim">
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <img src="{{ url('/') }}/company/img/paris.jpg" alt="Paris" width="400" height="300">
                          <p><strong>Paris</strong></p>
                          <p>Yes, we built Paris</p>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <img src="{{ url('/') }}/company/img/newyork.jpg" alt="New York" width="400" height="300">
                          <p><strong>New York</strong></p>
                          <p>We built New York</p>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <img src="{{ url('/') }}/company/img/sanfran.jpg" alt="San Francisco" width="400" height="300">
                          <p><strong>San Francisco</strong></p>
                          <p>Yes, San Fran is ours</p>
                      </div>
                  </div>
            </div><br>
            <h2>What our customers say</h2>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
                    </div>
                    <div class="item">
                        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
                    </div>
                    <div class="item">
                        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Container (Pricing Section) -->
        <div id="pricing" class="container-fluid">
            <div class="text-center">
                <h2>Pricing</h2>
                <h4>Choose a payment plan that works for you</h4>
            </div>
            <div class="row slideanim">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>20</strong> Lorem</p>
                            <p><strong>15</strong> Ipsum</p>
                            <p><strong>5</strong> Dolor</p>
                            <p><strong>2</strong> Sit</p>
                            <p><strong>Endless</strong> Amet</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$19</h3>
                            <h4>per month</h4>
                            <button class="btn btn-lg">Sign Up</button>
                        </div>
                    </div>      
                </div>     
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                        <h1>Pro</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>50</strong> Lorem</p>
                            <p><strong>25</strong> Ipsum</p>
                            <p><strong>10</strong> Dolor</p>
                            <p><strong>5</strong> Sit</p>
                            <p><strong>Endless</strong> Amet</p>
                        </div>
                        <div class="panel-footer">
                          <h3>$29</h3>
                            <h4>per month</h4>
                            <button class="btn btn-lg">Sign Up</button>
                        </div>
                    </div>      
                </div>       
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Premium</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>100</strong> Lorem</p>
                            <p><strong>50</strong> Ipsum</p>
                            <p><strong>25</strong> Dolor</p>
                            <p><strong>10</strong> Sit</p>
                            <p><strong>Endless</strong> Amet</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$49</h3>
                            <h4>per month</h4>
                            <button class="btn btn-lg">Sign Up</button>
                        </div>
                    </div>      
                </div>    
            </div>
        </div>
        <!-- Container (Contact Section) -->
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Google Maps -->
        <div id="googleMap" style="height:400px;width:100%;"></div>
        <script>
            function myMap() {
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({position:myCenter});
            marker.setMap(map);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
        <!--
        To use this code on your website, get a free API key from Google.
        Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
        -->
        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
        </footer>
        <!--Snowfall-->
        <script src="../snowfall/js/snowfall.jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
            var dia = new Date().getDate();
            var mes = new Date().getMonth();
            if(mes = 10 && dia >= 15)
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