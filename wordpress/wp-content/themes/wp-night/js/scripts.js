function CalendarChange(e,t){var a='[year-id="'+e+'"]',h='[month-id="'+t+'"]',i=".calendar-container"+a+h,n=$(i);$(".active-month").fadeOut("fast"),$(".active-month").removeClass("active-month"),n.addClass("active-month"),n.fadeIn("fast")}function CloseBg(){$("body").removeClass("modaled"),$(".modal-bg").fadeOut("fast")}!function(){for(var e,t=function(){},a=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],h=a.length,i=window.console=window.console||{};h--;)e=a[h],i[e]||(i[e]=t)}(),"undefined"==typeof jQuery?console.warn("jQuery hasn't loaded"):console.log("jQuery has loaded");var homeUrl=$("body").attr("home-url"),maxheight=0;$(".payment-steps").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".payment-steps").height(maxheight);var maxheight=0;$(".container-partners").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".container-partners").height(maxheight);var maxheight=0;$(".looper").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".looper").height(maxheight);var maxheight=0;$(".excursion-level-zero").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".excursion-level-zero").height(maxheight);var maxheight=0;$(".excursion-level-one").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".excursion-level-one").height(maxheight);var maxheight=0;$(".excursion-level-two").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".excursion-level-two").height(maxheight);var maxheight=0;$(".excursion-cat-zero").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".excursion-cat-zero").height(maxheight);var maxheight=0;$(".popular-posts").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".popular-posts").height(maxheight);var maxheight=0;$(".frontpage-small").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".frontpage-small").height(maxheight);var maxheight=0;$(".ourblogitem").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".ourblogitem").height(maxheight),$(document).ready(function(){$(".gallery-choose li").on("click",function(){var e=$(this).attr("dataimage");$(".gallery-main img").attr("src",e)})}),$(".calendar-navi .navi-next").on("click",function(){var e=$(".active-month"),t=e.attr("month-id"),a=e.attr("year-id");if(12!=t){var h=parseInt(t,10)+1;10>h&&(h="0"+h);var i=a}else var h="01",i=parseInt(a)+1;console.log(h),CalendarChange(i,h)}),$(".calendar-navi .navi-back").on("click",function(){var e=$(".active-month"),t=e.attr("month-id"),a=e.attr("year-id");if(console.warn(t),"01"==t)var h="12",i=parseInt(a)-1;else{var h=parseInt(t,10)-1;10>h&&(h="0"+h);var i=a}CalendarChange(i,h)}),$("li.exces-date").each(function(e,t){var a=$(this).attr("data-exces-year"),h=$(this).attr("data-exces-month"),i=$(this).attr("data-exces-date"),n='.booking-calendar li[date-id="'+a+h+i+'"]',o=$(n).attr("day-id");$(n).html('<a data-year="'+a+'" data-month="'+h+'" data-day="'+i+'" href="#">'+o+"</a>")}),$(".booking-calendar a").on("click",function(){event.preventDefault();var e=$(this).attr("data-year"),t=$(this).attr("data-month"),a=$(this).attr("data-day"),h='.hidden-quered-calendar .exces-dates li[data-exces-year="'+e+'"][data-exces-month="'+t+'"][data-exces-date="'+a+'"]';$(".this-excursions").removeClass("this-excursions"),$(".our-exc-container").html(""),$("html, body").animate({scrollTop:$(".our-exc-container").offset().top},500),$(h).each(function(e,t){var a=$(this).parent(".exces-dates").parent(".looper");a.hasClass("this-excursions")||a.addClass("this-excursions")}),$(".hidden-quered-calendar .this-excursions").clone().appendTo(".our-exc-container")}),$(".cat-exc-choos a").on("click",function(){var e=$(this).attr("data-type"),t=".hidden-quered-calendar .categories-"+e;$(".our-exc-container").html(""),$("html, body").animate({scrollTop:$(".our-exc-container").offset().top},500),$(t).clone().appendTo(".our-exc-container")}),$(".btn-recall").on("click",function(){$("body").addClass("modaled"),$(".modal-recall").fadeIn("fast")}),$(".modal-close").on("click",function(){CloseBg()}),$(".modal-bg").click(function(){CloseBg()}).children().click(function(e){return!1});
//# sourceMappingURL=maps/scripts.js.map
