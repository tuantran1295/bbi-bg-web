$(document).ready(function(){
    var body = $('body');
    $(window).scroll(function () {
        // scroll to top
        if($(window).scrollTop() === 0){
            body.removeClass('scroll');
        } else {
            body.addClass('scroll');
        }
        // scroll to bottom
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            body.addClass('endpage');
        } else {
            body.removeClass('endpage');
        }
    });

    var provinceDropdown = $('.city-filter');
    $('#city-filter-ct').bind('click', function () {
        provinceDropdown.toggleClass('show');
    });

    var subMenu = $('.submenu');
    var iconMenu = $('.icon-menu');
    iconMenu.bind('click', function () {
        iconMenu.toggleClass('active');
        subMenu.toggle();
        body.toggleClass('open');
    });

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


