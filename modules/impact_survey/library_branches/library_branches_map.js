(function($) {
	 $(document).ready(function(){
	     $(document).loadMap();
	 });
	$.fn.loadMap = function() {
		// These are the modifiable variables:
		var latElem = document.getElementById("lat");
		var lonElem = document.getElementById("lon");
		var zoom = 10;  //might set to 10
		//latElem.value = 48.0000;  // default lat
		//lonElem.value = -122.0000; // default lon

		/*
			It would be a good idea to put a SQL query here to find the "average" location of all of the library system's branches.
			
			For example,
			
			db_query('SELECT mean(sum(latitude)) as lat, mean(sum(longitud)) as lon FROM {square_feet} WHERE fscs = $fscs');
			
			SELECT AVG( latitude ) AS lat, AVG( longitud ) AS lon
		FROM {square_feet}
		WHERE fscs_key =  $fscs
		
			*/
		//

		var myLatlng = new google.maps.LatLng(latElem.value, lonElem.value);
		
		var myOptions = {
			zoom: zoom,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById("gmap"), myOptions);
		
		// marker refers to a global variable
		marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
		
		// if center changed then update lat and lon document objects
		google.maps.event.addListener(map, 'center_changed', function() {
			var location = map.getCenter();
			document.getElementById("lat").value = Math.round(location.lat() * 1e6) / 1e6;
			document.getElementById("lon").value = Math.round(location.lng() * 1e6) / 1e6;
		
			// call function to reposition marker location
			placeMarker(location);
		});
		
		// if zoom changed, then update document object with new info
		google.maps.event.addListener(map, 'zoom_changed', function() {
			zoomLevel = map.getZoom();
		});
		
		// double click on the marker changes zoom level
		google.maps.event.addListener(marker, 'dblclick', function() {
			zoomLevel = map.getZoom()+1;
			if (zoomLevel == 20) {
				zoomLevel = 10;
			}
			map.setZoom(zoomLevel);
		});
	}
	function placeMarker(location) {
		var clickedLocation = new google.maps.LatLng(location);
		marker.setPosition(location);
	}
})(jQuery);
