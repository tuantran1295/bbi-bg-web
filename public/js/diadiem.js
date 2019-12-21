window.onload = function () {
    var body = document.getElementsByTagName("body")[0];
    body.onscroll = function () {
        body.classList.add('scroll');
        // scroll to top
        if($(window).scrollTop() === 0){
            body.classList.toggle('scroll');
            body.classList.toggle('endpage');
        }
        // scroll to bottom
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            body.classList.add('endpage');
        }
    }
}

