@extends('www.layouts.default')

@section('title', 'BLOG')

@section('head')

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="http://wallpaperbeta.com/wallpaper_3840x2160/paradise_place_mountains_waterfall_blue_ultra_3840x2160_hd-wallpaper-238736.jpg" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h3 class="sys_page-header__breadcrumbs">
                    <a href="{{ route('web.home') }}" class="sys_white-text sys_lightgrey-text-hover">Home</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <span class="sys_white-text">Blog</span>
                </h3>
                <h1 class="sys_page-header__title sys_white-text">Blog</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__icon">
                        <i class="material-icons sys_icon sys_icon--large sys_white-text">insert_drive_file</i>
                    </span>
                    <span class="sys_page-header__subtitle__main sys_white-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br class="hidden-xs">Praesent vel quam purus venenatis at ultricies.
                    </span>
                    <span class="sys_page-header__subtitle__sub sys_lightgrey-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br class="hidden-xs">Praesent vel quam purus venenatis at ultricies.
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row margin-vertical-50">
            <div class="col-md-3 col-md-push-9 col-sm-3 col-sm-push-9 col-xs-12">
                <div class="sys_blog-categories clearfix">
                    <h3 class="sys_blog-categories__title">CATEGORIAS</h3>
                    <ul class="sys_blog-categories__list">
                        <li class="sys_blog-categories__list__item active"><a class="sys_blog-categories__list__item__link">Categoria 1</a></li>
                        <li class="sys_blog-categories__list__item"><a class="sys_blog-categories__list__item__link">Categoria 2</a></li>
                        <li class="sys_blog-categories__list__item"><a class="sys_blog-categories__list__item__link">Categoria 3</a></li>
                        <li class="sys_blog-categories__list__item"><a class="sys_blog-categories__list__item__link">Categoria 4</a></li>
                        <li class="sys_blog-categories__list__item"><a class="sys_blog-categories__list__item__link">Categoria 5</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-md-pull-3 col-sm-9 col-sm-pull-3 col-xs-12">
                <div class="sys_blog clearfix">
                    <a href="{{ route('post') }}" class="sys_blog__item sys_blog__item--left sys_same-height-children clearfix">
                        <div class="sys_blog__item__image clearfix sys_animate sys_animate--rightwards sys_animate--top-third-in sys_animate--transition-short">
                            <img class="img-responsive" src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                        </div>
                        <div class="sys_blog__item__content clearfix sys_animate sys_animate--leftwards sys_animate--top-third-in sys_animate--transition-short">
                            <div class="sys_blog__item__content__wrapper clearfix">
                                <h4 class="sys_blog__item__content__date">00/00/0000</h4>
                                <h2 class="sys_blog__item__content__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                                <h4 class="sys_blog__item__content__subtitle">Praesent vel quam purus venenatis at ultricies.</h4>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('post') }}" class="sys_blog__item sys_blog__item--right sys_same-height-children clearfix">
                        <div class="sys_blog__item__image clearfix sys_animate sys_animate--leftwards sys_animate--top-third-in sys_animate--transition-short">
                            <img class="img-responsive" src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                        </div>
                        <div class="sys_blog__item__content clearfix sys_animate sys_animate--rightwards sys_animate--top-third-in sys_animate--transition-short">
                            <div class="sys_blog__item__content__wrapper clearfix">
                                <h4 class="sys_blog__item__content__date">00/00/0000</h4>
                                <h2 class="sys_blog__item__content__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                                <h4 class="sys_blog__item__content__subtitle">Praesent vel quam purus venenatis at ultricies.</h4>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('post') }}" class="sys_blog__item sys_blog__item--left sys_same-height-children clearfix">
                        <div class="sys_blog__item__image clearfix sys_animate sys_animate--rightwards sys_animate--top-third-in sys_animate--transition-short">
                            <img class="img-responsive" src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                        </div>
                        <div class="sys_blog__item__content clearfix sys_animate sys_animate--leftwards sys_animate--top-third-in sys_animate--transition-short">
                            <div class="sys_blog__item__content__wrapper clearfix">
                                <h4 class="sys_blog__item__content__date">00/00/0000</h4>
                                <h2 class="sys_blog__item__content__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                                <h4 class="sys_blog__item__content__subtitle">Praesent vel quam purus venenatis at ultricies.</h4>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('post') }}" class="sys_blog__item sys_blog__item--right sys_same-height-children clearfix">
                        <div class="sys_blog__item__image clearfix sys_animate sys_animate--leftwards sys_animate--top-third-in sys_animate--transition-short">
                            <img class="img-responsive" src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                        </div>
                        <div class="sys_blog__item__content clearfix sys_animate sys_animate--rightwards sys_animate--top-third-in sys_animate--transition-short">
                            <div class="sys_blog__item__content__wrapper clearfix">
                                <h4 class="sys_blog__item__content__date">00/00/0000</h4>
                                <h2 class="sys_blog__item__content__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                                <h4 class="sys_blog__item__content__subtitle">Praesent vel quam purus venenatis at ultricies.</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop