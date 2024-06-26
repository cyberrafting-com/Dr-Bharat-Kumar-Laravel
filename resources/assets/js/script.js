// For fixed Navigation
$(window).scroll(function() {
    if ($(this).scrollTop() > 40) {
        $('.navbar').addClass('fixed-top');
    } else {
        $('.navbar').removeClass('fixed-top');
    }
});

$('#sec-testimonial').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 1
        },
        1200: {
            items: 2
        }
    }
});


$(function() {
    var url = window.location;
    // Will only work if string in href matches with location
    $('.navbar1 .navbar-nav li a[href="' + url + '"]').parent().removeClass('active');

    // Will also work for relative and absolute hrefs
    $('.navbar1 .navbar-nav li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
    // $(this).addClass('active');

})

//h-tab