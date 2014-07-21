<div id="body">
    <style type="text/css">    
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map_canvas {
            height: 100%;
        }

        @media print {
            html, body {
                height: auto;
            }

            #map_canvas {
                height: 650px;
            }
        }
    </style>

    <div id="map_canvas" style="float:left;width:70%; height:75%"></div>
    <div id="directionsPanel" style="float:right;width:30%;height: 75%"></div>
    <p>Total Distance: <span id="total"></span></p>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false">
    </script>

    <script type="text/javascript">
        window.onload=initialize();
        
        var rendererOptions = {
            draggable: true
        };
        var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);;
        var directionsService = new google.maps.DirectionsService();
        var map;

        var australia = new google.maps.LatLng(-25.274398, 133.775136);

        function initialize() {

            var myOptions = {
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: australia
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById("directionsPanel"));

            google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
                computeTotalDistance(directionsDisplay.directions);
            });

            calcRoute();
        }

        function calcRoute() {

            var request = {
                origin: "Sydney, NSW",
                destination: "Sydney, NSW",
                waypoints:[{location: "Bourke, NSW"}, {location: "Broken Hill, NSW"}],
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });
        }

        function computeTotalDistance(result) {
            var total = 0;
            var myroute = result.routes[0];
            for (i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }
            total = total / 1000.
            document.getElementById("total").innerHTML = total + " km";
        }
    </script>
</div>