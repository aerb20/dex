$(document).ready(function(){
    $('.single-yacht-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.single-yacht-nav',
        adaptiveHeight: true
    });
    $('.single-yacht-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.single-yacht-slider',
        dots: false,
        centerMode: true,
        arrows: false,
        focusOnSelect: true
    });
    $('.single-yacht-slider').slickLightbox({
        itemSelector        : 'a',
        navigateByKeyboard  : true
    });
    $('.cvp-checkbox').wrapAll('<div class="checkboxes-filter">');
    $('.cvp-checkbox[data-name="tx_business_category"]').wrapAll('<div class="checkboxes-filter category-filter">');
});

