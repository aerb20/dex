
$(document).ready(function() {
    var slickOpts = {
        slidesToShow: 1,
        easing: 'swing',
        speed: 700,
        fade: true,
        prevArrow: $(".am-prev"),
        nextArrow: $(".am-next"),
    };
    $('.main-slider').slick(slickOpts);
});