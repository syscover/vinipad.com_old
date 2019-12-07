@extends('web.layouts.default', ['showBanner' => false])

@section('title', 'ERROR 404 - Vinipad')

@section('head')

@endsection

@section('content')
    <div id="error" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/prices-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ trans('web.error_404_header') }}</h1>
            </div>
        </div>
        <div class="row vin_section1--error">
            <div class="col-md-12 sys_inner-container">
                <div class="vin_error">
                    <p class="vin_error__code">404</p>
                    <p class="vin_error__message">{{ trans('web.error_404_message') }}</p>
                    <p class="vin_error__desc">{{ trans('web.error_404_desc') }}</p>
                    <img class="vin_error__image" src="{{ asset('images/alert-error.png') }}">
                </div>
            </div>
        </div>
    </div>
@endsection