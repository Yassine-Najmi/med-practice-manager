<!-- Preloader -->
<div class="preloader"></div>

<header class="main-header">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container clearfix">
            <div class="top-left clearfix">
                <ul class="list">
                    <li><span class="icon fas fa-envelope"></span> 2130 Fulton Street San Diego CA 94117-1080
                        USA</li>
                    <li><span class="icon fas fa-phone"></span> <a href="tel:+555–123–2323"> 555–123–2323</a>
                    </li>
                </ul>
            </div>
            <div class="top-right clearfix">
                <ul class="social-icons">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
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
                <div class="logo-outer">
                    <div class="logo"><a href=""><img src="https://themewagon.github.io/medicalcenter/assets/img/logo/logo.png" alt="" title=""></a>
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
                                <li class="current dropdown"><a href="#">{{ __('navbar.home') }}</a>
                                </li>
                                <li class="dropdown"><a href="#">{{ __('navbar.about_us') }}</a>
                                    <ul>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Our Team</a></li>
                                        <li><a href="">Faq</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">Gallery</a></li>
                                        <li><a href="">Comming Soon</a></li>
                                    </ul>
                                </li>
                                {{-- <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-md-3 col-xs-12">
                                                <h3>About Us</h3>
                                                <ul>
                                                    <li><a href="">About Us</a></li>
                                                    <li><a href="">Our Team</a></li>
                                                    <li><a href="">Faq</a></li>
                                                    <li><a href="">Services</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-md-3 col-xs-12">
                                                <h3>Doctors</h3>
                                                <ul>
                                                    <li><a href="">Doctors</a></li>
                                                    <li><a href="">Doctors Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-md-3 col-xs-12">
                                                <h3>Blog</h3>
                                                <ul>
                                                    <li><a href="">Our Blog</a></li>
                                                    <li><a href="">Blog Classic</a></li>
                                                    <li><a href="">Blog Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-md-3 col-xs-12">
                                                <h3>Shops</h3>
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
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                <li class="dropdown"><a href="#">{{ __('navbar.doctors') }}</a>
                                    <ul>
                                        <li><a href="">{{ __('navbar.doctors') }}</a></li>
                                        <li><a href="">Doctors Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">{{ __('navbar.department') }}</a>
                                    <ul>
                                        <li><a href="">Department</a></li>
                                        <li><a href="">Department Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">{{ __('navbar.blog') }}</a>
                                    <ul>
                                        <li><a href="">Our Blog</a></li>
                                        <li><a href="">Blog Classic</a></li>
                                        <li><a href="">Blog Detail</a></li>
                                    </ul>
                                </li>
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

                                <li><a href="">{{ __('navbar.contact') }}</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Search Btn -->
                        <div class="search-box-btn"><span class="icon flaticon-search"></span></div>
                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-style-one"><span
                                    class="txt">{{ __('navbar.appointment') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="" class="img-responsive"><img src="images/logo-small.png" alt=""
                        title=""></a>
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
            <div class="nav-logo"><a href=""><img src="images/nav-logo.png" alt=""
                        title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
