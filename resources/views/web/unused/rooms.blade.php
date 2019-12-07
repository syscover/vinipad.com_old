@extends('www.layouts.default')

@section('title', 'ROOMS')

@section('head')

    <link href='https://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}">
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/css/magnific-popup.css') }}">
    <script src="{{ asset('vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>

    <script>

        var swipers = [];
        $(document).ready(function(){
            var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                slidesPerView: 'auto',
                spaceBetween: 15,
                // Navigation arrows
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',

                // Scrollbar
                scrollbar: '.swiper-scrollbar',
                scrollbarHide: true,
                onInit: function(swiper){
                    //save swiper for update on load
                    swipers.push(swiper);
                }
            });

            $('.sys_rooms__item .sys_rooms__item__slider').each(function(){
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true},
                    // other options
                    removalDelay: 300,
                    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
                    zoom: {
                        enabled: true, // By default it's false, so don't forget to enable it
                        duration: 300, // duration of the effect, in milliseconds
                        easing: 'ease-in-out', // CSS transition easing function
                        // The "opener" function should return the element from which popup will be zoomed in
                        // and to which popup will be scaled down
                        // By defailt it looks for an image tag:
                        opener: function (openerElement) {
                            // openerElement is the element on which popup was initialized, in this case its <a> tag
                            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                            return openerElement.is('img') ? openerElement : openerElement.find('img');
                        }
                    }
                });
            });

        });

        // Update all sliders to  set scrollbar width with images loaded
        $(window).load(function(){
            for (var i=0; i< swipers.length; i++){
                swipers[i].update();
            }
        });
    </script>

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="http://www.wegoplaces.me/wp-content/uploads/2015/01/Sea-bedroom-tray.jpg" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h3 class="sys_page-header__breadcrumbs">
                    <a href="{{ route('web.home') }}" class="sys_white-text sys_lightgrey-text-hover">Home</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <span class="sys_white-text">Rooms</span>
                </h3>
                <h1 class="sys_page-header__title sys_white-text">Rooms</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__icon">
                        <i class="material-icons sys_white-text">hotel</i>
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
        <div class="sys_rooms">
            <div class="sys_rooms__item sys_rooms__item--left clearfix sys_animate sys_animate--upwards sys_animate--upwards sys_animate--top-third-in sys_animate--transition-short">
                <div class="row sys_same-height-children">
                    <div class="sys_rooms__item__info clearfix" style="background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg') ;">
                        <a class="sys_rooms__item__info__link sys_valign">
                            <div class="clearfix sys_valign__item">
                                <h2 class="sys_rooms__item__info__title">small rooms</h2>
                                <p class="sys_rooms__item__info__subtitle">from 200€</p>
                            </div>
                        </a>
                    </div>
                    <div class="sys_rooms__item__slider clearfix">
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <a href="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                        <img src="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                        <img src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                        <img src="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                        <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                        <img src="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                        <img src="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                    </a>
                                </div>
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button">
                                <i class="fa fa-chevron-left fa-3x"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="fa fa-chevron-right fa-3x"></i>
                            </div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sys_rooms__item sys_rooms__item--right clearfix sys_animate sys_animate--upwards sys_animate--upwards sys_animate--top-third-in sys_animate--transition-short">
                <div class="row sys_same-height-children">
                    <div class="sys_rooms__item__info clearfix" style="background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg') ;">
                        <a class="sys_rooms__item__info__link sys_valign">
                            <div class="clearfix sys_valign__item">
                                <h2 class="sys_rooms__item__info__title">medium rooms</h2>
                                <p class="sys_rooms__item__info__subtitle">from 200€</p>
                            </div>
                        </a>
                    </div>
                    <div class="sys_rooms__item__slider clearfix">
                        <!-- Slider main container -->
                        <div class="swiper-container" dir="rtl">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <a href="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                        <img src="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                        <img src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                        <img src="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                        <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                        <img src="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                        <img src="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                    </a>
                                </div>
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button">
                                <i class="fa fa-chevron-right fa-3x"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="fa fa-chevron-left fa-3x"></i>
                            </div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sys_rooms__item sys_rooms__item--left clearfix sys_animate sys_animate--upwards sys_animate--upwards sys_animate--top-third-in sys_animate--transition-short">
                <div class="row sys_same-height-children">
                    <div class="sys_rooms__item__info clearfix" style="background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg') ;">
                        <a class="sys_rooms__item__info__link sys_valign">
                            <div class="clearfix sys_valign__item">
                                <h2 class="sys_rooms__item__info__title">large rooms</h2>
                                <p class="sys_rooms__item__info__subtitle">from 200€</p>
                            </div>
                        </a>
                    </div>
                    <div class="sys_rooms__item__slider clearfix">
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <a href="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                        <img src="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                        <img src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                        <img src="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                        <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                        <img src="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                        <img src="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                    </a>
                                </div>
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button">
                                <i class="fa fa-chevron-left fa-3x"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="fa fa-chevron-right fa-3x"></i>
                            </div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sys_rooms__item sys_rooms__item--right clearfix sys_animate sys_animate--upwards sys_animate--upwards sys_animate--top-third-in sys_animate--transition-short">
                <div class="row sys_same-height-children">
                    <div class="sys_rooms__item__info clearfix" style="background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg') ;">
                        <a class="sys_rooms__item__info__link sys_valign">
                            <div class="clearfix sys_valign__item">
                                <h2 class="sys_rooms__item__info__title">extra large rooms</h2>
                                <p class="sys_rooms__item__info__subtitle">from 200€</p>
                            </div>
                        </a>
                    </div>
                    <div class="sys_rooms__item__slider clearfix">
                        <!-- Slider main container -->
                        <div class="swiper-container" dir="rtl">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <a href="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                        <img src="http://tobaccocaye.com/sites/default//files/tobacco-cabanas-chair-hammock.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                        <img src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                        <img src="https://s-media-cache-ak0.pinimg.com/236x/15/07/43/1507439eb328400129fa39766f46dfca.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                        <img src="http://efdreams.com/data_images/dreams/paradise/paradise-01.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                        <img src="http://foundtheworld.com/~hotlink-cache/wp-content/uploads/2014/08/Paradise-Island-4.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                        <img src="https://pbs.twimg.com/profile_images/474335607016026112/ICk11vQf.jpeg">
                                    </a>
                                </div>
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button">
                                <i class="fa fa-chevron-right fa-3x"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="fa fa-chevron-left fa-3x"></i>
                            </div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop