// Get data from parties (coordinates, title, etc)
function getResults() {
	var results = [];
	var index = 0;
	$('.card').each(function() {
		var title = $(this).attr('data-title');
		var time = $(this).attr('data-time');
		var fee = $(this).attr('data-fee');
		var url = $(this).attr('data-url');
		var lat = Number($(this).attr('data-lat'));
		var lng = Number($(this).attr('data-lng'));
		results[index] = {};
		results[index].title = title;
		results[index].time = time;
		results[index].fee = fee;
		results[index].url = url;
		results[index].coordinates = {
			lat: lat,
			lng: lng
		};
		index++;
	});

	return results;
}
// Creates the Map
function initMap() {
	var circleArray = [];
	var clicked = false;
	var results = getResults();
	var infoBox = $('#map-label');
	var input = $('#map').attr('data-location');
	if ($('#find-party').val()) {
		input = $('#find-party').val();
	}

	$.get("https://maps.googleapis.com/maps/api/geocode/json?address="+input+"&key="+$('body').attr('google-key'), 
		function(data, status){
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: randomCenter(data.results[0].geometry.location)
		});

		for (var i=0; i<results.length; i++) {
			var color = randomColor();
			var circle = new google.maps.Circle({
				strokeColor: color,
				strokeOpacity: 0.6,
				strokeWeight: 2,
				fillColor: color,
				fillOpacity: 0.15,
				map: map,
				center: randomCenter(results[i]['coordinates']),
				radius: 500,
			});

			circle.setMap(map);
			circleArray.push(circle);

			google.maps.event.addListener(circle, 'click', (function(marker, i) {
				return function() {
					// Highlight circle
					for (var q = 0; q < circleArray.length; q++ ) {
						circleArray[q].setOptions({fillOpacity: 0.15});
					}

					marker.setOptions({fillOpacity: 0.8});
										
					// Highlight card
					$('.card').each(function() {
						if ($(this).attr('data-title') != results[i]['title']){
							$(this).css('opacity', 0.5).removeClass('shadow');
						} else {
							$(this).css('opacity', 1).addClass('shadow');
						}
					});

					// Show info
					infoBox.removeAttr('style');
					setTimeout(function() {
						infoBox.find('#m-title').text(results[i]['title']);
						infoBox.find('#m-time').text(results[i]['time']);
						infoBox.find('#m-fee').text(results[i]['fee']);
						infoBox.find('a').attr('href',results[i]['url']);
						infoBox.css({
							'border-color': marker.fillColor,
							left: 0
						});
					}, 200);

					clicked = true;
				}
			})(circle, i));

			google.maps.event.addListener(circle, 'mouseover', (function(marker, i) {

				return function() {
					if (!clicked) {
						$('.card').each(function() {
							if ($(this).attr('data-title') != results[i]['title']){
								$(this).css('opacity', 0.5).removeClass('shadow');
							} else {
								$(this).css('opacity', 1).addClass('shadow');
							}
						});
					}	    		
				}

			})(circle, i));

			google.maps.event.addListener(circle, "mouseout", function(event) {
				if (!clicked) {
					$('.card').each(function() {
						$(this).css('opacity', 1).removeClass('shadow');
					});				
				}
			});

			google.maps.event.addListener(map, "click", function(event) {
				// Reset circles
				for (var q = 0; q < circleArray.length; q++ ) {
					circleArray[q].setOptions({fillOpacity: 0.15});
				}
				// Reset cards
				$('.card').each(function() {
					$(this).css('opacity', 1).removeClass('shadow');
				});
				$('#map-label').removeAttr('style');
				clicked = false;
			});
		}
	});
}
