@extends('landing.layouts.Master')

@section('content')
    <!-- Main Slider -->
    <section class="main-slider">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide slide"
                    style="background-image:url(https://themewagon.github.io/medicalcenter/assets/img/hero/h1_hero.png)">
                    <div class="auto-container">
                        <div class="content clearfix">
                            <div class="title">{{ __('header.small_text_1') }}</div>
                            <h2>{{ __('header.big_text') }}</h2>
                            <div class="text">{{ __('header.small_text_2') }}</div>
                            <div class="btn-box clearfix">
                                <a href="contact.html" class="theme-btn btn-style-two"><span
                                        class="txt">{{ __('header.our_services') }}</span></a>
                                <a href="contact.html" class="theme-btn phone-btn"><span
                                        class="icon flaticon-call"></span>555–123–2323</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide"
                    style="background-image:url(https://themewagon.github.io/medicalcenter/assets/img/hero/h1_hero.png)">
                    <div class="auto-container">
                        <div class="content">
                            <div class="title">{{ __('header.small_text_1') }}</div>
                            <h2>{{ __('header.big_text') }}</h2>
                            <div class="text">{{ __('header.small_text_2') }}</div>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-two"><span
                                        class="txt">{{ __('header.our_services') }}</span></a>
                                <a href="contact.html" class="theme-btn phone-btn"><span
                                        class="icon flaticon-call"></span>555–123–2323</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide"
                    style="background-image:url(https://themewagon.github.io/medicalcenter/assets/img/hero/h1_hero.png)">
                    <div class="auto-container">
                        <div class="content">
                            <div class="title">{{ __('header.small_text_1') }}</div>
                            <h2>{{ __('header.big_text') }}</h2>
                            <div class="text">{{ __('header.small_text_2') }}</div>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-two"><span
                                        class="txt">{{ __('header.our_services') }}</span></a>
                                <a href="contact.html" class="theme-btn phone-btn"><span
                                        class="icon flaticon-call"></span>555–123–2323</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Services Section Three -->
    <section class="services-section-three">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Services Block Four -->
                <div class="service-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-timetable"></span>
                        </div>
                        <h4>{{ __('index.hospital-schedule') }}</h4>
                        <ul class="list">
                            <li>{{ __('index.mon_friday') }}<span>8:00 - 10:30</span></li>
                            <li>{{ __('index.saturday') }}<span>9:00 - 11:00</span></li>
                            <li>{{ __('index.sunday') }}<span>10:30 - 8:30</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Services Block Four -->
                <div class="service-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-timetable"></span>
                        </div>
                        <h4>{{ __('index.get-appointment') }}</h4>
                        <div class="text">{{ __('index.lorem-ipsum') }}</div>
                        <a class="appointment-btn" href="doctors-detail.html">{{ __('index.appointment') }} <span
                                class="icon flaticon-right-arrow-1"></span></a>
                    </div>
                </div>


                <!-- Services Block Four -->
                <div class="service-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-timetable"></span>
                        </div>
                        <h4>{{ __('index.discover-benefits') }}</h4>
                        <ul class="list-two">
                            <li>{{ __('index.experienced-doctors') }}</li>
                            <li>{{ __('index.professional-staffs') }}</li>
                            <li>{{ __('index.emergency-service') }}</li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Services Section Three -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('index.about-hospital') }}</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">{{ __('index.main-focus') }}</div>
                        <div class="text">{{ __('index.long-term-goal') }}</div>
                        <a href="contact.html" class="theme-btn btn-style-two"><span
                                class="txt">{{ __('index.learn-more') }}</span></a>
                    </div>
                </div>

                <!-- Blocks Column -->
                <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!-- Service Block Five -->
                            <div class="service-block-five col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box clearfix wow fadeInLeft" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-award"></span>
                                    </div>
                                    <h4>{{ __('index.medical-quality') }}</h4>
                                    <div class="text">{{ __('index.medical-quality-description') }}</div>
                                </div>
                            </div>

                            <!-- Service Block Five -->
                            <div class="service-block-five col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box clearfix wow fadeInLeft" data-wow-delay="250ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-operating-room"></span>
                                    </div>
                                    <h4>{{ __('index.modern-labs') }}</h4>
                                    <div class="text">{{ __('index.modern-labs-description') }}</div>
                                </div>
                            </div>

                            <!-- Service Block Five -->
                            <div class="service-block-five col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box clearfix wow fadeInLeft" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-avatar-1"></span>
                                    </div>
                                    <h4>{{ __('index.dedicated-doctors') }}</h4>
                                    <div class="text">{{ __('index.dedicated-doctors-description') }}</div>
                                </div>
                            </div>

                            <!-- Service Block Five -->
                            <div class="service-block-five col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box clearfix wow fadeInLeft" data-wow-delay="250ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-surgery-room"></span>
                                    </div>
                                    <h4>{{ __('index.cutting-edge-technology') }}</h4>
                                    <div class="text">{{ __('index.cutting-edge-technology-description') }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Appointment Section Three -->
    <section class="appointment-section-three">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Upper Box -->
                        <div class="upper-box">
                            <div class="upper-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-timetable"></span>
                                </div>
                                <h3>{{ __('index.get-appointment') }}</h3>
                                <div class="text">{{ __('index.appointment-description') }}</div>
                            </div>
                        </div>

                        <!-- Lower Box -->
                        <div class="lower-box">
                            <div class="upper-inner">
                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form method="post" action="appointment.html">

                                        <div class="form-group">
                                            <input type="text" name="username"
                                                placeholder="{{ __('index.enter-name') }}" required="">
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" name="phone"
                                                placeholder="{{ __('index.enter-phone') }}" required="">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="appointment"
                                                placeholder="{{ __('index.appointment-date') }}" required="">
                                            <span class="icon fas fa-calendar"></span>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>{{ __('index.choose-department') }}</option>
                                                <option>{{ __('index.department-one') }}</option>
                                                <option>{{ __('index.department-two') }}</option>
                                                <option>{{ __('index.department-three') }}</option>
                                                <option>{{ __('index.department-four') }}</option>
                                                <option>{{ __('index.department-five') }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>{{ __('index.select-doctor') }}</option>
                                                <option>{{ __('index.doctor-one') }}</option>
                                                <option>{{ __('index.doctor-two') }}</option>
                                                <option>{{ __('index.doctor-three') }}</option>
                                                <option>{{ __('index.doctor-four') }}</option>
                                                <option>{{ __('index.doctor-five') }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button class="theme-btn submit-btn" type="submit"
                                                name="submit-form">{{ __('index.request-appointment') }}</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('index.why-choose-our-medical') }}</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">{{ __('index.health-care-cost') }}</div>
                        <div class="row clearfix">

                            <!-- Appointment List -->
                            <div class="appointment-list col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon far fa-hand-point-right"></div>
                                    <h4>{{ __('index.professional-staffs') }}</h4>
                                    <div class="text">{{ __('index.professional-staffs-text') }}</div>
                                </div>
                            </div>

                            <!-- Appointment List -->
                            <div class="appointment-list col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                                    <div class="icon far fa-hand-point-right"></div>
                                    <h4>{{ __('index.online-appointment') }}</h4>
                                    <div class="text">{{ __('index.online-appointment-text') }}</div>
                                </div>
                            </div>

                            <!-- Appointment List -->
                            <div class="appointment-list col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon far fa-hand-point-right"></div>
                                    <h4>{{ __('index.emergency-cares') }}</h4>
                                    <div class="text">{{ __('index.emergency-cares-text') }}</div>
                                </div>
                            </div>

                            <!-- Appointment List -->
                            <div class="appointment-list col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                                    <div class="icon far fa-hand-point-right"></div>
                                    <h4>{{ __('index.advanced-technology') }}</h4>
                                    <div class="text">{{ __('index.advanced-technology-text') }}</div>
                                </div>
                            </div>

                            <!-- Appointment List -->
                            <div class="appointment-list col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon far fa-hand-point-right"></div>
                                    <h4>{{ __('index.experienced-doctors') }}</h4>
                                    <div class="text">{{ __('index.experienced-doctors-text') }}</div>
                                </div>
                            </div>

                            <!-- Appointment List -->
                            <div class="appointment-list col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                                    <div class="icon far fa-hand-point-right"></div>
                                    <h4>{{ __('index.emergency-service') }}</h4>
                                    <div class="text">{{ __('index.emergency-service-text') }}</div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Appointment Section Three -->

    <!-- About Section Two -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('index.about-us') }}</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">{{ __('index.health-care-cost') }}</div>
                        <div class="text">{{ __('index.our-goal') }}</div>
                        <div class="row clearfix">

                            <!-- About List Info -->
                            <div class="about-list-info col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner">{{ __('index.emergency-service') }}</div>
                            </div>

                            <!-- About List Info -->
                            <div class="about-list-info col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner">{{ __('index.professional-staffs') }}</div>
                            </div>

                            <!-- About List Info -->
                            <div class="about-list-info col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner">{{ __('index.advanced-technology') }}</div>
                            </div>

                            <!-- About List Info -->
                            <div class="about-list-info col-lg-6 col-md-6 col-sm-12">
                                <div class="list-inner">{{ __('index.experienced-doctors') }}</div>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Doctor Info Tabs-->
                        <div class="doctor-info-tabs">
                            <!-- Doctor Tabs-->
                            <div class="doctor-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#consultation" class="tab-btn active-btn"><span
                                            class="icon far fa-clock"></span> {{ __('index.consultation') }}</li>
                                    <li data-tab="#emergncy" class="tab-btn"><span class="icon far fa-clock"></span>
                                        {{ __('index.emergency') }}</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="consultation">
                                        <div class="content">
                                            <ul class="content-list">
                                                <li>{{ __('index.sunday') }}<span>8:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.monday') }}<span>9:00 am - 11:30 pm</span></li>
                                                <li>{{ __('index.tuesday') }}<span>8:30 am - 7:30 pm</span></li>
                                                <li>{{ __('index.wednesday') }}<span>9:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.thursday') }}<span>9:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.friday') }}<span>9:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.saturday') }}<span>9:00 am - 10:30 pm</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="emergncy">
                                        <div class="content">
                                            <ul class="content-list">
                                                <li>{{ __('index.sunday') }}<span>8:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.monday') }}<span>9:00 am - 11:30 pm</span></li>
                                                <li>{{ __('index.tuesday') }}<span>8:30 am - 7:30 pm</span></li>
                                                <li>{{ __('index.wednesday') }}<span>9:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.thursday') }}<span>9:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.friday') }}<span>9:00 am - 10:30 pm</span></li>
                                                <li>{{ __('index.saturday') }}<span>9:00 am - 10:30 pm</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End About Section Two -->

    <!-- Counter Section -->
    <section class="counter-section-two">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter-two">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-heart-1"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="98">0</span>%
                                </div>
                                <h4 class="counter-title">{{ __('index.success_surgeries') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-medical-stethoscope-variant"></span>
                                </div>
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="350">0</span>+
                                </div>
                                <h4 class="counter-title">{{ __('index.regular_doctors') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-heart-1"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="600">0</span>K
                                </div>
                                <h4 class="counter-title">{{ __('index.satisfied_patients') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-pharmacy"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="50">0</span>+
                                </div>
                                <h4 class="counter-title">{{ __('index.department') }}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Hospital Section -->
    <section class="hospital-section"
        style="background-image:url('{{ asset('assets/mediatech/rtl/images/background/8.jpg ') }}')">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/doctor-5.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('index.why-choose') }}</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">{{ __('index.why-choose-description') }}</div>

                        <!-- Hospital Tabs-->
                        <div class="hospital-info-tabs">
                            <!-- Hospital Tabs-->
                            <div class="hospital-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#mission" class="tab-btn active-btn">{{ __('index.mission') }}</li>
                                    <li data-tab="#vision" class="tab-btn">{{ __('index.vision') }}</li>
                                    <li data-tab="#success" class="tab-btn">{{ __('index.success') }}</li>
                                    <li data-tab="#history" class="tab-btn">{{ __('index.history') }}</li>
                                </ul>


                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="mission">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <div class="column col-lg-9 col-md-9 col-sm-12">
                                                    <div class="text">
                                                        <p class="text-dark">{{ __('index.long-term-goal') }}</p>
                                                        <p class="text-dark">{{ __('index.dental-office-safe') }}</p>
                                                    </div>
                                                    <a class="theme-btn more-btn" href="#"><span
                                                            class="txt">{{ __('index.learn-more') }}</span></a>
                                                </div>

                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <div class="image">
                                                        <img src="images/resource/author-9.jpg" alt="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="vision">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <div class="column col-lg-9 col-md-9 col-sm-12">
                                                    <div class="text">
                                                        <p class="text-dark">{{ __('index.long-term-goal') }}</p>
                                                        <p class="text-dark">{{ __('index.dental-office-safe') }}</p>
                                                    </div>
                                                    <a class="theme-btn more-btn" href="#"><span
                                                            class="txt">{{ __('index.learn-more') }}</span></a>
                                                </div>
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <div class="image">
                                                        <img src="images/resource/author-9.jpg" alt="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="success">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <div class="column col-lg-9 col-md-9 col-sm-12">
                                                    <div class="text">
                                                        <p class="text-dark">{{ __('index.long-term-goal') }}</p>
                                                        <p class="text-dark">{{ __('index.dental-office-safe') }}</p>
                                                    </div>
                                                    <a class="theme-btn more-btn" href="#"><span
                                                            class="txt">{{ __('index.learn-more') }}</span></a>
                                                </div>
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <div class="image">
                                                        <img src="images/resource/author-9.jpg" alt="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="history">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <div class="column col-lg-9 col-md-9 col-sm-12">
                                                    <div class="text">
                                                        <p class="text-dark">{{ __('index.long-term-goal') }}</p>
                                                        <p class="text-dark">{{ __('index.dental-office-safe') }}</p>
                                                    </div>
                                                    <a class="theme-btn more-btn" href="#"><span
                                                            class="txt">{{ __('index.learn-more') }}</span></a>
                                                </div>
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <div class="image">
                                                        <img src="images/resource/author-9.jpg" alt="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hospital Section -->

    <!-- Get Appointment Section -->
    <section class="get-appointment-section">
        <div class="auto-container">
            <div class="inner-container">
                <h3>{{ __('index.get-appointment') }}</h3>

                <!-- Appointment Form -->
                <div class="appointment-form-two">
                    <form method="post" action="{{ route('Appointment.store') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.full-name') }}</label>
                                <input type="text" name="name" placeholder="{{ __('index.full-name') }}"
                                    required="">
                                <span class="icon fa fa-user"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.email') }}</label>
                                <input type="email" name="email" placeholder="{{ __('index.email-placeholder') }}"
                                    required="">
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.gender') }}</label>
                                <select class="custom-select-box">
                                    <option>{{ __('index.select-gender') }}</option>
                                    <option>{{ __('index.male') }}</option>
                                    <option>{{ __('index.female') }}</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.phone-number') }}</label>
                                <input type="tel" name="phone" placeholder="{{ __('index.phone-placeholder') }}"
                                    required="">
                                <span class="icon fas fa-phone"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.appointment-date') }}</label>
                                <input type="date" name="date" placeholder="{{ __('index.date-placeholder') }}">
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.consultant-hour') }}</label>
                                <input type="time" name="time" placeholder="{{ __('index.time-placeholder') }}">
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                        class="txt">{{ __('index.submit-request') }}</span></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="schedule-section"
        style="background-image:url('{{ asset('assets/mediatech/rtl/images/background/5.jpg ') }}')">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Schedule Column -->
                <div class="schedule-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('index.regular-schedule-title') }}</h2>
                            <div class="separator"></div>
                        </div>

                        <div class="content">

                            <!-- Title Box -->
                            <ul class="title-box clearfix">
                                <li>{{ __('index.departments') }}</li>
                                <li>{{ __('index.monday-friday') }}</li>
                                <li>{{ __('index.saturday-sunday') }}</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.cardiology') }}</li>
                                <li>8:00 am - 10:30 pm</li>
                                <li>8:00 am - 10:30 pm</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.orthopedic') }}</li>
                                <li>9:00 am - 7:00 pm</li>
                                <li>11:00 am - 6:30 pm</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.neurology') }}</li>
                                <li>8:30 am - 7:30 pm</li>
                                <li>8:30 am - 7:30 pm</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.dental-care') }}</li>
                                <li>9:00 am - 10:30 pm</li>
                                <li>9:00 am - 10:30 pm</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.hepatology') }}</li>
                                <li>9:00 am - 10:30 pm</li>
                                <li>9:00 am - 10:30 pm</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.eyes-care') }}</li>
                                <li>9:00 am - 10:30 pm</li>
                                <li>9:00 am - 10:30 pm</li>
                            </ul>

                            <!-- Content Box -->
                            <ul class="content-box clearfix">
                                <li>{{ __('index.orthopedic') }}</li>
                                <li>9:00 am - 10:30 pm</li>
                                <li>9:00 am - 10:30 pm</li>
                            </ul>

                        </div>


                    </div>
                </div>

                <!-- Appointment Column -->
                <div class="appointment-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Upper Box -->
                        <div class="upper-box">
                            <div class="upper-inner">
                                <h3>{{ __('index.get-appointment') }}</h3>
                            </div>
                        </div>

                        <!-- Lower Box -->
                        <div class="lower-box">
                            <div class="upper-inner">

                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form method="post" action="appointment.html">

                                        <div class="form-group">
                                            <input type="text" name="username"
                                                placeholder="{{ __('index.enter-your-name') }}" required="">
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" name="phone"
                                                placeholder="{{ __('index.enter-your-phone-number') }}" required="">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="appointment"
                                                placeholder="{{ __('index.appointment-date') }}" required="">
                                            <span class="icon fas fa-calendar"></span>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>{{ __('index.choose-department') }}</option>
                                                <option>{{ __('index.department-one') }}</option>
                                                <option>{{ __('index.department-two') }}</option>
                                                <option>{{ __('index.department-three') }}</option>
                                                <option>{{ __('index.department-four') }}</option>
                                                <option>{{ __('index.department-five') }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>{{ __('index.select-doctor') }}</option>
                                                <option>{{ __('index.doctor-one') }}</option>
                                                <option>{{ __('index.doctor-two') }}</option>
                                                <option>{{ __('index.doctor-three') }}</option>
                                                <option>{{ __('index.doctor-four') }}</option>
                                                <option>{{ __('index.doctor-five') }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button class="theme-btn submit-btn" type="submit"
                                                name="submit-form">{{ __('index.request-appointment') }}</button>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Schedule Section -->

    <!-- Provider Section -->
    <section class="provider-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Blocks Column -->
                <div class="blocks-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('index.what-service-we-provide') }}</h2>
                            <div class="separator"></div>
                        </div>

                        <div class="row clearfix">

                            <!-- Services Block Six -->
                            <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-heart-1"></span>
                                    </div>
                                    <h3><a href="#">{{ __('index.cardiology') }}</a></h3>
                                </div>
                            </div>

                            <!-- Services Block Six -->
                            <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-brain"></span>
                                    </div>
                                    <h3><a href="#">{{ __('index.neurology') }}</a></h3>
                                </div>
                            </div>

                            <!-- Services Block Six -->
                            <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-kidneys"></span>
                                    </div>
                                    <h3><a href="#">{{ __('index.urology') }}</a></h3>
                                </div>
                            </div>

                            <!-- Services Block Six -->
                            <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-doctor-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">{{ __('index.gynecological') }}</a></h3>
                                </div>
                            </div>

                            <!-- Services Block Six -->
                            <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-nurse"></span>
                                    </div>
                                    <h3><a href="#">{{ __('index.pediatric') }}</a></h3>
                                </div>
                            </div>

                            <!-- Services Block Six -->
                            <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="icon-box">
                                        <span class="icon flaticon-surgery-room-1"></span>
                                    </div>
                                    <h3><a href="#">{{ __('index.laboratory') }}</a></h3>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Appointment Column -->
                <div class="appointment-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Upper Box -->
                        <div class="upper-box">
                            <div class="upper-inner">
                                <h3>Get an Appointment</h3>
                            </div>
                        </div>

                        <!-- Lower Box -->
                        <div class="lower-box">
                            <div class="upper-inner">

                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form method="post" action="appointment.html">

                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Enter Your Name"
                                                required="">
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" name="phone" placeholder="Enter Your Phone Number"
                                                required="">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="appointment" placeholder="Appointment Date"
                                                required="">
                                            <span class="icon fas fa-calendar"></span>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Choose Department</option>
                                                <option>Department One</option>
                                                <option>Department Two</option>
                                                <option>Department Three</option>
                                                <option>Department Four</option>
                                                <option>Department Five</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Select Doctor</option>
                                                <option>Doctor One</option>
                                                <option>Doctor Two</option>
                                                <option>Doctor Three</option>
                                                <option>Doctor Four</option>
                                                <option>Doctor Five</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button class="theme-btn submit-btn" type="submit"
                                                name="submit-form">Request Appointment</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Provider Section -->

    <!-- Departments Section -->
    <section class="departments-section"
        style="background-image:url('{{ asset('assets/mediatech/rtl/images/background/10.jpg ') }}')">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Our Departments</h2>
                <div class="separator"></div>
            </div>

            <!-- Departments Tabs-->
            <div class="departments-info-tabs">
                <!-- Departments Tabs-->
                <div class="departments-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#cardiology" class="tab-btn active-btn"><span class="icon flaticon-heart-1"></span>
                            Cardiology</li>
                        <li data-tab="#neurology" class="tab-btn"><span class="icon flaticon-brain"></span> Neurology
                        </li>
                        <li data-tab="#urology" class="tab-btn"><span class="icon flaticon-kidneys"></span> Urology</li>
                        <li data-tab="#gynecological" class="tab-btn"><span class="icon flaticon-doctor"></span>
                            Gynecological</li>
                        <li data-tab="#pediatric" class="tab-btn"><span class="icon flaticon-nurse"></span> Pediatric
                        </li>
                        <li data-tab="#laboratory" class="tab-btn"><span class="icon flaticon-operating-room"></span>
                            Laboratory</li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="cardiology">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Gallery Column -->
                                    <div class="gallery-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="row clearfix">
                                                <!-- Column -->
                                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-4.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-4.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="image">
                                                        <a href="images/resource/department-5.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-5.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-6.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-6.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <h2>Cardiology Department</h2>
                                            <div class="bold-text">Seeing a Gynecologist is part of Teenage Health</div>
                                            <p class="text text-dark">From puberty through menopause, a woman's
                                                reproductive
                                                organs are constantly changing through the normal processes of sexual
                                                activity, pregnancy and aging, and sometimes disease and injury. UCSF
                                                Medical Center is recognized as one of the top hospitals in the nation for
                                                gynecological ...</p>
                                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Learn
                                                    More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="neurology">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Gallery Column -->
                                    <div class="gallery-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="row clearfix">
                                                <!-- Column -->
                                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-4.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-4.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="image">
                                                        <a href="images/resource/department-5.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-5.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-6.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-6.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <h2>Neurology Department</h2>
                                            <div class="bold-text">Seeing a Gynecologist is part of Teenage Health</div>
                                            <div class="text">From puberty through menopause, a woman's reproductive
                                                organs are constantly changing through the normal processes of sexual
                                                activity, pregnancy and aging, and sometimes disease and injury. UCSF
                                                Medical Center is recognized as one of the top hospitals in the nation for
                                                gynecological ...</div>
                                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Learn
                                                    More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="urology">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Gallery Column -->
                                    <div class="gallery-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="row clearfix">
                                                <!-- Column -->
                                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-4.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-4.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="image">
                                                        <a href="images/resource/department-5.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-5.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-6.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-6.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <h2>Urology Department</h2>
                                            <div class="bold-text">Seeing a Gynecologist is part of Teenage Health</div>
                                            <div class="text">From puberty through menopause, a woman's reproductive
                                                organs are constantly changing through the normal processes of sexual
                                                activity, pregnancy and aging, and sometimes disease and injury. UCSF
                                                Medical Center is recognized as one of the top hospitals in the nation for
                                                gynecological ...</div>
                                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Learn
                                                    More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="gynecological">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Gallery Column -->
                                    <div class="gallery-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="row clearfix">
                                                <!-- Column -->
                                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-4.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-4.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="image">
                                                        <a href="images/resource/department-5.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-5.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-6.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-6.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <h2>Gynecological Department</h2>
                                            <div class="bold-text">Seeing a Gynecologist is part of Teenage Health</div>
                                            <div class="text">From puberty through menopause, a woman's reproductive
                                                organs are constantly changing through the normal processes of sexual
                                                activity, pregnancy and aging, and sometimes disease and injury. UCSF
                                                Medical Center is recognized as one of the top hospitals in the nation for
                                                gynecological ...</div>
                                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Learn
                                                    More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="pediatric">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Gallery Column -->
                                    <div class="gallery-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="row clearfix">
                                                <!-- Column -->
                                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-4.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-4.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="image">
                                                        <a href="images/resource/department-5.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-5.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-6.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-6.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <h2>Pediatric Department</h2>
                                            <div class="bold-text">Seeing a Gynecologist is part of Teenage Health</div>
                                            <div class="text">From puberty through menopause, a woman's reproductive
                                                organs are constantly changing through the normal processes of sexual
                                                activity, pregnancy and aging, and sometimes disease and injury. UCSF
                                                Medical Center is recognized as one of the top hospitals in the nation for
                                                gynecological ...</div>
                                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Learn
                                                    More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="laboratory">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Gallery Column -->
                                    <div class="gallery-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="row clearfix">
                                                <!-- Column -->
                                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-4.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-4.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="image">
                                                        <a href="images/resource/department-5.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-5.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <a href="images/resource/department-6.jpg"
                                                            class="lightbox-image"><img
                                                                src="images/resource/department-6.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <h2>Laboratory Department</h2>
                                            <div class="bold-text">Seeing a Gynecologist is part of Teenage Health</div>
                                            <div class="text">From puberty through menopause, a woman's reproductive
                                                organs are constantly changing through the normal processes of sexual
                                                activity, pregnancy and aging, and sometimes disease and injury. UCSF
                                                Medical Center is recognized as one of the top hospitals in the nation for
                                                gynecological ...</div>
                                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Learn
                                                    More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Departments Section -->

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Subscribe Our Newsletter</h2>
                        <div class="text">To receive email releases, simply provide us with your email address below.
                        </div>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Your Email Address"
                                        required>
                                    <button type="submit" class="theme-btn btn-style-two"><span
                                            class="txt">subscribe</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter Section -->
@endsection
