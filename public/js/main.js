window.onload = function () {
    var body = document.getElementsByTagName("body")[0];
    body.onscroll = function () {
        // scroll to top
        if($(window).scrollTop() === 0){
            body.classList.remove('scroll');
        } else {
            body.classList.add('scroll');
        }
        // scroll to bottom
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            body.classList.add('endpage');
        } else {
            body.classList.remove('endpage');
        }
    }
}

$(document).ready(function(){
    $('.home-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $('.image-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false
    });

    $('.thumbnail-slider').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false
    });
});

