@extends('www.layouts.default')

@section('title', 'PRODUCT')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/datepicker/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datepicker/css/datepicker-stylefix.css') }}">
    <script src="{{ asset('vendor/moment/js/moment.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/js/datepicker.min.js') }}"></script>
    @if('es'=='es')
        <script src="{{ asset('vendor/datepicker/js/locale/es_ES.js') }}"></script>
    @elseif('es'=='en')
        <script src="{{ asset('vendor/datepicker/js/locale/en_GB.js') }}"></script>
    @elseif('es'=='fr')
        <script src="{{ asset('vendor/datepicker/js/locale/fr_FR.js') }}"></script>
    @endif
    <link rel="stylesheet" href="{{ asset('vendor/flag-css/css/flag-css.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}">
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}"></script>
    <script>
        $(document).ready(function(){

            var mySwiper = new Swiper('.sys_product__slider', {
                speed:750,
                autoplay: 7000,
                autoplayDisableOnInteraction: false,
                loop:true,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next'
            });

            var now = moment(todayString());
            $('.sys_form__datetime--date').datetimepicker({
                format: "DD/MM/YYYY",
                debug: false,
                locale: moment.locale('es'),
                minDate: now,
                useCurrent: false,
                allowInputToggle: true,
                inline:true
            }).on('dp.change', function(ev){
//                $('.sys_form__datetime--date').data("DateTimePicker").hide();
            });

            $('.sys_form__datetime--time').datetimepicker({
                format: "LT",
                stepping: 15,
                enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22],
                debug: false,
                locale: moment.locale('es'),
                allowInputToggle: true,
                inline:true
            }).on('dp.change', function(ev){
//                $('.sys_form__datetime--time').data("DateTimePicker").hide();
            });

            $('.sys_product__form__body__lang .flag').on('click', function(){
                $('.sys_product__form__body__lang .flag').each(function(){
                   $(this).removeClass('active');
                });
                $(this).addClass('active');
                $('.sys_product__form__body__lang').siblings('input').val($(this).data('value'));
            });

        });

        function todayString(){
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();

            if(dd<10) {
                dd='0'+dd
            }

            if(mm<10) {
                mm='0'+mm
            }

            today = yyyy+'-'+mm+'-'+dd;
            return today;
        }
    </script>

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_blue">
                <h3 class="sys_page-header__breadcrumbs">
                    <a href="{{ route('web.home') }}" class="sys_white-text sys_lightgrey-text-hover">Home</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <a href="{{ route('shop') }}" class="sys_white-text sys_lightgrey-text-hover">Shop</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <span class="sys_white-text">Product</span>
                </h3>
                <h1 class="sys_page-header__title sys_white-text margin-vertical-20">Product</h1>
            </div>
        </div>
        <div class="row">
            <div class="sys_product sys_product--alternative sys_inner-container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="sys_product__slider sys_bordered sys_bordered--four swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="http://pangeaofficial.com/wp-content/uploads/2016/01/Madrid-Gran-Via.jpg" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="http://pangeaofficial.com/wp-content/uploads/2016/01/Madrid-Gran-Via.jpg" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="http://pangeaofficial.com/wp-content/uploads/2016/01/Madrid-Gran-Via.jpg" class="img-responsive">
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
                            <div class="col-lg-5">
                                <div class="sys_product__summary clearfix">
                                    <div class="sys_product__summary__feats clearfix">
                                        <div class="sys_product__summary__feats__extra-info">
                                            <p class="sys_product__summary__feats__extra-info__icon">
                                                <i class="material-icons">shopping_cart</i>
                                            </p>
                                            <div class="sys_product__summary__feats__extra-info__tooltip">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </div>
                                        </div>
                                        <div class="sys_product__summary__feats__feats-wrapper clearfix">
                                    <span class="sys_product__summary__feats__feats-wrapper__feature">
                                        <i class="material-icons sys_product__summary__feats__feats-wrapper__feature__icon">access_time</i>
                                        1h.
                                    </span>
                                    <span class="sys_product__summary__feats__feats-wrapper__feature">
                                        <i class="material-icons sys_product__summary__feats__feats-wrapper__feature__icon">access_time</i>
                                        1h.
                                    </span>
                                        </div>
                                    </div>
                                    <div class="sys_product__summary__content">
                                        <h2 class="sys_product__summary__content__title">Lorem ipsum dolor sit amet</h2>
                                        <h5 class="sys_product__summary__content__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                        <p class="sys_product__summary__content__text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.
                                        </p>
                                        <div class="sys_product__summary__content__info clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
                        <div class="sys_product__form clearfix">
                            <section class="sys_product__form__header clearfix">
                                <h3 class="sys_product__form__header__title">Reservar</h3>
                                <div class="sys_product__form__header__price sys_box-shadow">
                                    <span class="sys_product__form__header__price__tag">9999€</span>
                                </div>
                                <div class="sys_secure-payment">
                                    100%<br>
                                    Pago Seguro
                                </div>
                                <div class="sys_product__form__header__payments">
                                    <span><i class="fa fa-cc-visa"></i></span>
                                    <span><i class="fa fa-cc-amex"></i></span>
                                    <span><i class="fa fa-cc-mastercard"></i></span>
                                    <span><i class="fa fa-cc-paypal"></i></span>
                                </div>
                            </section>
                            <div class="sys_product__form__body clearfix">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 sys_product__form__body--half">
                                            <section class="sys_product__form__section">
                                                <h3 class="sys_product__form__section__title">Adultos</h3>
                                                <div class="sys_product__form__section__content">
                                                    <div class="sys_form__styled-select">
                                                        <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                        <div class="sys_form__styled-select__icon">
                                                            <i class="fa fa-chevron-up"></i>
                                                            <i class="fa fa-chevron-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="sys_product__form__section">
                                                <h3 class="sys_product__form__section__title">Idioma</h3>
                                                <div class="sys_product__form__section__content">
                                                    <div class="sys_product__form__body__lang">
                                                        <span class="flag flag-es active" data-value="es"></span>
                                                        <span class="flag flag-gb" data-value="en"></span>
                                                        <span class="flag flag-fr" data-value="fr"></span>
                                                    </div>
                                                    <input name="langChoice" type="hidden" value="">
                                                </div>
                                            </section>
                                            <section class="sys_product__form__section">
                                                <h3 class="sys_product__form__section__title sys_product__form__section__title--apart">Lugar de recogida</h3>
                                                <div class="sys_product__form__section__content sys_product__form__section__content--apart">
                                                    <input class="sys_form__input" type="text" placeholder="Dirección">
                                                </div>
                                            </section>
                                            <section class="sys_product__form__section">
                                                <h3 class="sys_product__form__section__title sys_product__form__section__title--apart">Extras</h3>
                                                <div class="sys_product__form__section__subsection">
                                                    <h4 class="sys_product__form__section__title">Refrescos</h4>
                                                    <div class="sys_product__form__section__content">
                                                        <div class="sys_form__styled-select">
                                                            <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                            <div class="sys_form__styled-select__icon">
                                                                <i class="fa fa-chevron-up"></i>
                                                                <i class="fa fa-chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sys_product__form__section__subsection">
                                                    <h4 class="sys_product__form__section__title">Agua</h4>
                                                    <div class="sys_product__form__section__content">
                                                        <div class="sys_form__styled-select">
                                                            <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                            <div class="sys_form__styled-select__icon">
                                                                <i class="fa fa-chevron-up"></i>
                                                                <i class="fa fa-chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-6 col-sm-6 sys_product__form__body--half">
                                            <section class="sys_product__form__section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="sys_product__form__section__title sys_product__form__section__title--apart">Fecha</h3>
                                                        <div class="sys_product__form__section__content sys_product__form__section__content--apart">
                                                            <div class="sys_form__datetime sys_form__datetime--date"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h3 class="sys_product__form__section__title sys_product__form__section__title--apart margin-top-20">Hora</h3>
                                                        <div class="sys_product__form__section__content sys_product__form__section__content--apart">
                                                            <div class="sys_form__datetime sys_form__datetime--time"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-12 col-sm-12 sys_product__form__body--full-width">
                                            <section class="sys_product__form__section">
                                                <h3 class="sys_product__form__section__title sys_product__form__section__title--total">Total</h3>
                                                <div class="sys_product__form__section__content">
                                                    <h1 class="sys_nomargin">135€</h1>
                                                </div>
                                            </section>
                                            <section class="sys_product__form__section">
                                                <div class="sys_product__form__section__content sys_product__form__section__content--apart">
                                                    <a href="" class="sys_button sys_button--red sys_floatright">
                                                        Lorem ipsum
                                                    </a>
                                                </div>
                                            </section>
                                        </div>
                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop