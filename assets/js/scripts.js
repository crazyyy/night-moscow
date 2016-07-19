// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

/** some heights for blocks  */
var maxheight = 0;
$(".payment-steps").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".payment-steps").height(maxheight);

var maxheight = 0;
$(".container-partners").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".container-partners").height(maxheight);

var maxheight = 0;
$(".looper").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".looper").height(maxheight);

var maxheight = 0;
$(".excursion-level-zero").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".excursion-level-zero").height(maxheight);

var maxheight = 0;
$(".excursion-level-one").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".excursion-level-one").height(maxheight);

var maxheight = 0;
$(".excursion-level-two").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".excursion-level-two").height(maxheight);

var maxheight = 0;
$(".excursion-cat-zero").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".excursion-cat-zero").height(maxheight);

var maxheight = 0;
$(".popular-posts").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".popular-posts").height(maxheight);

/** examples block - gallery change photos */
$(document).ready(function() {
  $('.gallery-choose li').on('click', function() {
    var image = $(this).attr('dataimage');
    $('.gallery-main img').attr('src', image);
  })
});
