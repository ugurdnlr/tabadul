@extends('layouts.master')
@section('title', 'welcome')
@section('content')
    @include('pages.slider')
    <style>
        @media only screen and (max-width: 768px) {
            .aboutImage {
                margin-left: 91px;
                margin-top: 10px;
            }
        }

        @media only screen and (max-width: 767px) {
            .aboutImage {
                margin-left: 0px;
                margin-top: 0px;
            }
        }

        @media only screen and (max-width: 600px) {
            #sectors .news_item img {
                height: auto !important;
            }
        }

        .news_item {
            height: auto;
        }

        #sectors .news_item img {
            height: 360px;
        }

        #our-blog .news_item img {
            height: 175px;
        }

        #our-blog .news_item a:hover h4 {
            text-decoration: underline;
            color: #199fdf !important;
        }

        .production-box img {
            height: 100px;
        }

    </style>

    <body data-spy="scroll" data-target=".navbar" data-offset="90">
    <!-- Preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    <!--About Star-->
    <section id="about">
        <div class="container">
            <div class="row dot-box">

                <!-- Heading Area-->
                <div class="col-12 col-lg-7 about-img-area d-flex align-items-center">
                    <div>
                        <h6 class="sub-title main-color"></h6>
                        <h2 class="title">{{__('page.ABOUT')}}</h2>
                        <p class="paragraph">{!! trans('page.aboutUs.content') !!}</p>
                        <!--List-->
                    </div>
                </div>
                <div class="col-12 col-lg-5 about-img-area">
                    <div class="about-img text-center">
                        <img class="aboutImage" src="{{asset('img/anwar-faituri.jpg')}}">
                        <div class="mt-4 text-center">
                            <span><b>Dr. Anwar Faituri</b></span> <br>
                        <span>{!! trans('page.president.title') !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->

    <!--Project End-->

    <section class="production-sec" id="our-services">
        <div class="container">
            <div class="col-12 text-center portfolio-heading">
                <div class="about-heading heading-details">
                    <h4 class="heading text-uppercase">{{__('page.ourServices')}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="production-box">
                        <img src="{{asset('img/fdi.png')}}" alt="">
                        <h4 class="production-heading mt-3">{{__('page.services.title1')}}</h4>
                        <p class="production-des">{{__('page.services.content1.first')}}</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="production-box">
                        <img src="{{asset('img/ppp.png')}}" alt="">
                        <h4 class="production-heading mt-3">{{__('page.services.title2.home')}}</h4>
                        <p class="production-des">{{__('page.services.content2.first')}}</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="production-box">
                        <img src="{{asset('img/altyapi.png')}}" alt="">
                        <h4 class="production-heading mt-3">{{__('page.services.title3')}}</h4>
                        <p class="production-des">{{__('page.services.content3.first')}}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="production-box">
                        <img src="{{asset('img/ticari.png')}}" alt="">
                        <h4 class="production-heading mt-3">{{__('page.services.title4')}}</h4>
                        <p class="production-des">{{__('page.services.content4.first')}}</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="production-box">
                        <img src="{{asset('img/ozellestirme.png')}}" alt="">
                        <h4 class="production-heading mt-3">{{__('page.services.title5')}}</h4>
                        <p class="production-des">{{__('page.services.content5.first')}}</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="production-box">
                        <img src="{{asset('img/know-how.png')}}" alt="">
                        <h4 class="production-heading mt-3">{{__('page.services.title6')}}</h4>
                        <p class="production-des">{{__('page.services.content6.first')}}</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                <a class="btn blue-and-white-slider-btn"
                   href="{{url('/hizmetlerimiz')}}">{{__('page.read.more')}}</a>
                </div>
            </div>
        </div>
    </section>
    <!--Project End-->

    <!--video sec start-->
    <!--<section id="video-sec" class="video-sec bg-video-img">
        <div class="overlay d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="video-btn">
                            <a data-fancybox="" href="https://vimeo.com/390763037"><i
                                        class="las la-play play-btn text-brown"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--Video sec end-->


    <!--blogs sec start-->
    <!--Blog-->
    <section class="bglight padding" id="sectors">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">{{__('page.sectors')}}</h4>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-img">
                                <img src="{{asset('img/Refinery.jpg')}}" alt="Rafinery">
                        </div>
                        <div class="news_desc">
                            <h3 class="font-normal darkcolor">{{trans('page.sectors.title1')}}</h3>
                            <p>{{trans('page.sectors.content1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-img">
                                <img src="{{asset('img/Gold-mine.jpg')}}" alt="Gold Mine">
                        </div>
                        <div class="news_desc">
                            <h3 class="font-normal darkcolor">{{trans('page.sectors.title2')}}</h3>
                            <p>{{trans('page.sectors.content2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-img">
                                <img src="{{asset('img/Finans.jpg')}}" alt="Data Center">
                        </div>
                        <div class="news_desc">
                            <h3 class="font-normal darkcolor">{{trans('page.sectors.title3')}}</h3>
                            <p>{{trans('page.sectors.content3')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-img">
                                <img src="{{asset('img/Dis-Ticaret.jpg')}}" alt="Factory">
                        </div>
                        <div class="news_desc">
                            <h3 class="font-normal darkcolor">{{trans('page.sectors.title4')}}</h3>
                            <p>{{trans('page.sectors.content4')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-img">
                                <img src="{{asset('img/Kapadokya.jpg')}}" alt="Turizm">
                        </div>
                        <div class="news_desc">
                            <h3 class="font-normal darkcolor">{{trans('page.sectors.title5')}}</h3>
                            <p>{{trans('page.sectors.content5')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-img">
                            <img src="{{asset('img/Data-center.jpg')}}" alt="Data center">
                        </div>
                        <div class="news_desc">
                            <h3 class="font-normal darkcolor">{{trans('page.sectors.title6')}}</h3>
                            <p>{{trans('page.sectors.content6')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog ends-->

    <!--our cast sec start-->
    <section class="our-cast" id="our-cast">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 text-center">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">{{__('page.OUR_CAST')}}</h4>
                        <p class="top-des"></p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters testimonial-cast owl-carousel owl-theme">
                <div class="item">
                    <div class="row no-gutters cast-card">
                        <div class="col-12">
                            <div class="cast-img">
                                <img src="{{asset('img/anwar-faituri.jpg')}}">
                            </div>
                            <div class="cast-detail d-flex align-items-center" style="height: 100px">
                                <div class="cast-content">
                                    <h4 class="cast-name">DR. ANWAR FA??TUR??</h4>
                                    <span class="cast-designation">{{__('page.chairman')}}</span>
                                </div>
                                <div class="overlay-cast"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row no-gutters cast-card">
                        <div class="col-12">
                            <div class="cast-img">
                                <img src="{{asset('img/team/Emre_Yalcin.jpg')}}">
                            </div>
                            <div class="cast-detail d-flex align-items-center" style="height: 100px">
                                <div class="cast-content">
                                    <h4 class="cast-name">EMRE YAL??IN</h4>
                                    <span class="cast-designation">{{__('page.managing.partner')}}</span>
                                </div>
                                <div class="overlay-cast"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row no-gutters cast-card">
                        <div class="col-12">
                            <div class="cast-img">
                                <img src="{{asset('img/team/Osama-Younis.png')}} ">
                            </div>
                            <div class="cast-detail d-flex align-items-center" style="height: 100px">
                                <div class="cast-content">
                                    <h4 class="cast-name">DR. OSAMA YOUN??S</h4>
                                    <span class="cast-designation">{{__('page.managing.partner')}}</span>
                                </div>
                                <div class="overlay-cast"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row no-gutters cast-card">
                        <div class="col-12">
                            <div class="cast-img">
                                <img src="{{asset('img/team/ali_eski-black.jpg')}}">
                            </div>
                            <div class="cast-detail d-flex align-items-center" style="height: 100px">
                                <div class="cast-content">
                                    <h4 class="cast-name">AL?? E??K??</h4>
                                    <span class="cast-designation">{{__('page.managing.partner')}}</span>
                                </div>
                                <div class="overlay-cast"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--our cast sec start-->

    @php($company = [
            'title' => [
                'Helen Holidays', 'Avenue International', 'Era Horizons', 'Electrofix', 'Turkey CLP', 'Taksim Square',
                '??sfanbul Holiday Home', 'Telefun Produksiyon', 'Zadana Trade', 'Tabadul D???? Ticaret', 'Nept??n Yaz??l??m',
                'Visa For The Globe'
            ],
            'link' => [
               'http://www.helenholidays.com/', 'http://www.avenueinternational.net', 'http://www.erahorizons.com', 'http://www.electrofixgroup.com',
               'https://www.turkeyclp.com/', 'http://www.hoteltaksimsquare.com/', 'http://www.isfanbulsuites.com/', 'https://www.telefun.com.tr',
               'http://www.zadana.ly', 'http://tabadulexport.com', 'https://www.neptunyazilim.com/', 'https://www.visafg.com/'
            ],
            'text' => [
                'tr' => [
                     'MENA b??lgesinden T??rkiye???ye y??lda 80 binden fazla turist getiren, b??lgedeki acenteleri ile B2B ??al????an lider turizm grubudur.',
                    'Petrol firmalar?? ba??ta olmak ??zere Libya???n??n ??nde gelen kurumlar??na e??itim ve proje dan????manl?????? hizmetleri vermektedir.',
                    'Kanada merkezli ??irketimiz, Libya???daki firmalara dijital d??n??????m, ERP, siber g??venlik, network ????z??mleri alanlar??nda hizmet sa??lamaktad??r.',
                    'Malta merkezli ??irketimiz, Avrupa ve Kuzey Afrika ??lkelerinde, ba??ta g??ne?? enerjisi olmak ??zere yenilenebilir enerji alan??nda faaliyet g??stermektedir.',
                    'T??rkiye???ye gayrimenkul yat??r??m?? yapmak isteyen yabanc??lara, T??rk vatanda??l?????? program??ndan faydalanmak isteyen ki??ilere dan????manl??k sa??lamaktad??r.',
                    '??stanbul Taksim meydan??nda bulunan, bo??az manzaral?? odalar?? ve y??ksek hizmet kalitesi ile misafirlerimizi a????rlad??????m??z d??rt y??ld??zl?? ??ehir otelimiz.',
                    '??stanbul???un tek tema park??n??n i??inde yer alan, daha ziyade yabanc?? misafirlerimize, s??it odalarla hizmet veren, be?? y??ld??zl?? otelimiz.',
                    'THY ba??ta olmak ??zere havayolu firmalar??n??n u??ak i??i e??lence ve sosyal medya prod??ksiyonlar??n?? ??reten, alan??nda tecr??beli bir ??irkettir.',
                    'Trablus, Bingazi, Misurata ve El Baida ??ehirlerinde bulunan depolar?? ve k??rktan fazla da????t??m kamyonu ile Zadana, Libya???n??n tecr??beli toptan g??da ve i??ecek distrib??t??r??d??r.',
                    'Distrib??t??r?? oldu??u bir ??ok markan??n T??rkiye???den Afrika ??lkelerine ihracat??n?? yapan grup ??irketimizdir.',
                    'Turizm sekt??r??n??n ihtiya?? duydu??u B2B yaz??l??mlar?? sa??layan grup ??irketimizdir.',
                    'Libya ve L??bnan???daki ofisleri arac??l??????yla T??rk b??y??kel??iliklerine etiket vize hizmeti veren grup ??irketimizdir.'
                ],
                'en' => [
                     'A B2B based leading tourism group with a capacity to bring in more than 80k tourists from MENA to Turkey via its regional agencies.',
                    'Offers training and project consultation services to leading companies in Libya, in particular oil companies.',
                    'Based in Canada, our company offers services in digital transformation, ERP, cyber security, network solutions to companies in Libya.',
                    'Based in Malta, our company is engaged in renewable energy, mainly including solar energy, in European and North African countries.',
                    'Offers consultation services to foreigners interested in real estate investment in Turkey and individuals willing to benefit from Turkish citizenship programme.',
                    'Situated in Istanbul Taksim Square, our four-star hotels hosts our guests with its bosphorus view rooms and supreme service quality.',
                    'Located within the one and only theme park of Istanbul, our five-star hotels serves mostly our foreign guests in suit rooms.',
                    'An experienced company producing in-flight entertainment and social media productions for airline companies, mainly including Turkish Airlines.',
                    'Experienced bulk food and drink distributor of Libya, Zadana has warehouses in Trablus, Bingazi, Misurata and El Baida and more than 40 distribution trucks.',
                    'As the distributor of many brands, our group company exports from Turkey to African countries.',
                    'Provides B2B software as required by tourism industry.',
                    'Offers sticker visa services to Turkish embassies through offices in Libya and Lebanon.'
                ],
            ],
            'image' => [
               'Helen-Holidays.png', 'Avenue-International.png', 'Era-Horizons.png', 'Electrofix.png', 'CLP.jpeg', 'Taksim-Square.jpeg',
               '??sfanbul-Holiday-Home.jpeg', 'telefun.png', 'Zadana.png', 'tabadul-dis-ticaret.png', 'Neptun.png', 'VisaFG.jpg'
            ]
     ])


    <section class="bglight padding" id="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">{{__('page.company')}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @for($i = 0; $i < count($company['title']); $i++)
                <div class="col-lg-4 col-md-6 mt-3" style="display: table-cell;">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="300ms" style="height: 100%">
                        <div class="blog-multi-img">
                            <div class="owl-carousel owl-theme owl-blog-item">
                                <div class="item">
                                    <a href="{{$company['link'][$i]}}" target="_blank">
                                        <h4 class="mb-0 mt-4 text-center" style="color:#22327d">{{$company['title'][$i]}}</h4>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="news_desc">
                            <p>{{$company['text'][config('app.locale')][$i]}}</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!--portfolio sec start-->
    <!--portfolio section start
    <div id="portfolio-sec" class="portfolio-sec">
        <div class="container">
            <div class="row upper-sec">
                <div class="col-12 text-center portfolio-heading">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">MOVIE GALLERY</h4>
                    </div>
                </div>
                <div class="col-12 filers">
                    <div id="js-filters-full-width" class="cbp-l-filters-alignCenter">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item rounded-pill">
                            All
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".branding" class="cbp-filter-item rounded-pill">
                            Concerts
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".web-design" class="cbp-filter-item rounded-pill">
                            Festivals
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".photo" class="cbp-filter-item rounded-pill">
                            Sufi
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".movies" class="cbp-filter-item rounded-pill">
                            Movies
                            <div class="cbp-filter-counter"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="js-grid-masonry" class="cbp">
                <div class="cbp-item branding">
                    <a href="film/img/p-1.png" class="cbp-caption cbp-lightbox"
                       data-title="Easy Note<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-1.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Gala Event</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design">
                    <a href="film/img/p-2.png" class="cbp-caption cbp-lightbox"
                       data-title="The Gang Blue<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-2.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">The Gang Blue</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item photo branding movies">
                    <a href="film/img/p-3.png" class="cbp-caption cbp-lightbox"
                       data-title="Tiger<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-3.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Tiger</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design photo">
                    <a href="film/img/p-4.png" class="cbp-caption cbp-lightbox"
                       data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-4.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Flat Roman</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item branding movies">
                    <a href="film/img/p-5.png" class="cbp-caption cbp-lightbox"
                       data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-5.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Flat Roman</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design branding">
                    <a href="film/img/p-6.png" class="cbp-caption cbp-lightbox"
                       data-title="Sickpuppy<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-6.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Sickpuppy</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item movies photo">
                    <a href="film/img/p-7.png" class="cbp-caption cbp-lightbox"
                       data-title="Sickpuppy<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-7.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Sickpuppy</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item branding">
                    <a href="film/img/p-1.png" class="cbp-caption cbp-lightbox"
                       data-title="Easy Note<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-1.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Gala Event</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design">
                    <a href="film/img/p-2.png" class="cbp-caption cbp-lightbox"
                       data-title="The Gang Blue<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-2.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">The Gang Blue</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item photo branding movies">
                    <a href="film/img/p-3.png" class="cbp-caption cbp-lightbox"
                       data-title="Tiger<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-3.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Tiger</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design photo">
                    <a href="film/img/p-4.png" class="cbp-caption cbp-lightbox"
                       data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="film/img/p-4.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Flat Roman</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!--portfolio section end-->
    <!--portfolio sec end-->

    <!--latest-items start
    <section class="latest-items">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 text-center">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">LATEST VIDEOS</h4>
                    </div>
                </div>
            </div>
            <div class="list-item-slider owl-carousel owl-theme">
                <div class="item">
                    <a data-fancybox="" href="https://vimeo.com/90840341">
                        <div class="product">
                            <div class="product-img">
                                <img src="film/img/l1.jpg">
                                <div class="overlay-item d-flex justify-content-center align-items-center">
                                    <i class="las la-play"></i>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="text-des">Lorem ipsum dolor sit amet, conset sed tem.</p>
                                <h4 class="heading text-uppercase">Run Away From Light.</h4>
                                <a href="#" class="watch-product"><i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a data-fancybox="" href="https://vimeo.com/90840341">
                        <div class="product">
                            <div class="product-img">
                                <img src="film/img/l2.jpg">
                                <div class="overlay-item d-flex justify-content-center align-items-center">
                                    <a data-fancybox="" href="https://vimeo.com/106765702"><i
                                                class="las la-play"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="text-des">Lorem ipsum dolor sit amet, conset sed tem.</p>
                                <h4 class="heading text-uppercase">Run Away From Light.</h4>
                                <a href="#" class="watch-product"><i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a data-fancybox="" href="https://vimeo.com/90840341">
                        <div class="product">
                            <div class="product-img">
                                <img src="film/img/l3.jpg">
                                <div class="overlay-item d-flex justify-content-center align-items-center">
                                    <a data-fancybox="" href="https://vimeo.com/106765702"><i
                                                class="las la-play"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="text-des">Lorem ipsum dolor sit amet, conset sed tem.</p>
                                <h4 class="heading text-uppercase">Run Away From Light.</h4>
                                <a href="#" class="watch-product"><i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a data-fancybox="" href="https://vimeo.com/90840341">
                        <div class="product">
                            <div class="product-img">
                                <img src="film/img/l4.jpg">
                                <div class="overlay-item d-flex justify-content-center align-items-center">
                                    <a data-fancybox="" href="https://vimeo.com/106765702"><i
                                                class="las la-play"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="text-des">Lorem ipsum dolor sit amet, conset sed tem.</p>
                                <h4 class="heading text-uppercase">Run Away From Light.</h4>
                                <a href="#" class="watch-product"><i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>-->
    <!--latest items end-->

    <!--Brands sec start-->
    {{--
    <section class="bglight padding" id="brand-sec" style="padding-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">{{__('page.CUSTOMER')}}</h4>
                    </div>
                </div>
            </div>
            <div class="brand-sec" id="brand-sec">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="sponser-tags owl-carousel owl-theme">
                                @foreach($customers as $item)
                                    <div class="item brand-img d-flex justify-content-center">
                                        <img src="{{$item['image']}}" alt="{{$item['name']}}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="container mt-3">
                                <div class="col-md text-center">
                                    <a class="btn blue-and-white-slider-btn"
                                       href="{{url('/musterilerimiz')}}">{{__('page.read.more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!--Brands sec end-->

    <!--blogs sec start-->

    <!--Contact Start-->
    <section id="contact" class="contact-sec">
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 text-center">
                    <div class="about-heading heading-details">
                        <h4 class="heading text-uppercase">{{__('page.Contact')}}</h4>
                    </div>
                </div>
            </div>

            <!--contact us-->

            <div class="row">
                <div class="col-12 col-lg-6 contact-details text-center text-lg-left d-flex align-items-center">
                    <div class="location-details">
                        <p class="mb-2"><b><u>{{trans('page.turkey')}}</u></b></p>
                        <p class="contact-address">{{__('page.telefun')}}</p>
                        <p class="contact-address">{{__('page.adress')}}</p>
                        <ul class="contact-list">
                            <li><span>{{__('page.officeTel')}}:</span> +90 212 246 20 80</li>
                            <li><span>{{__('page.email')}}:</span> info@tabadul.com.tr</li>
                            <li class="mb-1"><span>{{__('page.days')}}:</span> 09:00 / 18:00</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex align-items-center contact-form-box" style="box-shadow: none;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1504.3990525697611!2d28.987077!3d41.051544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeca692225e4e7a69!2sAhmetbey%20Plaza!5e0!3m2!1sen!2str!4v1617042451844!5m2!1sen!2str" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-12 col-lg-6 contact-details text-center text-lg-left d-flex align-items-center">
                    <div class="location-details">
                        <p class="mb-2"><b><u>Libya</u></b></p>
                        <p class="contact-address">Hay Alandalus Street, Wahat Center, Office No:65 Tripoli / Libya</p>
                        <ul class="contact-list">
                            <li><span>{{__('page.officeTel')}}:</span> +218-214-777-989</li>
                            <li><span>{{__('page.email')}}:</span> info@tabadul.com.tr</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex align-items-center contact-form-box" style="box-shadow: none;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.7319161291034!2d13.14172781518457!3d32.87881178094133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8ede9bb84c88d%3A0xf25bcb13fd8f20a0!2sBen%20Saoud%20Boutiques!5e0!3m2!1sen!2str!4v1617043051890!5m2!1sen!2str" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-12 col-lg-6 contact-details text-center text-lg-left d-flex align-items-center">
                    <div class="location-details">
                        <p class="mb-2"><b><u>{{trans('page.lebanon')}}</u></b></p>
                        <p class="contact-address">Concorde Building(Verdun Center) 5th Floor, Dunant Street, Verdun, Beirut / Lebanon </p>
                        <ul class="contact-list">
                            <li><span>{{__('page.officeTel')}}:</span> +961 1 341 091</li>
                            <li><span>{{__('page.email')}}:</span> info@tabadul.com.tr</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex align-items-center contact-form-box" style="box-shadow: none;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3311.8647949879028!2d35.4842406!3d33.8931358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1728e04a2bcd%3A0x9d568cbfeea363f3!2sConcorde%20Bldg!5e0!3m2!1sen!2str!4v1617043081587!5m2!1sen!2str" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-12 col-lg-6 contact-details text-center text-lg-left d-flex align-items-center">
                    <div class="location-details">
                        <p class="mb-2"><b><u>{{trans('page.canada')}}</u></b></p>
                        <p class="contact-address">12 Dewberry Crescent, Ottawa, Nepean, Ontario, Canada</p>
                        <ul class="contact-list">
                            <li><span>{{__('page.officeTel')}}:</span> +1 613 408 7282</li>
                            <li><span>{{__('page.email')}}:</span> info@tabadul.com.tr</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex align-items-center contact-form-box" style="box-shadow: none;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.9590417156987!2d-75.74044508444844!3d45.28904937909925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccdfd15ff4c2bd5%3A0x9f162bc6b896b5d2!2s12%20Dewberry%20Crescent%2C%20Nepean%2C%20ON%20K2J%204N3%2C%20Kanada!5e0!3m2!1str!2str!4v1617044889399!5m2!1str!2str" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-12 col-lg-6 contact-details text-center text-lg-left d-flex align-items-center">
                    <div class="location-details">
                        <p class="mb-2"><b><u>{{trans('page.malta')}}</u></b></p>
                        <p class="contact-address">Electrofix Building, Triq il-Burdnara, Qormi QRM3554 Malta</p>
                        <ul class="contact-list">
                            <li><span>{{__('page.officeTel')}}:</span> +356 216 75 353</li>
                            <li><span>{{__('page.email')}}:</span> info@tabadul.com.tr</li>
                        </ul>
                        <a href="mailto:info@tabadul.com.tr"><i
                                class="far fa-envelope fa-lg"></i> </a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex align-items-center contact-form-box" style="box-shadow: none;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25861.305493954264!2d14.482759!3d35.88177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28a531f529b2580f!2sElectrofix%20Energy!5e0!3m2!1sen!2str!4v1617044967318!5m2!1sen!2str" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
    <!--Scroll Top Start-->
    <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
    <!--Scroll Top End-->


    </body>
@endsection
