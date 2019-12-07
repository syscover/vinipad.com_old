@extends('www.layouts.default')

@section('title', 'RECEIPT')

@section('head')

@stop

@section('content')
        <!-- ====================================== CONTAINED ====================================== -->
<div class="container">
    <div class="row">
        <div class="col-md-12 margin-top-50">
            <h1 class="sys_aligncenter">Receipt (Contained)</h1>
        </div>
    </div>
    <div class="row">
        <div class="sys_receipt clearfix margin-top-20">
            <div class="col-md-6 col-sm-6">
                <h4 class="margin-top-30 sys_underline">Datos de facturación:</h4>
                <div class="row">
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Nombre:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">Nombre del Cliente</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Apellidos:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">Apellidos del Cliente</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Email:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">email_contacto@servidor.com</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Dirección:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">Dirección del usuario,<br>Cod. Postal, Ciudad</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Pais:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">País del usuario</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Teléfono:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">(+00) 000 000 000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <h4 class="margin-top-30 sys_underline">Datos de envio:</h4>
                <div class="row">
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Nombre:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">Nombre del Cliente</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Apellidos:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">Apellidos del Cliente</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Email:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">email_contacto@servidor.com</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Dirección:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">Dirección del usuario,<br>Cod. Postal, Ciudad</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Pais:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">País del usuario</p>
                        </div>
                    </div>
                    <div class="sys_receipt__info clearfix">
                        <div class="col-md-3 col-sm-3">
                            <p class="sys_receipt__info__label">Teléfono:</p>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <p class="sys_receipt__info__data">(+00) 000 000 000</p>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="col-md-2 col-sm-2 hidden-xs">
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
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__unit-price">
                            <h5 class="sys_shopping-cart__item__unit-price__amount">
                                9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="sys_shopping-cart__item__amount">
                            <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__price">
                            <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
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
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__unit-price">
                            <h5 class="sys_shopping-cart__item__unit-price__amount">
                                9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="sys_shopping-cart__item__amount">
                            <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__price">
                            <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
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
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__unit-price">
                            <h5 class="sys_shopping-cart__item__unit-price__amount">
                                9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="sys_shopping-cart__item__amount">
                            <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                        <div class="sys_shopping-cart__item__price">
                            <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
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
            <a href="{{ route('account') }}" class="sys_button sys_button--full-width sys_button--ghost margin-bottom-15">Volver</a>
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-5 col-sm-offset-2 col-xs-12 col-xs-offset-0">
            <a class="sys_button sys_button--full-width">Imprimir</a>
        </div>
    </div>
</div>
<!-- ====================================== UN-CONTAINED ====================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="sys_inner-container">
            <div class="row">
                <div class="col-md-12 margin-top-20">
                    <h1 class="sys_aligncenter">Receipt (Un-contained)</h1>
                </div>
            </div>
            <div class="row">
                <div class="sys_receipt clearfix margin-top-50">
                    <div class="col-md-6 col-sm-6">
                        <h4 class="margin-top-30 sys_underline">Datos de facturación:</h4>
                        <div class="row">
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Nombre:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">Nombre del Cliente</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Apellidos:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">Apellidos del Cliente</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Email:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">email_contacto@servidor.com</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Dirección:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">Dirección del usuario,<br>Cod. Postal, Ciudad</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Pais:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">País del usuario</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Teléfono:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">(+00) 000 000 000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h4 class="margin-top-30 sys_underline">Datos de envio:</h4>
                        <div class="row">
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Nombre:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">Nombre del Cliente</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Apellidos:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">Apellidos del Cliente</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Email:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">email_contacto@servidor.com</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Dirección:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">Dirección del usuario,<br>Cod. Postal, Ciudad</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Pais:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">País del usuario</p>
                                </div>
                            </div>
                            <div class="sys_receipt__info clearfix">
                                <div class="col-md-3 col-sm-3">
                                    <p class="sys_receipt__info__label">Teléfono:</p>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <p class="sys_receipt__info__data">(+00) 000 000 000</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <div class="col-md-2 col-sm-2 hidden-xs">
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
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__unit-price">
                                    <h5 class="sys_shopping-cart__item__unit-price__amount">
                                        9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-4">
                                <div class="sys_shopping-cart__item__amount">
                                    <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__price">
                                    <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
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
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__unit-price">
                                    <h5 class="sys_shopping-cart__item__unit-price__amount">
                                        9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-4">
                                <div class="sys_shopping-cart__item__amount">
                                    <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__price">
                                    <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
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
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__unit-price">
                                    <h5 class="sys_shopping-cart__item__unit-price__amount">
                                        9999€<span class="sys_shopping-cart__item__unit-price__amount__per-unit">/ unit</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-4">
                                <div class="sys_shopping-cart__item__amount">
                                    <h5 class="sys_shopping-cart__item__amount__qty">3</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-4 sys_nopadding">
                                <div class="sys_shopping-cart__item__price">
                                    <h4 class="sys_shopping-cart__item__price__total">9999€</h4>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-80">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <a class="sys_button sys_button--full-width sys_button--ghost margin-bottom-15">Volver</a>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-5 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <a class="sys_button sys_button--full-width">Imprimir</a>
                </div>
            </div>
        </div>
    </div>


</div>
@stop