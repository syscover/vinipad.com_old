//$(window).load(function(){
//    $('.sys_preload-veil').fadeOut(300);
//    $('body').removeClass('sys_no-scroll')
//});
var menuMouseenterTimeout, menuMouseleaveTimeout;
$(function(){

    adjustMainBar();

    $('.sys_top-bar__upper-cart__toggle').on('click', function(){
        var upper_cart = $('.sys_top-bar__upper-cart');
        var top_bar_height;
        if (!upper_cart.hasClass('sys_top-bar__upper-cart--expanded')){
            upper_cart.slideDown(0);
            top_bar_height = $('.sys_top-bar').outerHeight();
            upper_cart.slideUp(0);
            upper_cart.slideDown(300);
            $('.sys_main-bar').animate({
                top: top_bar_height+'px'
            }, 300);
            upper_cart.addClass('sys_top-bar__upper-cart--expanded');
        }
        else{
            upper_cart.slideUp(0);
            top_bar_height = $('.sys_top-bar').outerHeight();
            upper_cart.slideDown(0);
            upper_cart.slideUp(300);
            $('.sys_main-bar').animate({
                top: top_bar_height+'px'
            }, 300);
            upper_cart.removeClass('sys_top-bar__upper-cart--expanded');
        }
    });

    $('.sys_bg-holder').each(function(){
        var holder = $(this);
        var img = holder.find('img');

        holder.css('background-image', 'url("'+img.prop('src')+'")');
        img.css('display', 'none');
    });

    $('.sys_offcanvas-menu__submenu a').on('click', function(){
        var submenu = $(this).siblings('div');
        var total_height = submenu.children('ul').outerHeight();
        if (!$(this).hasClass('sys_expanded')){
            $(this).addClass('sys_expanded');
            submenu.css('height', total_height);
        }
        else{
            $(this).removeClass('sys_expanded');
            submenu.css('height', 0).removeClass('sys_expanded');
        }
    });

    $('.sys_to-top').on('click', function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

    // offcanvas button
    $('.sys_offcanvas-menu').on('show.bs.offcanvas', function(){
        $('.hamburglar').toggleClass('is-open').toggleClass('is-closed');
    }).on('hide.bs.offcanvas', function(){
        $('.hamburglar').toggleClass('is-open').toggleClass('is-closed');
    });

    $('.vin_floating-menu--toggle').each(function(){
        var $this = $(this);
        var submenu = $this.find('ul');
        var floating_menu = $('.vin_floating-menu__content__wrapper__slider');
        floating_menu.append(submenu);
    });

    $(".vin_floating-menu, .vin_floating-menu--toggle").on('mouseenter', function(){
        clearTimeout(menuMouseleaveTimeout);
        var $floatingMenu = $('.vin_floating-menu');
        var width = $floatingMenu.width();
        var left = $(this).offset().left + ($(this).outerWidth()/2);
        var translate = left - (width/2);
        $floatingMenu.css({
            "transform" : "translateX("+translate+"px)",
        });
        if($(this).hasClass('vin_floating-menu--toggle')){
            var $submenu = $($(this).data('floating'));
            var $slider = $(".vin_floating-menu__content__wrapper__slider");
            var nth = ($submenu.data('nth') - 1);
            if($floatingMenu.hasClass('vin_floating-menu--active')){
                $slider.css({
                    "transition" : "transform 0.3s ease-out 0s",
                    "transform" : "translateX(-"+(nth*$submenu.outerWidth())+"px)",
                });
            }
            else{
                $slider.css({
                    "transition" : "transform 0s 0s",
                    "transform" : "translateX(-"+(nth*$submenu.outerWidth())+"px)",
                });
            }
        }
        menuMouseenterTimeout = setTimeout(function(){
            $floatingMenu.addClass('vin_floating-menu--active').css({
                "transition" : "opacity 0.3s ease-out 0s, visibility 0.3s ease-out 0s,top 0.3s ease-out 0s, transform 0.3s ease-out 0s",
            });
        },100);
    }).on('mouseleave', function(){
        clearTimeout(menuMouseenterTimeout);
        var $floatingMenu = $('.vin_floating-menu');
        menuMouseleaveTimeout = setTimeout(function(){
            $floatingMenu.removeClass('vin_floating-menu--active').css({
                "transition" : "opacity 0.3s ease-out 0s, visibility 0.3s ease-out 0s,top 0.3s ease-out 0s, transform 0s",
            });
        }, 250);
    });
});

$(document).scroll(function(){
    var distance = $(window).scrollTop();
    var header = $('header');
    var top_bar = $('.sys_top-bar');
    var to_top = $('.sys_to-top');
    var trigger_height = 0;
    if (top_bar.outerHeight() <= 0){
        trigger_height = 1;
    }
    else{
        trigger_height = top_bar.outerHeight();
    }

    if(distance >= trigger_height){
        header.addClass('sys_fixed-menu');
    }
    else{
        header.removeClass('sys_fixed-menu');
    }
    adjustMainBar();

    if (distance > 200){
        to_top.addClass('inside');
    }
    else{
        to_top.removeClass('inside');
    }

    if(distance > $('.sys_solid-menu--trigger').outerHeight()-60){
        header.addClass('sys_solid-menu');
    }
    else{
        header.removeClass('sys_solid-menu');
    }

});

$(window).resize(function(){
    adjustMainBar();
    setTimeout(function () {
        adjustMainBar();
    }, 250)
});

function adjustMainBar(){
    var header = $('header');
    var top_bar = $('.sys_top-bar');
    var main_bar = $('.sys_main-bar');

    if ( !header.hasClass('sys_fixed-menu'))
    {
        main_bar.css('top', top_bar.outerHeight());
    }
    else
    {
        main_bar.css('top', 0);
    }
}