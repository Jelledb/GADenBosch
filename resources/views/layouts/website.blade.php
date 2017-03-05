<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Onze eigen CSS voor de website -->
    <link rel="stylesheet" href="website_style.css">
    <!-- Onze eigen CSS voor CMS website -->
    <link rel="stylesheet" href="../../public/css/_style.css" type="text/css">

    <!-- Font Awesome voor iconen -->
    <!-- build:fa -->
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <!-- endbuild -->

    <!-- Bootstrap settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="../../archief-website/javascript/jquery.bxslider.min.js"></script>
    <script src="../../archief-website/javascript/jquery.easing.1.3.js"></script>
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" type="text/css" href="../../archief-website/slider_style.css" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <nav>
        <div class="nav-logo">
            <a href="/">
                <img src="../assets/images/logo.svg">
            </a>
        </div>
        <div class="nav-elements">
            <ul id="nav-list">
                <li>
                    <a href="">home</a>
                </li>
                <li>
                    <a href="">nieuws</a>
                    <div class="splitter"></div>
                </li>
                <li>
                    <a href="">nieuws</a>
                    <div class="splitter"></div>
                </li>
                <li>
                    <a href="">over ons</a>
                    <div class="splitter"></div>
                </li>
                <li>
                    <a href="">werkplaats</a>
                    <div class="splitter"></div>
                </li>
                <li>
                    <a href="">contact</a>
                    <div class="splitter"></div>
                </li>
                <li class="icon hidden-sm hidden-lg hidden-md">
                    <a href="javascript:void(0);" onclick="toggleNavigation()">&#9776;</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p>Hier moet nog een sponsor komen</p>
            </div>
            <div class="col-sm-4 contact-footer text-center">
                <h3>Contact</h3>
                <div class="contact-details">
                    <div>
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-data">
                            <span>Boschveldweg 471A</span><br/>
                            <span>5211VK, 's-Hertogenbosch</span>
                        </div>
                    </div>
                    <div>
                        <div class="contact-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div>
                            <a href="mailto:info@gadenbosch.nl">info@gadenbosch.nl</a>
                        </div>
                    </div>
                    <div>
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div>
                            <a href="tel:+31736134277">073 613 4277</a>
                        </div>
                    </div>
                </div>
                <div class="social-media-channels">
                    <a href="" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/grafischatelier.denbosch/" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <p>Hier moet ook een sponsor komen</p>
            </div>
        </div>
    </div>
    <div class="copyright-statement text-center">
        <p>Copyright © 20<?php echo date("y") ?> Grafisch Atelier Den Bosch</p>
    </div>
</footer>
</body>
</html>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
