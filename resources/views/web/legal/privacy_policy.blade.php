@extends('web.layouts.default')

@section('title', 'Vinipad - menu')
@section('description', 'Vinipad - menu')
@section('keywords', 'Vinipad - menu')

@section('head')

@endsection

@section('scripts')

@endsection

@section('content')

    <section id="sticky_height" class="banner_area about_banner d-flex align-items-center">
        <div class="parallax-effect" style="background: url({{ asset('images/theme/12.jpg') }});"></div>
        <div class="gradient_overlay"></div>
        <div class="container heading-content text-center mt_70">
            <h2 class="headline">Everything you need to increase your<br>SaaS Business</h2>
            <div class="intro">Discounted prices for students, adding promotions to your purchase and renewing<br> your license are now available. Requires Windows 7 or newer!</div>
            <div class="actions mt_30">
                <a href="#" class="play-trigger btn btn-cta btn-primary" data-toggle="modal" data-target="#modal-video">Watch Our Demo</a>
                <br class="d-sm-none">
                <a href="pricing.html" class="btn btn-cta btn-ghost">Plans &amp; Pricing</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    hola mundo
                </div>
            </div>
        </div>
    </section>

@endsection