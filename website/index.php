<?php
    require 'header.php'
?>

    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="javascript/jquery.bxslider.min.js"></script>
    <script src="javascript/jquery.easing.1.3.js"></script>
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" type="text/css" href="slider_style.css" />

    <script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                mode: 'horizontal',
                useCSS: false,
                infiniteLoop: false,
                hideControlOnEnd: true,
                easing: 'easeOutBack',
                speed: 1000
            });
        });
    </script>

<div class="container">
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <div class="slider">
        <ul class="bxslider">
            <li><img src="Images/hp_home1.jpg" title="foto 1"/></li>
            <li><img src="Images/hp_home2.jpg" title="foto 2"/></li>
            <li><img src="Images/hp_home5.jpg" title="foto 3"/></li>
            <li><img src="Images/hp_werkplaatsfoto web 4.jpg" title="foto 4"/></li>
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
    <p><?php echo "Even een bewijs dat PHP werkt!" ?></p>
</div>



<?php
    require 'footer.php'
?>