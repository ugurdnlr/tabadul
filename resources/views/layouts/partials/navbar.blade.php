<header id="home">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="row no-gutters w-100">
            <div class="col-2 pl-3">
                <a href="{{url('/')}}" title="Logo" class="logo">
                    <!--Logo Default-->
                    <img src="{{asset('img/Tabadul-01.png')}}" style="height: 60px;" alt="logo" class="logo-dark">
                </a>
            </div>
            @php($link = request()->route()->getName() == 'home' ? '' :  url('/'))
            @php($scroll = request()->route()->getName() == 'home' ? 'scroll' : '')
            <!--Nav Links-->
            <div class="col-7 d-flex justify-content-center">
                <div class="collapse navbar-collapse" id="megaone">
                    <div class="navbar-nav ml-auto mr-auto topmenu">
                        <a class="nav-link {{$scroll}}" href="{{$link}}#about">{{__('page.aboutUs')}}</a>
                        <a class="nav-link {{$scroll}}" href="{{$link}}#our-services">{{__('page.ourServices')}}</a>
                        <a class="nav-link {{$scroll}}" href="{{$link}}#sectors">{{__('page.sectors')}}</a>
                        <a class="nav-link {{$scroll}}" href="{{$link}}#our-cast">{{__('page.ourCast')}}</a>
                        <a class="nav-link {{$scroll}}" href="{{$link}}#brand-sec">{{__('page.company')}}</a>
                        <a class="nav-link {{$scroll}}" href="{{$link}}#contact">{{__('page.contact')}}</a>
                    </div>
                </div>
            </div>
            <div class="language-select-desktop ml-5 mt-3">
                    <a href="{{url('lang/tr')}}">
                        <img src="{{asset('img/turkey.png')}}" style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
                    <a href="{{url('lang/en')}}">
                        <img src="{{asset('img/uk.png')}}" style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
            </div>
            <!--Side Menu Button-->
            <div>
                <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle" style="margin-top: 20px;">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

        </div>
    </nav>

    <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{$scroll}}" href="{{$link}}#about">{{__('page.aboutUs')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$scroll}}" href="{{$link}}#our-services">{{__('page.ourServices')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$scroll}}" href="{{$link}}#sectors">{{__('page.sectors')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$scroll}}" href="{{$link}}#our-cast">{{__('page.ourCast')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$scroll}}" href="{{$link}}#brand-sec">{{__('page.company')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$scroll}}" href="{{$link}}#contact">{{__('page.contact')}}</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer text-white w-100">
                    <p class="text-white">&copy; 2020 {{__('page.tabadul')}}</p>
                </div>
                <div class="language-select-mobile">
                    <a href="{{url('lang/tr')}}">
                        <img src="{{asset('img/turkey.png')}}" style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
                    <a href="{{url('lang/en')}}">
                        <img src="{{asset('img/uk.png')}}" style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->

</header>
