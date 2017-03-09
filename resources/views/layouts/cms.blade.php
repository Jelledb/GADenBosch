<!DOCTYPE html>
<html>
<head>
    <!-- Onze eigen CSS voor het CMS -->
    <link rel="stylesheet" href="{{ asset('css/cms_style.css') }}">

    <!-- Bootstrap CSS -->

    <!-- Font Awesome -->

    <!-- Bootstrap CSS voor makkelijke responsiveness -->
    <!-- build:css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- endbuild -->

    <!-- Font Awesome voor iconen -->
    <!-- build:fa -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- endbuild -->

    <!-- Bootstrap settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<header class="headers">
    <div class="row">
        <div class="col-md-2">
            <h2 class="titel">Grafisch Atelier</h2>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <h3 class="cmsName">CMS</h3>
        </div>
        <div class="col-md-8 "></div>
        <div class="col-md-2"></div>
    </div>

</header>
<div class="menu">
    <div class="row">
        <div class="col-md-2 padding-right">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <div id="sidebar" class="well sidebar-nav">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="cms/startpagina">Startpagina</a></li>
                </ul>
                <h5><i class="glyphicon"></i>
                    <!--<small><b>MANAGEMENT</b></small>-->
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Tentoonstellingen </a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">Nieuws</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Educatie</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">'Bedank'-pagina's</a></li>
                    <li><a href="#">Informatie</a></li>
                </ul>
                <h5><i class="glyphicon "></i>
                    <!--<small><b>USERS</b></small>-->
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Hoofdmenu</a></li>
                    <li><a href="#">Foto's homepage</a></li>
                    <li><a href="#">Footer</a></li>
                </ul>
                <h5><i class="glyphicon"></i>

                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Nieuwsbrieven</a></li>
                    <li><a href="#">Profielen</a></li>
                    <li><a href="#">Logbestanden</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 ">

            <!-- Content Here -->
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>