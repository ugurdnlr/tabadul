@extends('layouts.master')
@section('title', 'our-services')
@section('content')
    <style>
        .production-box img {
            height: 100px;
        }
        #slider-sec {
            height: 100px;
            background-attachment: scroll !important;
        }
    </style>

    <section id="slider-sec" class="slider-sec parallax" style="background: url('./img/Petrol-uretimi.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>{{__('page.ourServices')}}</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{url(__('page.link.services'))}}">{{__('page.ourServices')}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="production-sec" id="our-services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="production-box row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('img/fdi.png')}}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="production-heading mt-3">{{__('page.services.title1')}}</h4>
                            <p class="production-des">{{__('page.services.content1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="production-box row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('img/ppp.png')}}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="production-heading mt-3">{{__('page.services.title2')}}</h4>
                            <p class="production-des">{{__('page.services.content2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="production-box row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('img/altyapi.png')}}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="production-heading mt-3">{{__('page.services.title3')}}</h4>
                            <p class="production-des">{{__('page.services.content3')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="production-box row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('img/ticari.png')}}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="production-heading mt-3">{{__('page.services.title4')}}</h4>
                            <p class="production-des">{{__('page.services.content4')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="production-box row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('img/ozellestirme.png')}}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="production-heading mt-3">{{__('page.services.title5')}}</h4>
                            <p class="production-des">{{__('page.services.content5')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="production-box row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('img/know-how.png')}}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="production-heading mt-3">{{__('page.services.title6')}}</h4>
                            <p class="production-des">{{__('page.services.content6')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
