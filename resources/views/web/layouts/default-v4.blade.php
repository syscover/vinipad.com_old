<!DOCTYPE html>
<html lang="{{ user_lang() }}">
<head>
    <base href="{{ config('app.url') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="follow">

    @if(env('APP_ENV') === "production")
        <meta name="robots" content="index,follow">
    @else
        <meta name="robots" content="noindex">
    @endif

    <!-- Android Theme Color -->
    <meta name="theme-color" content="#c62278">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon.png') }}" sizes="100x100">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon192.png') }}" sizes="192x192">

    <!-- for Google -->
    <meta name="description" content="@yield('description', 'carta digital, menú digital, carta de vino, menu para restaurantes, menu para hoteles, sumiller digital, menú ipad, menú android')">
    <meta name="keywords" content="@yield('keywords', 'carta digital, menú digital, carta de vino, menu para restaurantes, menu para hoteles, sumiller digital, menú ipad, menú android')">

    <meta name="author" content="Digital H2">
    <meta name="copyright" content="{{ trans('web.copyright') }}">
    <meta name="application-name" content="pulsar">

    @section('og')
        <!-- Open Graph data -->
        <meta property="og:title" content="@yield('title', 'Vinipad - Carta digital de vinos, comidas, licores y mucho más')">
        <meta property="og:type" content="website">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
    @show

    @section('twitter')
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="@yield('title', 'Vinipad - Carta digital de vinos, comidas, licores y mucho más')">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
    @show

    <title>@yield('title', 'Vinipad - Carta digital de vinos, comidas, licores y mucho más')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius+Sans+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('vendor/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/cocon.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pulsar-core/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pulsar-core/css/helpers/helpers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/flag-css/css/flag-css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburglar.css') }}">

    @yield('head')

    <style>
        .fullscreen-form {
            position: fixed;
            top: 0;
            right: 0;
            left:0;
            z-index: 30;
        }
        .fullscreen-form h2{
            color: rgb(247,247,247);
            margin-bottom: 20px;
            font-size: 25px;
        }
        .fullscreen-form p.error-label{
            color: rgb(247,247,247);
        }
        .fullscreen-form__tab {
            position: absolute;
            right: 0;
            top: 450px;
            -webkit-transform-origin: 100% 0;
            -moz-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            -o-transform-origin: 100% 0;
            transform-origin: 100% 0;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            background-color: rgba(198,34,120,0.8);
            -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.2);
            -moz-box-shadow: 0 0 4px rgba(0,0,0,0.2);
            box-shadow: 0 0 4px rgba(0,0,0,0.2);
            cursor: pointer;
        }
        .fullscreen-form__tab a {
            display: block;
            margin: 0;
            padding: 8px 25px;
            cursor: pointer;
            color: rgb(253,253,253) !important;
            font-size: 18px;
            font-weight: 200;
            line-height: 18px;
            letter-spacing: 0.1rem;
        }
        .fullscreen-form__overlay {
            position: fixed;
            top:0;
            left:0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.73);
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            opacity: 0;
            visibility: hidden;
            overflow: auto;
        }
        .fullscreen-form.active-form .fullscreen-form__overlay {
            opacity: 1;
            visibility: visible;
        }
        .fullscreen-form__overlay__content {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 570px;
            height: 100%;
            min-height: 620px;
            padding: 0 15px;
            margin:0 auto;
        }
        .fullscreen-form__overlay__content__wrapper {
            display: block;
            position: relative;
            width: 100%;
            height: auto;
        }
        .fullscreen-form__overlay__content__close {
            cursor: pointer;
            display: block;
            position: absolute;
            height: 25px;
            width: 25px;
            top: -20px;
            right: -25px;
        }
        .fullscreen-form__overlay__content__close img {
            display: block;
            width: 100%;
            max-width: 100%;
        }

        @media(max-width: 767px){
            .fullscreen-form {
                position: absolute;
            }
            .fullscreen-form__overlay__content {
                min-height: 640px;
            }
            .fullscreen-form__overlay__content__close {
                right: 0;
            }

        }
    </style>
</head>

