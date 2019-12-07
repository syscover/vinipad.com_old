@extends('web.layouts.default-v4')

@section('title', __('web.home_meta_title'))
@section('keywords', __('web.home_meta_keywords'))
@section('description', __('web.home_meta_description'))

@section('head')
    @include('web.academy.includes.instant-search-css')
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
                <div class="col-3 icon-wrapper">
                    <a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.data')]) }}">
                        <img src="{{ asset('images/web/database.png') }}" class="img-fluid">
                    </a>
                </div>
                <div class="col-9 data-wrapper">
                    <h2><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.data')]) }}">{{ ucfirst(__('web.data')) }}</a></h2>
                    <p><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.data')]) }}">{{ $dataQty }} {{ __('web.articles_collection') }}</a></p>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-3 icon-wrapper">
                    <a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.configs')]) }}">
                        <img src="{{ asset('images/web/settings.png') }}" class="img-fluid">
                    </a>
                </div>
                <div class="col-9 data-wrapper">
                    <h2><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.configs')]) }}">{{ ucfirst(__('web.configs')) }}</a></h2>
                    <p><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.configs')]) }}">{{ $configsQty }} {{ __('web.articles_collection') }}</a></p>
                </div>
            </div>
        </section>

        @if($stockQty > 0)
            <section>
                <div class="row">
                    <div class="col-3 icon-wrapper">
                        <a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.stock')]) }}">
                            <img src="{{ asset('images/web/box-closed.png') }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-9 data-wrapper">
                        <h2><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.stock')]) }}">{{ ucfirst(__('web.stock')) }}</a></h2>
                        <p><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.stock')]) }}">{{ $stockQty }} {{ __('web.articles_collection') }}</a></p>
                    </div>
                </div>
            </section>
        @endif

        <section>
            <div class="row">
                <div class="col-3 icon-wrapper">
                    <a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.tablet')]) }}">
                        <img src="{{ asset('images/web/tablet.png') }}" class="img-fluid">
                    </a>
                </div>
                <div class="col-9 data-wrapper">
                    <h2><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.tablet')]) }}">{{ ucfirst(__('web.tablet')) }}</a></h2>
                    <p><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.tablet')]) }}">{{ $tabletQty }} {{ __('web.articles_collection') }}</a></p>
                </div>
            </div>
        </section>

        @if($othersQty > 0)
            <section>
                <div class="row">
                    <div class="col-3 icon-wrapper">
                        <a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.others')]) }}">
                            <img src="{{ asset('images/web/inclined-clip.png') }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-9 data-wrapper">
                        <h2><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.others')]) }}">{{ ucfirst(__('web.others')) }}</a></h2>
                        <p><a href="{{ nt_route('collection-' . user_lang(), ['slug' => __('web.others')]) }}">{{ $othersQty }} {{ __('web.articles_collection') }}</a></p>
                    </div>
                </div>
            </section>
        @endif

    </div>
@endsection