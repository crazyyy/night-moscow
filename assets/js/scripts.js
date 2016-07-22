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
var homeUrl = $('body').attr('home-url');

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

var maxheight = 0;
$(".frontpage-small").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".frontpage-small").height(maxheight);

var maxheight = 0;
$(".ourblogitem").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".ourblogitem").height(maxheight);

/** examples block - gallery change photos */
$(document).ready(function() {
  $('.gallery-choose li').on('click', function() {
    var image = $(this).attr('dataimage');
    $('.gallery-main img').attr('src', image);
  })
});

/** calendar functional */
$('.calendar-navi .navi-next').on('click', function() {
  var $activeContainer = $('.active-month');
  var currentMonth = $activeContainer.attr('month-id');
  var currentYear = $activeContainer.attr('year-id');
  if (currentMonth != 12) {
    var nextMonth = parseInt(currentMonth, 10) + 1;
    if (nextMonth < 10) {
      nextMonth = '0' + nextMonth;
    }
    var nextYear = currentYear;
  } else {
    var nextMonth = '01';
    var nextYear = parseInt(currentYear) + 1;
  }
  console.log(nextMonth);

  CalendarChange(nextYear, nextMonth);
})

$('.calendar-navi .navi-back').on('click', function() {
  var $activeContainer = $('.active-month');
  var currentMonth = $activeContainer.attr('month-id');
  var currentYear = $activeContainer.attr('year-id');
  console.warn(currentMonth);
  if (currentMonth == '01') {
    var nextMonth = '12';
    var nextYear = parseInt(currentYear) - 1;
  } else {

    var nextMonth = parseInt(currentMonth, 10) - 1;
    if (nextMonth < 10) {
      nextMonth = '0' + nextMonth;
    }
    var nextYear = currentYear;
  }
  CalendarChange(nextYear, nextMonth);
})

function CalendarChange(nextYear, nextMonth) {
  var nextYearId = '[year-id="' + nextYear + '"]';
  var nextMonthId = '[month-id="' + nextMonth + '"]';
  var nextContainerSelector = '.calendar-container' + nextYearId + nextMonthId;

  var $nextContainer = $(nextContainerSelector);
  $('.active-month').fadeOut('fast');
  $('.active-month').removeClass('active-month');
  $nextContainer.addClass('active-month')
  $nextContainer.fadeIn('fast');
}

/** calendar add links */
$('li.exces-date').each(function(index, el) {
  var year = $(this).attr('data-exces-year');
  var month = $(this).attr('data-exces-month');
  var date = $(this).attr('data-exces-date');
  var needDateId = '.booking-calendar li[date-id="' + year + month + date + '"]';
  var needDateDay = $(needDateId).attr('day-id');
  $(needDateId).html('<a href="' + homeUrl + '/excursion?year=' +  year + '&month=' + month + '&day=' + date + '">' + needDateDay + '</a>');
});
