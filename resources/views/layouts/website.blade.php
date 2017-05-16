<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Onze eigen CSS voor de website -->
    <link rel="stylesheet" href="{{ asset('css/website_style.css') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Load the title & meta description. -->
    @include('partials.meta-tags')

    <!-- Bootstrap settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/slider-script.js') }}"></script>
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slider_style.css') }}" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script>
        $(document).ready(function() {
            $("body").tooltip({ selector: '[data-toggle=tooltip]' });
        });
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    &#9776;
                </button>
                <a class="nav-logo" href="/">
                    <img src="{{ asset('images/logo.svg') }}">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/nieuws') }}">nieuws</a>
                    </li>
                    <li>
                        <a href="{{ url('/winkel') }}">winkel</a>
                    </li>
                    <li>
                        <a href="{{ url('vriend-worden') }} ">vriend worden</a>
                    </li>
                    <li>
                        <a href="{{ url('agenda') }}">agenda</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/werkplaats') }}">werkplaats <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('werkplaats-overzicht')}}">Reserveer</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="{{ url('educatie') }}">educatie
                            @if(count($educationItems) > 0)
                                <span class="caret"></span>
                            @endif
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($educationItems as $educationItem)
                            <li><a href="{{ url('educatie/'.$educationItem->id) }}">{!! $educationItem->title !!}</a></li>
                            @endforeach
                        </ul>

                    </li>

                    <li>
                        <a href="{{ url('/sponsors') }}">sponsoren</a>
                    </li>
                    <li>
                        <a href="{{ url('/over') }}">over ons</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">contact</a>
                    </li>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Inloggen</a></li>
                        <li><a href="{{ route('register') }}">Registreer</a></li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Ingelogd als {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                @if(Auth::user()->isAdmin())
                                    <li>
                                        <a target="_blank" href="{{ url('cms/startpagina') }}">cms</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route ('mijn-reserveringen') }}">mijn reserveringen</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Uitloggen
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 contact-footer">
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
            </div>
            <div class="col-sm-4">
                <h3>Volg ons</h3>
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
                <h3>Sponsoren</h3>
                <span><a href="{{ url('vacatures') }}">Vacatures</a></span>
            </div>
        </div>
    </div>
    <div class="copyright-statement text-center">
        <p>Copyright © 2017-20<?php echo date("y") ?> Grafisch Atelier Den Bosch. Versie 0.3</p>
    </div>
</footer>
</body>
</html>