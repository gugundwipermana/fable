// script untuk memberi effek pada tombol show dan hidden menu
$(document).ready(function(){
    $(".show-menu").click(function(){
        $(".navbar-costum").css({"left": "0"});
        $(".show-menu").css({"display": "none"});
        $(".hide-menu").css({"display": "block"});
    });

    $(".hide-menu").click(function(){
        $(".navbar-costum").css({"left": "100%"});
        $(".show-menu").css({"display": "block"});
        $(".hide-menu").css({"display": "none"});
    });
});

$('.navbar-toggle').click(function() {
	$(".navbar-costum").css({"left": "0"});
    $(".show-menu").css({"display": "none"});
    $(".hide-menu").css({"display": "block"});
});


// script untuk logo, supaya bisa berubah warna saat memasuki beberapa page baru
var setLogo = function() {
	$('.moveable').each(function() {
		$(this).css('top',
			$('.default').offset().top -
			$(this).closest('section').offset().top
		);
	});
};

$(document).scroll(function() {
	setLogo();
})

setLogo();




		// CAROUSEL
		$(document).ready(function() {
            $('.carousel').carousel({
                   interval: false,
                   wrap: false
            })
        }); 




// HOME ================================================================================================== HOME


$(document).ready(function() {
    $('#video-bg').backgroundVideo({
        pauseVideoOnViewLoss: false,
        parallaxOptions: {
            effect: 1.9
        }
    });
});


$('.onmusic').click(function() {
	/*var vid = document.getElementById("video-bg");
	vid.muted = false;*/

	$('.onmusic').hide();
	$('.offmusic').show();


	var audio = document.getElementById("audio-bg");
	audio.play();
});

$('.offmusic').click(function() {
	/*var vid = document.getElementById("video-bg");
	vid.muted = true;*/

	$('.offmusic').hide();
	$('.onmusic').show();

	var audio = document.getElementById("audio-bg");
	audio.pause();
});

// EVENT ================================================================================================= EVENT

// CAROUSEL


$('.carousel').carousel({
    interval: false,
    wrap: false
});



$('.info').click(function() {
	// mengembalikan ke tampilan awal dialog apabila sebelumnya dibuka dialog yang lain
	$('.imgDialogReserve').hide();
	$('.imgDialogGuest').hide();
	
	$('.imgDialogHome').show();
});

$(".info").fancybox({
	padding: 0,

	helpers: {
		overlay: {
		   locked: false,
		   closeClick: false
		}
	}
});

