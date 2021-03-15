@extends('layouts.master')
@section('title', 'onur-air')
@section('content')
    <!--slider sec strat-->
    <section id="slider-sec" class="slider-sec parallax"
             style="background: url('../img/custom/onur-air/breadcrump.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>ONUR AIR</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="#">Onur Air</a></li>
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
                                    <h1 class="font-weight-bold">{{__('page.onurair.header1')}}.</h1>
                                    <p class="d-text">{{__('page.onurair.content1')}} </p>
                                    <!--                                                <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>-->
                                    <!--                                                <h2>Post With A Preview Images</h2>-->
                                    <ul class="text-left" style="padding-left: 0px;">
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul1.li1')}}</li>
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul1.li2')}}</li>
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul1.li3')}}</li>
                                    </ul>
                                    <h4 class="font-weight-400">{{__('page.onurair.header2')}}</h4>

                                    <div class="single_img">
                                        <img src="{{asset('img/custom/onur-air/1.jpg')}}" alt="image">
                                    </div>

                                    <p class="d-text mt-5">{{__('page.onurair.content2')}}
                                        <a href="https://www.onurair.com/tr/seyahat-bilgileri/onAir/OnAir-Dergi/37/37/0"
                                           target="_blank" style="color: #FFBF00">{{__('page.onurair.link1')}}</a></p>
                                    <p class="d-text" style="font-size: large; margin-top: 30px;">{{__('page.onurair.li.head')}}</p>
                                    <ul class="text-left">
                                        <li style="font-size: large"><b>{{__('page.onurair.li1')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.onurair.li2')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.onurair.li3')}}</b></li>
                                    </ul>

                                    <div class="single_img">
                                        <a href="https://www.onurair.com/tr/seyahat-bilgileri/onAir/OnAir-Dergi/37/37/0"
                                           target="_blank" style="color: #FFBF00">
                                            <img src="{{asset('img/custom/onur-air/2.jpg')}}" alt="image"></a>

                                    </div>

                                    <h4 class="font-weight-400 mt-4">{{__('page.onurair.header3')}}</h4>

                                    <ul class="text-left" style="padding-left: 0px;">
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul2.li1')}}</li>
                                    </ul>
                                    <p class="d-text">
                                        {{__('page.onurair.content3')}}
                                    </p>
                                    <div class="single_img">
                                        <img src="{{asset('img/custom/onur-air/3.jpg')}}" alt="image">
                                    </div>

                                    <ul class="text-left mt-4" style="padding-left: 0px;">
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul2.li2')}}</li>
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul2.li3')}}</li>
                                        <li class="font-weight-bold" style="font-size: large">{{__('page.onurair.ul2.li4')}}</li>
                                    </ul>

                                    <div class="single_img">
                                        <img src="{{asset('img/custom/onur-air/4.jpg')}}" alt="image">
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="popular_posts">
                                    <h4 class="text-center text-lg-left">{{__('page.OUR.ADVERTISING.lower')}}</h4>
                                    <a href="{{url('/blog/pegasus')}}">
                                        <div class="media-box row">
                                            <div class="col-5 box-img">
                                                <img src="{{asset('img/custom/pegasus/small-size.jpg')}}" alt="image">
                                            </div>
                                            <div class="col-7 box-detail">
                                                <h2>Pegasus</h2>
                                                <p class="font-weight-500">{{__('page.advertising.pegasus.smalltext')}}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{url('/blog/sunexpress')}}">
                                        <div class="media-box row">
                                            <div class="col-5 box-img">
                                                <img src="{{asset('img/custom/sunexpress/small-size.jpg')}}"
                                                     alt="image">
                                            </div>
                                            <div class="col-7 box-detail">
                                                <h2>SunExpress</h2>
                                                <p class="font-weight-500">{{__('page.advertising.sunexpress.smalltext')}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
