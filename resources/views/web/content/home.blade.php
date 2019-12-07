@extends('web.layouts.default')

@section('title', trans('web.home_meta_title'))
@section('keywords', trans('web.home_meta_keywords'))
@section('description', trans('web.home_meta_description'))

@section('head')
    <style>
        .vimeo_video{
            display: block;
        }
        .vimeo_video iframe{
            width: 900px;
            height: 501px;
            margin-bottom: -5px;
        }
        @media (max-width: 991px){
            .vimeo_video iframe{
                width: 600px;
                height: 347px;
            }
        }
        @media (max-width: 767px){
            .vimeo_video iframe{
                width: 100%;
                height: auto;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('vendor/vimeo/js/vimeo-player-api.min.js') }}"></script>
    <script>
        var player = new Vimeo.Player('vimeo_video');
        $('#videoModal').on('shown.bs.modal', function(){
            player.setVolume(0.5);
            player.play();
        }).on('hide.bs.modal', function(){
            player.pause();
        });
    </script>
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/parallax/js/parallax.min.js') }}"></script>
    <script>
        $(function(){
            var mySwiper = new Swiper('.sys_main-slider.swiper-container', {
                speed:750,
                //autoplay: 7000,
                autoplayDisableOnInteraction: false,
                // loop:true,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next'
            });

            var mySwiper = new Swiper('.vin_opinion-slider.swiper-container', {
                speed:750,
                //autoplay: 7000,
                autoplayDisableOnInteraction: false,
                loop:true,
                paginationClickable: true,
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next'
            });

            if ($(window).width() <= 767)
            {
                $('.vimeo_video iframe').css('height', ($(window).width() * 0.5556)+'px');
            }
            else
            {
                $('.vimeo_video iframe').removeAttr('style');
            }

            // events
            $('.js-video-track').on('click', function(){
                ga('send', 'event', 'click', 'clickGetVinipad');
            });
        });

        $(window).on('resize', function(){
            if ($(window).width() <= 767)
            {
                $('.vimeo_video iframe').css('height', ($(window).width() * 0.556) + 'px');
            }
            else
            {
                $('.vimeo_video iframe').removeAttr('style');
            }
        });

    </script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_home-main-slider clearfix sys_solid-menu--trigger">
                <div class="sys_main-slider swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="sys_swiper-slide__img-wrapper">
                                <div class="sys_bg-img-wrapper__bg-overlay"></div>
                                <img src="{{ asset('images/home-slide1-1.jpg') }}" class="sys_swiper-slide__img-wrapper__img">
                            </div>
                            <div class="sys_swiper-slide__caption">
                                <div class="sys_inner-container sys_valign">
                                    <div class="sys_valign__item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <h1 class="vin_white-text">{!! __('web.home_slider_header') !!}</h1>
                                                <p class="vin_white-text">{!! __('web.home_slider_sub') !!}</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <a class="js-video-track" data-toggle="modal" data-target="#videoModal">
                                                    <div class="vin_intro-video-wrapper">
                                                        <div class="vin_intro-video-wrapper--inner">
                                                            <i class="material-icons vin_intro-video-button--video">play_arrow</i>
                                                            <img src="{{ asset('images/vinipad_video.png') }}" class="img-responsive">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--@if(user_country() === 'es')--}}
                            {{--<div class="swiper-slide">--}}
                                {{--<div class="sys_swiper-slide__img-wrapper"></div>--}}
                                {{--<div class="sys_swiper-slide__caption">--}}
                                    {{--<div class="sys_inner-container clearfix" id="hip-slide" style="">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<img src="{{ asset('images/hip-logo.jpg') }}" class="img-responsive">--}}
                                                {{--<p class="hip-message">--}}
                                                    {{--¿Quieres conocer vinipad en persona?<br>Date de alta <a href="https://www.expohip.com/visitar/acreditaciones/?cupon=eddi4w" target="_blank">aquí</a> y te invitamos.--}}
                                                {{--</p>--}}
                                                {{--<img src="{{ asset('images/hip-spoon.jpg') }}" class="img-responsive">--}}
                                                {{--<p class="hip-date">19-21 febrero 2017, Madrid - IFEMA</p>--}}
                                                {{--<p class="hip-hashtag">#HIP2017</p>--}}
                                                {{--<a href="http://www.expohip.com" class="hip-link" target="_blank">www.expohip.com</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--<div class="swiper-slide">--}}
                            {{--<div class="sys_swiper-slide__img-wrapper">--}}
                                {{--<div class="sys_bg-img-wrapper__bg-overlay"></div>--}}
                                {{--<img src="{{ asset('images/home-slide1-1.jpg') }}" class="sys_swiper-slide__img-wrapper__img">--}}
                            {{--</div>--}}
                            {{--<div class="sys_swiper-slide__caption">--}}
                                {{--<div class="sys_inner-container sys_valign">--}}
                                    {{--<div class="sys_valign__item">--}}
                                        {{--<h1 class="vin_white-text">{!! __('web.home_slider_header') !!}</h1>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-2 col-sm-3 col-xs-12">--}}
                                                {{--<a class="js-video-track" data-toggle="modal" data-target="#videoModal">--}}
                                                    {{--<i class="material-icons vin_intro-video-button">play_arrow</i>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-10 col-sm-9 col-xs-12">--}}
                                                {{--<h3 class="vin_white-text">{!! __('web.home_slider_sub') !!}</h3>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- /Slides -->
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button swiper-button-prev">
                        <i class="material-icons">keyboard_arrow_left</i>
                    </div>
                    <div class="swiper-button swiper-button-next">
                        <i class="material-icons">keyboard_arrow_right</i>
                    </div>
                </div>
                <div class="vin_slider-stores">
                    <a href="{{ __('web.appStoreUrl') }}" target="_blank">
                        <img src="{{ asset('images/home-apple-' . user_lang() . '.png') }}" class="img-responsive">
                    </a>
                    <a href="{{ __('web.googlePlayUrl') }}" target="_blank">
                        <img src="{{ asset('images/home-google-' . user_lang() . '.png') }}" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
        <div class="sys_content-wrapper clearfix">
            <div class="row vin_section1--home">
                <div class="col-md-7 col-sm-6 col-xs-12 sys_nopadding">
                    <img src="{{ asset('images/home-section1.png') }}">
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 sys_inner-container padding-vertical-100">
                    <h1>{{ __('web.home_sect1_header') }}</h1>
                    <p class="vin_grey-text">
                        {{ __('web.home_sect1_p1') }}
                    </p>
                    <p class="vin_grey-text">
                        {{ __('web.home_sect1_p2') }}
                    </p>
                </div>
            </div>
            <div class="row vin_section2--home">
                <div class="sys_banner" data-parallax="scroll" data-image-src="{{ asset('images/home-section2.jpg') }}">
                    <div class="sys_bg-img-wrapper">
                        <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                        {{--<img src="{{ asset('images/home-section2.jpg') }}" class="sys_bg-img-wrapper__bg-img">--}}
                    </div>
                    <div class="col-md-4 col-md-offset-7 col-sm-6 col-sm-offset-5">
                        <h1 class="vin_white-text">{!! __('web.home_sect2_header') !!}</h1>
                        <p class="vin_white-text">
                            {{ __('web.home_sect2_p1') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row vin_section3--home">
                <div class="col-md-5 col-sm-5 col-xs-12 sys_inner-container">
                    <h1>{{ __('web.home_sect3_header') }}</h1>
                    <p class="vin_grey-text">
                        {!! __('web.home_sect3_p1') !!}
                    </p>
                    <p class="vin_grey-text">
                        {{ __('web.home_sect3_p2') }}
                    </p>
                    <p class="vin_grey-text">
                        {{ __('web.home_sect3_p3') }}
                    </p>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12  sys_inner-container">
                    <img src="{{ asset('images/home-section3.png') }}" class="img-responsive">
                </div>
            </div>
            <div class="row vin_section4--home">
                <div class="col-md-12">
                    <h1 class="sys_aligncenter margin-bottom-0">{{ __('web.home_sect4_header') }}</h1>
                    <div class="vin_opinion-slider swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="vin_opinion">
                                    <div class="vin_opinion__content">
                                        {!! __('web.home_sect4_opinion1') !!}
                                    </div>
                                    <div class="vin_opinion__author">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <img src="{{ asset('images/rafael-sandoval.png') }}" class="vin_opinion__author__img">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <p class="vin_opinion__author__name">Rafael Sandoval</p>
                                                <p class="vin_opinion__author__info">{{ __('web.opinion_sommelier') . ' ' . __('web.opinion_restaurant') }} Coque<br><small>&#9734;&#9734; {{ __('web.opinion_star') }}s Michelin</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vin_opinion">
                                    <div class="vin_opinion__content">
                                        {!! __('web.home_sect4_opinion2') !!}
                                    </div>
                                    <div class="vin_opinion__author">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <img src="{{ asset('images/raul-munoz.png') }}" class="vin_opinion__author__img">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <p class="vin_opinion__author__name">Raúl Muñoz</p>
                                                <p class="vin_opinion__author__info">{{ __('web.opinion_sommelier').' '.__('web.opinion_restaurant') }} Chirón<br><small>&#9734; {{ __('web.opinion_star') }} Michelin</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button swiper-button-prev">
                            <i class="material-icons">keyboard_arrow_left</i>
                        </div>
                        <div class="swiper-button swiper-button-next">
                            <i class="material-icons">keyboard_arrow_right</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="videoModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span><i class="material-icons">clear</i></button>
                <div id="vimeo_video" class="vimeo_video" data-vimeo-url="{{ __('web.home_video_url') }}"></div>


            </div>
        </div>
    </div>
@endsection