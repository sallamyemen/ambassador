function mainMenuScroll() {
    $('.header').toggleClass('header_scroll', $(window).scrollTop() > 0);
}

$(window).scroll(function() {
    mainMenuScroll();
});

mainMenuScroll();


$(document).on('click', '.video__muted', function() {
    $(this).addClass('active');
    $(this).parents('.video').find('video').get(0).muted = false;
});

$(document).on('click', '.video__muted.active', function() {
    $(this).removeClass('active');
    $(this).parents('.video').find('video').get(0).muted = true;
});

