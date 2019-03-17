<?php

       
        
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "roadsafety";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
		
?>




/* <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Marker Clustering</title>
    <style>
      Always set the map height explicitly to define the size of the div
       * element that contains the map.
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: -28.024, lng: 140.887}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      
	   <?php
		$sql = "SELECT lat,lon from description where 1";
        $result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
		echo $row['lat'];	
       echo "
	   
	   {lat:";$row['lat'];echo ",lng:";$row['lon'];echo"},";

			}
		} 
	  
	  ?> 
	<?php $conn->close();?>
	   
	   
	   
	   
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpDe0VztKFtn5Nb8ukFUsFjX_NCm_dlEc&callback=initMap">
    </script>
  </body>
</html>
 