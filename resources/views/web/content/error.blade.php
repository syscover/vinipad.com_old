@extends('web.layouts.default')

@section('title', 'ERROR')

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
                    Error {{ $code }}
                </h1>
            </div>
        </div>
    </div>
@endsection