<body>
    <div class="container-fluid">

        @if(! isset($showBanner) || $showBanner == true)
            <div class="fullscreen-form">
                <div class="fullscreen-form__tab">
                    <a>{{ trans('web.fullscreen_form_tab') }} <i class="fas fa-rocket" data-fa-transform="flip-v flip-h"></i></a>
                </div>
                <div class="fullscreen-form__overlay">
                    <div class="fullscreen-form__overlay__content">
                        <div class="fullscreen-form__overlay__content__wrapper">
                            <a class="fullscreen-form__overlay__content__close"><img src="{{ asset('images/tab_close.svg') }}" alt="close"></a>
                            <form id="vin_quote-form" class="sys_form">
                                {{ csrf_field() }}
                                <h2>{{ trans('web.fullscreen_form_title') }}</h2>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="restaurant_name" placeholder="{{ trans('web.fullscreen_form_restaurant') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="client_name" placeholder="{{ trans('web.fullscreen_form_name') }}">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="client_email" placeholder="{{ trans('web.fullscreen_form_email') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="client_country">
                                        <option selected disabled>{{ trans('web.fullscreen_form_country') }}</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}" @if(strtoupper(user_country()) === $country->id) selected @endif>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="client_phone" placeholder="{{ trans('web.fullscreen_form_phone') }}">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>--}}
                                    {{--<input type="text" name="recaptchaHidden">--}}
                                {{--</div>--}}
                                <button type="submit" class="btn btn-primary">{{ trans('web.fullscreen_form_button') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <header class="default d-flex justify-content-center">

            <nav class="main-nav d-flex justify-content-between">
                <img src="{{ asset('images/web/vinipad-white-logo.png') }}" class="logo img-responsive">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".responsive-menu">
                    <div id="hamburger" class="hamburglar is-close clearfix">
                        <div id="top"></div>
                        <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <path id="circle" fill="none" stroke-width="4" stroke-miterlimit="10" d="M16,32h32c0,0,11.723-0.306,10.75-11 c-0.25-2.75-1.644-4.971-2.869-7.151C50.728,7.08,42.767,2.569,33.733,2.054C33.159,2.033,32.599,2,32,2C15.432,2,2,15.432,2,32 c0,16.566,13.432,30,30,30c16.566,0,30-13.434,30-30C62,15.5,48.5,2,32,2S1.875,15.5,1.875,32"></path>
                        </svg>
                        <div id="bottom"></div>
                    </div>
                </button>

                <ul class="nav">
                    <li class="nav-item {{ active_route(['web.home', 'home-' . user_lang()], 'active') }}">
                        <a href="{{ nt_route('web.home') }}">{{ trans('web.menu_home') }}</a>
                    </li>
                    <li class="nav-item {{ active_route('menu-' . user_lang(), 'active') }}">
                        <a href="{{ nt_route('menu-' . user_lang()) }}">{{ trans('web.menu_menu') }}</a>
                    </li>
                    <li class="nav-item {{ active_route('academy-' . user_lang(), 'active') }}">
                        <a href="{{ nt_route('academy-' . user_lang()) }}">{{ trans('web.menu_academy') }}</a>
                    </li>
                    <li class="nav-item {{ active_route('faqs-' . user_lang(), 'active') }}">
                        <a href="{{ nt_route('faqs-' . user_lang()) }}">{{ trans('web.menu_faqs') }}</a>
                    </li>
                    <li class="nav-item {{ active_route('contact-' . user_lang(), 'active') }}">
                        <a href="{{ nt_route('contact-' . user_lang()) }}">{{ trans('web.menu_contact') }}</a>
                    </li>
                    <li class="nav-item lang-menu-li">
                        <div class="lang-menu-wrapper">
                            <a href="{{ nt_route('getChooseCountry-' . user_lang()) }}">
                                <span class="lang-menu__value">{{ user_lang() }}</span>
                                <span class="lang-menu__flag flag-{{ user_country() }}"></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <nav class="responsive-menu navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
                <img src="{{ asset('images/vinipad_logo_white.png') }}" class="img-fluid">
                <ul class="nav">
                    <li class="{{ active_route(['web.home', 'home-' . user_lang()], 'active') }}"><a href="{{ nt_route('web.home') }}">{{ trans('web.menu_home') }}</a></li>
                    <li class="{{ active_route('menu-' . user_lang(), 'active') }}"><a href="{{ nt_route('menu-' . user_lang()) }}">{{ trans('web.menu_menu') }}</a></li>
                    <li class="{{ active_route('academy-' . user_lang(), 'active') }}"><a href="{{ nt_route('academy-' . user_lang()) }}">{{ trans('web.menu_academy') }}</a></li>
                    {{--<li class="{{ active_route('prices-' . user_lang(), 'active') ? 'active' : null }}"><a href="{{ nt_route('prices-' . user_lang()) }}">{{ trans('web.menu_prices') }}</a></li>--}}
                    <li class="{{ active_route('faqs-' . user_lang(), 'active') }}"><a href="{{ nt_route('faqs-' . user_lang()) }}">{{ trans('web.menu_faqs') }}</a></li>
                    <li class="{{ active_route('contact-' . user_lang(), 'active') }}"><a href="{{ nt_route('contact-' . user_lang()) }}">{{ trans('web.menu_contact') }}</a></li>
                    <hr>
                    <li>
                        <div class="lang-menu-wrapper">
                            <a href="{{ nt_route('getChooseCountry-' . user_lang()) }}">
                                <span class="lang-menu__value">{{ user_lang() }}</span>
                                <span class="lang-menu__flag flag-{{ user_country() }}"></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            @section('content-header')
                <div class="overlay"></div>
                <img src="{{ asset('images/menu-header.jpg') }}" class="background">
            @show
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div>
                            <a href="{{ nt_route('web.home') }}"><img src="{{ asset('images/web/vinipad-white-logo.png') }}" class="img-fluid margin-bottom-25"></a>
                            <a href="{{ __('web.appStoreUrl') }}" target="_blank"><img src="{{ asset('images/web/app-store.png') }}" class="img-fluid margin-bottom-25"></a>
                            <a href="{{ __('web.googlePlayUrl') }}" target="_blank"><img src="{{ asset('images/web/google-play.png') }}" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div>
                            <h3>{{ __('web.other_pages') }}</h3>
                            <ul>
                                <li><a href="{{ nt_route('menu-' . user_lang()) }}"><i class="fas fa-angle-right"></i> {{ trans('web.menu_menu') }}</a></li>
                                <li><a href="{{ nt_route('academy-' . user_lang()) }}"><i class="fas fa-angle-right"></i> {{ trans('web.menu_academy') }}</a></li>
                                <li><a href="{{ nt_route('faqs-' . user_lang()) }}"><i class="fas fa-angle-right"></i> {{ trans('web.menu_faqs') }}</a></li>
                                <li><a href="{{ nt_route('contact-' . user_lang()) }}"><i class="fas fa-angle-right"></i> {{ trans('web.menu_contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div>
                            <h3>{{ __('web.social_networks') }}</h3>
                            <ul>
                                <li><a href="https://www.facebook.com/vinipad" target="_blank"><i class="fab fa-facebook-f fa-lg"></i> Facebook</a></li>
                                <li><a href="https://twitter.com/vinipad_" target="_blank"><i class="fab fa-twitter fa-lg"></i> Twitter</a></li>
                                <li><a href="https://vimeo.com/vinipad" target="_blank"><i class="fab fa-vimeo-v fa-lg"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div>
                            <h3>{{ __('web.menu_contact') }}</h3>
                            <ul>
                                <li><a href="tel:0034658232828"><i class="fab fa-whatsapp"></i> +34 658 232 828</a></li>
                                <li><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;"><i class="far fa-envelope"></i> &#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;</a></li>
                                <li><a href="tel:+34918615871"><i class="fas fa-phone"></i> +34 918 615 871</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="copyright">{{ trans('web.copyright') }}</p>
                    </div>
                </div>
            </div>
        </footer>
        {{--<div class="sys_to-top sys_box-shadow">--}}
            {{--<a class="sys_to-top__link">--}}
                {{--<i class="material-icons">arrow_upward</i>--}}
            {{--</a>--}}
        {{--</div>--}}
    </div>

    <!-- scripts -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
    <!-- /scripts -->

    <script>
        $(function(){

            $('#vin_quote-form').validate({
                errorClass: "error-label",
                errorElement: 'p',
                rules:{
                    restaurant_name: {
                        required: true
                    },
                    client_name: {
                        required: true
                    },
                    client_email: {
                        required:true,
                        email: true
                    },
                    client_country: {
                        required: true
                    },
                    client_phone: {
                        required: true
                    }
                },
                messages: {
                    restaurant_name: {
                        required: '{{ trans('web.fullscreen_form_restaurant_validation') }}'
                    },
                    client_name: {
                        required: '{{ trans('web.fullscreen_form_name_validation') }}'
                    },
                    client_email: {
                        required: '{{ trans('web.fullscreen_form_email_validation1') }}',
                        email: '{{ trans('web.fullscreen_form_email_validation2') }}'
                    },
                    client_country: {
                        required: '{{ trans('web.fullscreen_form_country_validation') }}'
                    },
                    client_phone: {
                        required: '{{ trans('web.fullscreen_form_phone_validation') }}'
                    }
                },
                submitHandler: function(){

                    $('.vin_fullscreen-form .vin_fade-submit')
                        .fadeOut(300, function(){
                            $(this)
                                .html('<p class="sys_aligncenter">{{ trans('web.contact_form_process') }}</p><div class="sys_progress-bar"><div class="sys_progress-bar__progress"></div></div>')
                                .fadeIn(300);
                        });

                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: '{{ nt_route('sendQuoteEmail-'.user_lang()) }}',
                        data: $('#vin_quote-form').serialize(),
                        success: function (data) {
                            if(data.status == 'success')
                            {
                                $('.vin_fullscreen-form .vin_fade-submit')
                                    .fadeOut(300, function(){
                                        $(this)
                                            .html('<p class="sys_aligncenter">{{ trans('web.contact_form_success') }}</p>')
                                            .fadeIn(300);
                                    });
                            }
                            else
                            {
                                $('.vin_fullscreen-form .vin_fade-submit')
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

            // events
            $('.fullscreen-form__tab a, .fullscreen-form__overlay__content__close').on('click', function() {
                var fullscreenForm = $('.fullscreen-form');

                fullscreenForm.toggleClass('active-form');
                $('body').toggleClass('no-scroll');

                if(fullscreenForm.hasClass('sys_expanded')) {
                    ga('send', 'event', 'click', 'clickGetVinipad');
                }
            });
        });
    </script>

    @yield('scripts')

    <!-- Facebook Pixel Vinipad -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '208157686385653', {});
        fbq('track', 'PageView');
    </script>
    <noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=208157686385653&ev=PageView&noscript=1' /></noscript>
    <!-- Facebook Pixel Vinipad -->

    <!-- google -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90537097-2', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- ./google -->
</body>
</html>