@extends('www.layouts.default')

@section('title', 'SHOPPING CART')

@section('head')

    <script>
        var trigger = 0;
        $(window).scroll(function(){
            if ($(this).width() > 991){
                var affix_reference = $('.sys_shopping-cart__affix--reference');
                var affix_content = $('.sys_shopping-cart__affix--content');
                var cart = affix_reference.siblings('div');
                var scroll = $(window).scrollTop();

                if ((affix_reference.offset().top - scroll) <= 200){
                    if (trigger == 0){
                        if (scroll <= 200) trigger = scroll;
                        else trigger = 200;
                    }
                    if(((scroll - trigger) + affix_content.outerHeight()) <= cart.outerHeight()){
                        affix_content.css('transform', 'translateY('+(scroll - trigger)+'px)');
                    }
                }
                else{
                    affix_content.css('transform', 'translateY(0)');
                }
            }
        });

    </script>

@stop

@section('content')
        <!-- ====================================== CONTAINED ====================================== -->
<div class="container">
    <div class="row">
        <div class="col-md-12 margin-top-50">
            <h1 class="sys_aligncenter">Shopping Cart (Contained)</h1>
        </div>
    </div>
    <div class="row">
        <div class="sys_shopping-cart sys_shopping-cart--contained clearfix">
            <div class="col-md-12">
                <div class="sys_shopping-cart__menu clearfix">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                            <h5 class="sys_shopping-cart__menu__item__title">Product<span class="visible-xs-inline">s</span></h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 hidden-xs">
                        <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                            <h5 class="sys_shopping-cart__menu__item__title">Price</h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 hidden-xs">
                        <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                            <h5 class="sys_shopping-cart__menu__item__title">Qty</h5>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 hidden-xs">
                        <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                            <h5 class="sys_shopping-cart__menu__item__title">Subtotal</h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 hidden-xs">
                        <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                            <h5 class="sys_shopping-cart__menu__item__title" style="padding:10px 0">
                                <i class="material-icons">delete</i>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="sys_shopping-cart__item clearfix">
                    <div class="col-md-2 col-sm-2 col-xs-3 sys_nopadding">
                        <div class="sys_shopping-cart__item__img clearfix">
                            <img src="https://c.tadst.com/gfx/750w/sunrise-sunset-sun-calculator.jpg?1" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-9">
                        <div class="sys_shopping-cart__item__summary">
                            <h4 class="sys_shopping-cart__item__summary__title">Titulo del producto</h4>
                        </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-md-1 col-sm-1 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__unit-price">
                            <h5 class="sys_shopping-cart__item__unit-price__amount">
                                9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="sys_shopping-cart__item__amount">
                            <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                            <a class="sys_shopping-cart__item__amount__increase">
                                <i class="material-icons">keyboard_arrow_up</i>
                            </a>
                            <a class="sys_shopping-cart__item__amount__decrease">
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__price">
                            <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 hidden-xs">
                        <div class="sys_shopping-cart__item__delete">
                            <a class="sys_shopping-cart__item__delete__button">
                                <i class="material-icons">clear</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sys_shopping-cart__item clearfix">
                    <div class="col-md-2 col-sm-2 col-xs-3 sys_nopadding">
                        <div class="sys_shopping-cart__item__img clearfix">
                            <img src="https://c.tadst.com/gfx/750w/sunrise-sunset-sun-calculator.jpg?1" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-9">
                        <div class="sys_shopping-cart__item__summary">
                            <h4 class="sys_shopping-cart__item__summary__title">Titulo del producto</h4>
                        </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-md-1 col-sm-1 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__unit-price">
                            <h5 class="sys_shopping-cart__item__unit-price__amount">
                                9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="sys_shopping-cart__item__amount">
                            <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                            <a class="sys_shopping-cart__item__amount__increase">
                                <i class="material-icons">keyboard_arrow_up</i>
                            </a>
                            <a class="sys_shopping-cart__item__amount__decrease">
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__price">
                            <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 hidden-xs">
                        <div class="sys_shopping-cart__item__delete">
                            <a class="sys_shopping-cart__item__delete__button">
                                <i class="material-icons">clear</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sys_shopping-cart__item clearfix">
                    <div class="col-md-2 col-sm-2 col-xs-3 sys_nopadding">
                        <div class="sys_shopping-cart__item__img clearfix">
                            <img src="https://c.tadst.com/gfx/750w/sunrise-sunset-sun-calculator.jpg?1" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-9">
                        <div class="sys_shopping-cart__item__summary">
                            <h4 class="sys_shopping-cart__item__summary__title">Titulo del producto</h4>
                        </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-md-1 col-sm-1 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__unit-price">
                            <h5 class="sys_shopping-cart__item__unit-price__amount">
                                9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="sys_shopping-cart__item__amount">
                            <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                            <a class="sys_shopping-cart__item__amount__increase">
                                <i class="material-icons">keyboard_arrow_up</i>
                            </a>
                            <a class="sys_shopping-cart__item__amount__decrease">
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__price">
                            <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 hidden-xs">
                        <div class="sys_shopping-cart__item__delete">
                            <a class="sys_shopping-cart__item__delete__button">
                                <i class="material-icons">clear</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4 col-xs-12 col-xs-offset-0">
                <div class="sys_shopping-cart__total clearfix sys_bordered sys_bordered--two">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <h4 class="sys_shopping-cart__total__label">Subtotal:</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <h3 class="sys_shopping-cart__total__amount">9999€</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <h4 class="sys_shopping-cart__total__label">Delivery cost:</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <h3 class="sys_shopping-cart__total__amount">9999€</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form class="sys_form sys_shopping-cart-coupon-form clearfix">
                            <div class="col-md-8 col-sm-8 col-xs-6">
                                <input type="text" class="sys_form__input sys_form__input--small sys_form__input--full-width" placeholder="Do you have a Coupon?">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="sys_button sys_button--small sys_button--full-width sys_button--solid padding-horizontal-0">APPLY</a>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <h4 class="sys_shopping-cart__total__label">Coupon name</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <h3 class="sys_shopping-cart__total__amount">-9999€</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <h2 class="sys_shopping-cart__total__label sys_shopping-cart__total__label--large">Total:</h2>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <h1 class="sys_shopping-cart__total__amount sys_shopping-cart__total__amount--large">9999€</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-bottom-80">
        <div class="col-md-4 col-sm-5 col-xs-12">
            <a class="sys_button sys_button--full-width sys_button--ghost margin-bottom-15">Continue shopping</a>
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-5 col-sm-offset-2 col-xs-12 col-xs-offset-0">
            <a class="sys_button sys_button--full-width">Checkout</a>
        </div>
    </div>
