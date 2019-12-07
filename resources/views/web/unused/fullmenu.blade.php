@extends('www.layouts.default')

@section('title', 'FULLSCREEN MENU')

@section('head')

    <link href='https://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        $(window).load(function(){
            //$('body').addClass('sys_no-scroll');
            var i = 0;
            $('.sys_full-menu__item').each(function(){
                var element = $(this);
                var src = element.find('.sys_full-menu__item__img').attr('src');
                $(this).css('background-image', 'url('+src+')');

                /* intro animation lasts 8 seconds */
                setTimeout(function(){
                    menuIn(element);
                }, (8500 + (i*500)));

                setTimeout(function(){
                    menuOut(element);
                }, (10500 + (i*500)));
                i++;
            });

            $('.sys_full-menu__splash').addClass('sys_full-menu__splash--animate');
        });

        $(document).ready(function(){
            $('.sys_full-menu__splash').css('background-image', 'url('+$(this).find('.sys_full-menu__splash__img').attr('src')+')');
        });

        function menuIn(element){
            element.addClass('sys_fade-in');
        }

        function menuOut(element){
            element.removeClass('sys_fade-in');
        }


    </script>

@stop

@section('content')

    <div class="sys_full-menu sys_full-menu--eight clearfix">
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__item">
            <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg" class="sys_full-menu__item__img">
            <div class="sys_full-menu__item__overlay">
                <a href="{{ route('web.home') }}">
                    <div class="sys_full-menu__item__overlay__content sys_valign">
                        <h2 class="sys_full-menu__item__overlay__content__title sys_valign__item">Menu item</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="sys_full-menu__splash">
            <img src="http://www.crownparadise.com/uploads/imagenes/46/p18mqdk59o1fsgchl10oo4pt7mh7_bodas-en-puerto-vallarta5-crown-paradise-club-puerto-vallarta.jpg" class="sys_full-menu__splash__img">
            <div class="sys_full-menu__splash__progress"></div>
        </div>
    </div>

@stop