// dialog popup
$('.fancybox_popup').click(function () {

	/*$('html, body').stop().animate({
        scrollTop: $('#events').offset().top
    }, 500);*/

	$(".fancybox_popup").fancybox({
		padding: 0,

		helpers: {
		    overlay: {
		      locked: false,
		      closeClick: false
		    }
		  },

		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

});


$(".reserve").click(function() {
	var id = $(this).attr("id");
	console.log(id);
	$('.imgDialogHome').hide();
	$('.'+id).show();
});

$(".guestlist").click(function() {
	var id = $(this).attr("id");
	console.log(id);
	$('.imgDialogHome').hide();
	$('.'+id).show();
});

$(".imgDialogRight .back").click(function() {
	$('.imgDialogReserve').hide();
	$('.imgDialogGuest').hide();

	$('.imgDialogHome').show();
});

// ======================================================================================================= DJ
// memberi fungsi pada tombol daftar dj
$(".djanchor").click(function() {
	var id = $(this).attr("id");
	console.log("Klik: "+id);

	if($('.'+id).is(':visible')) {

	} else {

		//$('.djbox').fadeOut(200);
		//$('.'+id).delay(0).fadeIn(200);

		$('.djbox').hide();
		$('.'+id).show();

		// menubah gambar background DJ
		var images_backdj = $(this).attr("data-img");
		console.log("Data Img: "+images_backdj);
		$("#cfabledj").css({"background-image": "url(file_upload/img/djs/"+images_backdj+")"});

		$('.djanchor').removeClass("active");
		$('.djmenu #'+id).addClass("active");
	}
});


$(".djanchori").click(function() {
	var id = $(this).attr("id");
	console.log("Klik: "+id);

	if($('.'+id).is(':visible')) {

	} else {

		//$('.djboxi').fadeOut(200);
		//$('.'+id).delay(0).fadeIn(200);

		$('.djboxi').hide();
		$('.'+id).show();

		// menubah gambar background DJ
		var images_backdj = $(this).attr("data-img");
		console.log("Data Img: "+images_backdj);
		$("#cinternasionaldj").css({"background-image": "url(file_upload/img/djs/"+images_backdj+")"});

		$('.djanchori').removeClass("active");
		$('.djmenu #'+id).addClass("active");
	}
});


(function(){

  var parallax = document.querySelectorAll(".djcontantwrap"),
      speed = 0.5;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();

$(document).ready(function(){
    $('#cinternasionaldj').hide();
});

$(".typedj").click(function() {
	var id = $(this).attr("id");
	var data_dj = $(this).attr("data-dj");

	console.log("Klik: "+id);
	console.log("Data DJ: "+data_dj);

	$('.typedj').removeClass('active');
	$('#'+id).addClass('active');


	//menampilkan dan menghide content
	$('.djcontantwrap').hide();
	$('#'+data_dj).show();


});

// ======================================================================================================= ABOUT





// =================================================================================================== GALLERY
$(document).ready(function(){
    $(".open-gallery").click(function(){

    	var data_gallery = $(this).attr("data-gallery");
		console.log("Klik: "+data_gallery);

		$('.carouselgallery').hide();
		$('#'+data_gallery).show();

		var data_control = $(this).attr("data-control");
		$('#'+data_control).show();


        $(".gallery-section .right").css({"left": "105%"});
        $(".gallery-section .left").css({"left": "-150%"});
        $(".galleryback").css({"display": "block"});

        $(".gallery-section .maskgall").css({"opacity": "1"});


        //$(".effect-muncul").css({"width": "100%", "height": "100%", "margin": "0"});

        /*//menghilangkan border yang mengganggu
        $(".gallery-section .right").css({"border-left": "0px solid #7f2a8c"});
        $(".gallery-section .left").css({"border-right": "0px solid #7f2a8c"});*/

    });

    $(".close-gallery").click(function(){

    	$('.gal-control-costum').hide();

        $(".gallery-section .right").css({"left": "50%"});
        $(".gallery-section .left").css({"left": "-50%"});
        $(".galleryback").css({"display": "none"});

        $(".gallery-section .maskgall").css({"opacity": "1"});

        //$(".effect-muncul").css({"width": "40%", "height": "40%", "margin": "30vh 0 0 30vw"});

        /*//mengembalikan border yang mengganggu
        $(".gallery-section .right").css({"border-left": "5px solid #7f2a8c"});
        $(".gallery-section .left").css({"border-right": "5px solid #7f2a8c"});*/
    });
});

/*

$('.open-gallery').click(function() {

});
*/




function goBack() {
    window.history.back();
}

// HOUSE ============================================================================================ HOUSE

// ================================================================================================== MENU
$('.listcat').click(function() {
	var id = $(this).attr('id');
	var data_cont = $(this).attr('data-cont');

	console.log("Klik: "+id);
	console.log("Data: "+data_cont);

	$('.listcat').removeClass('active');
	$('#'+id).addClass('active');


	$('.carousel').fadeOut(200);
	$('#'+data_cont).delay(210).fadeIn(200);
});

/*$(function(){
    $('.box-menu-scrolll').slimScroll({
        height: '250px'
    });
});*/


// BLOG / PRESS











// PARALAX ---------------------------------------------------------------------------------------------------------------------------!!!

$(window).scroll(function() {
	var wScroll = $(this).scrollTop();
	console.log('vScroll: '+wScroll);

	// effect muncul personnel kotak2
	if(wScroll > $('.events-section').offset().top - ($(window).height() / 1.2)) {

		$('.events-section .grid-unit').each(function(i){

			setTimeout(function() {
				$('.events-section .grid-unit').eq(i).addClass('is-showing');
			}, 200 * (i+1));

		});

	}


	if(wScroll > $('.djcontantwrap').offset().top - $(window).height()) {
		var opacity = ((wScroll - $('.djresidences-section').offset().top) + 400) / (wScroll / 5);
		
		$('.costumcontainer').css({"opacity": opacity});


		var offset = Math.min(0, wScroll - $('.djcontantwrap').offset().top + $(window).height() - 400);

		$('.djmenu').css({'transform': 'translate('+offset+'px, '+Math.abs(offset * 0.2)+'px)'});

		$('.djdes').css({'transform': 'translate('+Math.abs(offset)+'px, '+Math.abs(offset * 0.2)+'px)'});



		$('#fabledj').css({'transform': 'translate('+offset+'px, '+(offset * 0.2)+'px)'});

		$('#internasionaldj').css({'transform': 'translate('+Math.abs(offset)+'px, '+(offset * 0.2)+'px)'});
	}



	if(wScroll > $('.about-section').offset().top - $(window).height()) {
		var opacity = ((wScroll - $('.about-section').offset().top) + 400) / (wScroll / 5);
		
		$('.fadeInBlock').css({"opacity": opacity});

		console.log('offset: '+$('.about-section').offset().top);
		console.log('Opacity: '+opacity);


		var offset = Math.min(0, wScroll - $('.about-section').offset().top + $(window).height() - 500);
		$('.txt-head').css({'transform': 'translate('+offset+'px, 0px)'});
		$('.about-title').css({'transform': 'translate('+Math.abs(offset)+'px, 0px)'});
	}

});

