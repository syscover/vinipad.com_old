@extends('web.layouts.default-v4')

@section('title', trans('web.menu_meta_title'))
@section('keywords', trans('web.menu_meta_keywords'))
@section('description', trans('web.menu_meta_description'))

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}">
    <style>
        section.digital_menu img {
            width: 70vw;
            margin-left: -25vw;
        }

        section.stock img {
            min-width: 50px;
            max-width: 65px;
        }
    </style>
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

    <section class="digital_menu">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="{{ asset('images/menu-section1.png') }}" class="img-fluid">
            </div>
            <div class="col-sm-12 offset-md-2 col-md-6">
                <h2>{{ trans('web.menu_sect1_header') }}</h2>
                <p>
                    {{ trans('web.menu_sect1_p1') }}
                </p>
                <p>
                    {{ trans('web.menu_sect1_p2') }}
                </p>
                <p>
                    {{ trans('web.menu_sect1_p3') }}
                </p>
            </div>
        </div>
    </section>

    <section class="stock" data-parallax="scroll" data-image-src="{{ asset('images/menu-section2.jpg') }}">
        <div class="row">
            <div class="offset-md-6 col-md-1">
                <img src="{{ asset('images/menu-section2-icons.png') }}" class="img-fluid">
            </div>
            <div class="col-md-5">
                <h2>{{ trans('web.menu_sect2_header') }}</h2>
                <p>{{ trans('web.menu_sect2_p1') }}</p>
                <p>{{ trans('web.menu_sect2_p2') }}</p>
            </div>
        </div>
    </section>

    <section class="allergens">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('web.menu_sect3_header') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>{{ trans('web.menu_sect3_p1') }}</p>
                <p>{{ trans('web.menu_sect3_p2') }}</p>
                <p>{{ trans('web.menu_sect3_p3') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('images/menu-section3-alergenos.png') }}" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="web" data-parallax="scroll" data-image-src="{{ asset('images/menu-section4.jpg') }}">
        <div class="row">
            <div class="col-md-12">
                <h2>{!! trans('web.menu_sect4_header') !!}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p>{{ trans('web.menu_sect4_p1') }}</p>
                <p>{{ trans('web.menu_sect4_p2') }}</p>
            </div>
        </div>
    </section>

    <section class="theme">
        <div class="row">
            <div class="col-6">

                <div class="vin_ipad-slider">
                    <img src="{{ asset('images/menu-ipad.png') }}" class="img-fluid">
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
        <div class="row">
            <div class="col-6">
                <h2>{{ trans('web.menu_sect5_header') }}</h2>
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
        </div>
    </section>
@endsection