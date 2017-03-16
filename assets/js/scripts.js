jQuery(document).ready(function( $ ) {

/*-------------------------------------
| Hamburger Menu
-------------------------------------*/
$('nav.main .fa-bars').click(function(){
    $('body').toggleClass('hamburger-expanded');
});


function pinned_nav(){

    var howFar = $(window).scrollTop();

    if (howFar > 188)
    {
        $('body').addClass('nav-pinned');

    }
    else {
        $('body').removeClass('nav-pinned');
    }



}
pinned_nav();
$(window).scroll(pinned_nav);

/*-------------------------------------
| slidehsow
-------------------------------------*/

function slideshow() {

	$('.slideshow .slide').each(function(){
		var imgSrc = $(this).find('img').attr('src');

		// update slide background
	$(this).css({'background-image':'url('+imgSrc+')'});

	});

    // intialize the variable
    var winWidth = 600;
    // win width detection
    function dectect_winWidth(){
        winWidth = $(window).width();
    }
    dectect_winWidth(); //fire off when loads
    $(window).resize(dectect_winWidth); //fire off whenver someone resized the browser


    // move everyting but the first slide
    $('.slideshow .slide:gt(0)').css({'left':winWidth});

    // this will run out slideshow
    var currSlide = 0;
    var nextSlide;
    var myTimer;

    function slide_sliding(){
        console.log('slideshow running test');

        // what is the next slide?
        nextSlide = currSlide + 1;
        if (nextSlide == $('.slideshow .slide').length)
        {
            nextSlide = 0; // reset it to the first slide

        }

        $('.slideshow .slide:eq('+currSlide+')').animate({'left':winWidth * -1}, 1500, function(){
            $('.slideshow .slide:eq('+currSlide+')').css({'left':winWidth});
            currSlide = nextSlide;
            // slide_sliding();
            myTimer = setTimeout(slide_sliding, 2000);

        });
        $('.slideshow .slide:eq('+nextSlide+')').animate({'left':0}, 1500);

    }
    myTimer = setTimeout(slide_sliding, 2000);

    $(window).resize(function() {
        clearTimeout(myTimer);
        $('.slideshow .slide').stop().css({'left':winWidth});
        $('.slideshow .slide:eq('+currSlide+')').stop().css({'left':0});
        myTimer = setTimeout(slide_sliding, 2000);


    });



}

slideshow(); //intialize slideshow



}); //here is the doc ready end