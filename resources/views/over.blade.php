@extends('layouts.website')

@section('content')

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var map_canvas = document.getElementById('map_canvas');
            var map_options = {
                center: new google.maps.LatLng(51.69545, 5.29674),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(map_canvas, map_options)
            var myLatlng = new google.maps.LatLng(51.69545, 5.29674);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title:"Grafisch Atelier Den Bosch"
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

            <div class="container">
                <div id="map_canvas"></div>


                <div class="row">

                    <div class="col-md-4 col-md-offset-2">
                        <h2>Over ons</h2>
                        <br><br>
                        <p>Het Grafisch Atelier biedt een goed geoutilleerde werkplaats met deskundige ondersteuning om werk te vervaardigen en een omgeving om te experimenteren.
                        <br><br>
                        Op de etsafdeling zijn twee etspersen aanwezig welke naast diepdruk ook worden gebruikt voor hoogdruk: hout- en linodruk.
                        <br><br>
                        De lithopers van het GA is een handaangedreven mechanische pers met een druktafel van 80x120 cm. Er zijn ruim voldoende lithostenen vain diverse maten aanwezig.
                        <br><br>
                            Er zijn 5 zeefdruktafels met vacuümafzuiging. Maximaal drukformaat A1. Er wordt in de zeefdrukwerkplaats alleen nog met milieuvriendelijke inkten voor papier en textiel op waterbasis gewerkt.</p>
                        <br><br>
                <strong>Doelstellingen Grafisch Atelier Den Bosch</strong>
                <ol>
                    <li>Het bieden van grafische werkplaatsfaciliteiten voor kunstenaars</li>
                    <li>Educatie en kennisoverdracht</li>
                    <li>Aanbieden van exposities en projecten met een relatie tot grafische kunst en vormgeving</li>
                </ol>
                    <a href="http://gadenbosch.nl/pdfs/jaarverslag2015DEF.pdf" target="_blank" class="link">Jaarverslag 2015</a>
                        <br><br>
                <p><strong>Coördinator:</strong> Kristel van Genugten<br>
                    <strong>Algemeen werkplaatsbeheer:</strong> Peter Koene<br>
                    <strong>Beheer zeefdrukafdeling:</strong> Maartje van der Kruijs<br>
                    <strong>Projectmedewerker Educatie:</strong> Nico Thöne<br>
                    <br>
                    <strong>Bestuursleden:</strong><br>
                    - Jan Ramaekers – voorzitter<br>
                    - Hans Koppens – penningmeester<br>
                    - Gerard Pels – bestuurslid<br>
                    - Roos Terra – bestuurslid<br>
                    - Peter Korsman – bestuurslid<br>
                    - Hans Derks – bestuurslid</p>
                        <br><br>
                    </div>

                    <div class="col-md-4">
                        <h2>Openingstijden</h2>
                        <br><br>
                        ma t/m vrij van 9:00 - 17:00<br>
                        za van 13:00 - 17:00
                        <br><br>
                        <strong>GA Den Bosch gesloten:</strong><br>
                        Op 27 en 28 februari 2017, tijdens carnaval, zijn wij gesloten.
                    </div>
                </div>
            </div>
@endsection
