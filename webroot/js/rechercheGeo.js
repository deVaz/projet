        window.onload=calculateDistance();

                            
        function calculateDistance(varaddr,vardest){
                        
            var address =  varaddr;
            var destination = vardest;
            
            var service = new google.maps.DistanceMatrixService()
            service.getDistanceMatrix(
            {
                origins: [address],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, callback);   
        }
        
        function callback(response, status){

            if (status != google.maps.DistanceMatrixStatus.OK) {
                alert('Error was: ' + status);
            } else {
                var origins = response.originAddresses;
                var destinations = response.destinationAddresses;
                var outputSpan = document.getElementById('outputSpan');
                outputSpan.innerHTML = '';
                deleteOverlays();

                for (var i = 0; i < origins.length; i++) {
                    var results = response.rows[i].elements;
                    addMarker(origins[i], false);
                    for (var j = 0; j < results.length; j++) {
                        addMarker(destinations[j], true);
                        outputSpan.innerHTML += results[j].distance.text + " en " + results[j].duration.text + "<br />";
                    }
                }
            }
        }
        
        
   

	
            