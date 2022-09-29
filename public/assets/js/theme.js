$('document').ready(function() {
    $('#doctorSlideshow').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        navText: ["<span class='fa-solid fa-chevron-left'></span>", "<span class='fa-solid fa-chevron-right'></span>"],
        responsive: {
            0: {
                items: 1,
            }

        }
    });
});


$('document').ready(function() {
    $("a[data-role='smoothscroll']").click(function(e) {
        e.preventDefault();

        var position = $($(this).attr("href")).offset().top - nav_height;

        $("body, html").animate({
            scrollTop: position
        }, 1000);
        return false;
    });
});

$('document').ready(function() {
    // Back to top
    var backTop = $(".back-to-top");

    $(window).scroll(function() {
        if ($(document).scrollTop() > 400) {
            backTop.css('visibility', 'visible');
        } else if ($(document).scrollTop() < 400) {
            backTop.css('visibility', 'hidden');
        }
    });

    backTop.click(function() {
        $('html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
});


$('document').ready(function() {
    // Tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // Popovers
    $('[data-toggle="popover"]').popover();

    // Page scroll animate
    new WOW().init();
});