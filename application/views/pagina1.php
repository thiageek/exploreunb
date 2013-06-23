<div class="row-fluid" id="home_screen">
	<div class="span4" id='side_home' style="background-image: url('<?php echo base_url('assets/img/background_home.png') ?>')">
		<h1>O QUE VOCÊ <span>PROCURA</span> ?</h1>
		<div id="div_form_busca">
			<form id="form_busca">
				<input type="text" name="busca" id="campo_busca" style="background-image: url('<?php echo base_url('assets/img/barra_pesquisa.jpg') ?>')"/>
			</form>
		</div>
		<div id="div_botoes_home">
			<a href="sala" id="botao_home_sala"> <img src="<?php echo base_url('assets/img/botao_livro.png') ?>"> </a>
			<a href="onibus" id="botao_home_onibus"> <img src="<?php echo base_url('assets/img/botao_onibus.png') ?>"> </a>
			<a href="lanchonete" id="botao_home_lanchonete"> <img src="<?php echo base_url('assets/img/botao_bolo.png') ?>"> </a>
			<img src="<?php echo base_url('assets/img/bottom_line_opcoes.png') ?>">
		</div>
	</div>
	<div class="span8" id="map-canvas"></div>
</div>
<div class="row-fluid" id="destaques_screen">
	<a href="#destaque1" id="botao_content"><img src="<?php echo base_url('assets/img/botao_content.png') ?>"></a>
	<div class="span8 offset2">
		<h1>LANCHONETES EM DESTAQUE</h1>
		<div class="row-fluid" id="destaque1">
			<div class="span4" id="title_destaque1" style="background-image: url('<?php echo base_url('assets/img/background_destaque.jpg') ?>')">
				<p>
					LANCHONETE MEGABOGA 1
				</p>
			</div>
			<div class="span8" id="img_destaque1" style="background-image: url('<?php echo base_url('assets/img/destaque1.jpg') ?>')"></div>
		</div>
		<div class="row-fluid destaques" id="destaque2">
			<div class="span8" id="img_destaque2" style="background-image: url('<?php echo base_url('assets/img/destaque2.jpg') ?>')"></div>
			<div class="span4" id="title_destaque3" style="background-image: url('<?php echo base_url('assets/img/background_destaque.jpg') ?>')">
				<p>
					LANCHONETE MEGABOGA 2
				</p>
			</div>
		</div>
		<div class="row-fluid destaques" id="destaque3">
			<div class="span4" id="title_destaque3" style="background-image: url('<?php echo base_url('assets/img/background_destaque.jpg') ?>')">
				<p>
					LANCHONETE MEGABOGA 3
				</p>
			</div>
			<div class="span8" id="img_destaque3" style="background-image: url('<?php echo base_url('assets/img/destaque3.jpg') ?>')"></div>
		</div>
	</div>
</div>
<div class="row-fluid" id="rodape">
	<div class="span12">

	</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var map;
		var MY_MAPTYPE_ID = 'custom_style';
		function initialize() {

			var featureOpts = [{
				featureType : 'poi.school',
				elementType : 'all',
				stylers : [{
					hue : '#009200'
				}, {
					saturation : 100
				}, {
					lightness : -66
				}, {
					visibility : 'on'
				}]
			}, {
				featureType : 'landscape',
				elementType : 'all',
				stylers : [{
					hue : '#001fce'
				}, {
					saturation : 100
				}, {
					lightness : -55
				}, {
					visibility : 'on'
				}]
			}, {
				featureType : 'road',
				elementType : 'all',
				stylers : [{
					hue : '#ffffff'
				}, {
					saturation : -100
				}, {
					lightness : 100
				}, {
					visibility : 'simplified'
				},
				{ weight: 0.5 }]
			}, {
				featureType : 'poi.business',
				elementType : 'all',
				stylers : [{
					hue : '#001fce'
				}, {
					saturation : 100
				}, {
					lightness : -52
				}, {
					visibility : 'off'
				}]
			}];

			var mapOptions = {
				zoom : 15,
				center : new google.maps.LatLng(-15.763, -47.865066),
				disableDefaultUI : true,
				mapTypeControlOptions : {
					mapTypeIds : [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
				},
				mapTypeId : MY_MAPTYPE_ID
			};
			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			var styledMapOptions = {
				name : 'Custom Style'
			};

			var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

			map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		}


		google.maps.event.addDomListener(window, 'load', initialize);
	}); 
</script>