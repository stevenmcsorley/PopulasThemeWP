(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

$( document ).ready(function() {
    $('.carousel').carousel({
        interval: 8000
    })
    $('#outsideCaptions').carousel({
            interval: 3000
        })
    });



$( document ).ready(function() {
$("#boxOne").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxOne") ;
});
$("#boxTwo").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxTwo") ;
});
$("#boxThree").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxThree") ;
});
$("#boxFour").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxFour") ;
});

$(".featureBlockOne").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxFeatOne") ;
});

$(".featureBlockTwo").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxFeatTwo") ;
});

$(".featureBlockThree").inViewport(function(px){
    if(px) $(this).addClass("triggerBoxFeatThree") ;
});

$(".top_wrapper").inViewport(function(px){
    if(px) $(this).addClass("triggerTopBox") ;
});
});



$( document ).ready(function() {
  $(".nav li a").hover(function () {
    $(this).children(".nav li a span").toggleClass("onHover");
 });
});



// Back To Top
$( document ).ready(function() {
$('a.top').click(function(){
$("html, body").animate({scrollTop : 0},800);
return false;
});
});


// Smooth Scroll Too Snippit

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


$('.banner').unslider({
  speed: 500,               //  The speed to animate each slide (in milliseconds)
  delay: 3000,              //  The delay between slide animations (in milliseconds)
  complete: function() {},  //  A function that gets called after every slide animation
  keys: true,               //  Enable keyboard (left, right) arrow shortcuts
  dots: false,               //  Display dot navigation
  fluid: false              //  Support responsive design. May break non-responsive designs
});

		
	});
	
})(jQuery, this);
