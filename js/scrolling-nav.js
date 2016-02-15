//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) { 
        $(".navbar-fixed-top").addClass("top-nav-collapse");

        $(".img-logo").css({"width": "90px"});
        $(".navbar-tonggle-costum").css({"margin-top": "-20px"});

    } else {

        if(window.innerWidth > 768) {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");

            $(".img-logo").css({"width": "23vh"});
            $(".navbar-tonggle-costum").css({"margin-top": "0px"});
        }
        
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        //console.log("Klik: " + $anchor.attr('href'));

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
