var placeSearch, autocomplete;
function initAutocomplete() {
    var element = (document.getElementById('find-party'));
    var options = {types: ['geocode']};

    autocomplete = new google.maps.places.Autocomplete(element,options);
    autocomplete.addListener('place_changed', function() {
        $('#party-form').submit();
    });
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}

function initialize() {
    if (typeof initMap == 'function') initMap();
    if (typeof initAutocomplete == 'function') initAutocomplete();
}