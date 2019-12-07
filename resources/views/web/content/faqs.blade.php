@extends('web.layouts.default')

@section('title', trans('web.faqs_meta_title'))
@section('keywords', trans('web.faqs_meta_keywords'))
@section('description', trans('web.faqs_meta_description'))

@section('scripts')
    <script>
        $(function(){
            $('.faqs_questions__wrapper a').on('click', function(){
                var selector = $(this).data('link');
                var offset = $(selector).offset().top - 100;
                $("html, body").animate({ scrollTop:  offset}, 500);
                return false;
            });
        });

        $(window).on('scroll', function(){
            var scroll = $(window).scrollTop();
            var pageHeader = $('.sys_page-header').outerHeight();
            var imgs = $('.faqs_answers__imgs');
            var questions = $('.faqs_questions__wrapper');
            var answers = $('.faqs_answers__list > div');
            var activeQuestion = '';
            var marker = $('.faqs_questions__marker');

            if (scroll >= pageHeader)
            {
                imgs.css('transform', 'translateY('+((scroll - pageHeader)*0.3)+'px)');
                questions.css('transform', 'translateY('+((scroll - pageHeader)*0.6)+'px)');
                answers.each(function(){
                    if ($(this).offset().top > (scroll + 80))
                    {
                        activeQuestion = $(this).attr('id');
                        return false;
                    }
                });
                questions.find('a').each(function(){
                    if($(this).data('link') == '#'+activeQuestion)
                    {
                        activeQuestion = $(this);
                    }
                });
                marker.css({
                    top: (activeQuestion.offset().top - questions.offset().top)+'px',
                    height: activeQuestion.outerHeight()+'px'
                });
            }
            else
            {
                imgs.css('transform', 'translateY(0px)');
                questions.css('transform', 'translateY(0px)');
                marker.removeAttr('style');
            }
        });
    </script>
@endsection

@section('content')
    <div id="faqs" class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="{{ asset('images/faqs-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h1 class="sys_page-header__title sys_white-text">{{ trans('web.faqs_header_title') }}</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__main vin_white-text">
                        {{ trans('web.faqs_header_sub1') }}
                    </span>
                    <span class="sys_page-header__subtitle__sub vin_white-text">
                        {{ trans('web.faqs_header_sub2') }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row vin_section1--faqs sys_same-height-children">
            <div class="faqs_questions col-md-3 col-sm-4 hidden-xs">
                <div class="faqs_questions__wrapper">
                    <div class="faqs_questions__marker"></div>
                    <div class="faqs_questions__line"></div>
                    <a data-link="#question1">
                        {!! trans('web.question1') !!}
                    </a>
                    <a data-link="#question2">
                        {!! trans('web.question2') !!}
                    </a>
                    <a data-link="#question17">
                        {!! trans('web.question17') !!}
                    </a>
                    <a data-link="#question3">
                        {!! trans('web.question3') !!}
                    </a>
                    <a data-link="#question4">
                        {!! trans('web.question4') !!}
                    </a>
                    <a data-link="#question16">
                        {!! trans('web.question16') !!}
                    </a>
                    <a data-link="#question11">
                        {!! trans('web.question11') !!}
                    </a>
                    <a data-link="#question5">
                        {!! trans('web.question5') !!}
                    </a>
                    <a data-link="#question6">
                       {!! trans('web.question6') !!}
                    </a>
                    <a data-link="#question7">
                        {!! trans('web.question7') !!}
                    </a>
                    <a data-link="#question8">
                        {!! trans('web.question8') !!}
                    </a>
                    <a data-link="#question9">
                        {!! trans('web.question9') !!}
                    </a>
                    <a data-link="#question10">
                        {!! trans('web.question10') !!}
                    </a>
                    <a data-link="#question12">
                        {!! trans('web.question12') !!}
                    </a>
                    <a data-link="#question13">
                        {!! trans('web.question13') !!}
                    </a>
                    <a data-link="#question14">
                        {!! trans('web.question14') !!}
                    </a>
                    <a data-link="#question15">
                        {!! trans('web.question15') !!}
                    </a>
                </div>

            </div>
            <div class="faqs_answers col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="faqs_answers__imgs col-md-4 hidden-sm hidden-xs">
                        <img src="{{ asset('images/faqs-img5.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img2.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img6.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img1.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img7.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img8.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img13.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img3.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img9.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img11.jpg') }}" class="img-responsive">
                        <img src="{{ asset('images/faqs-img12.jpg') }}" class="img-responsive">
                    </div>
                    <div class="faqs_answers__list col-md-8 col-sm-12 col-xs-12">
                        <div id="question1" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question1') !!}</h3>
                            <p>
                                {!! trans('web.answer1') !!}
                            </p>
                        </div>
                        <div id="question2" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question2') !!}</h3>
                            <p>
                                {!! trans('web.answer2') !!}
                            </p>
                        </div>
                        <div id="question17" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question17') !!}</h3>
                            <p>
                                {!! trans('web.answer17') !!}
                            </p>
                        </div>
                        <div id="question3" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question3') !!}</h3>
                            <p>
                                {!! trans('web.answer3') !!}
                            </p>
                        </div>
                        <div id="question4" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question4') !!}</h3>
                            <p>
                                {!! trans('web.answer4') !!}
                            </p>
                        </div>
                        <div id="question16" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question16') !!}</h3>
                            <p>
                                {!! trans('web.answer16') !!}
                            </p>
                        </div>
                        <div id="question11" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question11') !!}</h3>
                            <p>
                                {!! trans('web.answer11') !!}
                            </p>
                        </div>
                        <div id="question5" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question5') !!}</h3>
                            <p>
                                {!! trans('web.answer5') !!}
                            </p>
                        </div>
                        <div id="question6" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question6') !!}</h3>
                            <p>
                                {!! trans('web.answer6') !!}
                            </p>
                        </div>
                        <div id="question7" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question7') !!}</h3>
                            <p>
                                {!! trans('web.answer7') !!}
                            </p>
                        </div>
                        <div id="question8" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question8') !!}</h3>
                            <p>
                                {!! trans('web.answer8') !!}
                            </p>
                        </div>
                        <div id="question9" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question9') !!}</h3>
                            <p>
                                {!! trans('web.answer9') !!}
                            </p>
                        </div>
                        <div id="question10" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question10') !!}</h3>
                            <p>
                                {!! trans('web.answer10') !!}
                            </p>
                        </div>
                        <div id="question12" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question12') !!}</h3>
                            <p>
                                {!! trans('web.answer12') !!}
                            </p>
                        </div>
                        <div id="question13" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question13') !!}</h3>
                            <p>
                                {!! trans('web.answer13') !!}
                            </p>
                        </div>
                        <div id="question14" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question14') !!}</h3>
                            <p>
                                {!! trans('web.answer14') !!}
                            </p>
                        </div>
                        <div id="question15" class="faqs_answers__list__answer">
                            <h3>{!! trans('web.question15') !!}</h3>
                            <p>
                                {!! trans('web.answer15') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection