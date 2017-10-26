$('.collapse').collapse()

//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 300);
	});	


//shut down menu
$(
 '.navbar-collapse ul li a').click(function() {
         $('.navbar-collapse').collapse('hide');
 });

 //wapp button
 jQuery(document).ready(function() {
 
var offset = 100;
 
var duration = 300;
 
jQuery(window).scroll(function() {
 
if (jQuery(this).scrollTop() > offset) {
 
jQuery(".back-to-top").fadeIn(duration);
 
} else {
 
jQuery(".back-to-top").fadeOut(duration);
 
}
 
});
  
});
 gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.

 
// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
    $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
    $("#myCarousel").carousel("prev");
});
// ----------initializing the wow.js ---------

    // Animate and WOW Animation
    var wow = new WOW(
        {
            //offset: 50,
            mobile: false
           // live: true
        }
    );
    wow.init();