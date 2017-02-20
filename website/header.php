<html>
<head>
    <!-- Onze eigen CSS voor de website -->
    <link rel="stylesheet" href="website_style.css">

    <!-- Bootstrap CSS voor makkelijke responsiveness -->
    <!-- build:css -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- endbuild -->

    <!-- Font Awesome voor iconen -->
    <!-- build:fa -->
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <!-- endbuild -->

    <!-- Bootstrap settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script>
        function toggleNavigation() {

        }
    </script>
</head>
<body>
<nav>
    <div class="nav-logo">
        <a href="/">
            <img src="assets/logo.svg">
        </a>
    </div>
    <div class="nav-elements">
        <ul id="nav-list">
            <li><a href="">home</a></li>
            <li><a href="">nieuws</a></li>
            <li><a href="">over</a></li>
            <li><a href="">werkplaats</a></li>
            <li><a href="">contact</a></li>
            <li class="icon visible-md-block visible-lg-block">
                <a href="javascript:void(0);" onclick="toggleNavigation()">&#9776;</a>
            </li>
        </ul>
    </div>
</nav>
