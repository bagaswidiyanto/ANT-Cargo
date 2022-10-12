(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


   


    new Swiper('.hero-slider', {
        speed: 400,
        loop: true,
        autoplay: false,
        // {
        //   delay: 5000,
        //   disableOnInteraction: false
        // },
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
      });



      /* Gallery Slider - Swiper */
var cardSlider = new Swiper('.galeri-slider', {
	autoplay: false,
	// {
	// 	delay: 4000,
	// 	disableOnInteraction: false
	// },
	loop: true,
	pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
	slidesPerView: 4,
	spaceBetween: 20,
	breakpoints: {
		// when window is <= 767px
		767: {
			slidesPerView: 1
		},
		// when window is <= 991px
		991: {
			slidesPerView: 1,
			spaceBetween: 5
		}
	}
});


      /* Customer Slider - Swiper */
var cardSlider = new Swiper('.customer-slider', {
	autoplay: false,
	// {
	// 	delay: 4000,
	// 	disableOnInteraction: false
	// },
	loop: true,
	pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
	slidesPerView: 6,
	spaceBetween: 20,
	breakpoints: {
		// when window is <= 767px
		767: {
			slidesPerView: 1
		},
		// when window is <= 991px
		991: {
			slidesPerView: 1,
			spaceBetween: 5
		}
	}
});

   

})(jQuery);

const portfolioLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

