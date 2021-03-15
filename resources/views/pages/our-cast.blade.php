@extends('layouts.master')
@section('title', 'our-cast')
@section('content')

    <section id="slider-sec" class="slider-sec parallax" style="background: url('./img/Takmmz.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>{{__('page.ourCast')}}</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{url(__('page.link.cast'))}}">{{__('page.ourCast')}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="portfolio-section">
        <div class="container">
            <div class="row">
                <!-- START PORTFOLIO IMAGES -->
                <div class="col-12" style="margin-left: 50px; margin-top: 100px;">
                    <div id="js-grid-blog-posts" class="cbp">

                        @foreach($casts as $item)
                        <div class="cbp-item CausalShirts others wow slideInUp" style="width: 250px; height: 350px;">
                            <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                                <div class="item"><img src="{{$item['image']}}" alt=""></div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-center">
                                    <a target="_blank"
                                       class="cbp-l-grid-blog-title portfolio-title" style="font-weight: bold;">{{$item['name']}}</a>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="cbp-l-grid-blog-desc portfolio-des" style="color: #FFBF00;">{{$item['desc']}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- END PORTFOLIO IMAGES -->

            </div>
        </div>
    </div>
@endsection
