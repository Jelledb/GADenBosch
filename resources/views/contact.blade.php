@extends('layouts.website')

@section('content')
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJf9ODoIbEDJ5hiFGQlmjK31sJ0SDT7XM"></script>
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
        <h2 class="col-md-offset-2">Contact</h2>
        <br><br>
        <div class="row" >

            <div class="col-md-4 col-md-offset-2">

                        <div class="panel panel-default">
                            <div class="contact-content">
                                {!! $contact->content_left !!}
                            </div>

                        </div>
                    </div>
            <div class="col-md-4" >

                <div class="panel panel-default">
                    <div class="contact-content">
                        {!! $contact->content_right !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
