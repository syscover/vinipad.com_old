@extends('www.layouts.default')

@section('title', 'HOME')

@section('head')

    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}">
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            var mySwiper = new Swiper('.sys_main-slider.swiper-container', {
                speed:750,
                autoplay: 7000,
                autoplayDisableOnInteraction: false,
                loop:true,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next'
            });
        });
        $(window).load(function(){
            if($('.sys_rotary').length > 0){
                $('.sys_rotary').each(function(){
                    var distanceBottom=$(window).scrollTop() + $(window).height();
                    var thisItemBottom=$(this).offset().top + $(this).height() - 200;
                    if(thisItemBottom <= distanceBottom && !$(this).hasClass('sys_animated')){
                        $(this).addClass('sys_animated');
                    }
                });
            }
        });
        $(window).scroll(function(){
            if($('.sys_rotary').length > 0){
                $('.sys_rotary').each(function(){
                    var distanceBottom=$(window).scrollTop() + $(window).height();
                    var thisItemBottom=$(this).offset().top + $(this).height() - 200;
                    if(thisItemBottom <= distanceBottom && !$(this).hasClass('sys_animated')){
                        $(this).addClass('sys_animated');
                    }
                });
            }
        });

    </script>

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_home-main-slider clearfix">
                <div class="sys_main-slider swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="sys_swiper-slide__img-wrapper">
                                <img src="http://placehold.it/1920x600" class="sys_swiper-slide__img-wrapper__img">
                            </div>
                            <div class="sys_swiper-slide__caption">
                                <div class="sys_inner-container">
                                    <h1 class="">
                                        PLACEHOLDER CAPTION
                                    </h1>
                                    <h2>
                                        Placeholder sub-caption
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sys_swiper-slide__img-wrapper">
                                <img src="http://placehold.it/1920x600" class="sys_swiper-slide__img-wrapper__img">
                            </div>
                            <div class="sys_swiper-slide__caption">
                                <div class="sys_inner-container">
                                    <h1 class="">
                                        PLACEHOLDER CAPTION
                                    </h1>
                                    <h2>
                                        Placeholder sub-caption
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sys_swiper-slide__img-wrapper">
                                <img src="http://placehold.it/1920x600" class="sys_swiper-slide__img-wrapper__img">
                            </div>
                            <div class="sys_swiper-slide__caption">
                                <div class="sys_inner-container">
                                    <h1 class="">
                                        PLACEHOLDER CAPTION
                                    </h1>
                                    <h2>
                                        Placeholder sub-caption
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button swiper-button-prev">
                        <i class="fa fa-chevron-left fa-3x"></i>
                    </div>
                    <div class="swiper-button swiper-button-next">
                        <i class="fa fa-chevron-right fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="sys_content-wrapper clearfix">
            <div class="row">
                <div class="col-md-12 sys_inner-container">
                    <h1 class="sys_logo-wrapper__logo">
                        BRAND NAME
                    </h1>
                    <p class="sys_aligncenter">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.
                    </p>
                    <p class="sys_aligncenter">
                        Ut congue, felis a sodales consequat, est tellus lobortis ipsum, et feugiat nisi justo sed turpis. Duis nec orci eu augue maximus dapibus. Donec euismod laoreet mauris, ut volutpat sem vulputate a. Sed aliquet urna neque, nec hendrerit odio faucibus vitae. In non congue neque. Nullam pharetra mauris vitae magna pellentesque, in vehicula nisl posuere. Quisque imperdiet eget mauris vitae dictum. Ut in semper elit. Donec ipsum purus, rhoncus hendrerit lorem nec, convallis pharetra augue.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 sys_rotary sys_rotary--left" style="background-image: url('http://placehold.it/1920x960');">
                    <div class="sys_rotary__overlay">
                        <div class="sys_rotary__overlay__content">
                            <h1>
                                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                            </h1>
                            <h4>
                                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                            </h4>
                            <h3>
                                Praesent vel quam purus.
                            </h3>
                            <a href="" class="sys_button">
                                Lorem ipsum
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 sys_rotary sys_rotary--right" style="background-image: url('http://placehold.it/1920x960');">
                    <div class="sys_rotary__overlay">
                        <div class="sys_rotary__overlay__content">
                            <h1>
                                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                            </h1>
                            <h4>
                                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                            </h4>
                            <h3>
                                Praesent vel quam purus.
                            </h3>
                            <a href="" class="sys_button">
                                Lorem ipsum
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 sys_rotary sys_rotary--left" style="background-image: url('http://placehold.it/1920x960');">
                    <div class="sys_rotary__overlay">
                        <div class="sys_rotary__overlay__content">
                            <h1>
                                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                            </h1>
                            <h4>
                                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                            </h4>
                            <h3>
                                Praesent vel quam purus.
                            </h3>
                            <a href="" class="sys_button">
                                Lorem ipsum
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop