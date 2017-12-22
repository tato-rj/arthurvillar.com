// Resubmit form when user selects one of the search filters (create AJAX later instead)
$('#party-form select').on('change', function() {
    $('#party-form').submit();
});

// Promo Video Controls
$('#promo-video').on('click', function() {
	$button = $(this).find('.fa');
	$video = $(this).find('video').get(0);

	if ($video.paused) {
		$video.play();
		$button.fadeOut('fast');
	} else {
		$video.pause();
		$button.fadeIn('fast');
	}
});

// Show controls when video ends
$('#promo-video video').on('ended', function() {
	$('#promo-video .fa').fadeIn('fast');
});

// Fix top margin
$navHeight = $('nav').height();
$('#margin-top').height($navHeight);