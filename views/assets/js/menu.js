$(window).scroll(function() { 
    var scroll = $(window).scrollTop();

    if (scroll > 20) {
        $('.navbar').css('background-color','#fbfbfb');
    } else {
        $('.navbar').css('background-color','transparent');
    }
});
