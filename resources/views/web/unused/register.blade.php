@extends('www.layouts.default')

@section('title', 'REGISTER')

@section('head')

@stop

@section('content')

    <div class="container">
        <div class="sys_register sys_content-wrapper clearfix margin-vertical-80">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sys_aligncenter margin-bottom-30">Registro de usuarios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <form class="sys_form sys_register__form">
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
                                <a class="sys_button sys_button--ghost sys_button--full-width margin-top-20 padding-horizontal-0">Registrarse</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop