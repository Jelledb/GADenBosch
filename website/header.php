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
<body >
<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="navbar-header ">
            <a class="navbar-brand">Grafisch Atelier</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="nieuws.php">Nieuws</a>
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
