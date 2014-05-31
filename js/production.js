$(document).ready(function(){ resizeDiv(); });
window.onresize = function(event) { resizeDiv(); };

function resizeDiv() {
  vpw = $(window).width();
  vph = $(window).height();

  // Full Height Modules
  $('#map').css({'height': vph + 'px'});
}