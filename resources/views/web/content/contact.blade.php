@extends('web.layouts.default')

@section('title', __('web.contact_meta_title'))
@section('keywords', __('web.contact_meta_keywords'))
@section('description', __('web.contact_meta_description'))

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?hl={{ user_lang() }}"></script>
    <script>
        $(function () {
            $.validator.addMethod('recaptchaCheck', function (value, element) {
                if ($('#g-recaptcha-response').val()) {
                    $('input[name="recaptchaHidden"]').val($('#g-recaptcha-response').val());
                    return true;
                }
                else {
                    return false;
                }
            }, '');

            $('#vin_contact-form').validate({
                errorClass: "error-label",
                errorElement: 'p',
                rules:{
                    name: {
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
                        required: '{{ __('web.contact_form_validation_name') }}'
                    },
                    email: {
                        required: '{{ __('web.contact_form_validation_email1') }}',
                        email: '{{ __('web.contact_form_validation_email2') }}'
                    },
                    country: {
                        required: '{{ __('web.banner_form_validation_country') }}'
                    },
                    message: {
                        required: '{{ __('web.contact_form_validation_message') }}'
                    },
                    recaptchaHidden:{
                        recaptchaCheck: '{{ __('web.contact_form_validation_captcha') }}'
                    }
                },
                submitHandler: function(){
                    $('.vin_fade-submit')
                        .fadeOut(300, function(){
                            $(this)
                                .html('<p class="sys_aligncenter">{{ __('web.contact_form_process') }}</p><div class="sys_progress-bar"><div class="sys_progress-bar__progress"></div></div>')
                                .fadeIn(300);
                        });

                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: '{{ nt_route('web.send.contact-' . user_lang()) }}',
                        data: $('#vin_contact-form').serialize(),
                        success: function (data) {
                            if(data.status == 'success')
                            {
                                $('.vin_fade-submit')
                                    .fadeOut(300, function(){
                                        $(this)
                                            .html('<p class="sys_aligncenter">{{ __('web.contact_form_success') }}</p>')
                                            .fadeIn(300);
                                    });
                            }
                            else
                            {
                                $('.vin_fade-submit')
                                    .fadeOut(300, function(){
                                        $(this)
                                            .html('<p class="sys_aligncenter">{{ __('web.contact_form_error') }}</p>')
                                            .fadeIn(300);
                                    });
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection

@section('content')
    <div id="contact" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/contact-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ __('web.contact_header_title') }}</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        {{ __('web.contact_header_sub1') }}
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        {{ __('web.contact_header_sub2') }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--contact">
            <div class="col-md-6 col-sm-6 sys_inner-container">
                <h1 class="margin-top-0">{{ __('web.contact_sect1_header') }}</h1>
                <p>{{ __('web.contact_sect1_p1') }}</p>
                <p>{{ __('web.contact_sect1_p2') }}</p>
                <hr class="sys_hr">
                <p class="vin_contact-address">{!! __('web.contact_address1') !!}</p>
                <p class="vin_contact-address">{!! __('web.contact_address2') !!}</p>
                <p class="vin_contact-social">
                    <a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;'>
                        <img src="{{ asset('images/contact-mail.png') }}">
                        &#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;
                    </a>
                </p>
                <p class="vin_contact-social">
                    <a href="tel:+34910411688">
                        <img src="{{ asset('images/contact-phone.png') }}">
                        +34 918 615 871
                    </a>
                </p>
                <p class="vin_contact-social">
                    <a>
                        <img src="{{ asset('images/contact-whatsapp.png') }}">
                        +34 658 232 828
                    </a>
                </p>
                <hr class="sys_hr">
            </div>
            <div class="col-md-6 col-sm-6 sys_inner-container">
                <form id="vin_contact-form" class="sys_form" method="post">
                    {{ csrf_field() }}
                    <div class="vin_checkout-form__input">
                        <input type="text" class="sys_form__input sys_form__input--full-width" name="name" placeholder="{{ __('web.contact_form_name') }}">
                    </div>
                    <div class="vin_checkout-form__input">
                        <input type="email" class="sys_form__input sys_form__input--full-width" name="email" placeholder="{{ __('web.contact_form_email') }}">
                    </div>
                    <div class="vin_checkout-form__input">
                        <div class="sys_form__styled-select">
                            <select class="sys_form__styled-select__select sys_form__styled-select__select--small" name="country">
                                <option selected disabled>{{ __('web.checkout_form_country_placeholder') }}</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" @if(user_country() === strtolower($country->id)) selected @endif>{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="sys_form__styled-select__icon">
                                <i class="material-icons">keyboard_arrow_down</i>
                            </div>
                        </div>
                    </div>
                    <div class="vin_checkout-form__input">
                        <textarea class="sys_form__input sys_form__input--full-width" name="message" placeholder="{{ __('web.contact_form_message') }}" rows="5"></textarea>
                    </div>
                    <div class="vin_fade-submit">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
                        <input type="text" name="recaptchaHidden">
                        <button type="submit" class="sys_button sys_button--full-width">{{ __('web.contact_form_button') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row vin_section2--contact">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img13.jpg') }}" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img2.jpg')}}" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img11.jpg')}}" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img8.jpg')}}" class="img-responsive">
            </div>
        </div>
    </div>
@endsection