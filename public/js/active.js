(function ($) {
    'use strict';

    if ($.fn.owlCarousel) {
        $(".hero-slides").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 0,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
        });
    }

    if ($.fn.owlCarousel) {
        $(".mosh-service-slides").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 30,
            center: true,
            dots: false,
            nav: true,
            startPosition: 1,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        });
    }

    if ($.fn.owlCarousel) {
        $(".mosh-workflow-slides").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 30,
            center: true,
            dots: true,
            startPosition: 1,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        });
    }

    if ($.fn.owlCarousel) {
        $(".mosh-team-slides").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 50,
            center: true,
            nav: true,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        });
    }

    if ($.fn.owlCarousel) {
        $(".testimonials-slides").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            margin: 0,
            center: true,
            nav: true,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        });
    }
    if ($.fn.owlCarousel) {
    $('.clients').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 40,
        nav: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
}



if ($.fn.owlCarousel) {
    $('.box').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 10000,
        margin: 40,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:5
            },
            1000:{
                items:8
            }
        }
    });
}


if ($.fn.owlCarousel) {
    $('.event').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 5000,
        margin: 40,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
}

if ($.fn.owlCarousel) {
    $('.client-slider').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 5000,
        margin: 40,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
}


if ($.fn.owlCarousel) {
    $('.quantri-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 5000,
        margin: 40,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
}

    $("#search-btn").on('click', function () {
        $("body").toggleClass("search-form-open");
        $(".search-form-area").toggleClass("fadeIn");
    });




    $('.portfolio-menu button.btn').on('click', function () {
        $('.portfolio-menu button.btn').removeClass('active');
        $(this).addClass('active');
    })


    $('ul li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
      });




    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

})(jQuery);