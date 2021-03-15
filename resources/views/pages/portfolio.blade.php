@extends('layouts.master')
@section('title', 'about')
@section('content')
    <section id="slider-sec" class="slider-sec parallax" style="background: url('./img/portfolio/breadcrumb.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>{{__('page.OUR_BUSINESS')}}</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('page.home')}}</a></li>
                            <li class="breadcrumb-item"><a
                                        href="{{url('/islerimiz')}}">{{__('page.OUR_BUSINESS.lower')}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div id="portfolio-sec" class="portfolio-sec">
        <div class="container">
            <h2 style="font-weight: bold;">{{__('page.portfolio.abroad.videos')}}</h2>
            <ul>
                <li style="font-size: large;">{{__('page.portfolio.abroad.li1')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.abroad.li2')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.abroad.li3')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.abroad.li4')}}</li>
            </ul>
        </div>

        <div class="container">
            <h2 style="font-weight: bold;">{{__('page.portfolio.domestic.videos')}}</h2>
            <ul>
                <li style="font-size: large;">{{__('page.portfolio.domestic.li1')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.domestic.li2')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.domestic.li3')}}</li>
            </ul>
        </div>

        <div class="container">
            <h2 style="font-weight: bold;">{{__('page.portfolio.social.videos')}}</h2>
            <ul>
                <li style="font-size: large;">{{__('page.portfolio.social.li1')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.social.li2')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.social.li3')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.social.li4')}}</li>
                <li style="font-size: large;">{{__('page.portfolio.social.li5')}}</li>
            </ul>
        </div>

        <div class="container">
            <div class="row upper-sec">
                <div class="col-12 text-center portfolio-heading">
                    <div class="about-heading heading-details">

                    </div>
                </div>
                <div class="col-12 filers">
                    <div id="js-filters-full-width" class="cbp-l-filters-alignCenter">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item rounded-pill">
                            {{__('page.portfolio.all.videos')}}
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".abroad" class="cbp-filter-item rounded-pill">
                            {{__('page.portfolio.abroad.videos')}}
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".domestic" class="cbp-filter-item rounded-pill">
                            {{__('page.portfolio.domestic.videos')}}
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".social" class="cbp-filter-item rounded-pill">
                            {{__('page.portfolio.social.videos')}}
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".other" class="cbp-filter-item rounded-pill">
                            {{__('page.portfolio.other.videos')}}
                            <div class="cbp-filter-counter"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="js-grid-masonry" class="cbp">
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/356182021" class="cbp-caption cbp-lightbox"
                       data-title="Amsterdam">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/1.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Amsterdam</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/329560501" class="cbp-caption cbp-lightbox"
                       data-title="Bangkok">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Bangkok</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/356581220" class="cbp-caption cbp-lightbox" data-title="Bari">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/3.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Bari</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/364287862" class="cbp-caption cbp-lightbox"
                       data-title="Berlin">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/4.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Berlin</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/360246824" class="cbp-caption cbp-lightbox"
                       data-title="Budapest">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/5.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Budapest</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/331018488" class="cbp-caption cbp-lightbox"
                       data-title="Sickpuppy<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/6.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Dubai</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/329572750" class="cbp-caption cbp-lightbox"
                       data-title="Sickpuppy<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/7.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Durban</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/352724591" class="cbp-caption cbp-lightbox"
                       data-title="Milano">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/8.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Milano</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/348990804" class="cbp-caption cbp-lightbox"
                       data-title="Munih">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/9.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Munih</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/338903524" class="cbp-caption cbp-lightbox"
                       data-title="Seoul">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/10.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Seoul</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/359849943" class="cbp-caption cbp-lightbox"
                       data-title="Venedik">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/11.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Venedik</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item abroad">
                    <a href="https://vimeo.com/336318367" class="cbp-caption cbp-lightbox"
                       data-title="Zanzibar">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/abroad/12.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Zanzibar</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Domestic Videos-->


                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/390755031" class="cbp-caption cbp-lightbox"
                       data-title="Adıyaman">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/1.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Adıyaman</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/390755031" class="cbp-caption cbp-lightbox"
                       data-title="Amasya">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Amasya</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/392003190" class="cbp-caption cbp-lightbox"
                       data-title="Çanakkale">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/3.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Çanakkale</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/390758037" class="cbp-caption cbp-lightbox"
                       data-title="Denizli">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/4.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Denizli</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/375352455" class="cbp-caption cbp-lightbox"
                       data-title="Eskişehir">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/5.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Eskişehir</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/383464710" class="cbp-caption cbp-lightbox"
                       data-title="Hatay">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/6.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Hatay</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item domestic">
                <a href="https://vimeo.com/368554268" class="cbp-caption cbp-lightbox"
                   data-title="Kocaeli">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{asset('img/portfolio/domestic/7.jpg')}}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Kocaeli</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

                <div class="cbp-item domestic">
                    <a href="https://vimeo.com/390060699" class="cbp-caption cbp-lightbox"
                       data-title="Şanlıurfa">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/domestic/8.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Şanlıurfa</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Social Videos-->

                <div class="cbp-item social">
                    <a href="https://www.instagram.com/p/B574OGzAZuT/?utm_source=ig_web_copy_link" class="cbp-caption" target="_blank"
                       data-title="Roma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/İnstagram 1.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Roma</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://tr-tr.facebook.com/TurkishAirlines/videos/547917409103660/" class="cbp-caption" target="_blank"
                       data-title="Doha">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/Facebook 1.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Doha</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://twitter.com/TK_TR/status/1201495294317400064?s=20" class="cbp-caption" target="_blank"
                       data-title="Van">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/Twitter.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Van</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://www.youtube.com/watch?v=IRT1CY9Sjek" class="cbp-caption" target="_blank"
                       data-title="Kharkiv">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/Youtube1.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Kharkiv</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://www.instagram.com/p/B3CRQ8QA9YK/?igshid=msg43rk2e9g" class="cbp-caption" target="_blank"
                       data-title="Napoli">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/İnstagram 2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Napoli</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://www.facebook.com/TurkishAirlines/videos/2571814803036729/?hc_ref=ART1ra4pccYLkL0EIw-MpXEh86rbWkJQQQgeUZVEJzhn8wh4USMHJ9jFhtgh1EmB9ps&fref=nf&__tn__=kC-R"
                       class="cbp-caption" target="_blank"
                       data-title="Bologna">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/Facebook 2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Bologna</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://twitter.com/TK_TR/status/1240269887572004864?s=19"
                       class="cbp-caption" target="_blank"
                       data-title="Çanakkale">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/Twitter.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Çanakkale</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item social">
                    <a href="https://www.youtube.com/watch?v=85u1jgFEGKk"
                       class="cbp-caption" target="_blank"
                       data-title="Nice">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/social_medya/Youtube2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Nice</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Other Videos -->

                <div class="cbp-item other">
                    <a href="https://vimeo.com/227648451"
                       class="cbp-caption cbp-lightbox"
                       data-title="Bosch">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/1.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Bosch</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/391486052"
                       class="cbp-caption cbp-lightbox"
                       data-title="Cirque Du Soleil">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Cirque Du Soleil</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/391488523"
                       class="cbp-caption cbp-lightbox"
                       data-title="{{__('page.deik.awards')}}">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/3.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">{{__('page.deik.awards')}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/406803395"
                       class="cbp-caption cbp-lightbox"
                       data-title="Flutter">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/4.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Flutter</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/391472930"
                       class="cbp-caption cbp-lightbox"
                       data-title="İsfanbul">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/5.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">İsfanbul</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/20193011"
                       class="cbp-caption cbp-lightbox"
                       data-title="{{__('page.portfolio.other.symphony')}}">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/6.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">{{__('page.portfolio.other.symphony')}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/398481627"
                       class="cbp-caption cbp-lightbox"
                       data-title="{{__('page.Turkish.cuisine')}}">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/7.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">{{__('page.Turkish.cuisine')}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item other">
                    <a href="https://vimeo.com/232873280"
                       class="cbp-caption cbp-lightbox"
                       data-title="TİM TV">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('img/portfolio/others/8.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">TİM TV</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>





@endsection