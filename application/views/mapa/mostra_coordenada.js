      function LatLngControl(map) {

        this.ANCHOR_OFFSET_ = new google.maps.Point(8, 8);
        
        this.node_ = this.createHtmlNode_();
        
        map.controls[google.maps.ControlPosition.TOP].push(this.node_);

        this.setMap(map);

        this.set('visible', false);
      }

      LatLngControl.prototype = new google.maps.OverlayView();
      LatLngControl.prototype.draw = function() {};
      
      LatLngControl.prototype.createHtmlNode_ = function() {
        var divNode = document.createElement('div');
        divNode.id = 'latlng-control';
        divNode.index = 100;
        return divNode;
      };

      LatLngControl.prototype.visible_changed = function() {
        this.node_.style.display = this.get('visible') ? '' : 'none';
      };

      LatLngControl.prototype.updatePosition = function(latLng) {
        var projection = this.getProjection();
        var point = projection.fromLatLngToContainerPixel(latLng);
        
        this.node_.style.left = point.x + this.ANCHOR_OFFSET_.x + 'px';
        this.node_.style.top = point.y + this.ANCHOR_OFFSET_.y + 'px';

        this.node_.innerHTML = [
          latLng.toUrlValue(4),
          '<br/>',
          point.x,
          'px, ',
          point.y,
          'px'
        ].join('');
      };

      function init() {
        var centerLatLng = new google.maps.LatLng(-15.763, -47.865066);
        var map = new google.maps.Map(document.getElementById('map-canvas_form'), {
          'zoom': 16,
          'center': centerLatLng,
          'mapTypeId': google.maps.MapTypeId.ROADMAP
        });

        var latLngControl = new LatLngControl(map);

        google.maps.event.addListener(map, 'mouseover', function(mEvent) {
          latLngControl.set('visible', true);
        });
        google.maps.event.addListener(map, 'mouseout', function(mEvent) {
          latLngControl.set('visible', false);
        });
        google.maps.event.addListener(map, 'mousemove', function(mEvent) {
          latLngControl.updatePosition(mEvent.latLng);
        });
        google.maps.event.addListener(map, 'click', function() {
    		map.setZoom(8);
    		map.setCenter(marker.getPosition());
  		});
      }

      google.maps.event.addDomListener(window, 'load', init);
