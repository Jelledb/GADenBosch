@extends('layouts.website')

@section('content')
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


<div class="container ">
    <h2 class="col-md-offset-2">Werkplaats</h2>
    <br><br>
    <div class="slider">
        <ul class="bxslider">
            <li><img src="{{asset('images/wp1.jpg')}}" title="foto 1"/></li>
        <!--<li><img src="{{asset('images/wp2.jpg')}}" title="foto 2"/></li>
            <li><img src="{{asset('images/wp3.jpg')}}" title="foto 3"/></li>-->
        </ul>
    </div>

    <br><br>

    <div class="row">
        <div class="col-md-4 col-md-offset-2">

            <p><strong>Welkom in de mooiste grafiekwerkplaats van Nederland!</strong><br><br>

                Het Grafisch Atelier biedt kunstenaars, vormgevers en creatieven een goed geoutilleerde werkplaats
                met deskundige ondersteuning en een omgeving om te experimenteren. In het GA wordt zoveel mogelijk
                gewerkt met non-toxic materialen.
                <br><br>
                <strong>Aan de slag</strong><br>
                Reserveer van te voren een werkplek. Dit kan telefonisch, via de email of middels de agenda die in
                de werkplaats ligt. Kun je niet komen? Meld je dan af. Anders zijn wij genoodzaakt kosten in
                rekening te brengen voor de tijd dat je de werkplek hebt gereserveerd.
                <br><br>
                <strong>Voor het eerst aan de slag in het GA?</strong><br>
                Je bent verplicht een introductie te volgen. Als je in het GA een cursus hebt gevolgd in de techniek
                waarin je aan de slag gaat, dan staat dit gelijk aan een introductie.
                <br><br>
                <strong>Zeefdruk</strong><br>
                Er zijn 5 zeefdruktafels met vacuümafzuiging: een zeefdruktafel voor maximaal A1 formaat, drie
                tafels voor A2 formaat en een tafel voor A3 formaat. Verder hebben we een grote collectie zeeframen
                in allerlei formaten.
                <br><br>
                <strong>Hoogdruk en diepdruk</strong><br>
                Op de etsafdeling zijn twee etspersen aanwezig, een van 100 x 200 cm en een van 100 x 60 cm.
                Alle noodzakelijke voorzieningen voor deze hoog- en diepdruk technieken zijn aanwezig:
                <br><br>
            <ul>
                <li>Ets en droge naald</li>
                <li>Linosnede</li>
                <li>Toyobo</li>
                <li>Polymeer</li>
                <li>Materiaaldruk</li>
                <li>Houtdruk</li>
            </ul>
            <br>
            Voor inbijten van zink- en koperplaten wordt gebruik gemaakt van kopersulfaat en ijzerchloride.
            <br><br>
            <strong>Steendruk</strong><br>
            De lithopers van het GA is een handaangedreven mechanische pers, met een druktafel van 80 x 120 cm. Er
            zijn zo’n 50 lithostenen aanwezig, van diverse maten.
            <br><br>
            <strong>Cyanotype & gomdruk</strong><br>
            Voor het maken van cyanotype en gomdruk hebben wij een mooie DOKA, belichter en diverse papieren.
            <br><br>
            <strong>Kopieermachine</strong><br>
            Met de kopieermachine kunnen transparanten tot A3 formaat worden gemaak. Ook grotere formaten zijn in
            overleg mogelijk. Neem hiervoor contact op met het GA.
            <br><br>
            <strong>Te koop</strong><br>
            Heb je materialen nodig? Dan kun je ook bij ons terecht.
            Wij hebben vele soorten materialen voor alle technieken te koop.
            Zie hiervoor onze <a href="http://fedha.nl/prijzen" class="link" target="_blank">prijslijst</a>.
            <br><br>
            </p>
        </div>
        <div class="col-md-4">
            <p>

                <strong>Openingstijden werkplaats:</strong><br>
                ma t/m vrij van 9:00 - 17:00<br>
                za van 13:00 - 17:00
                <br><br>
            <h4 class="kopje">Beheerders</h4>

            <strong>Maandagochtend:</strong><br>
            Kristel van Genugten (tot 14.30 u), coördinator
            Maartje van der Kruijs, beheer zeefdrukwerkplaats
            Nico Thöne, medewerker educatie en workshops<br>
            <strong>Maandagmiddag:</strong><br>
            Marie-Louise Wasiela, ets, zeefdruk
            <br><br>
            <strong>Dinsdag:</strong><br>
            Kristel van Genugten (tot 14.30 u), coördinator
            Peter Koene, algemeen werkplaatsbeheer
            Willemijn van Dorp, zeefdruk
            <br><br>
            <strong>Woensdagochtend:</strong><br>
            Roos Terra, materiaaldruk
            <br>
            <strong>Woensdagmiddag:</strong><br>
            Bianca Tangande, polymeerets, zeefdruk
            <br><br>
            <strong>Donderdagochtend:</strong><br>
            Henny Schakenraad, zeefdruk
            Kristel van Genugten, coördinator<br>
            <strong>Donderdagmiddag:</strong><br>
            Helma Veugen, lithografie
            Maartje van der Kruijs, beheer zeefdrukwerkplaats
            <br><br>
            <strong>Vrijdagochtend:</strong><br>
            Madeleen Dijkman, textieldruk, zeefdruk
            Peter Koene, algemeen werkplaatsbeheer<br>
            <strong>Vrijdagmiddag:</strong><br>
            Peter Koene, algemeen werkplaatsbeheer
            <br><br>
            <strong>Zaterdagmiddag:</strong><br>
            Wisselende bezetting
            <br><br>
            <strong>Kosten</strong><br>
            <a href="http://fedha.nl/prijzen" class="link" target="_blank">Prijslijst 2017</a>
            </p>
            <button type="button" class="btn" id="werkplaats-btn">Reserveer een werkplaats</button>

        </div>
    </div>
</div>

@endsection
