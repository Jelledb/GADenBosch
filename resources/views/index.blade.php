@extends('layouts.website')

@section('content')
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
    <p>Deze website is echt vet</p>
    <p>Deze website is echt vet</p>
    <p><?php echo "Even een bewijs dat PHP werkt!" ?></p>
</div>
@endsection