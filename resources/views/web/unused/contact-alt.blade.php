@extends('www.layouts.default')

@section('title', 'CONTACT')

@section('head')

    <script src="https://www.google.com/recaptcha/api.js?hl=es"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdihB-9zen3jxd8K2OM0W4xlIRIXht2Cg"></script>
    <script>

        $(document).ready(function(){
           initializeMap();
        });

        var image = {
            url: '{{ asset('images/location.svg') }}',
            size: new google.maps.Size(32, 32),
            origin: new google.maps.Point(0,0),
            anchor: new google.maps.Point(16, 32),
            scaledSize: new google.maps.Size(32, 32)
        };

        var shape = {
            coords: [0, 0, 32, 0, 32, 32, 0, 32],
            type: 'poly'
        };

        var marker, map;
        var latitude = 40.4265000;
        var longitude = -3.7025600;
        var name = 'Urban Safari';
        var address = 'Calle Falsa 123';

        function initializeMap() {
            if ($(window).width()>=992){
                var mapOptions = {
                    center: { lat: latitude, lng: longitude },
                    zoom: 12,
                    scrollwheel: false
                };
            }
            else
            {
                var mapOptions = {
                    center: { lat: latitude, lng: longitude},
                    zoom: 12,
                    disableDefaultUI: true,
                    draggable: false,
                    scrollwheel: false
                };
            }

            map = new google.maps.Map(document.getElementsByClassName('sys_contact__map__holder')[0], mapOptions);
            //map.setOptions({styles: style});

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map,
                title: name,
                icon: image,
                shape: shape,
                address:address,
                animation: google.maps.Animation.DROP
            });
            google.maps.event.addListener(marker, 'click', function() {
                var infowindow = new google.maps.InfoWindow({
                    content: "<strong style='color:rgb(90,180,255)'>"+this.title+"</strong><p>"+this.address+"</p>",
                    position: this.position
                });
                infowindow.open(map);
            });
        }

    </script>

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="http://haridevote.com/wp-content/uploads/paradise.jpg" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h3 class="sys_page-header__breadcrumbs">
                    <a href="{{ route('web.home') }}" class="sys_white-text sys_lightgrey-text-hover">Home</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <span class="sys_white-text">Contact Alternative</span>
                </h3>
                <h1 class="sys_page-header__title sys_white-text">Contact Alternative</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__icon">
                        <i class="material-icons sys_icon sys_icon--large sys_white-text">mail</i>
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
    </div>
    <div class="container-fluid">
        <div class="sys_contact sys_contact--alt sys_content-wrapper clearfix">
            <div class="row sys_same-height-children">
                <div class="col-md-6 sys_inner-container sys_red">
                    <h1 class="sys_contact__title hidden">
                        Contacto
                    </h1>
                    <p class="sys_contact__message">
                        Lorem ipsum dolor sit amet, volumus cotidieque eum ei, in magna intellegat duo. Ad est labores hendrerit. Debet latine consetetur at eam. Nec tota theophrastus ad.
                    </p>
                    <address class="sys_contact__address">
                        <span class="sys_contact__address__line"><span class="sys_icon-wrapper"><i class="material-icons">place</i>&nbsp;</span>Fake Street, 123, Fake City</span>
                        <span class="sys_contact__address__line"><a><span class="sys_icon-wrapper"><i class="material-icons">phone</i>&nbsp;</span>(+00) 000 000 000</a></span>
                        <span class="sys_contact__address__line"><a><span class="sys_icon-wrapper"><i class="material-icons">email</i>&nbsp;</span>email@contact.com</a></span>
                    </address>
                    <div class="sys_top-footer__social-menu">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <i class="fa fa-tripadvisor"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sys_contact__arrow"></div>
                </div>
                <div class="col-md-6 sys_inner-container sys_nopadding">
                    <div class="sys_contact__map clearfix">
                        <div class="sys_contact__map__holder"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 sys_inner-container">
                            <h1>Formulario de contacto</h1>
                            <div class="row">
                                <form class="sys_form sys_contact__form">
                                    <div class="col-md-12">
                                        <label class="sys_form__label">Complete name</label>
                                        <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="sys_form__label">Email</label>
                                        <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="sys_form__label">Subject</label>
                                        <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="sys_form__label">Message</label>
                                        <textarea class="sys_form__textarea"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="6LdJoCUTAAAAAChaBo3xYci9iO3wvhzkxLI2Dvak"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <a class="sys_button sys_floatright">ENVIAR</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop