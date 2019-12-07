$(function(){

    // offcanvas button
    $('.offcanvas').on('show.bs.offcanvas', function() {
        $('.hamburglar').toggleClass('is-open').toggleClass('is-closed');
    }).on('hide.bs.offcanvas', function() {
        $('.hamburglar').toggleClass('is-open').toggleClass('is-closed');
    });

    // solid menu function
    $(document).scroll(function(){
        var distance = $(window).scrollTop();
        var menu = $('header nav.main-nav');
        var transparentHeight = $('header').outerHeight();

        if(distance > transparentHeight - menu.outerHeight()) {
            menu.addClass('solid-menu');
        } else {
            menu.removeClass('solid-menu');
        }
    });

    // float labels
    $('input[type="text"]').focus(function() {
        $('.search-box label').addClass('float-label');
    }).blur(function() {
        if(! $(this).val()) {
            $('.search-box label').removeClass('float-label');
        }
    });
});

