@extends('web.layout.default')
@section('styles')
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/event-style.css') }}" rel="stylesheet">
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/event-max.css') }}" rel="stylesheet">
@endsection
@section('content')
    <main>
        <!-- event-banner -->
        <section class="event-banner">
            <div class="event-banner-title">
                <p>Home > Media/Event</p>
                <h1>Media/Event</h1>
            </div>
        </section>
        <!-- Event-images  -->
        <section class="events-images">
            <div class="container">
                <div class="row">
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events1.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Diamond Valley Event 1</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events2.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Gm Diamond Group Presents</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events3.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Diamond Valley Event 1</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events4.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Diamond Valley Event 1</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events1.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Diamond Valley Event 1</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events2.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Gm Diamond Group Presents</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events3.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Diamond Valley Event 1</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>
                    <div class="w-4 w-xl-3 w-md-2 w-xs-1">
                        <div class="slider__item">
                            <div class="right-border"></div>
                            <img src="{{ url(env('ASSETPATHURL') . 'web/images/Events4.png') }}" alt="Events"
                                title="Events" width="100%">
                            <h2>Diamond Valley Event 1</h2>
                            <h4>Event 1</h4>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>
@endsection
