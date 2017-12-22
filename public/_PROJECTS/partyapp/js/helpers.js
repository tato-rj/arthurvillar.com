// Get a random number
function rand(first, last, divide = 1) {
	var number = (Math.floor(Math.random() * last) + first)/divide;
	return number;	
}

// Get a random color
function randomColor() {
	var colors = ['#F44336', '#E91E63', '#9C27B0', '#673AB7', '#3F51B5', '#2196F3', '#00BCD4', '#009688', '#4CAF50', '#CDDC39', '#FF9800', '#FF5722'];
	return colors[(rand(1,12,1)-1)];
}

// Create region shape
function randomCenter(coord) {
	var output = {lat: coord['lat'] + rand(1,10,1000), lng: coord['lng'] + rand(1,10,1000)};
	return output;
}