$(document).ready(function(){ resizeDiv(); });
window.onresize = function(event) { resizeDiv(); };

function resizeDiv() {
  // Viewport
  vpw = $(window).width();
  vph = $(window).height();

  // Elements
  mapOffset = $('#main').offset().top;
  footerH = $('footer').height;

  // Map 
  $('#main').css({'height': vph + 'px'});
  $('#main iframe').css({'height': vph + 'px'});
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




