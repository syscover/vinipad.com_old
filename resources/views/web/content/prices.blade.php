@extends('web.layouts.default')

@section('title', trans('web.prices_meta_title'))
@section('keywords', trans('web.prices_meta_keywords'))
@section('description', trans('web.prices_meta_description'))

@section('scripts')
    <script src="{{ asset('vendor/parallax/js/parallax.min.js') }}"></script>
@endsection

@section('content')
    <div id="prices" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/prices-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ trans('web.prices_header_title') }}</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        {{ trans('web.prices_header_sub1') }}
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        {{ trans('web.prices_header_sub2') }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--prices sys_same-height-children">
            <div class="col-md-7 col-sm-7 sys_inner-container">
                <h1>
                    {!! trans('web.prices_sect1_header') !!}
                </h1>
                <p class="vin_grey-text">
                    {!! trans('web.prices_sect1_p1') !!}
                </p>
                <p class="vin_grey-text vin_indented">
                    {!! trans('web.prices_sect1_p2') !!}
                </p>
                <p class="vin_grey-text vin_indented">
                    {!! trans('web.prices_sect1_p3') !!}
                </p>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="sys_valign">
                    <div class="sys_valign__item">
                        <span>19,90€<small>/{{ trans('web.prices_per_month') }}</small></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row vin_section2--prices">
            <div class="sys_banner" data-parallax="scroll" data-image-src="{{ asset('images/prices-section2.jpg') }}">
                <div class="sys_bg-img-wrapper">
                    {{--<div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>--}}
                    {{--<img src="{{ asset('images/prices-section2.jpg') }}" class="sys_bg-img-wrapper__bg-img">--}}
                </div>
                <div class="row" >
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="sys_aligncenter vin_white-text">{{ trans('web.prices_sect2_header') }}</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="row sys_same-height-children">
                            <div class="col-md-6 col-sm-6 col-xs-12 padding-25">
                                <div class="vin_contract-method">
                                    <div class="vin_contract-method__img">
                                        <img src="{{ asset('images/prices-section2-shape1.png') }}" class="img-responsive">
                                    </div>
                                    <h3>
                                        {{ trans('web.prices_sect2_p1') }}
                                    </h3>
                                    <h1>150€</h1>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 padding-25">
                                <div class="vin_contract-method">
                                    <div class="vin_contract-method__img">
                                        <img src="{{ asset('images/prices-section2-shape2.png') }}" class="img-responsive">
                                    </div>
                                    <h3>
                                        {!! trans('web.prices_sect2_p2') !!}
                                    </h3>
                                    <h1>300€</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row vin_section3--prices">
            <div class="col-md-12 col-sm-12 col-xs-12 sys_inner-container">
                <h1 class="sys_aligncenter margin-top-0">
                    {!! trans('web.prices_sect3_header') !!}
                </h1>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 padding-25">
                        <div class="vin_caracteristica">
                            <div class="vin_caracteristica__img">
                                <img src="{{ asset('images/prices-section3-caract1.png') }}" class="img-responsive">
                            </div>
                            <h3>{{ trans('web.prices_sect3_char1_header') }}</h3>
                            <p>{{ trans('web.prices_sect3_char1_p') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding-25">
                        <div class="vin_caracteristica">
                            <div class="vin_caracteristica__img">
                                <img src="{{ asset('images/prices-section3-caract2.png') }}" class="img-responsive">
                            </div>
                            <h3>{{ trans('web.prices_sect3_char2_header') }}</h3>
                            <p>{{ trans('web.prices_sect3_char2_p') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding-25">
                        <div class="vin_caracteristica">
                            <div class="vin_caracteristica__img">
                                <img src="{{ asset('images/prices-section3-caract3.png') }}" class="img-responsive">
                            </div>
                            <h3>{{ trans('web.prices_sect3_char3_header') }}</h3>
                            <p>{{ trans('web.prices_sect3_char3_p') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding-25">
                        <div class="vin_caracteristica">
                            <div class="vin_caracteristica__img">
                                <img src="{{ asset('images/prices-section3-caract4.png') }}" class="img-responsive padding-vertical-20">
                            </div>
                            <h3>{{ trans('web.prices_sect3_char4_header') }}</h3>
                            <p>{{ trans('web.prices_sect3_char4_p') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding-25">
                        <div class="vin_caracteristica">
                            <div class="vin_caracteristica__img">
                                <img src="{{ asset('images/prices-section3-caract5.png') }}" class="img-responsive padding-vertical-15">
                            </div>
                            <h3>{{ trans('web.prices_sect3_char5_header') }}</h3>
                            <p>{{ trans('web.prices_sect3_char5_p') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding-25">
                        <div class="vin_caracteristica">
                            <div class="vin_caracteristica__img">
                                <img src="{{ asset('images/prices-section3-caract6.png') }}" class="img-responsive">
                            </div>
                            <h3>{{ trans('web.prices_sect3_char6_header') }}</h3>
                            <p>{{ trans('web.prices_sect3_char6_p') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection