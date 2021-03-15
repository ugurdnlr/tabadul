@extends('layouts.master')
@section('title', 'customer')
@section('content')

    <section id="slider-sec" class="slider-sec parallax" style="background: url('./img/customers-breadcrumb.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>{{__('page.customer')}}</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{url(__('page.link.customer'))}}">{{__('page.customer')}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="portfolio-section">
        <div class="container text-center">
            <div class="row">
                <!-- START PORTFOLIO IMAGES -->
                <div class="col-12" style="margin-left: 50px; margin-top: 100px;">
                    <div id="js-grid-blog-posts" class="cbp" style="margin-right: 50px;">

                        @foreach($customers as $item)
                            <div class="cbp-item CausalShirts others wow slideInUp" style="width: 225px; height: 300px; margin: 0 25px 0 25px;">
                                <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                                    <div class="item"><img src="{{$item['image']}}" alt=""></div>
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
