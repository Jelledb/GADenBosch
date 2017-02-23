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