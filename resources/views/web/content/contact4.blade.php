@extends('web.layouts.default-v4')

@section('title', __('web.contact_meta_title'))
@section('keywords', __('web.contact_meta_keywords'))
@section('description', __('web.contact_meta_description'))

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?hl={{ user_lang() }}"></script>
    <script>
        $(function () {
            $.validator.addMethod('recaptchaCheck', function (value, element) {
                if(grecaptcha.getResponse() == '') {
                    return false;
                } else {
                    return true;
                }
            }, '');

            $('#contactForm').validate({
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
                    hiddenRecaptcha:{
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
                    hiddenRecaptcha:{
                        recaptchaCheck: '{{ __('web.contact_form_validation_captcha') }}'
                    }
                },
                submitHandler: function(){
                    $('.btn-submit')
                        .fadeOut(300, function(){
                            $(this)
                                .html('<div class="alert alert-info" role="alert">{{ __('web.contact_form_process') }}</div>')
                                .fadeIn(300);
                        });



                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: '{{ nt_route('web.send.contact-' . user_lang()) }}',
                        data: $('#contactForm').serialize(),
                        success: function (data) {
                            if(data.status == 'success')
                            {
                                $('.btn-submit')
                                    .fadeOut(300, function(){
                                        $(this)
                                            .html('<div class="alert alert-success" role="alert">{{ __('web.contact_form_success') }}</div>')
                                            .fadeIn(300);
                                    });
                            }
                            else
                            {
                                $('.btn-submit')
                                    .fadeOut(300, function(){
                                        $(this)
                                            .html('<div class="alert alert-danger" role="alert">{{ __('web.contact_form_error') }}</div>')
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

@section('head')
    <style>
        header .title, header .subtitle {
            position: absolute;
            z-index: 2;
            color: white;
        }
        header .title {

            margin-top: 145px;
            left: 100px;
        }
        header .subtitle {
            font-size: 22px;
            margin-top: 225px;
            left: 100px;
        }
        header .subtitle .sedond{
            font-size: 14px;
        }


        .carousel div:first-child {
            padding-left: 0;
        }
        .carousel div:last-child {
            padding-right: 0;
        }
        .carousel div {
            padding: 0 3px;
            margin-bottom: 5px;
        }
        .carousel img {
            width: 100%;
        }





        input.form-control,
        select.form-control,
        textarea.form-control {
            outline: none;
            font-family: Roboto, Raleway, sans-serif !important;
            font-size: 16px;
            line-height: 26px;
            color: rgb(102,102,102);
            background-color: rgb(245,245,245);
            border:none;
            border-radius: 2px;
            width: 100%;
            padding: 10px;
        }
        select.form-control {
            height:46px !important;
        }
        button.btn-primary {
            width: 100%;
            font-size: 16px;
            font-weight: 400;
            padding: 10px 0px;
            border-radius: 2px;
            color: white;
            border: none;
            background-color: rgb(198,34,120);
            outline: none !important;
        }
        button.btn-primary:hover,
        button.btn-primary:active,
        button.btn-primary:focus {
            background-color: rgb(218,54,140) !important;
            box-shadow: none !important;
        }
        .form-control:focus {
            color: #495057;
            background-color: rgb(245,245,245);
            border: none;
            outline: 0;
            box-shadow: none;
        }
        input[name='hiddenRecaptcha'] {
            position: absolute;
            height: 1px !important;
            width: 1px !important;
            opacity: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
        }
        p.error-label {
            position: relative;
            top: 2px;
            left: 2px;
            margin-bottom: -5px;
            color: rgb(225,60,60);
            font-size: 12px;
            line-height: 12px;
            font-weight: 400;
        }


        .svg-inline--fa, .svg-inline--fa {
            margin-right: 15px;
        }
    </style>
@endsection

@section('content-header')
    <div class="overlay"></div>
    <img src="{{ asset('images/web/contact-header.jpg') }}" class="background">
    <h1 class="title">{{ __('web.contact_header_title') }}</h1>
    <h2 class="subtitle">
        <p>{{ __('web.contact_header_sub1') }}</p>
        <p class="sedond">{{ __('web.contact_header_sub2') }}</p>
    </h2>
@endsection

@section('content')
    <div class="container-fluid contact">
        <div class="row">
            <div class="col-md-12 col-lg-6 inner-container">
                <h1 class="margin-top-0">{{ __('web.contact_sect1_header') }}</h1>
                <p>{{ __('web.contact_sect1_p1') }}</p>
                <p>{{ __('web.contact_sect1_p2') }}</p>
                <hr>
                <p>{!! __('web.contact_address1') !!}</p>
                <p>{!! __('web.contact_address2') !!}</p>
                <p><a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;'><i class="far fa-envelope fa-lg"></i>&#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;</a></p>
                <p><a href="tel:+34918615871"><i class="fas fa-phone fa-lg"></i>+34 918 615 871</a></p>
                <p><a href="tel:+34658232828"><i class="fab fa-whatsapp fa-lg"></i>+34 658 232 828</a></p>
            </div>

            <div class="inner-container col-md-12 col-lg-6">
                <form id="contactForm" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="{{ __('web.contact_form_name') }}">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="{{ __('web.contact_form_email') }}">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="country">
                            <option selected disabled>{{ __('web.checkout_form_country_placeholder') }}</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" @if(user_country() === strtolower($country->id)) selected @endif>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="{{ __('web.contact_form_message') }}" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
                        <input type="text" class="hiddenRecaptcha" name="hiddenRecaptcha">
                    </div>
                    <div class="form-group btn-submit">
                        <button class="btn btn-primary" type="submit">{{ __('web.contact_form_button') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row carousel">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img13.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img2.jpg')}}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img11.jpg')}}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('images/faqs-img8.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
@endsection