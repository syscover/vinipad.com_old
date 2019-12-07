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
                    <a href="{{ nt_route('collection-' . user_lang(), ['slug' => $category->slug]) }}">
                        <img src="{{ asset('images/web/' . config('web-vinipad.categories_images.' . $category->slug)) }}" class="img-fluid">
                    </a>
                </div>
                <div class="col-9 data-wrapper">
                    <h2><a href="{{ nt_route('collection-' . user_lang(), ['slug' => $category->slug]) }}">{{ $category->name }}</a></h2>
                    <ul>
                        @foreach($articles as $article)
                            <li><a href="{{ nt_route('article-' . user_lang(), ['slug' => $article->slug]) }}">{{ $article->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

    </div>
@endsection