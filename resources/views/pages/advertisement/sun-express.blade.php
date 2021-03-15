@extends('layouts.master')
@section('title', 'sunexpress')
@section('content')
    <!--slider sec strat-->
    <section id="slider-sec" class="slider-sec parallax" style="background: url('../img/custom/sunexpress/breadcrump.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>SunExpress</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/blog/sunexpress')}}">SunExpress</a></li>
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
                                    <h1 style="font-weight: bold">{{__('page.sunexpress.header1')}}</h1>
                                    <p class="d-text" style="font-size: large">
                                        {{__('page.sunexpress.content1')}}</p>
                                    <ul class="text-left" >
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul1.li1')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul1.li2')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul1.li3')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul1.li4')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul1.li5')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul1.li6')}}</b></li>
                                    </ul>
                                    <h2 style="font-weight: bold">{{__('page.sunexpress.header2')}}</h2>
                                    @if(Config::get('app.locale') === 'tr')
                                        <img src="{{asset('img/custom/sunexpress/1.jpg')}}" style="">
                                    @else
                                        <img src="{{asset('img/custom/sunexpress/1-EN.jpg')}}" style="">
                                    @endif
                                    <ul class="text-left" style="padding-left: 0px; margin-top: 15px;">
                                        <li style="font-size: large"><b>
                                                {{__('page.sunexpress.ul2.li1')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul2.li2')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul2.li3')}}</b></li>
                                    </ul>
                                    <p class="d-text" style="font-size: large; margin-top: 20px;">
                                        {{__('page.sunexpress.ul3.li1')}}
                                        <br>{{__('page.sunexpress.ul3.li2')}}
                                        <br>{{__('page.sunexpress.ul3.li3')}}
                                    </p>
                                    <p class="d-text" style="font-size: large; margin-top: 20px;">
                                        {{__('page.sunexpress.content2')}}
                                    </p>
                                    <p class="d-text" style="font-size: large; margin-top: -20px;">
                                        @if(Config::get('app.locale') === 'en')
                                            <br>{{__('page.sunexpress.ul4.li4')}}
                                            <br>{{__('page.sunexpress.ul4.li1')}}
                                            <br>{{__('page.sunexpress.ul4.li2')}}
                                            <br>{{__('page.sunexpress.ul4.li3')}}
                                        @else
                                            <br>{{__('page.sunexpress.ul4.li1')}}
                                            <br>{{__('page.sunexpress.ul4.li2')}}
                                            <br>{{__('page.sunexpress.ul4.li3')}}
                                        @endif
                                    </p>
                                    <h2 style="font-weight: bold">{{__('page.sunexpress.header3')}}</h2>
                                    <img src="{{asset('img/custom/sunexpress/2.jpg')}}" style="margin-top: 20px;">
                                    <p class="d-text" style="font-size: large; margin-top: 30px;">
                                        {{__('page.sunexpress.content3')}}
                                        <br><a href="http://suntimesmagazine.com" target="_blank" style="color: #FFBF00;">{{__('page.sunexpress.link1')}}</a>
                                    </p>
                                    <p class="d-text" style="font-size: large; margin-top: 30px;">{{__('page.sunexpress.li.head')}}</p>
                                    <ul class="text-left">
                                        <li style="font-size: large"><b>{{__('page.sunexpress.li1')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.li2')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.li3')}}</b></li>
                                    </ul>

                                    <a href="http://suntimesmagazine.com" target="_blank"><img src="{{asset('img/custom/sunexpress/3.jpg')}}" style="margin-top: 20px;"></a>
                                    <h2 style="font-weight: bold; margin-top: 50px;">{{__('page.sunexpress.header5')}}</h2>
                                    <p class="d-text" style="font-size: large; margin-top: 20px;">
                                        {{__('page.sunexpress.content4')}}
                                    </p>
                                    <h2 style="font-weight: bold; margin-top: 50px;">{{__('page.sunexpress.header4')}}</h2>
                                    <a href="https://vimeo.com/404998834/3f6ba6c464" target="_blank"><img src="{{asset('img/custom/sunexpress/14.jpg')}}"></a>

                                    <div class="qoute" style="margin-top: 50px;">
                                        <p style="font-size: large">{{__('page.sunexpress.ul5.p1')}}</p>
                                        <ul class="text-left">
                                            <li style="font-size: large"><b>{{__('page.sunexpress.ul5.li1')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.sunexpress.ul5.li5')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.sunexpress.ul5.li2')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.sunexpress.ul5.li3')}}</b></li>
                                            <li style="font-size: large"><b>{{__('page.sunexpress.ul5.li4')}}</b></li>
                                            <p style="font-size: large">{{__('page.sunexpress.ul5.p2')}}</p>
                                        </ul>
                                    </div>
                                    @if(Config::get('app.locale') === 'tr')
                                        <img src="{{asset('img/custom/sunexpress/4.jpg')}}" style="margin-top: 20px;">
                                    @else
                                        <img src="{{asset('img/custom/sunexpress/7-EN.jpg')}}" style="margin-top: 20px;">
                                    @endif
                                    <img src="{{asset('img/custom/sunexpress/13.png')}}" style="margin-top: 20px;">
                                    <h2 style="font-weight: bold">{{__('page.sunexpress.header7')}}</h2>
                                    <ul class="text-left">
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul6.li1')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul6.li2')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul6.li3')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul6.li4')}}</b></li>
                                        <li style="font-size: large"><b>{{__('page.sunexpress.ul6.li5')}}</b></li>
                                    </ul>
                                    <div style="margin-top: 20px; margin-left: 25px;">
                                        @if(Config::get('app.locale') === 'tr')
                                            <img src="{{asset('img/custom/sunexpress/5.jpg')}}">
                                        @else
                                            <img src="{{asset('img/custom/sunexpress/2-EN.jpg')}}">
                                        @endif
                                    </div>
                                    <div style="margin-left: 30px;margin-top: 20px;">
                                        @if(Config::get('app.locale') === 'tr')
                                            <img src="{{asset('img/custom/sunexpress/6.jpg')}}" style="margin-bottom: 20px">
                                        @else
                                            <img src="{{asset('img/custom/sunexpress/3-EN.jpg')}}" style="margin-bottom: 20px">
                                        @endif
                                            @if(Config::get('app.locale') === 'tr')
                                                <img src="{{asset('img/custom/sunexpress/8.jpg')}}" style="margin-bottom: 20px">
                                            @else
                                                <img src="{{asset('img/custom/sunexpress/4-EN.jpg')}}" style="margin-bottom: 20px">
                                            @endif
                                            @if(Config::get('app.locale') === 'tr')
                                                <img src="{{asset('img/custom/sunexpress/9.jpg')}}">
                                            @else
                                                <img src="{{asset('img/custom/sunexpress/5-EN.jpg')}}">
                                            @endif
                                            @if(Config::get('app.locale') === 'tr')
                                                <img src="{{asset('img/custom/sunexpress/11.jpg')}}">
                                            @else
                                                <img src="{{asset('img/custom/sunexpress/6-EN.jpg')}}">
                                            @endif
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
                                    <a href="{{url('/blog/pegasus')}}"><div class="media-box row">
                                            <div class="col-5 box-img">
                                                <img src="{{asset('img/custom/pegasus/small-size.jpg')}}" alt="image">
                                            </div>
                                            <div class="col-7 box-detail">
                                                <h2>Pegasus</h2>
                                                <p class="font-weight-500">{{__('page.advertising.pegasus.smalltext')}}</p>
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
