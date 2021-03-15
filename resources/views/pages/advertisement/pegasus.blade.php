@extends('layouts.master')
@section('title', 'pegasus')
@section('content')
    <!--slider sec strat-->
    <section id="slider-sec" class="slider-sec parallax" style="background: url('../img/custom/pegasus/breadcrump.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>Pegasus</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/blog/pegasus')}}">Pegasus</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--slider sec end-->


    <!--main page content-->
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-5">
                        <div class="main_content text-center text-lg-left">
                            <div class="detail_blog">
                                <div class="blog_detail">
                                    <h1 style="font-weight: bold">{{__('page.pegasus.home.title')}}</h1>
                                    <h2 class="mt-5" style="font-weight: bold">{{__('page.pegasus.h1')}}</h2>
                                    <p class="d-text" style="font-size: large">{{__('page.pegasus.content1')}}</p>
                                        @if(Config::get('app.locale') === 'tr')
                                            <img src="{{asset('img/custom/pegasus/1.jpg')}}">
                                            <img src="{{asset('img/custom/pegasus/2.jpg')}}">
                                        @else
                                            <img src="{{asset('img/custom/pegasus/1-EN.jpg')}}">
                                            <img src="{{asset('img/custom/pegasus/2-EN.jpg')}}">
                                        @endif
                                    <ul class="text-left" style="margin-top: 20px;">
                                        <li style="font-size: large"><b>{{__('page.pegasus.li1')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.pegasus.li2')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.pegasus.li3')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.pegasus.li4')}}</b></li>
                                    </ul>
                                    <h2 style="font-weight: bold">{{__('page.pegasus.h2')}}</h2>
                                    <img src="{{asset('img/custom/pegasus/3.jpg')}}" style="margin-top: 20px;">
                                    <img src="{{asset('img/custom/pegasus/abroadMap.jpg')}}" style="margin-top: 20px;">
                                    <p class="d-text" style="font-size: large; margin-top: 20px;">
                                        {{__('page.pegasus.content2')}}
                                    </p>
                                    <h5 style="font-weight: bold"><a target="_blank" href="https://vimeo.com/404983114/4a8745afc2">{{__('page.pegasus.introductory.video')}}</a></h5>


                                    <div class="video-btn">
                                        <a target="_blank" href="https://vimeo.com/404983114/4a8745afc2"> <img src="{{asset('img/custom/pegasus/Pegasusmovies1copy.jpg')}}" style="margin-top: 20px;"></a>
                                    </div>


                                    <div class="qoute">
                                        <p style="font-size: large">{{__('page.pegasus.introductory.video.content')}}</p>
                                        <ul class="text-left">
                                            <li style="font-size: large"><b>{{__('page.pegasus.introductory.video.li1')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.pegasus.introductory.video.li5')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.pegasus.introductory.video.li2')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.pegasus.introductory.video.li3')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.pegasus.introductory.video.li4')}}</b></li>
                                            <p style="font-size: large">{{__('page.pegasus.introductory.video.content2')}}</p>
                                        </ul>
                                    </div>
                                    <div style="margin-top: 20px; margin-left: 25px;">
                                        <img src="{{asset('img/custom/pegasus/Pegasusmovies2.jpg')}}">
                                    </div>
                                    <div style="margin-left: 30px;margin-top: 20px;">
                                        <img src="{{asset('img/custom/pegasus/PGSFLYWATCHcopy.jpg')}}">
                                    </div>
                                    <!--<div style="margin-top: 20px; margin-left: 25px;">
                                        <h2 class="mt-5" style="font-weight: bold">{{--__('page.pegasus.our.advertising.formats')--}}</h2>
                                    <img src="{{--asset('img/custom/pegasus/6.jpg')--}}}">
                                    </div>-->
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="popular_posts">
                                    <h4 class="text-center text-lg-left">{{__('page.OUR.ADVERTISING.lower')}}</h4>
                                    <a href="{{url('/blog/sunexpress')}}"><div class="media-box row">
                                            <div class="col-5 box-img">
                                                <img src="{{asset('img/custom/sunexpress/small-size.jpg')}}" alt="image">
                                            </div>
                                            <div class="col-7 box-detail">
                                                <h2>SunExpress</h2>
                                                <p class="font-weight-500">{{__('page.advertising.sunexpress.smalltext')}}</p>
                                            </div>
                                        </div></a>
                                    <a href="{{url('/blog/onurair')}}"><div class="media-box row">
                                            <div class="col-5 box-img">
                                                <img src="{{asset('img/custom/onur-air/small-size.jpg')}}" alt="image">
                                            </div>
                                            <div class="col-7 box-detail">
                                                <h2>Onur Air</h2>
                                                <p class="font-weight-500">{{__('page.advertising.onurair.smalltext')}}</p>
                                            </div>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
