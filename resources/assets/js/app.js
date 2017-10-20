$( document ).ready(function() {
 	$('main').show();  
});

$('.card-header').on('click', function() {
	$('#accordion .card-header').not(this).children('.fa').removeClass('rotate-down');
	$(this).children('.fa').toggleClass('rotate-down');
});