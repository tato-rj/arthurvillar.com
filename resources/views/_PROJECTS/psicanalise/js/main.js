// listen to click
$('.hamburger').on('click', function () {
  // if menu is open, slide up
  if ($('.menu').hasClass('open')) {
    $('.menu').removeClass('open');
  } else {
    $('.menu').addClass('open');
  }
  // if menu is closed, slide down
  if ($(this).hasClass('move')) {
    $(this).removeClass('move');
  } else {
    $(this).addClass('move');
  }

  if ($('main').hasClass('move')) {
    $('main').removeClass('move');
  } else {
    $('main').addClass('move');
  }


});
