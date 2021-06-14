
(function($) {
  "use strict";

  // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  var nav = $('nav');
  var navHeight = nav.outerHeight();

  /*--/ ScrollReveal /Easy scroll animations for web and mobile browsers /--*/
  window.sr = ScrollReveal();
  sr.reveal('.foo', {
    duration: 1000,
    delay: 15
  });

  /*--/ Carousel owl /--*/
  $('#carousel').owlCarousel({
    loop: true,
    margin: -1,
    items: 1,
    nav: true,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
  });

  /*--/ Animate Carousel /--*/
  $('.intro-carousel').on('translate.owl.carousel', function() {
    $('.intro-content .intro-title').removeClass('animate__zoomIn animate__animated').hide();
    $('.intro-content .intro-price').removeClass('animate__fadeInUp animate__animated').hide();
    $('.intro-content .intro-title-top, .intro-content .spacial').removeClass('animate__fadeIn animate__animated').hide();
  });

  $('.intro-carousel').on('translated.owl.carousel', function() {
    $('.intro-content .intro-title').addClass('animate__zoomIn animate__animated').show();
    $('.intro-content .intro-price').addClass('animate__fadeInUp animate__animated').show();
    $('.intro-content .intro-title-top, .intro-content .spacial').addClass('animate__fadeIn animate__animated').show();
  });

  /*--/ Navbar Collapse /--*/
  $('.navbar-toggle-box-collapse').on('click', function() {
    $('body').removeClass('box-collapse-closed').addClass('box-collapse-open');
  });
  $('.close-box-collapse, .click-closed').on('click', function() {
    $('body').removeClass('box-collapse-open').addClass('box-collapse-closed');
    $('.menu-list ul').slideUp(700);
  });

  /*--/ Navbar Menu Reduce /--*/
  $(window).trigger('scroll');
  $(window).bind('scroll', function() {
    var pixels = 50;
    var top = 1200;
    if ($(window).scrollTop() > pixels) {
      $('.navbar-default').addClass('navbar-reduce');
      $('.navbar-default').removeClass('navbar-trans');
    } else {
      $('.navbar-default').addClass('navbar-trans');
      $('.navbar-default').removeClass('navbar-reduce');
    }
    if ($(window).scrollTop() > top) {
      $('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
    } else {
      $('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
    }
  });

  /*--/ Sale Property owl /--*/
  $('#sale-property-carousel').owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
      992: {
        items: 3,
      }
    }
  });

  /*--/ Rent Property owl /--*/
  $('#rent-property-carousel').owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
      992: {
        items: 3,
      }
    }
  });

  /*--/ Property owl owl /--*/
  $('#property-single-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1,
      }
    }
  });

  $('#property-single-carousel .carousel-item-b a').on('click', function() {
        var theSrc = $(this).find('img').attr('src');
        var owlModal = $('#owl-modal');
        owlModal.empty();
        var item = $('<div>', {'class' : 'item'}).appendTo(owlModal);
        $('<img>', {'src' : theSrc}).appendTo(item);

        // Add others images
        $('#owl-onpage .item a').each(function (i,e) {
            var otherSrc = $(e).find('img').attr('src');
            var item = $('<div>', {'class' : 'item'}).appendTo(owlModal);
            $('<img>', {'src' : otherSrc}).appendTo(item);
        });

        // Call the carousel after clicked on 'a'
        owlModal.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            pagination: false,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
              0: {
                items: 1,
              }
            }
        });

        $('#GListModalGallery').unbind().on('hidden.bs.modal', function () {
            owlModal.data('owlCarousel').destroy();
        });
  });

  // $('.popup-gallery').magnificPopup({
	// 	delegate: '.owl-item:not(.cloned) a',
	// 	type: 'image',
	// 	removalDelay: 500, //delay removal by X to allow out-animation
  //   closeOnContentClick: false,
	// 	closeBtnInside: false,
	// 	mainClass: 'mfp-with-zoom mfp-img-mobile',
	// 	image: {
	// 		verticalFit: true
	// 	},
	// 	gallery: {
	// 		enabled: true
	// 	},
	// 	zoom: {
	// 		enabled: true,
	// 		duration: 300,
	// 		opener: function(element) {
	// 			return element.find('img');
	// 		}
	// 	}
	// });

  /*--/ News owl /--*/
  $('#new-carousel').owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
      992: {
        items: 3,
      }
    }
  });

  /*--/ Testimonials owl /--*/
  $('#testimonial-carousel').owlCarousel({
    margin: 30,
    autoplay: true,
    nav: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeInUp',
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
      992: {
        items: 4,
      }
    }
  });

})(jQuery);