</div>
<!-- ====================================== UN-CONTAINED ====================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="sys_inner-container">
            <div class="row">
                <div class="col-md-12 margin-top-50">
                    <h1 class="sys_aligncenter">Shopping Cart (Un-contained)</h1>
                </div>
            </div>
            <div class="row">
                <div class="sys_shopping-cart sys_shopping-cart--uncontained clearfix">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="sys_shopping-cart__menu clearfix">
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                                    <h5 class="sys_shopping-cart__menu__item__title">Product<span class="visible-xs-inline">s</span></h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                                    <h5 class="sys_shopping-cart__menu__item__title">Price</h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                                    <h5 class="sys_shopping-cart__menu__item__title">Qty</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                                    <h5 class="sys_shopping-cart__menu__item__title">Subtotal</h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <div class="sys_shopping-cart__menu__item urban_border-radius--8">
                                    <h5 class="sys_shopping-cart__menu__item__title" style="padding:10px 0">
                                        <i class="material-icons">delete</i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="sys_shopping-cart__item clearfix">
                            <div class="col-md-2 col-sm-2 col-xs-3 sys_nopadding">
                                <div class="sys_shopping-cart__item__img clearfix">
                                    <img src="https://c.tadst.com/gfx/750w/sunrise-sunset-sun-calculator.jpg?1" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-9">
                                <div class="sys_shopping-cart__item__summary">
                                    <h4 class="sys_shopping-cart__item__summary__title">Titulo del producto</h4>
                                </div>
                            </div>
                            <div class="clearfix visible-xs"></div>
                            <div class="col-md-1 col-sm-1 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__unit-price">
                                    <h5 class="sys_shopping-cart__item__unit-price__amount">
                                        9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-4">
                                <div class="sys_shopping-cart__item__amount">
                                    <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                                    <a class="sys_shopping-cart__item__amount__increase">
                                        <i class="material-icons">keyboard_arrow_up</i>
                                    </a>
                                    <a class="sys_shopping-cart__item__amount__decrease">
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__price">
                                    <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <div class="sys_shopping-cart__item__delete">
                                    <a class="sys_shopping-cart__item__delete__button">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sys_shopping-cart__item clearfix">
                            <div class="col-md-2 col-sm-2 col-xs-3 sys_nopadding">
                                <div class="sys_shopping-cart__item__img clearfix">
                                    <img src="https://c.tadst.com/gfx/750w/sunrise-sunset-sun-calculator.jpg?1" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-9">
                                <div class="sys_shopping-cart__item__summary">
                                    <h4 class="sys_shopping-cart__item__summary__title">Titulo del producto</h4>
                                </div>
                            </div>
                            <div class="clearfix visible-xs"></div>
                            <div class="col-md-1 col-sm-1 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__unit-price">
                                    <h5 class="sys_shopping-cart__item__unit-price__amount">
                                        9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-4">
                                <div class="sys_shopping-cart__item__amount">
                                    <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                                    <a class="sys_shopping-cart__item__amount__increase">
                                        <i class="material-icons">keyboard_arrow_up</i>
                                    </a>
                                    <a class="sys_shopping-cart__item__amount__decrease">
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__price">
                                    <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <div class="sys_shopping-cart__item__delete">
                                    <a class="sys_shopping-cart__item__delete__button">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sys_shopping-cart__item clearfix">
                            <div class="col-md-2 col-sm-2 col-xs-3 sys_nopadding">
                                <div class="sys_shopping-cart__item__img clearfix">
                                    <img src="https://c.tadst.com/gfx/750w/sunrise-sunset-sun-calculator.jpg?1" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-9">
                                <div class="sys_shopping-cart__item__summary">
                                    <h4 class="sys_shopping-cart__item__summary__title">Titulo del producto</h4>
                                </div>
                            </div>
                            <div class="clearfix visible-xs"></div>
                            <div class="col-md-1 col-sm-1 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__unit-price">
                                    <h5 class="sys_shopping-cart__item__unit-price__amount">
                                        9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-4">
                                <div class="sys_shopping-cart__item__amount">
                                    <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                                    <a class="sys_shopping-cart__item__amount__increase">
                                        <i class="material-icons">keyboard_arrow_up</i>
                                    </a>
                                    <a class="sys_shopping-cart__item__amount__decrease">
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__price">
                                    <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <div class="sys_shopping-cart__item__delete">
                                    <a class="sys_shopping-cart__item__delete__button">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-4 col-xs-12 sys_shopping-cart__affix--reference">
                        <div class="sys_shopping-cart__affix--content clearfix">
                            <div class="sys_shopping-cart__total clearfix sys_bordered sys_bordered--two">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-6">
                                        <h4 class="sys_shopping-cart__total__label">Subtotal:</h4>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-6">
                                        <h3 class="sys_shopping-cart__total__amount">9999€</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-6">
                                        <h4 class="sys_shopping-cart__total__label">Delivery cost:</h4>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-6">
                                        <h3 class="sys_shopping-cart__total__amount">9999€</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="sys_form sys_shopping-cart-coupon-form clearfix">
                                        <div class="col-md-7 col-sm-7 col-xs-6">
                                            <input type="text" class="sys_form__input sys_form__input--small sys_form__input--full-width" placeholder="Coupon?">
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-6">
                                            <a class="sys_button sys_button--small sys_button--full-width sys_button--solid padding-horizontal-0">APPLY</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-6">
                                        <h4 class="sys_shopping-cart__total__label">Coupon name</h4>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-6">
                                        <h3 class="sys_shopping-cart__total__amount">-9999€</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-6">
                                        <h2 class="sys_shopping-cart__total__label sys_shopping-cart__total__label--large">Total:</h2>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-6">
                                        <h1 class="sys_shopping-cart__total__amount sys_shopping-cart__total__amount--large">9999€</h1>
                                    </div>
                                </div>
                            </div>
                            <a class="sys_button sys_button--full-width">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-80">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <a class="sys_button sys_button--full-width sys_button--ghost">Continue shopping</a>
                </div>
            </div>
        </div>
    </div>


</div>
@stop