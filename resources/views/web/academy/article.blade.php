@extends('web.layouts.default-v4')

@section('title', __('web.vinipad_digital_menu') . ' - ' . $article->title )
@section('keywords', __('web.home_meta_keywords'))
@section('description', __('web.home_meta_description'))

@section('head')
    @include('web.academy.includes.instant-search-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/froala/css/froala_style.min.css') }}">
    <style>
        /*=============== FROALA VIEW ===============*/
        .fr-view {
            padding: 20px 110px 50px 110px;
        }
        .fr-view h1:first-child {
            margin-bottom: 25px;
        }
        .fr-view hr {
            margin-bottom: 25px;
        }
        @media (max-width: 991px) {
            .fr-view {
                padding: 20px 40px 50px 40px;
            }
        }
    </style>
@endsection

@section('scripts')
    @include('web.academy.includes.instant-search-js')
@endsection

@section('content-header')
    <div class="wrapper-search-box">
        <div id="algolia-logo"><a href="https://www.algolia.com" target="_blank"><img src="{{ asset('images/web/search-by-algolia-white.svg') }}"></a></div>
        <div id="search-box"></div><!-- /. algolia search-box -->
        <div id="hits"></div><!-- /.algolia results -->
    </div>
@endsection

@section('content')
    <div class="container-fluid academy">
        <section>
            <div class="row">
                <div class="col-12 fr-view">
                    <h1>{!! $article->title !!}</h1>
                    <hr>
                    {!! $article->article !!}
                </div>
            </div>
        </section>
    </div>
@endsection