@extends('web.layouts.default')

@section('title', trans('web.menu_meta_title'))
@section('keywords', trans('web.menu_meta_keywords'))
@section('description', trans('web.menu_meta_description'))

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('vendor/parallax/js/parallax.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}"></script>
    <script>
        $(function(){
            var mySwiper = new Swiper('.vin_screen-slider.swiper-container', {
                speed:500,
                autoplay: 7000,
                autoplayDisableOnInteraction: false,
                // loop:true,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next'
            });

            $('[name=skinOption]').on('change', function(){
                $('[name=skinOption]').each(function(){
                    if ($(this).is(':checked')){
                        $('.vin_screen-slider')
                            .toggleClass('vin_skin-classic')
                            .toggleClass('vin_skin-modern');
                    }
                });
            });
        });
    </script>
@endsection

@section('content')
    <div id="menu" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/menu-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ trans('web.menu_header_title') }}</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        {{ trans('web.menu_header_sub1') }}
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        {{ __('web.menu_header_sub2') }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--menu">
            <div class="col-md-7 col-sm-6 sys_inner-container">
                <img src="{{ asset('images/menu-section1.png') }}">
            </div>
            <div class="col-md-5 col-sm-6 sys_inner-container">
                <h1 class="margin-top-0">{{ trans('web.menu_sect1_header') }}</h1>
                <p class="vin_grey-text">
                    {{ trans('web.menu_sect1_p1') }}
                </p>
                <p class="vin_grey-text">
                    {{ trans('web.menu_sect1_p2') }}
                </p>
                <p class="vin_grey-text">
                    {{ trans('web.menu_sect1_p3') }}
                </p>
            </div>
        </div>
        <div class="row vin_section2--menu">
            <div class="sys_banner" data-parallax="scroll" data-image-src="{{ asset('images/menu-section2.jpg') }}">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                </div>
                <div class="col-md-5 col-md-offset-7 col-sm-7 col-sm-offset-5">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2 padding-horizontal-0 padding-vertical-50">
                            <img src="{{ asset('images/menu-section2-icons.png') }}" class="img-responsive">
                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                            <h1 class="vin_white-text">{{ trans('web.menu_sect2_header') }}</h1>
                            <p class="vin_white-text">
                                {{ trans('web.menu_sect2_p1') }}
                            </p>
                            <p class="vin_white-text">
                                {{ trans('web.menu_sect2_p2') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row vin_section3--menu">
            <div class="col-md-12 col-sm-12 col-xs-12 sys_inner-container">
                <h1 class="sys_aligncenter">{{ trans('web.menu_sect3_header') }}</h1>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="vin_grey-text">
                            {{ trans('web.menu_sect3_p1') }}
                        </p>
                        <p class="vin_grey-text">
                            {{ trans('web.menu_sect3_p2') }}
                        </p>
                        <p class="vin_grey-text">
                            {{ trans('web.menu_sect3_p3') }}
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-6"></div>
                </div>
                <br>
                <img src="{{ asset('images/menu-section3-alergenos.png') }}" class="img-responsive">
            </div>
        </div>
        <div class="row vin_section4--menu">
            <div class="sys_banner" data-parallax="scroll" data-image-src="{{ asset('images/menu-section4.jpg') }}">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                </div>
                <div class="col-md-5 col-sm-7">
                    <h1 class="vin_white-text">{!! trans('web.menu_sect4_header') !!}</h1>
                    <p class="vin_white-text">
                        {{ trans('web.menu_sect4_p1') }}
                    </p>
                    <p class="vin_white-text">
                        {{ trans('web.menu_sect4_p2') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row vin_section5--menu">
            <div class="col-lg-4 col-lg-push-8 col-md-5 col-md-push-7 col-sm-12 col-xs-12">
                <h1>{{ trans('web.menu_sect5_header') }}</h1>
                <p>{{ trans('web.menu_sect5_p1') }}</p>
                <p>{{ trans('web.menu_sect5_p2') }}</p>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="radio" name="skinOption" id="skinOptionClassic" value="vin_skin-classic">
                        <label for="skinOptionClassic">Skin clásico</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="radio" name="skinOption" id="skinOptionModern" value="vin_skin-modern" checked>
                        <label for="skinOptionModern">Skin moderno</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-lg-pull-4 col-md-7 col-md-pull-5 col-sm-12 col-xs-12">
                <div class="vin_ipad-slider">
                    <img src="{{ asset('images/menu-ipad.png') }}" class="img-responsive">
                    <div class="vin_ipad-slider__content">
                        <div class="vin_screen-slider vin_skin-modern swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/lang_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/lang_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/drink_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/drink_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/type_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/type_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/list_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/list_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/map_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/map_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/sommelier_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/sommelier_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/wine_type_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/wine_type_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/vinipad_screenshots/wine_modern.jpg') }}" class="img-responsive vin_skin-modern">
                                    <img src="{{ asset('images/vinipad_screenshots/wine_classic.jpg') }}" class="img-responsive vin_skin-classic">
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection