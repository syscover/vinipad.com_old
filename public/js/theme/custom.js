;(function(){
    "use strict";
    
    $('.hero-slider').flexslider({
        animation: "fade",
        directionNav: false, //remove the default direction-nav - https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
        controlNav: false, //remove the default control-nav
        slideshowSpeed: 4000,
        start: function(){
             $(this).find('.slide').css("display", "block"); //prevent flash of the images
        },
    });
    
    /*========= overview_slider js =========*/
    
    function overviewSlider(){
        if( $(".overview_slider").length){
            $(".overview_slider").owlCarousel({
                loop:true,
                margin:30,
                items:1,
                autoplay:true,
                smartSpeed:500,
                animateOut: 'fadeOut',
                nav: false,
            })
        }
    }
    overviewSlider();
    
    /* ===== Parallax Effect ===== */
	function parallaxEffect() {
    	$('.parallax-effect').parallax();
	}
    parallaxEffect();
    
     /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/
	
	var nav_offset_top = $('#sticky_height').height(); 
	
	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.middle_menu_nav').length ){ 
            if($(window).width()>768){
                $(window).on('scroll', function() {
                    var scroll = $(window).scrollTop();   
                    if (scroll >= nav_offset_top ) {
                        $(".middle_menu_nav").addClass("navbar_fixed");
                    } else {
                        $(".middle_menu_nav").removeClass("navbar_fixed");
                    }
                });
            }
        };
    };
    navbarFixed();
    
    $(' #page-nav-wrapper .nav li a[href^="#"]:not([href="#"]').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500);
        event.preventDefault();
    });
    
    
    /* ======= Toggle between Signup & Login & ResetPass Modals ======= */ 
    $('#signup-link').on('click', function() {
        $('#login-modal').modal('toggle');
        $('#signup-modal').modal();
        
        e.preventDefault();
    });
    
    $('#login-link').on('click', function() {
        $('#signup-modal').modal('toggle');
        $('#login-modal').modal();
        
        e.preventDefault();
    });
    
    $('#back-to-login-link').on('click', function() {
        $('#resetpass-modal').modal('toggle');
        $('#login-modal').modal();
        
        e.preventDefault();
    });
    
    $('#resetpass-link').on('click', function() {
        $('#login-modal').modal('hide');
        e.preventDefault();
    });
    
    /*---------------navbar js ---------------*/
    $('.scrollto').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500);
        event.preventDefault();
    });
    
    /* ======= Stop Video Playing When Close the Modal Window ====== */
    $("#modal-video .close").on("click", function() {
        $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));        
    });
    
    /* ======= Play/Stop YouTube/Vimeo Video in Bootstrpa Modal ======= */

    $('.play-trigger').on('click', function() {
        var theModal = $(this).data("target");
        var theVideo = $(theModal + ' iframe').attr('src');
        var theVideoAuto = theVideo + "&amp;autoplay=1";
        
        $(theModal).on('shown.bs.modal', function () {
            $(theModal + ' iframe').attr('src', theVideoAuto);
        });
        
        $(theModal).on('hide.bs.modal', function () {
            $(theModal + ' iframe').attr('src', '');
        });
        
        $(theModal).on('hidden.bs.modal', function () {
            $(theModal + ' iframe').attr('src', theVideo);
        });
 
    });
    
    
    /* ======= MAPS ======= */
    if ( $('#mapBox').length ) {
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: $lat,
            lng: $lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: $zoom,
                styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#dcdfe6"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [
                            {
                                "color": "#808080"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#dcdfe6"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "weight": 1.8
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#d7d7d7"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ebebeb"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#a7a7a7"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#efefef"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#696969"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#737373"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#d6d6d6"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {},
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    }
                ]
            });
    }
    
})(jQuery)