$(document).ready(function(){ resizeDiv(); });
window.onresize = function(event) { resizeDiv(); };

function resizeDiv() {
  // Viewport
  vpw = $(window).width();
  vph = $(window).height();

  // Elements
  mapOffset = $('#map').offset().top;
  footerH = $('footer').height;

  // Map
  $('#map').css({'height': vph + 'px'});
  $('#map iframe').css({'height': vph + 'px'});
}

$('#mapToggle').click(function(){
  $('#listToggle').removeClass('active');
  $('#list').removeClass('active');
  $(this).addClass('active');
  $('#map').addClass('active');
});

$('#listToggle').click(function(){
  $('#mapToggle').removeClass('active');
  $('#map').removeClass('active');
  $(this).addClass('active');
  $('#list').addClass('active');
});




