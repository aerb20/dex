(function($) {
    setInterval(function(){
        if($('.posts-slider').length) {
            $('.preloader').hide();
        }
    }, 10000);
    var apiURL = 'https://renemorozowich.com/wp-json';
    var maxPostCount = 10;
    $.ajax( {
        url: apiURL + '/wp/v2/posts/',
        success: function ( posts ) {
            $('.sec-2 .container').append('<div class="posts-slider">');
            $('.sec-2 .container').append('<div class="slider-controls">\n' +
                '            <i class="am-prev fas fa-long-arrow-alt-left"></i>\n' +
                '            <div class="slide-m-dots"></div>\n' +
                '            <i class="am-next fas fa-long-arrow-alt-right"></i>\n' +
                '        </div>');

            for (let i=0; i<=9; i++) {

                let id = posts[i].id;
                let imgid = posts[i].featured_media;
                $('.posts-slider').append('<div class="post-card" data-id=' + id + '>');
                $('.post-card[data-id=' + id + ']').append('<div class="image" data-id=' + id + '>');
                $('.post-card[data-id=' + id + ']').append('<div class="info-card" data-id=' + id + '>');
                $('.info-card[data-id=' + id + ']').append('<h2 class="post-title" data-id=' + id + '>');
                $('.info-card[data-id=' + id + ']').append('<div class="post-content" data-id=' + id + '>');
                $('.info-card[data-id=' + id + ']').append('<a class="btn" href="#" data-id=' + id + '>Button</a>');
                $('.post-title[data-id=' + id + ']').append(posts[i].title.rendered);
                $('.post-content[data-id=' + id + ']').append(posts[i].excerpt.rendered);
                $('.btn[data-id=' + id + ']').attr("href", posts[i].link);

                $.ajax( {
                    url: apiURL + '/wp/v2/media/' + imgid + '/',
                    success: function ( data ) {
                        $('.image[data-id=' + id + ']').css('background-image', 'url(' + data.source_url + ')');
                    },
                    error:  function( err ) {
                        console.log( 'Error: ', err );
                    }
                } );

                $(document).ready(function() {
                    var slickOpts = {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        easing: 'swing',
                        speed: 700,
                        dots: true,
                        arrows: true,
                        adaptiveHeight: true,
                        prevArrow: $(".am-prev"),
                        nextArrow: $(".am-next"),
                        appendDots: $(".slide-m-dots"),
                        customPaging: function(slick,index) {
                            return '<a>' + (index + 1) + '</a>';
                        },
                        responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }]
                    };
                    $('.posts-slider').slick(slickOpts);;
                });
            }
        },
        error:  function( err ) {
            console.log( 'Error: ', err );
        }
    } );
})( jQuery );