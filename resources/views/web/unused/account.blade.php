@extends('www.layouts.default')

@section('title', 'ACCOUNT')

@section('head')

    <!--[if IE]>
    <style type="text/css">
        .sys_form__styled-select__icon{
            display: none !important;
        }
    </style>
    <![endif]-->

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 margin-top-50">
            <h1 class="sys_aligncenter">Account</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs sys_nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Datos personales</a></li>
                <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="personal">
                    <div class="row">
                        <div class="col-md-12 margin-top-20">
                            <h3 class="sys_aligncenter">Datos personales</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form class="sys_form sys_form--account clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Nombre:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Apellidos:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Email:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Nombre de usuario:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="sys_form__label">Dirección:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Ciudad:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Pais:</label>
                                <div class="sys_form__styled-select">
                                    <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <div class="sys_form__styled-select__icon">
                                        <i class="fa fa-chevron-up"></i>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Código postal:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="sys_form__label">Teléfono:</label>
                                <input class="sys_form__input sys_form__input--small sys_form__input--full-width" type="text">
                            </div>
                            <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-12">
                                <a class="sys_button sys_button--ghost sys_button--full-width margin-top-20 padding-horizontal-0">Guardar</a>
                            </div>
                        </form>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="history">

                    <div class="row">
                        <div class="col-md-12 margin-top-20">
                            <h3 class="sys_aligncenter">Order history</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sys_account__history table-responsive clearfix">
                                <table class="table table-hover margin-vertical-50">
                                    <thead>
                                    <tr>
                                        <th>Pedido</th>
                                        <th>Fecha de la compra</th>
                                        <th>Importe</th>
                                        <th>Forma de pago</th>
                                        <th>Estado</th>
                                        <th>#</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>00000000</th>
                                        <td>99/99/9999</td>
                                        <td>9999€</td>
                                        <td>MasterCard</td>
                                        <td>Completado</td>
                                        <td>
                                            <a href="{{ route('receipt') }}"><i class="material-icons">open_in_new</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>00000000</th>
                                        <td>99/99/9999</td>
                                        <td>9999€</td>
                                        <td>MasterCard</td>
                                        <td>Completado</td>
                                        <td>
                                            <a href="{{ route('receipt') }}"><i class="material-icons">open_in_new</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>00000000</th>
                                        <td>99/99/9999</td>
                                        <td>9999€</td>
                                        <td>MasterCard</td>
                                        <td>Completado</td>
                                        <td>
                                            <a href="{{ route('receipt') }}"><i class="material-icons">open_in_new</i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop