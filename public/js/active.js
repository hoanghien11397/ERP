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
        nav:true,
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
    $('.client-slider').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 5000,
        margin: 40,
        nav:true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
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
        nav:true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
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


if ($.fn.owlCarousel) {
    $(".danhhieu-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 2000,
        margin: 20,
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


      if ($.fn.imagesLoaded) {
        $('.mosh-portfolio').imagesLoaded(function () {
            // filter items on button click
            $('.portfolio-menu').on('click', 'p', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.mosh-portfolio').isotope({
                itemSelector: '.single_gallery_item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.single_gallery_item'
                }
            });
        });
    }

    $('.portfolio-menu button.btn').on('click', function () {
        $('.portfolio-menu button.btn').removeClass('active');
        $(this).addClass('active');
    })

    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    $('a[href="#"]').click(function ($) {
        $.preventDefault()
    });

    var $window = $(window);

    if ($window.width() > 767) {
        new WOW().init();
    }

    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header_area').addClass('sticky');
        } else {
            $('.header_area').removeClass('sticky');
        }
    });

    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
})(jQuery);