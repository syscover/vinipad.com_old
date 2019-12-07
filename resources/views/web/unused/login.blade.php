@extends('www.layouts.default')

@section('title', 'LOGIN')

@section('head')

@stop

@section('content')

    <div class="container">
        <div class="sys_login sys_content-wrapper clearfix margin-vertical-80">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sys_aligncenter margin-bottom-30">Acceso de usuarios</h1>
                </div>
            </div>
            <div class="row sys_same-height-children">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <form class="sys_form sys_login__form clearfix">
                            <div class="col-md-12">
                                <label class="sys_form__label">Username</label>
                                <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                            </div>
                            <div class="col-md-12">
                                <label class="sys_form__label">Password</label>
                                <input type="password" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                            </div>
                            <div class="col-md-12 clearfix">
                                <a class="sys_floatright margin-bottom-10" href="">Recuperar contraseña</a>
                            </div>
                            <div class="col-md-12">
                                <a class="sys_button sys_button--full-width margin-top-10">Log in</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row sys_valign" style="height:100%;">
                        <div class="col-md-12 sys_valign__item margin-vertical-50" style="width:100%;">
                            <p class="sys_aligncenter">¿Aun no estas registrado? !Registrate!</p><br>
                            <a class="sys_button sys_button--full-width sys_button--ghost">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop