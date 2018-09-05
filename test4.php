<!DOCTYPE html>
    <html>
        <head>
        	<title>Google Maps JavaScript API v3 Example: Places Autocomplete</title>
       	 	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
			<script type="text/javascript">
            function initialize()
            {
				var input = document.getElementById('searchTextField');
				var options = {componentRestrictions: {country: 'IN'}};
				new google.maps.places.Autocomplete(input, options);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </head>
    <body>
    <label for="searchTextField">Please insert an address:</label>
    <input id="searchTextField" type="text" size="50" />
    </body>
    </html>