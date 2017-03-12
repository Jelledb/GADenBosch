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
    <div id="map_canvas"></div>
    <div class="container" id="contact-container">



        <div class="row" >

            <div class="col-md-4 col-md-offset-2">

                        <h2>Contact</h2>
                        <br>
                        <div class="panel panel-default">
                            <div class="contact-content">
                                <strong>Adres:</strong><br>
                                Boschveldweg 471A<br>
                                5211 VK ‘s-Hertogenbosch<br>
                                T +31 (0)736 134 277<br>
                                info@gadenbosch.nl<br>
                                <br>
                                - IBAN: NL21INGB0005275472<br>
                                - BIC: INGBNL2A<br>
                                - RSIN/Fiscaal nummer: 0082 31 424<br>
                                - KVK: 41082086 0000<br>
                            </div>
                        </div>
                        <div class="panel panel-default" >
                            <div class="contact-content">
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
                            </div>

                        </div>
                    </div>
            <div class="col-md-4" >

                        <h2>Openingstijden</h2>
                        <br>
                <div class="panel panel-default">
                    <div class="contact-content">
                        ma t/m vrij van 9:00 - 17:00<br>
                        za van 13:00 - 17:00
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
