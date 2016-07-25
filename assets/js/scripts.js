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

var maxheight = 0;
$(".container-reviews").each(function() {
  if ($(this).height() > maxheight) {
    maxheight = $(this).height();
  }
});
$(".container-reviews").height(maxheight);

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
  $(needDateId).html('<a data-year="' + year + '" data-month="' + month + '" data-day="' + date + '" href="#">' + needDateDay + '</a>');
});

/** calendar link works */
$('.booking-calendar a').on('click', function() {
  event.preventDefault();

  var searchYear = $(this).attr('data-year');
  var searchMonth = $(this).attr('data-month');
  var searchDay = $(this).attr('data-day');
  var searchedItems = '.hidden-quered-calendar .exces-dates li[data-exces-year="' + searchYear + '"][data-exces-month="' + searchMonth + '"][data-exces-date="' + searchDay + '"]';

  $('.this-excursions').removeClass('this-excursions');
  $('.our-exc-container').html('');

  $('html, body').animate({
    scrollTop: $(".our-exc-container").offset().top
  }, 500);

  $(searchedItems).each(function(index, el) {
    var $searchedItemsContainer = $(this).parent('.exces-dates').parent('.looper');
    if (!$searchedItemsContainer.hasClass('this-excursions')) {
      $searchedItemsContainer.addClass('this-excursions');
    }
  });

  $('.hidden-quered-calendar .this-excursions').clone().appendTo(".our-exc-container");
});

$('.cat-exc-choos a').on('click', function() {
  var searchTypeSlug = $(this).attr('data-type');
  var searchTypeClass = '.hidden-quered-calendar .categories-' + searchTypeSlug;

  $('.our-exc-container').html('');

  $('html, body').animate({
    scrollTop: $(".our-exc-container").offset().top
  }, 500);

  $(searchTypeClass).clone().appendTo(".our-exc-container");

})

/** modal window */
$('.btn-recall').on('click', function() {
  $('body').addClass('modaled');
  $('.modal-recall').fadeIn('fast');
})

/** modal window for homepage title */
$('.btn-titleorder').on('click', function() {
  $('body').addClass('modaled');
  $('.modal-titleorder').fadeIn('fast');
  var dateOne = $('.header-title').html();
  var dateTwo = $('.header-subtitle').html();
  var dateFull = '<option value="' + dateOne + dateTwo + '">' + dateOne + dateTwo + '</option>';
  $('.modal-titleorder select').html(dateFull);
})

/** modal window for excurse loope */
$('.our-exc-container .btn-order').on('click', function() {
  var parentContainer = $(this).parent('.exc-order').parent('.excurse-about').parent('.looper');
  parentContainer.addClass('selected-for-order');
  var dateFull = '';
  $('.selected-for-order .exces-date').each(function(index, el) {
    var thisDate = $(this).html();
    dateFull = dateFull + '<option value="' + thisDate + '">' + thisDate + '</option>';
  });
  $('body').addClass('modaled');
  $('.modal-ourexccontainer').fadeIn('fast');
  $('.modal-ourexccontainer select').html(dateFull);
  $('.selected-for-order').removeClass('selected-for-order');
})


/** modal window for single page loope */
$('.excursion-price .btn-order').on('click', function() {
  var parentContainer = $(this).parent('td').parent('tr');
  parentContainer.addClass('selected-for-order');
  var dateFull;

  $('.excursion-price tr').each(function(index, el) {
    if ($(this).children('td').length > 0) {
      var thisDate = $(this).children('.ex-date').html();
      var thisTime = $(this).children('.ex-time').html();
      console.log('1')
      if ($(this).hasClass('selected-for-order') == false) {
        dateFull = dateFull + '<option selected value="' + thisDate + ' в ' + thisTime + '">' + thisDate + ' в ' + thisTime + '</option>';
      } else {
        dateFull = dateFull + '<option selected value="' + thisDate + ' в ' + thisTime + '">' + thisDate + ' в ' + thisTime + '</option>';
      }
    }

  });

  $('body').addClass('modaled');
  $('.modal-ourexccontainer').fadeIn('fast');
  $('.modal-ourexccontainer select').html(dateFull);
  $('.selected-for-order').removeClass('selected-for-order');
})





$('.modal-close').on('click', function() {
  CloseBg();
})

$(".modal-bg").click(function() {
  CloseBg();
}).children().click(function(e) {
  return false;
});

function CloseBg() {
  $('body').removeClass('modaled');
  $('.modal-bg').fadeOut('fast');
}
