@extends('www.layouts.default', [
    'showBanner' => false
])

@section('title', 'FINALIZACIÓN DE COMPRA')

@section('head')

    <script>
        $(document).on('ready', function(){
            $('[name=insertProducts]').on('change', function(){
                $.checkInsertProducts();
            });
            $.checkInsertProducts();

            $('[name=country], [name=insertProducts]').on('change', function(){
                $('#checkoutForm').attr('action', '{{ nt_route('postShoppingCart-' . user_lang()) }}');
                $('.sys_form__input, .sys_form__styled-select__select, [name=paymentMethod]').addClass('ignore');
                $('#checkoutForm').submit();
            });

            $('#checkoutForm').validate({
                errorClass: "error-label",
                errorElement: 'p',
                ignore: ".ignore",
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
                    paymentMethod: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: '{{ trans('web.banner_form_validation_name') }}'
                    },
                    surname: {
                        required: '{{ trans('web.banner_form_validation_surname') }}'
                    },
                    email: {
                        required: '{{ trans('web.banner_form_validation_email1') }}',
                        email: '{{ trans('web.banner_form_validation_email2') }}'
                    },
                    country: {
                        required: '{{ trans('web.banner_form_validation_country') }}'
                    },
                    paymentMethod: {
                        required: '{{ trans('web.checkout_payment_validation') }}'
                    }
                }
            });
        });

        $.checkInsertProducts = function () {
            if($('[name=insertProducts]').is(':checked'))
            {
                $('.checkout-contract-choice.inactive_checked').fadeOut(300);
                $('.checkout-contract-choice.active_checked').delay(300).fadeIn(300);

                $('.checkout-contract-choice-steps.inactive_checked').fadeOut(300);
                $('.checkout-contract-choice-steps.active_checked').delay(300).fadeIn(300);

                $('[name=product]').val('{{ config('web-vinipad.products.installInsertVinipad') }}');
            }
            else
            {
                $('.checkout-contract-choice.active_checked').fadeOut(300);
                $('.checkout-contract-choice.inactive_checked').delay(300).fadeIn(300);

                $('.checkout-contract-choice-steps.active_checked').fadeOut(300);
                $('.checkout-contract-choice-steps.inactive_checked').delay(300).fadeIn(300);

                $('[name=product]').val('{{ config('web-vinipad.products.installVinipad') }}');
            }
        };
    </script>

@stop

