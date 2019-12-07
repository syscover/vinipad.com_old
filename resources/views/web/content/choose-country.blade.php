@extends('web.layouts.default')

@section('title', trans('web.choose_country_meta_title'))

@section('scripts')
    <script>
        $(function(){
            $('.vin_choose-country__continent__country').on('click', function(){
                $('body').addClass('sys_no-scroll');
                $('#chosenCountry').val($(this).data('country-id'));
                $('#vin_lang-popup').fadeIn(300);
            });

            $('.vin_choose-lang__link').on('click', function(){
                $('#chosenLang').val($(this).data('lang-id'));
                $('#langForm').submit();
            });

            $('.vin_choose-lang__close').on('click', function(){
                $('body').removeClass('sys_no-scroll');
                $('#vin_lang-popup').fadeOut(300);
            });
        });
    </script>
@endsection

@section('content')
    <div id="choose-country" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/clients-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text margin-bottom-0">{{ trans('web.choose_country_header') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 sys_inner-container">
                @foreach($countriesSelect as $key => $continent)
                    <h2 class="vin_choose-country__continent">{{ trans('web.continent_'.$key) }}</h2>
                    <div class="row">
                        @foreach($continent as $countryKey => $country)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a class="vin_choose-country__continent__country" data-country-id="{{ strtolower($country->id) }}">
                                    <span class="vin_choose-country__continent__country__flag flag-{{ strtolower($country->id) }}"></span>
                                    <span class="vin_choose-country__continent__country__text">{{ $country->name }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="vin_lang-popup" style="display: none;">
        <div class="vin_choose-lang">
            <div class="vin_choose-lang__close">
                <i class="material-icons">clear</i>
            </div>
            <p class="vin_choose-lang__message">
                Please select a language.
                <br>
                Por favor seleccione un idioma.
            </p>
            <form id="langForm" action="{{ route('postChooseCountry') }}" method="post">
                {{ csrf_field() }}

                <input type="hidden" id="chosenCountry" name="chosenCountry">
                <input type="hidden" id="chosenLang" name="chosenLang">

                <a class="vin_choose-lang__link" data-lang-id="es">
                    <div class="vin_choose-lang__link__flag flag-es"></div>
                    <span class="vin_choose-lang__link__value">Español</span>
                </a>
                <a class="vin_choose-lang__link" data-lang-id="en">
                    <div class="vin_choose-lang__link__flag flag-gb"></div>
                    <span class="vin_choose-lang__link__value">English</span>
                </a>
            </form>
        </div>
    </div>
@endsection