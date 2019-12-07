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
    <link rel="stylesheet" href="{{ asset('fonts/cocon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/flag-css/css/flag-css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helpers.css') }}">
    <!--[if IE]>
    <style type="text/css">
        .sys_form__styled-select__icon{
            display: none !important;
        }
    </style>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/styles-v3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <noscript>
        <style>
            .sys_main-bar{
                top:60px;
            }
            /*.sys_animate{*/
            /*opacity:1 !important;*/
            /*visibility: visible !important;*/
            /*-webkit-transform: translate(0, 0) !important;*/
            /*-moz-transform: translate(0, 0) !important;*/
            /*-ms-transform: translate(0, 0) !important;*/
            /*-o-transform: translate(0, 0) !important;*/
            /*transform: translate(0, 0) !important;*/
            /*}*/
        </style>
    </noscript>

    @yield('head')

</head>

<body>
    <div id="sys_body-wrapper">
        @if(! isset($showBanner) || $showBanner == true)
            <div class="vin_fullscreen-form">
                <div class="vin_fullscreen-form__tab">
                    <a>{{ trans('web.fullscreen_form_tab') }} <img src="{{ asset('images/tab_rocket.svg') }}" alt=""></a>
                </div>
                <div class="vin_fullscreen-form__overlay">
                    <div class="vin_fullscreen-form__overlay__content sys_valign">
                        <div class="vin_fullscreen-form__overlay__content__wrapper sys_valign__item">
                            <a class="vin_fullscreen-form__overlay__content__close">
                                <img src="{{ asset('images/tab_close.svg') }}" alt="close">
                            </a>
                            <form action="" id="vin_quote-form" class="sys_form">
                                {{ csrf_field() }}
                                <p>{{ trans('web.fullscreen_form_title') }}</p>
                                <div class="vin_checkout-form__input">
                                    <input type="text" class="sys_form__input sys_form__input--full-width" name="restaurant_name" placeholder="{{ trans('web.fullscreen_form_restaurant') }}">
                                </div>
                                <div class="vin_checkout-form__input">
                                    <input type="text" class="sys_form__input sys_form__input--full-width" name="client_name" placeholder="{{ trans('web.fullscreen_form_name') }}">
                                </div>
                                <div class="vin_checkout-form__input">
                                    <input type="email" class="sys_form__input sys_form__input--full-width" name="client_email" placeholder="{{ trans('web.fullscreen_form_email') }}">
                                </div>
                                <div class="vin_checkout-form__input">
                                    <div class="sys_form__styled-select">
                                        <select class="sys_form__styled-select__select" name="client_country">
                                            <option selected disabled>{{ trans('web.fullscreen_form_country') }}</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id }}" @if(strtoupper(user_country()) === $country->id) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="sys_form__styled-select__icon">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="vin_checkout-form__input">
                                    <input type="text" class="sys_form__input sys_form__input--full-width" name="client_phone" placeholder="{{ trans('web.fullscreen_form_phone') }}">
                                </div>
                                <div class="vin_fade-submit">
                                    {{--<div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>--}}
                                    {{--<input type="text" name="recaptchaHidden">--}}
                                    <button type="submit" class="sys_button sys_button--full-width">{{ trans('web.fullscreen_form_button') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{--<div class="vin_floating-menu">--}}
            {{--<div class="vin_floating-menu__content">--}}
                {{--<div class="vin_floating-menu__content__wrapper">--}}
                    {{--<div class="vin_floating-menu__content__wrapper__slider"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="sys_top-bar clearfix"></div>
                    <div class="sys_main-bar clearfix">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <nav class="sys_main-menu navbar navbar-default">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle clearfix" data-toggle="offcanvas" data-target=".sys_offcanvas-menu">
                                                    <div id="hamburger" class="hamburglar is-open clearfix">
                                                        <div id="top"></div>
                                                        <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                                        <path id="circle" fill="none" stroke-width="4" stroke-miterlimit="10" d="M16,32h32c0,0,11.723-0.306,10.75-11 c-0.25-2.75-1.644-4.971-2.869-7.151C50.728,7.08,42.767,2.569,33.733,2.054C33.159,2.033,32.599,2,32,2C15.432,2,2,15.432,2,32 c0,16.566,13.432,30,30,30c16.566,0,30-13.434,30-30C62,15.5,48.5,2,32,2S1.875,15.5,1.875,32"></path>
                                                    </svg>
                                                        <div id="bottom"></div>
                                                    </div>
                                                </button>
                                                <a class="navbar-brand" href="{{ nt_route('web.home') }}">
                                                    <div class="sys_logo-wrapper clearfix">
                                                    <span class="sys_logo-wrapper__logo">
                                                        <img src="{{ asset('images/vinipad_logo_white.png') }}" class="img-responsive">
                                                    </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="collapse navbar-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="{{ active_route(['web.home', 'home-' . user_lang()], 'active') }}"><a href="{{ nt_route('web.home') }}">{{ trans('web.menu_home') }}</a></li>
                                                    <li class="vin_floating-menu--toggle {{ active_route('menu-' . user_lang(), 'active') }}" data-floating="#floating-content__menu">
                                                        <a href="{{ nt_route('menu-' . user_lang()) }}">{{ trans('web.menu_menu') }}</a>
                                                        <ul id="floating-content__menu" data-nth="1">
                                                            <li>
                                                                <a>
                                                                    <img src="{{ asset('images/floating_tablet.svg') }}" alt="" onerror="this.src='{{ asset('images/floating_tablet.png') }}'; this.onerror=null;">
                                                                    <span>Carta digital<small>Lorem ipsum dolor sit amet, consectetur elit, sed.</small></span>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    <img src="{{ asset('images/floating_desktop.svg') }}" alt="" onerror="this.src='{{ asset('images/floating_desktop.png') }}'; this.onerror=null;">
                                                                    <span>Showcase<small>Lorem ipsum dolor sit amet, consectetur elit, sed.</small></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    <img src="{{ asset('images/floating_devices.svg') }}" alt="" onerror="this.src='{{ asset('images/floating_devices.png') }}'; this.onerror=null;">
                                                                    <span>Cloud<small>Lorem ipsum dolor sit amet, consectetur elit, sed.</small></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    {{--<li class="{{ active_route('prices-' . user_lang(), 'active') }}"><a href="{{ nt_route('prices-' . user_lang()) }}">{{ trans('web.menu_prices') }}</a></li>--}}
                                                    {{--<li class="{{ active_route('signup-' . user_lang(), 'active') }}"><a href="{{ nt_route('signup-' . user_lang()) }}">{{ trans('web.menu_signup') }}</a></li>--}}
                                                    <li class="{{ active_route('academy-' . user_lang(), 'active') }}">
                                                        <a href="{{ nt_route('academy-' . user_lang()) }}">{{ trans('web.menu_academy') }}</a>
                                                    </li>
                                                    <li class="{{ active_route('faqs-' . user_lang(), 'active') }}">
                                                        <a href="{{ nt_route('faqs-' . user_lang()) }}">{{ trans('web.menu_faqs') }}</a>
                                                    </li>
                                                    <li class="{{ active_route('contact-' . user_lang(), 'active') }}">
                                                        <a href="{{ nt_route('contact-' . user_lang()) }}">{{ trans('web.menu_contact') }}</a>
                                                    </li>
                                                    <li class=" sys_main-menu--apart-left">
                                                        <a class="vin_lang-menu" href="{{ nt_route('getChooseCountry-' . user_lang()) }}">
                                                            <span class="vin_lang-menu__value">{{ user_lang() }}</span>
                                                            <span class="vin_lang-menu__flag flag-{{ user_country() }}"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.navbar-collapse -->
                                        </div><!-- /.container-fluid -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <nav class="sys_offcanvas-menu navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
                            <a class="navmenu-brand" href="{{ nt_route('web.home') }}">
                                <div class="sys_logo-wrapper clearfix">
                                <span class="sys_logo-wrapper__logo">
                                    <img src="{{ asset('images/vinipad_logo_white.png') }}" class="img-responsive">
                                </span>
                                </div>
                            </a>
                            <ul class="nav navmenu-nav">
                                <li class="{{ active_route(['web.home', 'home-' . user_lang()], 'active') }}"><a href="{{ nt_route('web.home') }}">{{ trans('web.menu_home') }}</a></li>
                                <li class="{{ active_route('menu-' . user_lang(), 'active') }}"><a href="{{ nt_route('menu-' . user_lang()) }}">{{ trans('web.menu_menu') }}</a></li>
                                <li class="{{ active_route('academy-' . user_lang(), 'active') }}"><a href="{{ nt_route('academy-' . user_lang()) }}">{{ trans('web.menu_academy') }}</a></li>
                                {{--<li class="{{ active_route('prices-' . user_lang(), 'active') ? 'active' : null }}"><a href="{{ nt_route('prices-' . user_lang()) }}">{{ trans('web.menu_prices') }}</a></li>--}}
                                <li class="{{ active_route('faqs-' . user_lang(), 'active') }}"><a href="{{ nt_route('faqs-' . user_lang()) }}">{{ trans('web.menu_faqs') }}</a></li>
                                <li class="{{ active_route('contact-' . user_lang(), 'active') }}"><a href="{{ nt_route('contact-' . user_lang()) }}">{{ trans('web.menu_contact') }}</a></li>
                                <hr>
                                <li>
                                    <a class="vin_lang-menu" href="{{ nt_route('getChooseCountry-' . user_lang()) }}">
                                        <span class="vin_lang-menu__value">{{ user_lang() }}</span>
                                        <span class="vin_lang-menu__flag flag-{{ user_country() }}"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="sys_bg-img-wrapper">
                                <img src="" class="sys_bg-img-wrapper__bg-img">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="sys_top-footer clearfix">
                        <div class="col-md-12">
                            <div class="row vin_footer_upper">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <p class="vin_white-text"><a><i class="fa fa-whatsapp" aria-hidden="true"></i> +34 658 232 828</a></p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <p class="vin_white-text"><a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;'><i class="fa fa-envelope-o" aria-hidden="true"></i> &#105;&#110;&#102;&#111;&#64;&#118;&#105;&#110;&#105;&#112;&#97;&#100;&#46;&#99;&#111;&#109;</a></p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <p class="vin_white-text"><a href="tel:+34918615871"><i class="fa fa-phone" aria-hidden="true"></i> +34 918 615 871</a></p>
                                </div>
                            </div>
                            <div class="row vin_footer_lower">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="{{ nt_route('web.home') }}" class="vin_footer_logo">
                                        <img src="{{ asset('images/vinipad_logo_white.png') }}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-md-4 col-md-push-4 col-sm-4 col-sm-push-4 col-xs-12">
                                    <p>
                                        <a href="https://www.facebook.com/vinipad" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/vinipad_" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="https://vimeo.com/vinipad" target="_blank"><i class="fa fa-vimeo"></i></a>
                                    </p>
                                </div>
                                <div class="col-md-4 col-md-pull-4 col-sm-4 col-sm-pull-4 col-xs-12">
                                    <p class="vin_grey-text">
                                        <br>
                                        {{ trans('web.copyright') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a id="digital-logo" href="https://digitalh2.com/" target="_blank">
                <img id="digital-logo" src="{{ asset('images/digital-white.png') }}">
            </a>
        </footer>

        <div class="sys_to-top sys_box-shadow">
            <a class="sys_to-top__link">
                <i class="material-icons">arrow_upward</i>
            </a>
        </div>
    </div>

    <!-- scripts -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/additional-methods.js') }}"></script>
    <script src="{{ asset('vendor/jquery-parallax.js/parallax.min.js') }}"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts-v3.js') }}"></script>
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
            $('.vin_fullscreen-form__tab a, .vin_fullscreen-form__overlay__content__close').on('click', function(){
                var $fullscreen_form = $('.vin_fullscreen-form');

                $fullscreen_form.toggleClass('active-form');
                $('body').toggleClass('sys_no-scroll');

                if($fullscreen_form.hasClass('sys_expanded'))
                {
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