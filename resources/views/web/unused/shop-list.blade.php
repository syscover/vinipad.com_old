@extends('www.layouts.default')

@section('title', 'SHOP')

@section('head')

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="http://haridevote.com/wp-content/uploads/paradise.jpg" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h3 class="sys_page-header__breadcrumbs">
                    <a href="{{ route('web.home') }}" class="sys_white-text sys_lightgrey-text-hover">Home</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <span class="sys_white-text">Shop</span>
                </h3>
                <h1 class="sys_page-header__title sys_white-text">Shop</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__icon">
                        <i class="material-icons sys_icon sys_icon--large sys_white-text">shopping_cart</i>
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
        <div class="row">
            <div class="col-md-12 padding-horizontal-50">
                <a href="{{ route('shop-list') }}" class="sys_floatright" style="position: relative; top:40px; z-index: 2">
                    <i class="material-icons" style="font-size: 40px;">view_list</i>
                </a>
                <a href="{{ route('shop') }}" class="sys_floatright" style="position: relative; top:40px; z-index: 2">
                    <i class="material-icons" style="font-size: 40px;">view_module</i>
                </a>
            </div>
            <div class="sys_products sys_products--list sys_inner-container clearfix">
                <h3>Small size items (Container-fluid)</h3>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="{{ route('product') }}">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sys_products__product-item  sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sys_inner-container clearfix">
                <h3>Medium size items (Container-fluid)</h3>
                <div class="col-md-4 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sys_inner-container clearfix">
                <h3>Large size items (Container-fluid)</h3>
                <div class="col-md-6 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                    <a href="">
                        <div class="sys_products__product-item__img">
                            <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                            <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                        </div>
                    </a>
                    <div class="sys_products__product-item__info">
                        <a href="">
                            <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                        </a>
                        <p class="sys_products__product-item__info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                        </p>
                        <h4 class="sys_products__product-item__info__specs clearfix">
                            <span class="sys_products__product-item__info__specs__price">9999€</span>
                            <span class="sys_products__product-item__info__specs__feats">
                                <span class="sys_products__product-item__info__specs__feats__content">
                                    <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                    1h.
                                </span>
                            </span>
                        </h4>
                        <a href="" class="sys_button sys_button--full-width">
                            Lorem ipsum
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3>Medium size items (Container)</h3>
            <div class="col-md-4 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                <a href="">
                    <div class="sys_products__product-item__img">
                        <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                        <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                    </div>
                </a>
                <div class="sys_products__product-item__info">
                    <a href="">
                        <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                    </a>
                    <p class="sys_products__product-item__info__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                    </p>
                    <h4 class="sys_products__product-item__info__specs clearfix">
                        <span class="sys_products__product-item__info__specs__price">9999€</span>
                        <span class="sys_products__product-item__info__specs__feats">
                            <span class="sys_products__product-item__info__specs__feats__content">
                                <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                1h.
                            </span>
                        </span>
                    </h4>
                    <a href="" class="sys_button sys_button--full-width">
                        Lorem ipsum
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                <a href="">
                    <div class="sys_products__product-item__img">
                        <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                        <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                    </div>
                </a>
                <div class="sys_products__product-item__info">
                    <a href="">
                        <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                    </a>
                    <p class="sys_products__product-item__info__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                    </p>
                    <h4 class="sys_products__product-item__info__specs clearfix">
                        <span class="sys_products__product-item__info__specs__price">9999€</span>
                        <span class="sys_products__product-item__info__specs__feats">
                            <span class="sys_products__product-item__info__specs__feats__content">
                                <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                1h.
                            </span>
                        </span>
                    </h4>
                    <a href="" class="sys_button sys_button--full-width">
                        Lorem ipsum
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                <a href="">
                    <div class="sys_products__product-item__img">
                        <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                        <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                    </div>
                </a>
                <div class="sys_products__product-item__info">
                    <a href="">
                        <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                    </a>
                    <p class="sys_products__product-item__info__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                    </p>
                    <h4 class="sys_products__product-item__info__specs clearfix">
                        <span class="sys_products__product-item__info__specs__price">9999€</span>
                        <span class="sys_products__product-item__info__specs__feats">
                            <span class="sys_products__product-item__info__specs__feats__content">
                                <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                1h.
                            </span>
                        </span>
                    </h4>
                    <a href="" class="sys_button sys_button--full-width">
                        Lorem ipsum
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <h3>Large size items (Container)</h3>
            <div class="col-md-6 col-sm-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                <a href="">
                    <div class="sys_products__product-item__img">
                        <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                        <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                    </div>
                </a>
                <div class="sys_products__product-item__info">
                    <a href="">
                        <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                    </a>
                    <p class="sys_products__product-item__info__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                    </p>
                    <h4 class="sys_products__product-item__info__specs clearfix">
                        <span class="sys_products__product-item__info__specs__price">9999€</span>
                        <span class="sys_products__product-item__info__specs__feats">
                            <span class="sys_products__product-item__info__specs__feats__content">
                                <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                1h.
                            </span>
                        </span>
                    </h4>
                    <a href="" class="sys_button sys_button--full-width">
                        Lorem ipsum
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 sys_products__product-item sys_animate sys_animate--upwards sys_animate--top-quarter-in">
                <a href="">
                    <div class="sys_products__product-item__img">
                        <img src="http://haridevote.com/wp-content/uploads/paradise.jpg">
                        <i class="material-icons sys_products__product-item__img__icon">favorite_border</i>
                    </div>
                </a>
                <div class="sys_products__product-item__info">
                    <a href="">
                        <h3 class="sys_products__product-item__info__title">Lorem ipsum dolor sit.</h3>
                    </a>
                    <p class="sys_products__product-item__info__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero.
                    </p>
                    <h4 class="sys_products__product-item__info__specs clearfix">
                        <span class="sys_products__product-item__info__specs__price">9999€</span>
                        <span class="sys_products__product-item__info__specs__feats">
                            <span class="sys_products__product-item__info__specs__feats__content">
                                <i class="material-icons sys_products__product-item__info__specs__feats__icon">access_time</i>
                                1h.
                            </span>
                        </span>
                    </h4>
                    <a href="" class="sys_button sys_button--full-width">
                        Lorem ipsum
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="sys_inner-container clearfix">
                <div class="sys_banner clearfix">
                    <h1 class="sys_white-text sys_aligncenter">BOXED BANNER DE EJEMPLO</h1>
                </div>
            </div>
            <div class="sys_banner clearfix margin-bottom-50">
                <h1 class="sys_white-text sys_aligncenter">FULLWIDTH BANNER DE EJEMPLO</h1>
            </div>
        </div>
    </div>
@stop