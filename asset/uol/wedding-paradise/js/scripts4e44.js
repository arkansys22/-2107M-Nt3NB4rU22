/*
Version : 1.3
*/
jQuery(window).load(function($){
    "use strict";
    // Hide preloader after all contents are loaded
    jQuery('.wdp_preloader').addClass('animated fadeOutDown');
});
jQuery(document).ready(function($){
    "use strict";
    // Open Verticle Navigation
    $('.wdp_verticle_nav_open').on('click', function(){
        $('.wdp_verticle_nav_container').addClass('in');
    });
    // Close Verticle Navigation
    $('.wdp_verticle_nav_close').on('click', function(){
        $('.wdp_verticle_nav_container').removeClass('in');
    });
    // Affix navbar
    $('.wdp_navigation, .wdp_verticle_nav_open').affix({offset: {top: 150} });
    // Bind bootstrap carousel to slideshow element
    $('#wdp_slideshow').carousel({
        interval: 4500,
        pause: "false"
    });
    // Prevent slideshow to stop on click
    $('.carousel-control').on('click', function(){
        $('#wdp_slideshow').carousel({
            interval: 4500,
            pause: "false"
        });
    });
    // Slideshow navigation
    $('#wdp_slideshow .carousel-control.left').on('click',function(){
        $('#wdp_slideshow').carousel('prev');
    });
    $('#wdp_slideshow .carousel-control.right').on('click',function(){
        $('#wdp_slideshow').carousel('next');
    });
    // Adding active class to first item on <ul> list
    $('.wdp_slideshow_inner > .item').first().addClass('active');
    // Add Soundcloud toggle button
    var iframes = $('iframe');
    var key = /soundcloud/;

    for (var i = 0; i != iframes.length; ++i) {
       var match = iframes[i].src.search(key);
       if(match != -1) {
            iframes.css({
                'display': 'none',
                'position': 'fixed',
                'z-index': '999',
                'right': '20px',
                'bottom': '60px',
                'width': '300px',
                'height': '230px',
            });
            $('body').append('<div class="wdp_audio"><a href="javascript:;" class="wdp_mute unmute"></a></div>');
       }
    }
    // Show SoundCloud Player on click
    $('.wdp_audio a').on('click', function(){
        $('iframe').fadeToggle();
        $(this).toggleClass('mute');
    });
    // Close Splash
    $('.wdp_splash_inner').hover( function(){
        $('.wdp_splash_close').addClass('in');
    },
    function(){
        $('.wdp_splash_close').removeClass('in');
    });
    $('.wdp_splash_close').on('click', function(){
        $('.wdp_splash_inner').fadeOut('1000');
    });
    /* Snowfall effect */
    // Template Dir
    var wedding_paradise_template_uri = wedding_paradise_template_directory_uri.wedding_paradise_template_uri;
    var wedding_paradise_snowfall = "/images/heart-snowfall.png";
    var wedding_paradise_snowfall_img = wedding_paradise_template_uri+wedding_paradise_snowfall;
    // Snowfall effect for screen bigger than 768px
    if($(window).width() >= 768){
        setTimeout(function(){
            // use image as snow flakes
            $('#wdp_slideshow').snowfall({image :wedding_paradise_snowfall_img, flakeIndex: 1, minSize: 10, maxSize:32, minSpeed:1 ,maxSpeed:4 });
        },1000);
    }
    // Snowfall effect for screen smaller than 767px
    if($(window).width() < 767){
        setTimeout(function(){
        // use image as snow flakes
        $('#wdp_slideshow').snowfall({image :wedding_paradise_snowfall_img, flakeIndex: 1, minSize: 6, maxSize:12, minSpeed:1 ,maxSpeed:2, flakeCount: 20 });
        },1000);
    }
    /* Scroll Reveal Animation for element(s) on home page */
    if ( wedding_paradise_front_page.is_front_page ) {
        var wdp_site_title = {
            origin   : "top", // 'bottom', 'left', 'top', 'right'
            distance : "10vh", // Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
            duration : 800, // Time in milliseconds
            opacity  : 0, // Starting opacity value, before transitioning to the computed opacity.
            delay    : 0, // No Time Delay
            reset    : false, // Reveals occur once as elements become visible
            easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)', // Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
        };
        var wdp_site_title_groom = {
            origin   : "left",
            distance : "20vh",
            duration : 1000,
            opacity  : 0,
            delay    : 100,
            reset    : false,
        };
        var wdp_site_title_bride = {
            origin   : "right",
            distance : "20vh",
            duration : 1000,
            opacity  : 0,
            delay    : 100,
            reset    : false,
        };
        var wdp_nav = {
            origin   : "bottom",
            distance : "2vh",
            duration : 800,
            opacity  : 0,
            delay    : 800,
            reset    : false,
            mobile   : false, // true/false to control reveal animations on mobile.
        };
        var wdp_splash_inner = {
            origin   : "top",
            distance : "8vh",
            duration : 1400,
            opacity  : 0,
            scale    : 0,
            delay    : 1000,
            reset    : false,
        };
        var wdp_splash_hearts = {
            origin   : "bottom",
            distance : "8vh",
            duration : 1600,
            opacity  : 0,
            scale    : 0,
            delay    : 1200,
            reset    : false,
        };
        var wdp_section_title = {
            origin   : "top",
            distance : "8vh",
            duration : 600,
            opacity  : 0,
            scale    : 0,
            delay    : 10,
            reset    : false,
        };
        var wdp_countdown_item_inner = {
            origin   : "bottom",
            distance : "8vh",
            duration : 800,
            opacity  : 0,
            scale    : 0,
            delay    : 50,
            reset    : false,
        };
        var wdp_about_groom = {
            origin   : "left",
            distance : "20vh",
            duration : 1000,
            opacity  : 0,
            delay    : 100,
            reset    : false,
        };
        var wdp_about_bride = {
            origin   : "right",
            distance : "20vh",
            duration : 1000,
            opacity  : 0,
            delay    : 100,
            reset    : false,
        };
        var wdp_home_event_item = {
            origin   : "bottom",
            distance : "8vh",
            duration : 800,
            opacity  : 0,
            scale    : 0,
            delay    : 50,
            reset    : false,
        };
        var wdp_home_form = {
            origin   : "bottom",
            distance : "8vh",
            duration : 800,
            opacity  : 0,
            scale    : 0,
            delay    : 50,
            reset    : false,
        };
        var wdp_carousel_swiper = {
            origin   : "bottom",
            distance : "8vh",
            duration : 800,
            opacity  : 0,
            scale    : 0,
            delay    : 50,
            reset    : false,
        };
        var wdp_home_registry_inner = {
            origin   : "bottom",
            distance : "8vh",
            duration : 800,
            opacity  : 0,
            scale    : 0,
            delay    : 50,
            reset    : false,
        };
        var wdp_contact_bar_address = {
            origin   : "top",
            distance : "8vh",
            duration : 600,
            opacity  : 0,
            scale    : 0,
            delay    : 10,
            reset    : false,
        };
        var wdp_contact_bar_phone = {
            origin   : "left",
            distance : "20vh",
            duration : 1000,
            opacity  : 0,
            delay    : 100,
            reset    : false,
        };
        var wdp_contact_bar_mail = {
            origin   : "right",
            distance : "20vh",
            duration : 1000,
            opacity  : 0,
            delay    : 100,
            reset    : false,
        };
        var wdp_footer_note = {
            origin   : "bottom",
            distance : "8vh",
            duration : 800,
            opacity  : 0,
            scale    : 0,
            delay    : 600,
            reset    : false,
        };
        window.sr = ScrollReveal() ;
        sr.reveal( ".wdp_site_title", wdp_site_title );
        sr.reveal( ".wdp_site_title .groom", wdp_site_title_groom );
        sr.reveal( ".wdp_site_title .bride", wdp_site_title_bride );
        sr.reveal( ".wdp_nav", wdp_nav );
        sr.reveal( ".wdp_splash_inner", wdp_splash_inner );
        sr.reveal( ".wdp_splash_hearts", wdp_splash_hearts );
        sr.reveal( ".wdp_section_title", wdp_section_title );
        sr.reveal( ".wdp_countdown_item_inner", wdp_countdown_item_inner );
        sr.reveal( ".wdp_about_groom", wdp_about_groom );
        sr.reveal( ".wdp_about_bride", wdp_about_bride );
        sr.reveal( ".wdp_home_event_item", wdp_home_event_item );
        sr.reveal( ".wdp_home_form", wdp_home_form );
        sr.reveal( ".wdp_carousel_swiper", wdp_carousel_swiper );
        sr.reveal( ".wdp_home_registry_inner", wdp_home_registry_inner );
        sr.reveal( ".wdp_contact_bar_address", wdp_contact_bar_address );
        sr.reveal( ".wdp_contact_bar_phone", wdp_contact_bar_phone );
        sr.reveal( ".wdp_contact_bar_mail", wdp_contact_bar_mail );
        sr.reveal( ".wdp_footer_note", wdp_footer_note );
    }
    /* Photo Album Swiper */
    var albumSwiper = new Swiper('.wdp_photo_album_swiper', {
        autoplay: 2500, // Delay between transitions (in ms)
        autoplayDisableOnInteraction: false, // Autoplay will not be disabled after user interactions
        speed: 800, // Duration of transition between slides (in ms) 
        roundLengths: true, // Prevent blurry texts on usual resolution screens
        grabCursor: true, // User will see the "grab" cursor when hover on Swiper
        keyboardControl: true, // Enable navigation through slides using keyboard arrows 
        slidesPerView: 3, // Number of slides per view
        spaceBetween: 5, // Distance between slides in px. 
        loop: false, // Enable continuous loop mode
        // Responsive breakpoints
        breakpoints: {
            375: {
                slidesPerView: 1
            }
        },
        effect: 'coverflow', // Swiper effect
        // Coverflow effect parameters
        coverflow: { 
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1, 
            slideShadows : false // Disable shadows for better performance.
        }
    });
    /* Carousel Swiper */
    var carouselSwiper = new Swiper('.wdp_carousel_swiper', {
        //pagination: '.wdp_carousel_swiper_pagination', // CSS selector of the container with pagination
        nextButton: '.wdp_carousel_swiper_next', // CSS selector of the element that will work like "next" button after click on it
        prevButton: '.wdp_carousel_swiper_prev', //  CSS selector of the element that will work like "prev" button after click on it
        //paginationClickable: true, // Clickable pagination for bullets pagination type
        speed: 800, // Duration of transition between slides (in ms)
        roundLengths: true, // Prevent blurry texts on usual resolution screens
        grabCursor: true, // User will see the "grab" cursor when hover on Swiper
        keyboardControl: true, // Enable navigation through slides using keyboard arrows
        slidesPerView: 4, // Number of slides per view
        spaceBetween: 50, // Distance between slides in px. 
        loop: false, // Enable continuous loop mode
        // Responsive breakpoints
        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            }
        }
    });
    /* FancySelect */
    $('select').fancySelect(); // Passing FancySelect classes to the element(s)
    /* matchHeight */
    $('.wdp_gallery_magnificPopup_item').matchHeight();
    /* MagnificPopup */ 
    var img = jQuery('a').filter(function() {
      var href = jQuery(this).attr('href');
      if(typeof href !=='undefined') {
        href = href.toLowerCase();
        return href.substr(-4) == '.jpg' || href.substr(-5) == '.jpeg' ||  href.substr(-4) == '.png' || href.substr(-4) == '.gif';
      }
    });
   img.magnificPopup({
      type:'image',
      removalDelay: 300,
      gallery: {
              enabled:true
            }, 
      mainClass: 'mfp-with-zoom', // this class is for CSS animation below
      zoom: {
        enabled: true, // By default it's false, so don't forget to enable i
        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function
        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
          // openerElement is the element on which popup was initialized, in this case its <a> tag
          // you don't need to add "opener" option if this code matches your needs, it's defailt one.
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      }
    });
});