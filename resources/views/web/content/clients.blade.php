@extends('web.layouts.default')

@section('title', '')

@section('content')
    <div id="clients" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/clients-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">CLIENTES</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        Únete al equipo Vinipad,
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        la mayor red de restaurantes con carta digital del mundo.
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--prices">
            <div class="col-md-12 sys_inner-container">
                <h1 class="sys_aligncenter">Proximamente</h1>
            </div>
        </div>
    </div>
@endsection