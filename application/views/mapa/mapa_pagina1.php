<div id="map-canvas" style="width: 100%; height: 100%"></div>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.2.1/lodash.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

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
				}, {
					weight : 0.5
				}]
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