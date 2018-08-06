@extends('layout')
@section('title', 'Home')
@section('content')
<style>
    .addthis_default_style .addthis_separator, .addthis_default_style .at4-icon, .addthis_default_style .at300b, .addthis_default_style .at300bo, .addthis_default_style .at300bs, .addthis_default_style .at300m {
        float: inherit !important;
    }
</style>
<div class="jumbotron text-center">
    <div class="row my-5">
        <div class="col">
            <h1>Isaac Alejandro López Castrejón</h1> 
            <p>WEBMASTER<br/>
            <small>Programador Web Semi Senior</small></p>
            <div class="text-center">
                <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c506a39072e1d6"></script>
                <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_follow_toolbox"></div>
            </div>
        </div>
    </div>
</div>
<!-- Container (About Section) -->
<div id="biografia" class="container-fluid my-5">
    <div class="row my-5">
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

@stop