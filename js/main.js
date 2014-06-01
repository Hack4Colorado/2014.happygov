$(document).ready(function(){ resizeDiv(); });
window.onresize = function(event) { resizeDiv(); };

function resizeDiv() {
  // Viewport
  vpw = $(window).width();
  vph = $(window).height();

  // Elements
  mapOffset = $('#main').offset().top;
  footerH = $('footer').height();

  // Map
  $('#main').css({'height': vph - footerH + 'px'});
  $('#main #map').css({'height': vph - footerH + 'px'});
}

$('#mapToggle').click(function(){
  $('#listToggle').removeClass('active');
  $('#list').removeClass('active');
  $(this).addClass('active');
  $('#main').addClass('active');
});

$('#listToggle').click(function(){
  $('#mapToggle').removeClass('active');
  $('#main').removeClass('active');
  $(this).addClass('active');
  $('#list').addClass('active');
});

$('#tog').click(function(){
  $('#tog2').removeClass('active');
  $(this).addClass('active');
});
$('#tog2').click(function(){
  $('#tog').removeClass('active');
  $(this).addClass('active');
});



