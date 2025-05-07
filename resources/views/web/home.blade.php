@extends('web.layout.default')
@section('content')
    <section class="home-hero-setion mb-60">
        <div class="home-hero-div">
            <div class="hero-div-back-img" style="background-image:  url('{{ env('ASSETPATHURL') }}web/images/Valley.png');">
                <div class="hero-div-contain">
                    <div class="hero-div-description">
                        <h2>Valley</h2>
                        <p>Residential</p>
                    </div>
                    <div class="hero-div-description-2">
                        <p>Under Construction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-the-projects-section mb-60">
        <div class="explore-the-projects-div container">
            <div class="exp-btn-div">
                <a href="" class="commen-btn">Explore The Projects</a>
            </div>
            <div class="exp-title">
                <h2>Residential & Industrial <p>Projects</p>
                </h2>
            </div>
            <div class="exp-card-detail-main">
                <div class="exp-card-detail-row">
                    <div class="exp-card-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}">
                    </div>
                    <div class="exp-card-detail">
                        <h2>Diamond Valley</h2>
                        <p>Residential</p>
                    </div>
                </div>
                <div class="exp-card-detail-row">
                    <div class="exp-card-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}">
                    </div>
                    <div class="exp-card-detail">
                        <h2>Diamond Valley</h2>
                        <p>Residential</p>
                    </div>
                </div>
                <div class="exp-card-detail-row">
                    <div class="exp-card-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}">
                    </div>
                    <div class="exp-card-detail">
                        <h2>Diamond Valley</h2>
                        <p>Residential</p>
                    </div>
                </div>
                <div class="exp-card-detail-row">
                    <div class="exp-card-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}">
                    </div>
                    <div class="exp-card-detail">
                        <h2>Diamond Valley</h2>
                        <p>Residential</p>
                    </div>
                </div>
                <div class="exp-card-detail-row">
                    <div class="exp-card-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}">
                    </div>
                    <div class="exp-card-detail">
                        <h2>Diamond Valley</h2>
                        <p>Residential</p>
                    </div>
                </div>
                <div class="exp-card-detail-row">
                    <div class="exp-card-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}">
                    </div>
                    <div class="exp-card-detail">
                        <h2>Diamond Valley</h2>
                        <p>Residential</p>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="explore-the-pioneers-section">
        <div class="explore-the-pioneers-div container mb-60">
            <div class="exp-btn-div">
                <a href="" class="commen-btn">Explore The Pioneers</a>
            </div>
            <div class="exp-title">
                <h2>Pioneers WHo <p>Preferred us</p>
                </h2>
            </div>

            <div class="exp-poin-card-details">
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Dimond VAlley.png') }}">
                </div>
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Cart4.png') }}">
                </div>
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Dimond VAlley.png') }}">
                </div>
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Dimond VAlley.png') }}">
                </div>
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Dimond VAlley.png') }}">
                </div>
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Dimond VAlley.png') }}">
                </div>
                <div class="exp-poin-card-row">
                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/Dimond VAlley.png') }}">
                </div>

            </div>
        </div>
    </section>
    <section class="our-social-media-section">
        <div class="our-social-media-div container mb-60">
            <div class="exp-btn-div">
                <a href="" class="commen-btn">Explore The Testimonials</a>
            </div>
            <div class="exp-title">
                <h2>
                    <p>testimonials</p>
                </h2>
            </div>

        </div>

    </section>
    <section class="explore-the-events-section">
        <div class="explore-the-events-div container mb-60">
            <div class="exp-btn-div">
                <a href="" class="commen-btn">Explore The Events</a>
            </div>
            <div class="exp-title">
                <h2>Events at <p>GM</p>
                </h2>
            </div>
            <div class="exp-events-div">
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
                <div class="exp-events-div-row">
                    <div class="exp-events-div-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 104.png') }}">
                    </div>
                    <div class="exp-events-div-detail">
                        <h2>DIAMOND VALLEY</h2>
                        <p>EVENT 1</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="explore-social-media-section">
        <div class="explore-social-media-div container mb-60">
            <div class="exp-btn-div">
                <a href="" class="commen-btn">social media</a>
            </div>
            <div class="exp-title">
                <h2>our<p>Preferred us</p>
                </h2>
            </div>
            <div class="social-media-our">
                <div class="social-media-row">
                    <div class="social-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 60.png') }}">
                        <div class="social-h2">
                            <h2>Iconic Subsidy</h2>
                        </div>
                    </div>

                </div>
                <div class="social-media-row">
                    <div class="social-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 60.png') }}">
                        <div class="social-h2">
                            <h2>Iconic Subsidy</h2>
                        </div>
                    </div>

                </div>
                <div class="social-media-row">
                    <div class="social-img">
                        <img src="{{ url(env('ASSETPATHURL') . 'web/images/Rectangle 60.png') }}">
                        <div class="social-h2">
                            <h2>Iconic Subsidy</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            console.log("jQuery Loaded!");
            $('.exp-events-div').slick({

                centerMode: true,
                centerPadding: '250px',
                slidesToShow: 2,
                dot: true,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <script>
        (function($) {
            $.fn.menumaker = function(options) {
                var cssmenu = $(this),
                    settings = $.extend({
                        format: "dropdown",
                        sticky: false
                    }, options);
                return this.each(function() {
                    $(this).find(".button").on('click', function() {
                        $(this).toggleClass('menu-opened');
                        var mainmenu = $(this).next('ul');
                        if (mainmenu.hasClass('open')) {
                            mainmenu.slideToggle().removeClass('open');
                        } else {
                            mainmenu.slideToggle().addClass('open');
                            if (settings.format === "dropdown") {
                                mainmenu.find('ul').show();
                            }
                        }
                    });
                    cssmenu.find('li ul').parent().addClass('has-sub');
                    multiTg = function() {
                        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu.find('.submenu-button').on('click', function() {
                            $(this).toggleClass('submenu-opened');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').slideToggle();
                            } else {
                                $(this).siblings('ul').addClass('open').slideToggle();
                            }
                        });
                    };
                    if (settings.format === 'multitoggle') multiTg();
                    else cssmenu.addClass('dropdown');
                    if (settings.sticky === true) cssmenu.css('position', 'fixed');
                    resizeFix = function() {
                        var mediasize = 1000;
                        if ($(window).width() > mediasize) {
                            cssmenu.find('ul').show();
                        }
                        if ($(window).width() <= mediasize) {
                            cssmenu.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    return $(window).on('resize', resizeFix);
                });
            };
        })(jQuery);

        (function($) {
            $(document).ready(function() {
                $("#cssmenu").menumaker({
                    format: "multitoggle"
                });
            });
        })(jQuery);
    </script>
@endsection
