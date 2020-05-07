// Navbar
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            // Navigation Bar
            $('.navbar').removeClass('fadeIn');
            $('body').addClass('shrink');
            $('.navbar').addClass('animated fadeInDown');
        } else {
            $('.navbar').removeClass('fadeInDown');
            $('body').removeClass('shrink');
            $('.navbar').addClass('animated fadeIn');
        }
    });
});

// kinerja panel
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 200) {
            $('.kk').addClass('animated jackInTheBox');
            $('.ck1').addClass('animated rotateInUpLeft');
            $('.ck2').addClass('animated slideInUp');
            $('.ck3').addClass('animated rotateInUpRight');
        }
    });
});

// Carousel panel
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 400) {
            $('.bd-example').addClass('animated slideInLeft');
        }
    });
});

// pelayanan panel
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 1300) {
            $('.pk').addClass('animated rubberBand');
            $('.p1').addClass('animated fadeInLeft');
            $('.p2').addClass('animated fadeInUp');
            $('.p3').addClass('animated fadeInRight');
            $('.p4').addClass('animated fadeInLeft');
            $('.p5').addClass('animated fadeInUp');
            $('.p6').addClass('animated fadeInRight');
        }
    });
});

// contact panel
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 2100) {
            $('.panel-contact').addClass('animated slideInRight');
        }
    });
});

// review panel
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 2700) {
            $('.pr').addClass('animated tada');
            $('.r1').addClass('animated bounceInLeft');
            $('.r2').addClass('animated bounceInUp');
            $('.r3').addClass('animated bounceInRight');
        }
    });
});


// Footer panel
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 3150) {
            $('.panel-footer').addClass('animated slideInUp');
        }
    });
});
