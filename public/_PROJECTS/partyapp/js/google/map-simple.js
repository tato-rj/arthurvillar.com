// Creates the Map
function initMap() {
	var input = $('#map').attr('data-location');

	$.get("https://maps.googleapis.com/maps/api/geocode/json?address="+input+"&key="+$('body').attr('google-key'), 
		function(data, status){
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: randomCenter({lat: 37.198585, lng: -3.639815}),
			disableDefaultUI: true,
		    scrollwheel: false,
		    navigationControl: false,
		    mapTypeControl: false,
		    scaleControl: false,
		    draggable: false,
		});
	});
}