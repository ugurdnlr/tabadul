@extends('layouts.master')
@section('title', 'about')
@section('content')
    <section id="slider-sec" class="slider-sec parallax" style="background: url('./img/Hakkmzda.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>{{__('page.aboutUs')}}</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/hakkimizda')}}">{{__('page.aboutUs')}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--About Star-->
    <section id="about">
        <div class="container">
            <div class="row dot-box">

                <!-- Heading Area-->
                <div class="col-12 col-lg-6 about-img-area text-center text-lg-left">
                    <div class="heading-area pl-lg-4 p-0 mb-5">
                        <p class="paragraph">{{__('page.about.content.in.p1')}}<br>
                            <br>
                            {{__('page.about.content.in.p2')}}<br>
                            <br>
                            {{__('page.about.content.in.p3')}}
                            <br>
                            <br>
                            {{__('page.about.content.in.p4')}}
                            <br>
                            <br>
                            {{__('page.about.content.in.p5')}}
                            <br>
                            <br>
                            {{__('page.about.content.in.p6')}}
                            <br>
                            <br>
                            {{__('page.about.content.in.p7')}}
                        </p>
                        <!--List-->
                    </div>
                </div>
                <div class="col-12 col-lg-6 about-img-area">
                    <div class="about-img">
                        @if(Config::get('app.locale') === 'tr')
                            <img src="{{asset('img/aboutContent.jpg')}}">
                        @else
                            <img src="{{asset('img/aboutContent-EN.jpg')}}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->
@endsection
