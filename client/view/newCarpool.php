<form method="post" action="control/carpoolControl.php">
	<input type="text" name="destiny" id="destiny" placeholder="Para onde vai?">
	<input type="text" name="emptyseats" placeholder="Lugares vazios no carro?">
	<input type="submit" name="enviar" value="Cadastrar carona">
	<input type="hidden" name="d_long" id="d_long" value="0">
	<input type="hidden" name="d_lat" id="d_lat" value="0">
	<input type="hidden" name="s_long" id="s_long" value="0">
	<input type="hidden" name="s_lat" id="s_lat" value="0">
</form>

<div id="map"></div>

<style type="text/css">
	 #map { width: 100%; height: 500px; }
</style>
<script type="text/javascript">

	
L.mapbox.accessToken = 'pk.eyJ1IjoibHVjYXNsb2JhbyIsImEiOiJjaXBuYTlmZTAwMDBtdG9semRxbjZxazd3In0.oTimzXCFPlK5lExFWIP7BA';
var map = L.mapbox.map('map', 'mapbox.streets');
var geo = L.mapbox.geocoder('mapbox.places');
var feature = L.mapbox.featureLayer().addTo(map);

var d_long = document.getElementById('d_long');
var d_lat = document.getElementById('d_lat');


var destiny = document.getElementById("destiny");

destiny.addEventListener("keyup", function(){
	var value = destiny.value;

  	geo.query(value, function(err, res){

		if(typeof res.latlng != undefined) {
  			var lat = res.latlng[0];
  			var lng = res.latlng[1];

  			d_long.value = lng;
  			d_lat.value = lat;
  		}

  		feature.setGeoJSON({
  			type: "FeatureCollection",
  			features: [{
		        type: "Feature",
		        geometry: {
		            type: "Point",
		            coordinates: [lng, lat]
		        },
		        properties: { 
		        	title: 'Destino',
			        description: '',
			        // one can customize markers by adding simplestyle properties
			        // https://www.mapbox.com/guides/an-open-platform/#simplestyle
			        'marker-size': 'large',
			        'marker-color': '#0f0',
			        'marker-symbol': 'circle-stroked'
		        }
		    }]
  		});

	});
});



if ("geolocation" in navigator) {

	navigator.geolocation.getCurrentPosition(function(position) {


		var d_long = document.getElementById('d_long');
		var d_lat = document.getElementById('d_lat');

		s_long.value = position.coords.longitude;
		s_lat.value = position.coords.latitude;

		map.setView([position.coords.latitude, position.coords.longitude], 10);

		L.mapbox.featureLayer({
		    // this feature is in the GeoJSON format: see geojson.org
		    // for the full specification
		    type: 'Feature',
		    geometry: {
		        type: 'Point',
		        // coordinates here are in longitude, latitude order because
		        // x, y is the standard for GeoJSON and many formats
		        coordinates: [
		          position.coords.longitude,
		          position.coords.latitude
		        ]
		    },
		    properties: {
		        title: 'você está aqui!',
		        description: ' ',
		        // one can customize markers by adding simplestyle properties
		        // https://www.mapbox.com/guides/an-open-platform/#simplestyle
		        'marker-size': 'large',
		        'marker-color': '#AAAAAA',
		        'marker-symbol': 'car'
		    }
		}).addTo(map);
	});



} else {
  alert("I'm sorry, but geolocation services are not supported by your browser.");
}







// });

</script>