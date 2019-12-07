$(function(){
    $('.sys_animate--transition-custom').each(function(){
        var trans = $(this).data('transition-custom');
        this.style.setProperty( '-webkit-transition', 'visibility '+trans+'s ease-out 0s, opacity '+trans+'s ease-out 0s, -webkit-transform '+trans+'s ease-out 0s', 'important' );
        this.style.setProperty( '-moz-transition', 'visibility '+trans+'s ease-out 0s, opacity '+trans+'s ease-out 0s, -moz-transform '+trans+'s ease-out 0s', 'important' );
        this.style.setProperty( '-ms-transition', 'visibility '+trans+'s ease-out 0s, opacity '+trans+'s ease-out 0s, -ms-transform '+trans+'s ease-out 0s', 'important' );
        this.style.setProperty( '-o-transition', 'visibility '+trans+'s ease-out 0s, opacity '+trans+'s ease-out 0s, -o-transform '+trans+'s ease-out 0s', 'important' );
        this.style.setProperty( 'transition', 'visibility '+trans+'s ease-out 0s, opacity '+trans+'s ease-out 0s, transform '+trans+'s ease-out 0s', 'important' );
    });
});

$(window).load(function(){
    animationHandler();
});

$(window).scroll(function(){
    animationHandler();
});

function animationHandler(){
    if($('.sys_animate').length > 0){
        var windowBottom=$(window).scrollTop() + $(window).height();
        $('.sys_animate--top-in').each(function(){
            var thisItemTrigger=$(this).offset().top;
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
        $('.sys_animate--bottom-in').each(function(){
            var thisItemTrigger=$(this).offset().top + $(this).height();
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
        $('.sys_animate--middle-in').each(function(){
            var thisItemTrigger=$(this).offset().top + (0.5 * $(this).height());
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
        $('.sys_animate--top-quarter-in').each(function(){
            var thisItemTrigger=$(this).offset().top + (0.25 * $(this).height());
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
        $('.sys_animate--bottom-quarter-in').each(function(){
            var thisItemTrigger=$(this).offset().top + (0.75 * $(this).height());
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
        $('.sys_animate--top-third-in').each(function(){
            var thisItemTrigger=$(this).offset().top + (0.34 * $(this).height());
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
        $('.sys_animate--bottom-third-in').each(function(){
            var thisItemTrigger=$(this).offset().top + (0.67 * $(this).height());
            if(thisItemTrigger <= windowBottom && !$(this).hasClass('sys_animated')){
                $(this).addClass('sys_animated');
            }
        });
    }
}