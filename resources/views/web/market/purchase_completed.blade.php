@extends('www.layouts.default', [
    'showBanner' => false
])

@section('title', 'FINALIZACIÓN DE COMPRA')

@section('head')
    <script>
        $(document).ready(function(){
            // events
            @if($trackPaidOrderId)
                ga('send', 'event', 'goal', 'setSubtotalPaidOrder', 'v1', {{ $order->subtotal_116 }});
            @endif
        });
    </script>
@stop

@section('content')
    <div id="receipt" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/menu-section2.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ trans('web.receipt_header_title') }}</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        {{ trans('web.receipt_header_sub1') }}
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        {{ trans('web.receipt_header_sub2') }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--receipt">
            <div class="col-md-12 sys_inner-container">
                <h1 class="margin-top-0">{{ trans('web.receipt_message_header') }}</h1>
                <p>
                    <span><i class="material-icons">check</i></span>
                    {{ trans('web.receipt_message_message') }}
                </p>
                <p class="thanks">
                    {{ trans('web.receipt_message_thanks') }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 sys_inner-container vin_section1--checkout">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="margin-top-0">{{ trans('web.receipt_summary_header') }}</h1>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="vin_checkout-form__input">
                            <label class="sys_form__label" for="name">{{ trans('web.checkout_form_name') }}</label>
                            <input type="text" class="sys_form__input sys_form__input--full-width" name="name" value="{{ $order->customer_name_116 }}" readonly>
                        </div>
                        <div class="vin_checkout-form__input">
                            <label class="sys_form__label" for="surname">{{ trans('web.checkout_form_surname') }}</label>
                            <input type="text" class="sys_form__input sys_form__input--full-width" name="surname" value="{{ $order->customer_surname_116 }}" readonly>
                        </div>
                        <div class="vin_checkout-form__input">
                            <label class="sys_form__label" for="email">{{ trans('web.checkout_form_email') }}</label>
                            <input type="email" class="sys_form__input sys_form__input--full-width" name="email" value="{{ $order->customer_email_116 }}" readonly>
                        </div>
                        <div class="vin_checkout-form__input">
                            <label class="sys_form__label" for="country">{{ trans('web.checkout_form_country') }}</label>
                            <div class="sys_form__styled-select">
                                <select class="sys_form__styled-select__select sys_form__styled-select__select--small" name="country" disabled>
                                    <option selected disabled>{{ trans('web.checkout_form_country_placeholder') }}</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id_002 }}" @if($order->invoice_country_id_116 === $country->id_002) selected @endif>{{ $country->name_002 }}</option>
                                    @endforeach
                                </select>
                                <div class="sys_form__styled-select__icon">
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
                        @if($insertProducts)
                            <div class="checkout-contract-choice clearfix margin-top-25">
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
                        @else
                            <div class="checkout-contract-choice clearfix margin-top-25">
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
                        @endif
                        <div class="vin_summary-bg margin-top-40">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <p>Subtotal</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <p class="sys_alignright">{{ $order->getSubtotalWithDiscounts() }} €</p>
                                </div>
                            </div>
                            @forelse($rows->first()->tax_rules_117 as $taxRule)
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>{{ $taxRule->name }} ({{ $taxRule->taxRate }}%)</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p class="sys_alignright">{{ $order->getTaxAmount() }} €</p>
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
                                    <h3 class="margin-bottom-0 sys_alignright">{{ $order->getTotal() }} €</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row vin_section2--checkout">
            <div class="col-md-12">
                <h2>{{ trans('web.checkout_next_step_header') }}</h2>
            </div>
            @if($insertProducts)
                <div class="checkout-contract-choice-steps clearfix">
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
            @else
                <div class="checkout-contract-choice-steps clearfix">
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
            @endif

        </div>
    </div>
@stop