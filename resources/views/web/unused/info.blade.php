@extends('www.layouts.default')

@section('title', 'INFO')

@section('head')

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container sys_no-box-shadow clearfix">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay"></div>
                    <img src="https://www.bhmpics.com/walls/paradise_river_waterfalls-wide.jpg" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text sys_aligncenter margin-vertical-80">Info page</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 sys_info">
                <section class="sys_info__section">
                    <h1 class="sys_info__section__title">Titulo de sección</h1>
                    <h3 class="sys_info__section__subtitle">Subtitulo de sección</h3>
                    <div class="sys_info__section__content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis tristique odio id cursus. Aenean at egestas mi, sit amet ultricies sem. Phasellus lorem orci, dignissim vitae ullamcorper non, vestibulum a neque. Vivamus commodo nisi tortor, non vehicula ipsum varius ac. Quisque eu est vehicula, commodo urna vel, eleifend elit. Cras luctus elementum aliquet. Sed eu volutpat est. Duis ut consequat quam. Aliquam sem augue, ultrices et elit vel, imperdiet tempor erat.
                        </p>
                    </div>
                </section>
                <section class="sys_info__section">
                    <h1 class="sys_info__section__title">Titulo de sección</h1>
                    <h3 class="sys_info__section__subtitle">Subtitulo de sección</h3>
                    <div class="sys_info__section__content">
                        <ul class="sys_list">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        </ul>
                    </div>
                </section>

            </div>
        </div>
    </div>
@stop