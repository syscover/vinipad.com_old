@extends('web.layouts.default-v4')

@section('title', __('web.contact_meta_title'))
@section('keywords', __('web.contact_meta_keywords'))
@section('description', __('web.contact_meta_description'))

@section('scripts')

@endsection

@section('head')
    <style>
        header.default {
            position: relative;
            height: 62px;
        }
        .rate {
            border: 2px solid #d24e93;
            border-radius: 10px;
            min-width: 350px;
            padding: 10px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .rate .title {
            margin-bottom: 30px;
        }
        .rate .features {
            margin-bottom: 30px;
        }
        .rate .amount {
            margin-bottom: 30px;
            font-weight: bold;
        }
        .rate .stripe {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="container-fluid contact">
        @if(isset($stripeOk) && $stripeOk)
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div>
                        <h1>{{ __('stripe.ok') }}</h1>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="rate">
                    <div class="title d-flex justify-content-center">
                        <img src="{{ asset('images/vinipad-stripe.png') }}">
                    </div>
                    <div class="features">
                        <ul>
                            @foreach($product->get('features') as $feature)
                                <li>{{ __($feature) }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="amount d-flex justify-content-center">
                        {{ $product->get('labelAmount') }} {{ $product->get('labelRecurrent') ? '/ ' . __($product->get('labelRecurrent')) : null }}
                    </div>

                    @if(! isset($stripeOk))
                        <div class="stripe d-flex justify-content-center">
                            <form action="{{ nt_route('web.stripe_checkout-' . user_lang()) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" value="{{ $product->get('product_id') }}">

                                <script src="https://checkout.stripe.com/checkout.js"
                                        class="stripe-button"
                                        data-key="{{ $publishKey }}"
                                        data-amount="{{ $product->get('amount') }}"
                                        data-name="VINIPAD"
                                        data-description="{{ __('stripe.description') }}"
                                        data-image="{{ asset('images/vinipad-stripe.png') }}"
                                        data-locale="{{ user_lang() }}"
                                        data-zip-code="false"
                                        data-label="{{ __('stripe.pay') }}"
                                        data-currency="{{ $product->get('currency') }}">
                                </script>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection