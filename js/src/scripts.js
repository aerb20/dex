
$(document).ready(function() {
    var slickOpts = {
        slidesToShow: 1,
        slidesToScroll: 1,
        easing: 'swing',
        speed: 700,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: $(".am-prev"),
        nextArrow: $(".am-next"),
    };
    $('.slider-info').slick(slickOpts);
});