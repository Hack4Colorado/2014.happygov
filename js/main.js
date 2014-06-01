$(document).ready(function(){ resizeDiv(); });
window.onresize = function(event) { resizeDiv(); };

function resizeDiv() {
  vpw = $(window).width();
  vph = $(window).height();
  mapOffset = $('#map').offset().top;

  // Full Height Modules
  $('#map').css({'height': vph - mapOffset + 'px'});
  $('#map iframe').css({'height': vph - mapOffset + 'px'});
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