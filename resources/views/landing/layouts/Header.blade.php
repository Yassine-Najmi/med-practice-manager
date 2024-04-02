<!-- Preloader -->
<div class="preloader"></div>

<header class="main-header">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container clearfix">
            <div class="top-left clearfix">
                <ul class="list">
                    <li><i class="icon fas fa-map-marker-alt" style='font-size:14px'></i>332, bd Brahim Roudani,
                        Casablanca</li>
                    <li><i class="icon fas fa-solid fa-phone"></i><a href="tel:0522250907">052-225-0907</a>
                    </li>
                </ul>
            </div>
            <div class="top-right clearfix">
                <ul class="social-icons">
                    <li><a
                            href="{{ url('https://www.linkedin.com/in/dr-ali-berrada-99658045/?originalSubdomain=ma') }}"><span
                                class="fab fa-linkedin" style='font-size:24px'></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Info-->
                <div class="logo-outer py-0">
                    <div class="logo">
                        <a href="">
                            <img src="{{ asset('assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }}" alt=""
                                title="" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                            <!-- Adjust the max-width and max-height values as needed -->
                        </a>
                    </div>
                </div>


                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler For Mobile-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="@if (empty(Request::segment(2))) current @endif"><a
                                        href="{{ route('home') }}">{{ __('navbar.home') }}</a>
                                </li>
                                <li class="@if (Request::segment(2) == 'about') current @endif"><a
                                        href="{{ route('about') }}">{{ __('navbar.about_us') }}</a>

                                </li>
                                <li class="@if (Request::segment(2) == 'contact') current @endif"><a
                                        href="{{ route('contact') }}">{{ __('navbar.contact') }}</a></li>
                                <li class="dropdown"><a href="#">{{ __('lang.lang') }}</a>
                                    <ul>
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Search Btn -->

                        <!-- Button Box -->
                        <div class="btn-box">
                            <button onclick="scrollToSection('schedule-section')" class="theme-btn btn-style-one"><span
                                    class="txt">Rendez-vous</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header py-0">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left py-0">
                <a href="" class="img-responsive"> <img
                        src="{{ asset('assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }}" alt=""
                        title="" class="img-fluid" style="max-width: 80px; max-height: 8y0px;"></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-window-close"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href=""><img src="images/nav-logo.png" alt="" title=""></a>
            </div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
