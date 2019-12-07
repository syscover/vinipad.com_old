@extends('web.layouts.default', ['showBanner' => false])

@section('title', '')

@section('head')
    <style>
        .vimeo_video{
            display: block;
        }
        .vimeo_video iframe{
            width: 750px;
            height: 417px;
            margin-bottom: 50px;
        }
        @media (max-width: 1199px){
            .vimeo_video iframe{
                width: 616px;
                height: 347px;
            }
        }
        @media (max-width: 991px){
            .vimeo_video iframe{
                width: 595px;
                height: 331px;
            }
        }
        @media (max-width: 767px){
            .vimeo_video iframe{
                width: 100%;
                height: auto;
            }
        }
    </style>
@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?hl={{ user_lang() }}"></script>
    <script>
        $(function() {
            $.validator.addMethod('recaptchaCheck', function (value, element) {
                if ($('#g-recaptcha-response').val())
                {
                    $('input[name="recaptchaHidden"]').val($('#g-recaptcha-response').val());
                    return true;
                }
                else
                {
                    return false;
                }
            }, '');

            $('#vin_request-info-form').validate({
                errorClass: "error-label",
                errorElement: 'p',
                rules:{
                    name: {
                        required: true
                    },
                    surname: {
                        required: true
                    },
                    email: {
                        required:true,
                        email: true
                    },
                    country: {
                        required: true
                    },
                    message: {
                        required: true
                    },
                    recaptchaHidden:{
                        recaptchaCheck: true
                    }
                },
                messages: {
                    name: {
                        required: '{{ trans('web.contact_form_validation_name') }}'
                    },
                    surname: {
                        required: '{{ trans('web.banner_form_validation_surname') }}'
                    },
                    email: {
                        required: '{{ trans('web.contact_form_validation_email1') }}',
                        email: '{{ trans('web.contact_form_validation_email2') }}'
                    },
                    country: {
                        required: '{{ trans('web.banner_form_validation_country') }}'
                    },
                    message: {
                        required: '{{ trans('web.contact_form_validation_message') }}'
                    },
                    recaptchaHidden:{
                        recaptchaCheck: '{{ trans('web.contact_form_validation_captcha') }}'
                    }
                },
                submitHandler: function(){
                    $('.vin_fade-submit')
                            .fadeOut(300, function(){
                                $(this)
                                    .html('<p class="sys_aligncenter">{{ trans('web.contact_form_process') }}</p><div class="sys_progress-bar"><div class="sys_progress-bar__progress"></div></div>')
                                    .fadeIn(300);
                            });

                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: '{{ nt_route('web.send.contact-'.user_lang()) }}',
                        data: $('#vin_request-info-form').serialize(),
                        success: function (data) {
                            if(data.status == 'success')
                            {
                                $('.vin_fade-submit')
                                        .fadeOut(300, function(){
                                            $(this)
                                                    .html('<p class="sys_aligncenter">{{ trans('web.contact_form_success') }}</p>')
                                                    .fadeIn(300);
                                        });
                            }
                            else
                            {
                                $('.vin_fade-submit')
                                        .fadeOut(300, function(){
                                            $(this)
                                                    .html('<p class="sys_aligncenter">{{ trans('web.contact_form_error') }}</p>')
                                                    .fadeIn(300);
                                        });
                            }
                        }
                    });
                }
            });
        });

        $(window).on('load', function(){
            if ($(window).width() <= 767)
            {
                $('.vimeo_video iframe').css('height', (($(window).width() - 30) * 0.5556)+'px');
            }
            else
            {
                $('.vimeo_video iframe').removeAttr('style');
            }
        });

        $(window).on('resize', function(){
            if ($(window).width() <= 767)
            {
                $('.vimeo_video iframe').css('height', (($(window).width() - 30) * 0.556) + 'px');
            }
            else
            {
                $('.vimeo_video iframe').removeAttr('style');
            }
        });
    </script>
@endsection

@section('content')
    <div id="request-info" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger padding-vertical-70">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/menu-section2.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text margin-bottom-0 margin-top-40">{{ trans('web.request_header_title') }}</h1>
            </div>
        </div>
        <div class="row vin_section1--request-info">
            <div class="col-md-12 sys_inner-container padding-bottom-0 padding-top-50">
                <h1 class="margin-top-0">{{ trans('web.request_video_header') }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <div id="vimeo_video" class="vimeo_video" data-vimeo-url="{{ trans('web.home_video_url') }}"></div>
                <script src="{{ asset('vendor/vimeo/js/vimeo-player-api.min.js') }}"></script>
                <script>
                    var player = new Vimeo.Player('vimeo_video');
                </script>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <form id="vin_request-info-form" class="sys_form sys_inner-container padding-top-50">
                {{ csrf_field() }}
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1 class="margin-top-0">{{ trans('web.request_form_header') }}</h1>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="vin_checkout-form__input">
                        <label class="sys_form__label" for="name">{{ trans('web.checkout_form_name') }}</label>
                        <input type="text" class="sys_form__input sys_form__input--full-width" name="name" value="">
                    </div>
                    <div class="vin_checkout-form__input">
                        <label class="sys_form__label" for="surname">{{ trans('web.checkout_form_surname') }}</label>
                        <input type="text" class="sys_form__input sys_form__input--full-width" name="surname" value="">
                    </div>
                    <div class="vin_checkout-form__input">
                        <label class="sys_form__label" for="email">{{ trans('web.checkout_form_email') }}</label>
                        <input type="email" class="sys_form__input sys_form__input--full-width" name="email" value="">
                    </div>
                    <div class="vin_checkout-form__input">
                        <label class="sys_form__label" for="country">{{ trans('web.checkout_form_country') }}</label>
                        <div class="sys_form__styled-select">
                            <select class="sys_form__styled-select__select sys_form__styled-select__select--small" name="country">
                                <option selected disabled>{{ trans('web.checkout_form_country_placeholder') }}</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="sys_form__styled-select__icon">
                                <i class="material-icons">keyboard_arrow_down</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
                    <div class="vin_checkout-form__input">
                        <label class="sys_form__label" for="message">{{ trans('web.contact_form_message') }}</label>
                        <textarea class="sys_form__input sys_form__input--full-width" name="message" rows="5"></textarea>
                    </div>
                    <div class="vin_fade-submit">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
                        <input type="text" name="recaptchaHidden">
                        <button type="submit" class="sys_button sys_button--full-width">{{ trans('web.contact_form_button') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection