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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js" defer></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js" defer></script>
    <script src="{{ asset('js/editor.js') }}" defer></script>
    <script src="{{ asset('js/tooltip.js') }}" defer></script>
    <!-- bxSlider Javascript file -->

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
                    <li><a href="{{ url('cms/fotos-slider') }}">Foto's slider Hoofdpagina</a></li>
                </ul>
                <h5><i class="glyphicon"></i>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ url('cms/lijsttentoonstellingen') }}">Tentoonstellingen</a></li>
                    <li><a href="{{ url('cms/news') }}">Nieuws</a></li>

                    <li><a href="{{ url('cms/educatie') }}">Educatie</a></li>
                    <li><a href="{{ url('cms/Shop') }}">Shop</a></li>
                    <li><a href="{{ url('cms/sponsors')}}">Sponsoren</a></li>
                    <li><a href="{{ url('cms/informatie') }}">Informatie</a></li>
                    <li><a href="{{ url('cms/vriend-worden') }}">Vriend Worden</a></li>
                    <li><a href="{{ url('cms/contact') }}">Contact</a></>
                    <li><a href="{{ url('cms/vacature') }}">Vacature</a></li>
                    <li><a href="{{ url('cms/titel-beschrijving') }}">Titel en beschrijvingen</a></li>
                    <li><a href="{{ url('cms/orders') }}">Orders</a></li>
                </ul>
                <h5><i class="glyphicon"></i>
                </h5>

            </div>
        </div>
        <div class="col-md-8 ">

            <!-- Content Here -->
            @yield('content')
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>