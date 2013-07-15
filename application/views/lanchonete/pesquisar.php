<div class="row-fluid" id="home_form">
	<div class="span4" id='side_search' style="background-image: url('<?php echo base_url('assets/img/background_home.png') ?>')">
		<form name='form_lanchonete' id='form_lanchonete' method="POST" action="<?php echo base_url()?>lanchonete/pesquisar">
			<fieldset>
				<legend>
					<h1>Pesquisar Lanchonete</h1>
				</legend>
				<label>Por Nome:</label>
				<input name="lanchonete" type="text" class="span12"/>
				<label>Por Local:</label>
				<select name="local" class="span12">
					<option> </option>
					<?php foreach ($locais as $local) {
						echo '<option value="' . $local['id_local'] . '">' . $local['local'] . '</option>';
					} ?>
				</select>
				<div class="controls">
					<button type="submit" class="btn">
						Pesquisar
					</button>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="span8" id="map-canvas_search"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	var map;
	var infowindow;
	(function () {
		
		google.maps.Map.prototype.markers = new Array();
		
		google.maps.Map.prototype.addMarker = function(marker) {
		this.markers[this.markers.length] = marker;
		};
		
		google.maps.Map.prototype.getMarkers = function() {
		return this.markers
		};
		
		google.maps.Map.prototype.clearMarkers = function() {
		if(infowindow) {
		infowindow.close();
		}
		
		for(var i=0; i<this.markers.length; i++){
		this.markers[i].set_map(null);
		}
		};
	})();
	
	function initialize() {
		var myLatlng = new google.maps.LatLng(-15.763, -47.868466);
	  	var mapOptions = {
	    	zoom: 16,
	    	center: myLatlng,
	    	mapTypeId: google.maps.MapTypeId.HYBRID
	  	};
	  	map = new google.maps.Map(document.getElementById('map-canvas_search'),
	    	mapOptions);
	    	
	    var lanchs = new Array();
    		
	    <?php if(isset($lanchonetes)){
	    	$i = 0;
			foreach ($lanchonetes as $lanchonete) {
				echo 'var t =  new Object();'."\n";
				echo 't.name = "'.$lanchonete['lanchonete'].'"'."\n";
				echo 't.lat = '.$lanchonete['lat']."\n";
				echo 't.lng = '.$lanchonete['lng']."\n";
				echo 'lanchs['.$i.'] = t; '."\n\n";
				$i++;
			}
			
			echo 'for (var i = 0; i < lanchs.length; i++) {'."\n";
        	echo 'var latlng = new google.maps.LatLng(lanchs[i].lat, lanchs[i].lng);'."\n";
        	echo 'map.addMarker(createMarker(lanchs[i].name,latlng));'."\n";
        	echo '}'."\n\n\n";
			} ?>
  }
     
  function createMarker(name, latlng) {
    var marker = new google.maps.Marker({position: latlng, map: map});
    google.maps.event.addListener(marker, "click", function() {
      if (infowindow) infowindow.close();
      infowindow = new google.maps.InfoWindow({content: name});
      infowindow.open(map, marker);
    });
    return marker;
  }

google.maps.event.addDomListener(window, 'load', initialize);
</script>