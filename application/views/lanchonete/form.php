<div class="row-fluid" id="home_form">
	<div class="span6" id='side_form' style="background-image: url('<?php echo base_url('assets/img/background_home.png') ?>')">
		<form name='form_lanchonete' method="POST" action="<?php echo base_url()?>lanchonete/salvar">
			<fieldset>
				<legend>
					<h1><?php echo $op ?> Lanchonete</h1>
				</legend>
				<input name="id" type="hidden" value="2"/>
				<input name="op" type="hidden" value="<?php echo $op?>"/>
				<label>Nome:</label>
				<input name="lanchonete" type="text" class="span8"/>
				<label>Local:</label>
				<select name="local" class="span8">
					<option value="4">Local 1</option>
					<option value="4">Local 2</option>
					<option value="4">Local 3</option>
				</select>
				<label>Coordenada</label>
				<input name="coordenada" id="coordenada" type="text" class="span8"/>
				<div class="controls">
					<button type="submit" class="btn">
						Cadastrar
					</button>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="span6" id="map-canvas_form"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	var map;
	var marker;
	var p = 0;
	function initialize() {
		var myLatlng = new google.maps.LatLng(-15.763, -47.868466);
	  	var mapOptions = {
	    	zoom: 16,
	    	center: myLatlng,
	    	mapTypeId: google.maps.MapTypeId.HYBRID
	  	};
	  	map = new google.maps.Map(document.getElementById('map-canvas_form'),
	    	mapOptions);
	      
	  	google.maps.event.addListener(map, 'click', function(event) {
    		placeMarker(event.latLng);
  	  	});
	}
		
	function placeMarker(location) {
		if(p == 1){
			maker.setMap(null);
		}
		maker = new google.maps.Marker({
	      		position: location,
	      		map: map
	  	});
	  	$('#coordenada').val(location);
	  	p = 1;
	  	
  	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>