<div class="row-fluid" id="home_form">
	<div class="span4" id='side_search' style="background-image: url('<?php echo base_url('assets/img/background_home.png') ?>')">
		<form name='form_lanchonete' id='form_lanchonete' method="POST" action="<?php echo base_url()?>lanchonete/pesquisar">
			<fieldset>
				<legend>
					<h1>Pesquisar Lanchonete</h1>
				</legend>
				<label>Por Nome:</label>
				<input name="nome" type="text" class="span12"/>
				<label>Por Local:</label>
				<select name="local" class="span12">
					<?php foreach ($locais as $local) {
						echo '<option value="' . $local['id_local'] . '">' . $local['local'] . '</option>';
					} ?>
				</select>
				<div class="controls">
					<button type="submit" class="btn">
						Cadastrar
					</button>
				</div>
			</fieldset>
		</form>
		<?php echo $objeto; ?>
	</div>
	<div class="span8" id="map-canvas_search"></div>
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
	  	map = new google.maps.Map(document.getElementById('map-canvas_search'),
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