
	


	
	(function(window, google){
		
		var Mapster = (function(){
			function Mapster(element, opts) {
				this.gMap = new google.maps.Map(element, opts)
			}
			Mapster.prototype = {
				
			};
		
			return Mapster;
		}());
		
		Mapster.create = function() {
			return new Mapster();
		};
		
		window.Mapster = Mapster;
		
	}(window, google))

	(function(window, google){
		
		var Mapster = (function(){
			function Mapster(element, opts) {
				this.gMap = new google.maps.Map(element, opts)
			}
			Mapster.prototype = {
				
			};
		
			return Mapster;
		}());
		
		Mapster.create = function() {
			return new Mapster();
		};
		
		// map options //
		var options = {
			center: {
				lat: 43.6848,
				lng: 85.4856,
			},
			zoom: 10,
			disableDefaultUI:true,
			scrollwheel:false,
		},
			element = document.getElementById('map-canvas')
		//map
		map = Mapster.create(element, options);
		
	}(window, window.google));
