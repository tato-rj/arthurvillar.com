//If not a phone or tablet, the form will display in a different window. If on a computer, it displays inside an overlay
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
} else {

var $overlay = $('<div id="overlay"><img src="images/close_button.png" title="Click to close"></div>');
var $form = $('<iframe></iframe>');

//shows pdf
function showPdf(arg) {
  $form.attr('src', arg);
  $overlay.fadeIn('fast');
  $('body').css('overflow', 'hidden');
  $('nav').css('display', 'none');
}
$overlay.append($form);
//Add overlay
$('body').append($overlay);

//1. Capture the click event on a Link to the form
$('.artigo_link, .etica li').click(function(event){
  event.preventDefault();
  var href = $(this).attr('alt');
  showPdf(href);
});
  //Hides overlay if clicked anywhere outside of the box
  $overlay.click(function(){
    $(this).fadeOut('fast');
    $('body').css('overflow', '');
    $('nav').css('display', 'block');
  });
}
