<?php require 'cmsHeader.blade.php';?>

<div class="menu">
    <div class="row">
        <div class="col-md-2">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <div id="sidebar" class="well sidebar-nav">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Startpagina</a></li>
                </ul>
                <h5><i class="glyphicon"></i>
                    <!--<small><b>MANAGEMENT</b></small>-->
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Tentoonstellingen</a></li>
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
        <div class="col-md-10">
            <!-- Content Here -->
        </div>
    </div>
</div>

</body>
</html>
<!-- Hiertussen zit een conflict. -->
<?php
require 'header.blade.php'
?>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="../../public/js/jquery.bxslider.min.js"></script>
<script src="../../public/js/jquery.easing.1.3.js"></script>
<!-- bxSlider CSS file -->
<link rel="stylesheet" type="text/css" href="../../public/css/slider_style.css" />

<script type="text/javascript">
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            mode: 'horizontal',
            useCSS: false,
            infiniteLoop: true,
            hideControlOnEnd: false,
            easing: 'easeOutBack',
            speed: 1000
        });
    });
</script>
<div class="container">
    <div class="slider">
        <ul class="bxslider">
            <li><img src="../assets/images/hp_home1.jpg" title="foto 1"/></li>
            <li><img src="../assets/images/hp_home2.jpg" title="foto 2"/></li>
            <li><img src="../assets/images/hp_home5.jpg" title="foto 3"/></li>
            <li><img src="../assets/images/hp_werkplaatsfoto web 4.jpg" title="foto 4"/></li>
        </ul>
    </div>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p><?php echo "Even een bewijs dat PHP werkt!" ?></p>
</div>

<?php
require 'footer.blade.php'
?>