@section('content')
    <div id="checkout" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/menu-section2.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ trans('web.checkout_header_title') }}</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        {{ trans('web.checkout_header_sub1') }}
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        {{ trans('web.checkout_header_sub2') }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--checkout">
            <div class="col-md-12 sys_inner-container">
                <form id="checkoutForm" class="sys_form vin_checkout-form" action="{{ nt_route('postCheckout01-' . user_lang()) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="product" value="{{ $order['product'] }}">
                    <input type="hidden" name="groupId" value="1">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="margin-vertical-0">{{ trans('web.checkout_form_header') }}</h1>
                            <h5 class="margin-bottom-0">{{ trans('web.checkout_customization_notice') }}</h5>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="margin-bottom-20">{{ trans('web.checkout_form_title') }}</h2>
                                    <div class="vin_checkout-form__input">
                                        <label class="sys_form__label" for="name">{{ trans('web.checkout_form_name') }}</label>
                                        <input type="text" class="sys_form__input sys_form__input--full-width" name="name" value="{{ $order['name'] }}">
                                    </div>
                                    <div class="vin_checkout-form__input">
                                        <label class="sys_form__label" for="surname">{{ trans('web.checkout_form_surname') }}</label>
                                        <input type="text" class="sys_form__input sys_form__input--full-width" name="surname" value="{{ $order['surname'] }}">
                                    </div>
                                    <div class="vin_checkout-form__input">
                                        <label class="sys_form__label" for="email">{{ trans('web.checkout_form_email') }}</label>
                                        <input type="email" class="sys_form__input sys_form__input--full-width" name="email" value="{{ $order['email'] }}">
                                    </div>
                                    <div class="vin_checkout-form__input">
                                        <label class="sys_form__label" for="country">{{ trans('web.checkout_form_country') }}</label>
                                        <div class="sys_form__styled-select">
                                            <select class="sys_form__styled-select__select sys_form__styled-select__select--small" name="country">
                                                <option selected disabled>{{ trans('web.checkout_form_country_placeholder') }}</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id_002 }}" @if($order['country'] === $country->id_002) selected @endif>{{ $country->name_002 }}</option>
                                                @endforeach
                                            </select>
                                            <div class="sys_form__styled-select__icon">
                                                <i class="material-icons">keyboard_arrow_down</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class=" margin-bottom-20">{{ trans('web.checkout_payment_header') }}</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio sys_form__radio">
                                                <label>
                                                    <input type="radio" name="paymentMethod" value="1">
                                                    <div class="checkbox_inner">
                                                        <img src="{{ asset('images/checkout-payment-cc.png') }}" class="inactive_checked">
                                                        <img src="{{ asset('images/checkout-payment-cc-selected.png') }}" class="active_checked">
                                                        <p>{{ trans('web.checkout_payment_card') }}</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio sys_form__radio">
                                                <label>
                                                    <input type="radio" name="paymentMethod" value="2">
                                                    <div class="checkbox_inner">
                                                        <img src="{{ asset('images/checkout-payment-pp.png') }}" class="inactive_checked">
                                                        <img src="{{ asset('images/checkout-payment-pp-selected.png') }}" class="active_checked">
                                                        <p>{{ trans('web.checkout_payment_paypal') }}</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="margin-bottom-20">{{ trans('web.checkout_order_header') }}</h2>
                                    <h5 class="margin-top-0 margin-bottom-40">{{ trans('web.checkout_order_installation') }}</h5>
                                    <h4>{{ trans('web.checkout_customization_header') }}</h4>
                                    <div class="checkbox sys_form__checkbox">
                                        <label>
                                            <input type="checkbox" name="insertProducts" @if(isset($order['insertProducts'])) checked @endif> {{ trans('web.checkout_customization_check') }}
                                        </label>
                                    </div>

                                    <!-- without data -->
                                    <div class="checkout-contract-choice clearfix inactive_checked">
                                        <div class="col-md-3 col-sm-3 col-xs-3 sys_nopadding">
                                            <img src="{{ asset('images/checkout-shape.png') }}">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <p>
                                                {!! trans('web.checkout_customization_basic_header') !!}
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span>{{ trans('web.checkout_customization_basic_desc1') }}</span>
                                        </div>
                                    </div>

                                    <!-- with data -->
                                    <div class="checkout-contract-choice clearfix active_checked" style="display: none">
                                        <div class="col-md-3 col-sm-3 col-xs-3 sys_nopadding">
                                            <img src="{{ asset('images/checkout-shape.png') }}">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <p>
                                                {!! trans('web.checkout_customization_complete_header') !!}
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span>{{ trans('web.checkout_customization_complete_desc1') }}</span>
                                            <span>{{ trans('web.checkout_customization_complete_desc2') }}</span>
                                        </div>
                                    </div>

                                    <h5 class="checkout-notice">{!! trans('web.checkout_notice') !!}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="vin_summary-bg">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <p>Subtotal</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <p class="sys_alignright">{{ CartProvider::instance()->getSubtotal() }} €</p>
                                            </div>
                                        </div>
                                        @forelse(CartProvider::instance()->getTaxRules() as $taxRule)
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <p>{{ $taxRule->name }} ({{ $taxRule->getTaxRate() }}%)</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <p class="sys_alignright">{{ $taxRule->getTaxAmount() }} €</p>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>{{ trans('web.checkout_summary_tax_exempt') }}</p>
                                                </div>
                                            </div>
                                        @endforelse
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <hr class="sys_hr margin-top-0 margin-bottom-10">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <h4 class="margin-bottom-0">Total:</h4>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <h3 class="margin-bottom-0 sys_alignright">{{ CartProvider::instance()->getTotal() }} €</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="sys_button sys_button--full-width margin-top-40">{{ trans('web.checkout_form_button') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row vin_section2--checkout">
            <div class="col-md-12">
                <h2>{{ trans('web.checkout_next_step_header') }}</h2>
            </div>
            <div class="checkout-contract-choice-steps active_checked clearfix" style="display: none">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/checkout-step1.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step1') }}
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/checkout-step2.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step2') }}
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/checkout-step3.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step3') }}
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/checkout-step4.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step4') }}
                    </p>
                </div>
            </div>
            <div class="checkout-contract-choice-steps inactive_checked clearfix">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/checkout-step1.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step1') }}
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/checkout-step2.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step2') }}
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/checkout-step4.png') }}" class="img-responsive">
                    <p>
                        {{ trans('web.checkout_next_step4') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
@stop